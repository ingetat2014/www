<?php

/* FdrAdminBundle:Parametrage:edit.html.twig */
class __TwigTemplate_ade74a8b9e2aa5dec3f4cecf87ceff316339f84c0c970ab812871611f7276862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Paramétrage|Edit";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div  class=\"page-header\"> 
        <h1>Paramétrage</h1></div>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
<div class=\"row-fluid\">
    <span class=\"alert-danger \">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "</span>
</div>
    <div class=\"row-fluid\">
<div class=\"span6\">
    <div class=\"row-fluid\">
    <div class=\"span12 ";
        // line 15
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPlageHoraireParam", array())) ? ("") : ("cacher"));
        echo "\">
    
        <fieldset>
            <legend>Modification des plages horaires</legend>

            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDejeuner", array()), 'label');
        echo "</div>
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDejeuner", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDejeuner", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDejeuner", array()), 'label');
        echo "</div>
";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDejeuner", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDejeuner", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDiner", array()), 'label');
        echo "</div>
";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDiner", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDiner", array()), 'errors');
        echo "</span>
            </div>            
            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDiner", array()), 'label');
        echo "</div>
";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDiner", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDiner", array()), 'errors');
        echo "</span>
            </div>
            
            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDecoucher", array()), 'label');
        echo "</div>
";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDecoucher", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureDebutDecoucher", array()), 'errors');
        echo "</span>
            </div>            
            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDecoucher", array()), 'label');
        echo "</div>
";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDecoucher", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "heureFinDecoucher", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
    </div>
    <div class=\"row-fluid\">
    <div class=\"span12 ";
        // line 49
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPercentAssurParam", array())) ? ("") : ("cacher"));
        echo "\">
     
        <fieldset>
            <legend>Modification Pourcentage Assurance</legend>

            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pourcentAssurance", array()), 'label');
        echo "</div>
";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pourcentAssurance", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pourcentAssurance", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
    </div>
</div>
    
    <div class=\"span6 ";
        // line 63
        echo ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPercentAssurParam", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPlageHoraireParam", array()))) ? ("") : ("cacher"));
        echo "\">

        <fieldset>
            <legend>Modification paramètres</legend>

            <div class=\"row-fluid\">
                <div class=\"span7\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "alerteDiffKm", array()), 'label');
        echo "</div>
";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "alerteDiffKm", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "alerteDiffKm", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid  ";
        // line 72
        echo ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPercentAssurParam", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPlageHoraireParam", array()))) ? ("") : ("cacher"));
        echo "\">
                <div class=\"span12\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "notesAccueil", array()), 'label');
        echo "</div>
     ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "notesAccueil", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "notesAccueil", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
      </div>
    <br/>
<div class=\"row-fluid ";
        // line 80
        echo ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPercentAssurParam", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPlageHoraireParam", array()))) ? ("") : ("cacher"));
        echo "\">  
        <div class=\"span2 offset5\"> ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "</div>
</div>

    ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Parametrage:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 84,  224 => 81,  220 => 80,  209 => 74,  205 => 73,  201 => 72,  194 => 70,  190 => 69,  181 => 63,  169 => 56,  165 => 55,  156 => 49,  145 => 43,  141 => 42,  133 => 39,  129 => 38,  120 => 34,  116 => 33,  108 => 30,  104 => 29,  96 => 26,  92 => 25,  84 => 22,  80 => 21,  71 => 15,  63 => 10,  58 => 8,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
