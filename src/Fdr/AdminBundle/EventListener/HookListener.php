<?php

namespace Fdr\AdminBundle\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use \Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\DependencyInjection\ContainerInterface;

class HookListener {

    private $session;
    private $router;
    private $securityContext;
    private $container;
    private $entity;

    public function __construct(ContainerInterface $container, Session $session) {
        $this->session = $session;
        $this->container = $container;
        $this->router = $container->get('router');
        $this->securityContext = $container->get('security.context');
        date_default_timezone_set($container->getParameter('time_zone'));
    }

    public function onKernelException(GetResponseForExceptionEvent $event) {
        
        $request = Request::createFromGlobals();
        $serveur = $request->server->get("SERVER_NAME");
        $base = $request->server->get("BASE");
        $env = ($this->container->get('kernel')->getEnvironment()=="prod")?"/":"/app_dev.php";
        try { 
            $exception = $event->getException();
            $classe = explode('\\', get_class($exception));
            if ($classe[count($classe) - 1] == "NotFoundHttpException" || $classe[count($classe) - 1] == "AccessDeniedHttpException" || $classe[count($classe) - 1] == "MethodNotAllowedHttpException") {
                $status = $exception->getStatusCode();
            } else {
                $status = -1;
            }
            $message = '<h1><font style="color:red">Exception detect&eacute;e :</font></h1><br/>';
            $message .= '<h2><table border="2px" cellpadding="7px" cellspacing="5px"><tr><th>Code d\'exception</th><td>' . $status . '</td>';
            $message .= '<tr><th>Message</th>';

            if ($status == 404) {
               $this->versAccueil('Route requetee n\'existe pas');
                
            } else if ($status == 403) {
               $this->versAccueil('Accès interdit à la page requetee '.$exception->getMessage());
            }
            else if ($status == 405) {
              $this->versAccueil(null);
            }
            else
            {
                //envoyer un mail au webMaster
                $etat = $this->envoyerException($exception->getFile(),$exception->getLine(),$exception->getMessage());
                $now = new \DateTime();
                $diffMin =  $this->diffHeures($now,$this->session->has('envoiDepuisHeure')?$this->session->get('envoiDepuisHeure'):$now);
                $deja = ($this->session->has('envoiDepuisHeure'))?" D&eacute;ja envoy&eacute;e, il fallait attendre au moins  ".(60-intval($diffMin*60))."min pour qu\'elle sera encore":"sera";
                $message .= '<td><span style="color:#fff;background-color:#337ab7">Une erreur a &eacute;t&eacute; survenue; '.$deja.' envoy&eacute;e au WebMaster.'.$exception->getMessage().'|'.$exception->getFile() .'|'. $exception->getLine().'</span></td>';
            }
            $lien = '<input type="submit" style="color:#333;background-color:#fff;border-color:#ccc" value=" Revenir " onclick="history.back();">';
            $accueil = '<a href="http://'.($serveur.$base.$env).'"><button style="color:#333;background-color:#fff;border-color:#ccc">Accueil</button></a>';
            $message .= '<tr><th colspan="2">' . $lien . ' ou ' . $accueil. '</th></tr>';
            $message .= '<tr><th colspan="2">Pour plus : <a href="mailto:ism.assal@gmail.com?subject=Declaration&cc=ism.assal@gmail.com&bcc=ism.assal@gmail.com&body=Bonjour_WebMaster">Contactez-nous</a></th></tr>';
            $message .= '</tr></table></h2>';
            
            $message = nl2br($message);
            $response = new Response();
            $response->setContent($message);
            if ($exception instanceof HttpExceptionInterface) {
                $response->setStatusCode($status);
                $response->headers->replace($exception->getHeaders());
            } else {
                $response->setStatusCode(500);
            }
            
            $event->setResponse($response);
        } catch (Exception $e) {
            
        }
        
    }

    public function onKernelRequest(GetResponseEvent $event) {
        if ($this->securityContext->getToken()) {
            if (is_object($this->securityContext->getToken()->getUser()) and $event->getRequest()->attributes->get('_route') == 'fos_user_security_login') {
                $event->setResponse(new RedirectResponse($this->router->generate('home_user')));
            }
        }
    }
   private function versAccueil($msg=null){
        $request = Request::createFromGlobals();
        $serveur = $request->server->get("SERVER_NAME");
        $base = $request->server->get("BASE");
        $env = ($this->container->get('kernel')->getEnvironment()=="prod")?"/":"/app_dev.php";        
        $msg = nl2br($msg);
       if($msg)$this->session->getFlashBag()->add('notFoundException',$msg);
         header('Location:  http://'.$serveur.$base.$env);
        exit();
   }
   private function envoyerException($fichier="Pas mentionne",$ligne="-1",$msg="pas defini",$destinataire = "ismailkomay@gmail.com",$sujet = "Nouvelle Exception détectée",$notif="Notif.=> Last Exception sera transmise au WebMaster et sera resolue au plutôt possible"){
       $request = Request::createFromGlobals();
        $now = new \DateTime();
        $body =$this->container->get('templating')->render('FdrAdminBundle:Email:exception.html.twig', 
                array('utilisateur' =>  $this->securityContext->getToken()->getUser()." / ".
				(is_object($this->securityContext->getToken()->getUser())?$this->securityContext->getToken()->getUser()->getEmail():$destinataire),
                     'url' =>  $request->server->get("REQUEST_URI"),
                    'route_name'=>$this->container->get('request')->get('_route'),
                    'date' => $now->format("d-m-Y H:i"),
                    'env' => $this->container->get('kernel')->getEnvironment(),
                    'message' => $msg,
                    'fichier' => $fichier,'ligne' =>$ligne));
        
        if(!$this->session->has('envoiDepuisHeure')){
        $service = $this->container->get('my_mailer')->envoyer
                ($this->container,
                $destinataire,
                $sujet,
                $body,
                $notif,true);
        $this->session->set('envoiDepuisHeure', $now);
        }
        else{
           if($this->diffHeures($now,$this->session->get('envoiDepuisHeure'))>=1)
            { $this->session->remove('envoiDepuisHeure');}
        }  
   }
   private function diffHeures($date1,$date2){
       
        $jrs = $date2->diff($date1)->format('%a');
        $h = $date2->diff($date1)->format('%h');
        $mi = $date2->diff($date1)->format('%i');
        $sec = $date2->diff($date1)->format('%s');
        $nbHeure = ($jrs * 24 + $h + $mi / 60 + $sec / 3600);
       return $nbHeure?$nbHeure:-1;    
   }
}
