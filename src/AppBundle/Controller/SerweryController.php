<?php

namespace AppBundle\Controller;

use Omines\DirectAdmin\DirectAdmin;
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
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\BrowserKit\Response;


class SerweryController extends Controller
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
     * @Route("/serwery", name="Lista Serwerow")
     */
    public function listaSerwerowAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        /*
        *   Querying for Objects with DQL - temat
        *   Zapytanie do bazy danych - dobrze że ma format SQL :)
        *   
        */


        $query = $em->createQuery(
            '   SELECT serwer.id,serwer.nazwa,serwer.url,serwer.opis
                FROM AppBundle:serwer serwer
                WHERE serwer.user_id = '.$this->getUser()->getId().''
            );

        $result = $query->getResult();

        /*
        *
        *   Przycinamy rekordy żeby ładnie mieściły się w tabelce dodajac znak '...' na końcu
        *
        */

        $string_len = 15;
        foreach ($result as $key => $tab) {
             foreach($tab as $k => $record) {
                if(!is_a($record,'DateTime')) {
                    strlen($record) > $string_len ? $result[$key][$k]= substr($record, 0, $string_len) . '...' : $result[$key][$k] = $record;
                } else {
                    $result[$key][$k] = $record;
                }
             }
        }

        return $this->render('main/serwery.twig', array('lista_serwer' => $result));
    }

    /**
     * @Route("/serwery/{komunikat}", name="Lista_Serwer_Komunikat")
     */
    public function listaDomenDodanoAction($komunikat) 
    {
        return $this->render('main/serwery.twig', array('komunikat' => $komunikat));
    }

    /**
     * @Route("/dodaj/serwer", name="Dodaj Serwer")
     */
    public function dodajSerwerAction(Request $request)
    {


        /*
            Formularz dodania domeny
        */

        $serwer = new Serwer;



        $form = $this->createFormBuilder($serwer)
            ->add('nazwa', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('opis', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('url', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('api_login', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('api_pass', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('Dodaj', SubmitType::class, array('attr' => array('class' => 'btn btn-success','style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $nazwa = $form['nazwa']->getData();
            $opis = $form['opis']->getData();
            $url = $form['url']->getData();
            $api_login = $form['api_login']->getData();
            $api_pass = $form['api_pass']->getData();

                /*
                * Ustawienie wartości domyślnych w przypadku nie wybrania którejś z wartości
                * wartość domyślna to 0 (int)
                */

                $serwer->setNazwa($nazwa);
                $serwer->setOpis($opis);
                $serwer->setUrl($url);
                $serwer->setUserId($this->getUser()->getId());
                $serwer->setApiLogin($api_login);
                $serwer->setApiPass($api_pass);
                $doc = $this->getDoctrine()->getManager();
                $doc->persist($serwer);
                $doc->flush();


                return $this->redirectToRoute('Lista_Serwer_Komunikat', array('komunikat' => 'added'));

            } 
                return $this->render('main/dodaj/serwer.twig', array('form_dodaj_serwer' => $form->createView()));
        }

    /**
     * @Route("/serwer/edit/{id}", name="Edytuj Serwer")
     */
public function edytujSerwerAction($id,Request $request)
    {

        /*
            Formularz edytowania domeny
        */

        $serwer = $this->getRepository('serwer')->find($id);

                $serwer->setNazwa($serwer->getNazwa());
                $serwer->setOpis($serwer->getOpis());
                $serwer->setUrl($serwer->getUrl());
                $serwer->setUserId($this->getUser()->getId());
                $serwer->setApiLogin($serwer->getApiLogin());
                $serwer->setApiPass($serwer->getApiPass());

        
        $form = $this->createFormBuilder($serwer)
            ->add('nazwa', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('opis', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('url', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('apiLogin', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('apiPass', TextareaType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('Edytuj', SubmitType::class, array('attr' => array('class' => 'btn btn-success','style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $nazwa = $form['nazwa']->getData();
            $opis = $form['opis']->getData();
            $url = $form['url']->getData();
            $apiPass = $form['apiPass']->getData();
            $apiLogin = $form['apiLogin']->getData();

            $serwer->setNazwa($nazwa);
            $serwer->setOpis($opis);
            $serwer->setUrl($url);
            $serwer->setApiPass($apiPass);
            $serwer->setApiLogin($apiLogin);

            $doc = $this->getDoctrine()->getManager();
            $doc->persist($serwer);
            $doc->flush();

            return $this->redirectToRoute('Lista_Serwer_Komunikat', array('komunikat' => 'edited'));
            
        }

        return $this->render('main/edytuj/serwer.twig', array('form_edit_serwer' => $form->createView()));
    }

    /**
     * @Route("/serwer/info/{id}", name="Info Serwer")
     */
    public function InfoSerwerAction($id)
    {
        $repository = $this->getRepository('serwer');

        $query = $repository->createQueryBuilder('s')
            ->where('s.id = ' . $id)
            ->andWhere('s.user_id = ' . $this->getUser()->getId())
            ->getQuery();

        $result = $query->getResult();

        return $this->render('main/serwer_info.twig', array('lista_serwer' => $result));
    }

    /**
     * @Route("/serwer/direct-admin/{id}", name="Direct_Admin_simple")
     */
    public function directAdminAction($id,Request $request)
    {


        $serwer = $this->getRepository('serwer')->find($id);
        $api_login = $serwer->getApiLogin();
        $api_pass = $serwer->getApiPass();
        $hostname = $serwer->getUrl();

        /*
        *   Proste sprawdzenie poprawności formatu hostname i jego poprawienie w przypadku błędu.
        */

        if(substr($hostname, 0,6) != 'http:/') {
            $hostname = 'http:/' . $hostname;
        }
        if(substr($hostname, strlen($hostname)-5,strlen($hostname)) != ':2222') {
            $hostname = $hostname . ':2222';
        }

        /*
        *   Łaczymy się z serwerem za pomoc api
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
            $firmy[$value['nazwa']] = $value['id'];
        }


        $userContext = DirectAdmin::connectUser($hostname, $api_login, $api_pass);

        $dane = array(); //tutaj przechowujemy dane które przekażemy do widoku ;)

        $domeny_direct = $userContext->getDomains();
        $username = $userContext->getUsername();
        $dane['id'] = $id;

        // echo '<pre>';
        // var_dump($domeny_direct);
        // echo '</pre>';
        $domena_repo = $this->getRepository('domena');

            $domena_check = $domena_repo->createQueryBuilder('d')
                ->where('d.kontoId = ' . $this->getUser()->getId())
                ->getQuery();
            $domena_check_result = $domena_check->getResult();
            //$domena_check_result[0]->getNazwa()
        foreach ($domeny_direct as $key => $value) {
                    $dane['domena'][] = $key;
                
        }

        (array_key_exists('domena', $dane)) ?  $dane['domena']:$dane['brak'] = "BRAK NOWYCH DOMEN";

        $domeny = new Domena;

        $form = $this->createFormBuilder($domeny)
                ->add('firma', ChoiceType::class, array(
                    'attr' => array('class' => 'form-control','style' => 'margin-bottom:15px'),
                    'choices' => array($firmy)
                    ))
                ->add('Dodaj', SubmitType::class, array('attr' => array('class' => 'btn btn-success','style' => 'margin-bottom:15px')))
                ->getForm();

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $firma_id  = $form['firma']->getData();

            foreach ($domeny_direct as $key => $value) {
                $nazwa_domeny = $key . '';

                 $domeny = new Domena;
                 
                 $domain = new Whois($key);
                    if ($domain->isValid()) {

                        $dostępna  = 1;
                        $dataWyg = date('Y-m-d');
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
                        
                        $domeny->setNazwa($nazwa_domeny);
                        $domeny->setOpis("Dodano automatycznie za pomoca API DirectAdmin");
                        $domeny->setFirma($firma_id);
                        $domeny->setSerwer($id);
                        $domeny->setKontoId($this->getUser()->getId());
                        $domeny->setDataWyg(new \DateTime($dataWyg));
                        $domeny->setAktywna($dostępna);
                        $domeny->setInne($odp);
                        $doc = $this->getDoctrine()->getManager();
                        $doc->persist($domeny);
                        $doc->flush();
                    }
               }
                return $this->redirectToRoute('Lista_Domen_Komunikat', array('komunikat' => 'added'));
        }




        return $this->render('main/directAdmin.twig', array('dane' => $dane,'form_dodaj_domeny' => $form->createView()));
    } 

    /**
     * @Route("/serwer/delete/{id}", name="Usuń Serwer")
     */
    public function usunSerwerAction($id,Request $request)
    {

        $serwer = $this->getRepository('serwer')->find($id);
        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->remove($serwer);
        $doctrine->flush();

        return $this->redirectToRoute('Lista_Serwer_Komunikat', array('komunikat' => 'deleted'));
    } 
}