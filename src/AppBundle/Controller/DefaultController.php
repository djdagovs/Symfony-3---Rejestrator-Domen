<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="strona główna")
     */
    public function indexAction(Request $request)
    {

        // Sprawdzenie czy która z domen nie wygaśnie zaraz 

if($this->getUser() != null) {
             $em = $this->getDoctrine()->getManager();
             $q = $em->createQuery(
                '
                SELECT domena.nazwa, domena.dataWyg
                FROM AppBundle:domena domena, AppBundle:konto konto
                WHERE domena.kontoId = '.$this->getUser()->getId().'
                '
                );
        $result = $q->getResult();

        $dzis = new \DateTime();
        $wiadomosc = '';
        foreach($result as $value) {
            if($dzis->format('Y-m-d') != $value['dataWyg']->format('y-m-d')) {
                if($dzis->format('Y-m-d') < $value['dataWyg']->format('Y-m-d'))
                for($i=0;$i<=60;$i++) {
                    $dzis->add(new \DateInterval('P1D'));

                    if($value['dataWyg']->format('Y-m-d') == $dzis->format('Y-m-d')) {
                        $wiadomosc .= 'Ważność domeny ' . $value['nazwa'] . ' minie za ' . $i . ' dni!<br />';

                    }
                } 
            $dzis = new \DateTime();
            }

}
if($wiadomosc) {
    $to      =  $this->getUser()->getEmail();
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: janjas92@gmail.com" . "\r\n" .
    "CC: janjas92@gmail.com";

    mail($to,$subject,$txt,$headers);

}

        }


	    	if($this->getUser() != null) {
				$rol =  $this->getUser()->getRoles();
		        ($rol[0] == 'ROLE_ADMIN') ? $is_admin = 1 : $is_admin = 0;
	    	} else {
	    		$is_admin = 0;
	    	}
    	
    	return $this->render('main/index.html.twig',array('is_admin' => $is_admin));
    }
}
