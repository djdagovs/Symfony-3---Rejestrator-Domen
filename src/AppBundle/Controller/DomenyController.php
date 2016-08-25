<?php

namespace AppBundle\Controller;

use AppBundle\Entity\domena;
use AppBundle\Entity\serwer;
use AppBundle\Entity\firma;
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


class DomenyController extends Controller
{
    /**
     * Return Repository object
     */
    public function getRepository($name) {
        return $this->getDoctrine()->getRepository('AppBundle:'.$name);
    }

    /**
     * Funkcja sprawdzajca czy domeny sa aktualne i czy zaraz nie wygasna
     * Wysył wiadomość w przypadku gdy 
     */

    public function checkExpireDateOfDomain() {
        $actual_date = new DateTime();

    }

    /**
     * @Route("/domeny", name="Lista Domen")
     */
    public function listaDomenAction(Request $request)
    {


       $rol =  $this->getUser()->getRoles();


        $lista_domen = $this->getRepository('domena')->findAll();
        $em = $this->getDoctrine()->getManager();


        /*
        *   Querying for Objects with DQL - temat
        *   Zapytanie do bazy danych - dobrze że ma format SQL :)
        *   
        */

       if($rol[0] == 'ROLE_ADMIN') {
        $query = $em->createQuery(
            '   SELECT domena.id,domena.nazwa,domena.opis,domena.dataWyg,domena.aktywna,firma.nazwa as FirmaNazwa,serwer.nazwa as SerwerNazwa,konto.nazwa as KontoNazwa
                FROM AppBundle:domena domena,AppBundle:Firma firma,AppBundle:serwer serwer ,AppBundle:konto konto 
                WHERE domena.firma = firma.id 
                AND domena.serwer = serwer.id '
            );
       } else {
        $query = $em->createQuery(
            '   SELECT domena.id,domena.nazwa,domena.opis,domena.dataWyg,domena.aktywna,firma.nazwa as FirmaNazwa,serwer.nazwa as SerwerNazwa
                FROM AppBundle:domena domena,AppBundle:Firma firma,AppBundle:serwer serwer
                WHERE domena.firma = firma.id 
                AND domena.serwer = serwer.id 
                AND domena.kontoId = '.$this->getUser()->getId().''
            );
       }

        $result = $query->getResult();
        echo $this->getUser()->getId();

        /*
        *
        *   Przycinamy rekordy żeby ładnie mieściły się w tabelce dodajac znak '...' na końcu
        *
        */

        $string_len = 5;
        foreach ($result as $key => $tab) {
             foreach($tab as $k => $record) {
                if(!is_a($record,'DateTime')) {
                    strlen($record) > $string_len ? $result[$key][$k]= substr($record, 0, $string_len) . '...' : $result[$key][$k] = $record;
                } else {
                    $result[$key][$k] = $record;
                }
             }
        }

        return $this->render('main/domeny.twig', array('lista_domen' => $result));
    }


    /**
     * @Route("/domeny/info/{id}", name="Info Domeny")
     */

    public function InfoDomenAction($id)
    {

        //$lista_domen = $this->getRepository('domena')->find($id);

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            '   SELECT domena.id,domena.nazwa,domena.inne,domena.opis,domena.dataWyg,domena.aktywna,firma.nazwa as FirmaNazwa,serwer.nazwa as SerwerNazwa
                FROM AppBundle:domena domena,AppBundle:Firma firma,AppBundle:serwer serwer
                WHERE domena.firma = firma.id
                AND domena.serwer = serwer.id
                AND domena.id = '.$id.''
            );

        $result = $query->getResult();



