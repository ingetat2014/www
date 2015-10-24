<?php

/* FdrAdminBundle:Home:index.html.twig */
class __TwigTemplate_4cde2c29cddc83529c679e8523fd6b84ae9958b285f0c0d7ac05e9de450ed6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "  
<h1 class=\"page-header\">Accueil</h1>
    <div class=\"row-fluid\">
    Bonjour 
    ";
        // line 9
        if (( !(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) && array_key_exists("user", $context))) {
            // line 10
            echo "    <strong>
    ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
            echo "
    </strong> 
       <br/>
    ";
        } else {
            // line 15
            echo "       Anonyme, Veuillez connecter en cliquant  sur  Se Connecter

    ";
        }
        // line 18
        echo "    <br/>
    </div>
    <div class=\"row-fluid\">
        <div class=\"span8 bordurer breadcrumb\">
              ";
        // line 22
        echo (isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes"));
        echo "
        </div>
        <div class=\"span4\">
            
            <div class=\"row-fluid pull-right\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13297.83208609043!2d-7.6550281!3d33.5674553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa7c2c3b79c0e5323!2sSi%C3%A8ge+CTM+MESSAGERIE!5e0!3m2!1sfr!2s!4v1435420953450\" 
                 width=\"300\" height=\"200\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            <div class=\"row-fluid pull-right\">
                <img class=\"img-rounded\" alt=\"ctm-me\" title=\"ctm-me\" width=\"100\" height=\"73\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/ctm1.png"), "html", null, true);
        echo "\"/>
                <img class=\"img-rounded\" alt=\"ctm-me\" title=\"ctm-me\" width=\"100\" height=\"73\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/ctm.jpg"), "html", null, true);
        echo "\"/>
                <img class=\"img-rounded\"  alt=\"ctm-me\" title=\"ctm-me\" width=\"100\" height=\"73\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/ctm2.png"), "html", null, true);
        echo "\"/>
            </div>
        </div>
    </div>
     ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  91 => 32,  87 => 31,  75 => 22,  69 => 18,  64 => 15,  57 => 11,  54 => 10,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
    }
}
