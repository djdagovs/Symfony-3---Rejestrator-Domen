<?php

namespace AppBundle\Controller;

use AppBundle\Entity\domena;
use AppBundle\Entity\serwer;
use AppBundle\Entity\Firma;
use AppBundle\whois\Whois;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\BrowserKit\Response;


class FirmyController extends Controller
{
    /**
     * Return Repository object
     */
    public function getRepository($name) {
        return $this->getDoctrine()->getRepository('AppBundle:'.$name);
    }


    public function arrayToChoiceTypeField($Repository) {

        $array = array();

        for($i = 0; $i < count($Repository);$i++) {
            $array [$Repository[$i]->getNazwa()] = $Repository[$i]->getId();
        }

        return $array;
    }

    /**
     * @Route("/firmy", name="Lista Firm")
     */
    public function listaFirmaAction(Request $request)
    {

        $lista_firm = $this->getRepository('Firma')->findAll();
        $em = $this->getDoctrine()->getManager();

        /*
        *   Querying for Objects with DQL - temat
        *   Zapytanie do bazy danych - dobrze że ma format SQL :)
        *   
        */
        $konto_id = $this->getUser()->getId();

        $query = $em->createQuery(
            '   SELECT firma.id,firma.nazwa,firma.tel
                FROM AppBundle:Firma firma
                WHERE firma.kontoId = '.$konto_id.''
            );

        $result = $query->getResult();

        /*
        *
        *   Przycinamy rekordy żeby ładnie mieściły się w tabelce dodajac znak '...' na końcu
        *
        */

        $string_len = 30;
        foreach ($result as $key => $tab) {
             foreach($tab as $k => $record) {
                if(!is_a($record,'DateTime')) {
                    strlen($record) > $string_len ? $result[$key][$k]= substr($record, 0, $string_len) . '...' : $result[$key][$k] = $record;
                } else {
                    $result[$key][$k] = $record;
                }
             }
        }

        return $this->render('main/firmy.twig', array('lista_firm' => $result));
    }

    /**
     * @Route("/dodaj/firme", name="Dodaj Firme")
     */
    public function dodajFirmeAction(Request $request)
    {


        /*
            Formularz dodania domeny
        */

        $firma = new Firma;


        $form = $this->createFormBuilder($firma)
            ->add('nazwa', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('adres', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('nip', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('regon', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('email', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('tel', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('fax', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('inne', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('Dodaj', SubmitType::class, array('attr' => array('class' => 'btn btn-success','style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $nazwa = $form['nazwa']->getData();
            $adres = $form['adres']->getData();
            $nip = $form['nip']->getData();
            $regon = $form['regon']->getData();
            $email = $form['email']->getData();
            $tel = $form['tel']->getData();
            $fax = $form['fax']->getData();
            $inne = $form['inne']->getData();

                $firma->setNazwa($nazwa);
                $firma->setAdres($adres);
                $firma->setNip($nip);
                $firma->setKontoId($this->getUser()->getId());
                $firma->setRegon($regon);
                $firma->setEmail($email);
                $firma->setTel($tel);
                $firma->setFax($fax);
                $firma->setInne($inne);

                $doc = $this->getDoctrine()->getManager();
                $doc->persist($firma);
                $doc->flush();


                return $this->redirectToRoute('Lista_Firma_Komunikat', array('komunikat' => 'added'));

            } 
                return $this->render('main/dodaj/firme.twig', array('form_dodaj_firma' => $form->createView()));
        }


    /**
     * @Route("/firma/edit/{id}", name="Edytuj Firme")
     */
public function edytujFirmeAction($id,Request $request)
    {

        /*
            Formularz edytowania domeny
        */

        $firma = $this->getRepository('Firma')->find($id);
                
                $firma->setNazwa($firma->getNazwa());
                $firma->setAdres($firma->getAdres());
                $firma->setNip($firma->getNip());
                $firma->setKontoId($this->getUser()->getId());
                $firma->setRegon($firma->getRegon());
                $firma->setEmail($firma->getEmail());
                $firma->setTel($firma->getTel());
                $firma->setFax($firma->getFax());
                $firma->setInne($firma->getInne());

        
        $form = $this->createFormBuilder($firma)
            ->add('nazwa', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('adres', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('nip', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('regon', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('email', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('tel', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('fax', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('inne', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('Edytuj', SubmitType::class, array('attr' => array('class' => 'btn btn-success','style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $nazwa = $form['nazwa']->getData();
            $adres = $form['adres']->getData();
            $nip = $form['nip']->getData();
            $regon = $form['regon']->getData();
            $email = $form['email']->getData();
            $tel = $form['tel']->getData();
            $fax = $form['fax']->getData();
            $inne = $form['inne']->getData();

                $firma->setNazwa($nazwa);
                $firma->setAdres($adres);
                $firma->setNip($nip);
                $firma->setKontoId($this->getUser()->getId());
                $firma->setRegon($regon);
                $firma->setEmail($email);
                $firma->setTel($tel);
                $firma->setFax($fax);
                $firma->setInne($inne);

            $doc = $this->getDoctrine()->getManager();
            $doc->persist($firma);
            $doc->flush();

            return $this->redirectToRoute('Lista_Firma_Komunikat', array('komunikat' => 'edited'));
            
        }

        return $this->render('main/edytuj/firma.twig', array('form_edit_firma' => $form->createView()));
    }



    /**
     * @Route("/firmy/{komunikat}", name="Lista_Firma_Komunikat")
     */

    public function listaFirmDodanoAction($komunikat) 
    {
        return $this->render('main/firmy.twig', array('komunikat' => $komunikat));
    }



    /**
     * @Route("/firma/info/{id}", name="Info Firma")
     */
    public function InfoFirmaAction($id)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:Firma');


        $query = $repository->createQueryBuilder('f')
            ->where('f.id = ' . $id)
            ->andWhere('f.kontoId = ' . $this->getUser()->getId())
            ->getQuery();

        $result = $query->getResult();



        return $this->render('main/firma_info.twig', array('lista_firm' => $result));
    }

    /**
     * @Route("/firma/delete/{id}", name="Usuń Firme")
     */
    public function usunFirmeAction($id,Request $request)
    {

        $firma = $this->getRepository('Firma')->find($id);
        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->remove($firma);
        $doctrine->flush();

        return $this->redirectToRoute('Lista_Firma_Komunikat', array('komunikat' => 'deleted'));
    } 
}