        return $this->render('main/domena_info.twig', array('lista_domen' => $result));
    }



    /**
     * @Route("/domeny/{komunikat}", name="Lista_Domen_Komunikat")
     */

    public function listaDomenDodanoAction($komunikat) 
    {
        return $this->render('main/domeny.twig', array('komunikat' => $komunikat));
    }


    public function arrayToChoiceTypeField($Repository) {

        $array = array();

        for($i = 0; $i < count($Repository);$i++) {
            $array [$Repository[$i]->getNazwa()] = $Repository[$i]->getId();
        }

        return $array;
    }

    /**
     * @Route("/dodaj/domene", name="Dodaj Domene")
     */
    public function dodajDomeneAction(Request $request)
    {

        /*
            Formularz dodania domeny
        */

        $domeny = new Domena;

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            '   SELECT firma.nazwa,firma.id
                FROM AppBundle:Firma firma
                WHERE firma.kontoId = '.$this->getUser()->getId().'
                '
            );

        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $firmy[$value['nazwa']] = $value['id'];
        }

        $query = $em->createQuery(
            '   SELECT serwer.nazwa,serwer.id
                FROM AppBundle:serwer serwer
                WHERE serwer.user_id = '.$this->getUser()->getId().'
                '
            );

        $result = $query->getResult();


        foreach ($result as $key => $value) {
            $serwery[$value['nazwa']] = $value['id'];
        }



        $form = $this->createFormBuilder($domeny)
            ->add('nazwa', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('opis', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('firma', ChoiceType::class, array(
                'attr' => array('class' => 'form-control','style' => 'margin-bottom:15px'),
                'choices' => array($firmy)
                ))
            ->add('serwer', ChoiceType::class, array(
                'attr' => array('class' => 'form-control','style' => 'margin-bottom:15px'),
                'choices' => array($serwery)
                ))
            ->add('Dodaj', SubmitType::class, array('attr' => array('class' => 'btn btn-success','style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $nazwa = $form['nazwa']->getData();
            $opis = $form['opis']->getData();
            $kontoId = $this->getUser()->getId();
            $sld = $nazwa;

            $domain = new Whois($sld);
            if ($domain->isValid()) {

                $dostępna  = 1;

                $odp = str_replace(" ", "", $domain->info());
                $ex = explode(":", $odp);
                $tabela_nazw = array("Expiration","expiration","renewal","Renewal");

                foreach ($ex as $key => $value) {
                    foreach($tabela_nazw as $ex_nazwa) {
                        $pos = strpos($value, $ex_nazwa);
                        if($pos) {
                            $str_date = substr($ex[$key+1],0,10);
                            $str_date = str_replace(".", "/", $str_date);
                            $time = strtotime($str_date);
                            $dataWyg = date('Y-m-d',$time);

                        }
                    }
                }

                /*
                * Ustawienie wartości domyślnych w przypadku nie wybrania którejś z wartości
                * wartość domyślna to 0 (int)
                */

                ($form['firma']->getData() == null) ? $firma = 0 : $firma = $form['firma']->getData();
                ($form['serwer']->getData() == null) ? $serwer = 0 : $serwer = $form['serwer']->getData();



                $domeny->setNazwa($nazwa);
                $domeny->setOpis($opis);
                $domeny->setFirma($firma);
                $domeny->setSerwer($serwer);
                $domeny->setKontoId($kontoId);
                $domeny->setDataWyg(new \DateTime($dataWyg));
                $domeny->setAktywna($dostępna);
                $domeny->setInne($odp);

                $doc = $this->getDoctrine()->getManager();
                $doc->persist($domeny);
                $doc->flush();


                return $this->redirectToRoute('Lista_Domen_Komunikat', array('komunikat' => 'added'));

            } else {
                return $this->redirectToRoute('Lista_Domen_Komunikat', array('komunikat' => 'error'));
            }

        }

        return $this->render('main/dodaj/domene.twig', array('form_dodaj_domene' => $form->createView()));
    }




    /**
     * @Route("/domeny/edit/{id}", name="Edytuj Domene")
     */
    public function edytujDomeneAction($id,Request $request)
    {

        /*
            Formularz edytowania domeny
        */

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            '   SELECT firma.nazwa,firma.id
                FROM AppBundle:Firma firma
                WHERE firma.kontoId = '.$this->getUser()->getId().'
                '
            );

        $result = $query->getResult();

        foreach ($result as $key => $value) {
            foreach($value as $k => $v) {
                $firmy = [
                   $value['nazwa'] => $v
                ];
            }
        }
        $query = $em->createQuery(
            '   SELECT serwer.nazwa,serwer.id
                FROM AppBundle:serwer serwer
                WHERE serwer.user_id = '.$this->getUser()->getId().'
                '
            );

        $result = $query->getResult();
        $serwery = array();
        foreach ($result as $key => $value) {
            foreach($value as $k => $v) {
                $serwery = [
                   $value['nazwa'] => $v
                ];
            }
        }

        $domeny = $this->getRepository('domena')->find($id);

            $domeny->setNazwa($domeny->getNazwa());
            $domeny->setOpis($domeny->getOpis());
            $domeny->setFirma($domeny->getFirma());
            $domeny->setSerwer($domeny->getSerwer());
            $domeny->setKontoId($domeny->getKontoId());


        $selected_firma = $this->getRepository('Firma')->find($domeny->getFirma());
        $selected_serwer= $this->getRepository('serwer')->find($domeny->getSerwer());
        
        $form = $this->createFormBuilder($domeny)
            ->add('nazwa', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('opis', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('firma', ChoiceType::class, array(
                'attr' => array('class' => 'form-control','style' => 'margin-bottom:15px'),
                'choices' => array($firmy)
                ))
            ->add('serwer', ChoiceType::class, array(
                'attr' => array('class' => 'form-control','style' => 'margin-bottom:15px'),
                'choices' => array($serwery)
                ))
            ->add('Edytuj', SubmitType::class, array('attr' => array('class' => 'btn btn-success','style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $nazwa = $form['nazwa']->getData();
            $opis = $form['opis']->getData();
            $firma = $form['firma']->getData();
            $serwer = $form['serwer']->getData();

            $domeny->setNazwa($nazwa);
            $domeny->setOpis($opis);
            $domeny->setFirma($firma);
            $domeny->setSerwer($serwer);

            $doc = $this->getDoctrine()->getManager();
            $doc->persist($domeny);
            $doc->flush();

            return $this->redirectToRoute('Lista_Domen_Komunikat', array('komunikat' => 'edited'));
            
        }

        return $this->render('main/edytuj/domene.twig', array('form_edit_domena' => $form->createView()));
    }

    /**
     * @Route("/widoki/pogrupowane-domeny", name="Pogrupoowane Domeny")
     */
    public function pogrupowaneDomenyAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            '   SELECT domena.nazwa as nazwaDomeny, serwer.nazwa as nazwaSerwera
                FROM AppBundle:domena domena, AppBundle:serwer serwer
                WHERE domena.serwer = serwer.id
                AND domena.kontoId = '.$this->getUser()->getId().'
                '
            );

        $result = $query->getResult();

        foreach ($result as $key => $value) {
            $serwery[$value['nazwaSerwera']][] = $value['nazwaDomeny'];
        }

        return $this->render('main/widoki/pogrupowaneDomeny.twig', array('pogrupowane' => $serwery));
    }

    /**
     * @Route("/domeny/delete/{id}", name="Usuń Domene")
     */
    public function usunDomeneAction($id,Request $request)
    {

        $domena = $this->getRepository('domena')->find($id);
        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->remove($domena);
        $doctrine->flush();

        return $this->redirectToRoute('Lista_Domen_Komunikat', array('komunikat' => 'deleted'));
    }

}
