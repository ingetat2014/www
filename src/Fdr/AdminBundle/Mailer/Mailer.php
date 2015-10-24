<?php
namespace Fdr\AdminBundle\Mailer;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mailer
 *
 * @author ismailkomay
 */
class Mailer {
    //put your code here
    //security desactive
    private $mailer;
    public function __construct($mailer) {
        $this->mailer = $mailer;
    }
    
    public function envoyer($fromContainer,$to,$subject,$body,$notif=null,$exception=false){
        //machin
        $etat = false;
        try {
        $message = \Swift_Message::newInstance()
        ->addFrom($fromContainer->getParameter('mailer_user'),$fromContainer->getParameter('mailer_name'))
        ->setSubject($subject)
        ->setTo($exception?$fromContainer->getParameter('mailer_user'):$to)
        ->setCharset("utf-8")
        ->setContentType('text/html')
        //->setBody($this->mailer->renderView('FdrAdminBundle:Email:email.html.twig', array('name' => 'machin')));
        // ->setBody("bodyyy");
       ->setBody($body);
        /*$this->get('mailer')->send($message); */
        $this->mailer->send($message);
        $etat = true;
        $fromContainer->get('session')->getFlashBag()->add('notFoundException', $notif);
        } catch(\Exception $e) {
            $etat = true;//ou retoourner $e
        }

        return $etat;
    }
}
