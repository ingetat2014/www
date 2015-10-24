<?php

/* FdrAdminBundle:Email:exception.html.twig */
class __TwigTemplate_da5bb496d73beebbe189e0e35564ce25d31dfe495b52d89ec5841b0a8c7a32d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"description\" content=\"ismailkomay\"/>
        <meta name=\"author\" content=\"ismailkomay\"/>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            tr th{
                background-color: lightblue;
                padding: 10px;
            }
            tr td{
                background-color: #EBEBEB;
                padding: 5px;
            }
            table{
                border: 2px solid lightcoral; 
                width: 100%;
            }
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"row-fluid text-primary\">
            Bonjour WebMaster
        </div>
        <br/>
<div  class=\"page-header\"> <span class=\"error\">Exception a été survenue lors de l'exécution de l'application : </span></div>
<br/>
<div class=\"row-fluid\">
<table class=\"\">
    <thead>
        <tr><th colspan=\"2\"><img id=\"inputButtonAfficher\" ALT=\"CTM MESSAGERIE\" title=\"CTM MESSAGERIE\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/ctm.png"), "html", null, true);
        echo "\" /></th></tr>
        <tr><th>Utilisateur</th><td>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "html", null, true);
        echo "</td></tr>
        <tr><th>Date</th><td>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "</td></tr>
        <tr><th>Message</th><td>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</td></tr>
        <tr><th>URL</th><td>";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "</td></tr>
        <tr><th>Nom de la Route</th><td>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), "html", null, true);
        echo "</td></tr>
        <tr><th>Environnement</th><td>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "</td></tr>
        <tr><th>Fichier</th><td>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "html", null, true);
        echo "</td></tr>
        <tr><th>Ligne</th><td>";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "html", null, true);
        echo "</td></tr>       
    </thead>
</table>
</div>
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Exception";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Email:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 9,  95 => 44,  91 => 43,  87 => 42,  83 => 41,  79 => 40,  75 => 39,  71 => 38,  67 => 37,  63 => 36,  48 => 24,  30 => 9,  20 => 1,);
    }
}
