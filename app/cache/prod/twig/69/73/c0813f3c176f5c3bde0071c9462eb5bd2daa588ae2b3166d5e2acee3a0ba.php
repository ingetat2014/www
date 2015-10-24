<?php

/* FdrAdminBundle:MissionAffretement:edit.html.twig */
class __TwigTemplate_6973c0813f3c176f5c3bde0071c9462eb5bd2daa588ae2b3166d5e2acee3a0ba extends Twig_Template
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
        echo "Feuille d'Affretement|Edit";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\"><h1> Modification d'une feuille de mission(";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo ")<span class=\"badge\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo "</span></h1></div>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
<div class=\"row\">
    <span class=\"alert-danger \">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "</span>
</div>

<div class=\"span12\">
    <div class=\"row-fluid\">
        <div class=\"span3\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateGeneree", array()), 'label', array("label" => "Date ouverture :"));
        echo "</div>
        <div class=\"span3\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateGeneree", array()), 'widget');
        echo "</div>
    </div>
</div>
<div class=\"row\">
    <div class=\"span4\">
        <fieldset>
            <legend>Ramassage : </legend>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateramassage", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateramassage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateramassage", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lieuramassage", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lieuramassage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lieuramassage", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeVehicule", array()), 'label', array("label" => " "));
        echo "</div>
<div class=\"\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeVehicule", array()), 'widget');
        echo "</div>
<span class=\"alert-danger \">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeVehicule", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreManutentionVoulu", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreManutentionVoulu", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreManutentionVoulu", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset> 
            <legend>Livraison : </legend>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datelivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datelivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datelivraison", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lieulivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lieulivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lieulivraison", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "naturemarchandise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "naturemarchandise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "naturemarchandise", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbrecolis", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbrecolis", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nbrecolis", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "bonlivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "bonlivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "bonlivraison", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numexpedition", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numexpedition", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numexpedition", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>
    </div>

    <div class=\"span3\">
        <fieldset>
            <legend>P.J. :</legend>
            <div class=\"span2\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ecc", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ecc", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ecc", array()), 'label', array("label" => "ECC"));
        echo "</div>
            <div class=\"span2\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ect", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ect", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ect", array()), 'label', array("label" => "ECT"));
        echo "</div>
            <div class=\"span2\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ebl", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ebl", array()), 'errors');
        echo "</span> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ebl", array()), 'label', array("label" => "EBL"));
        echo "</div>
            <div class=\"span2\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "espece", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "espece", array()), 'errors');
        echo "</span> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "espece", array()), 'label', array("label" => "ESPECE"));
        echo "</div>
            <div class=\"span2\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "autredoc", array()), 'label', array("label" => " "));
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "autredoc", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "autredoc", array()), 'widget');
        echo "</div>
        </fieldset>
    </div>
</div>


<div class=\"row\">
    <div class=\"span4\">
        <fieldset> 
            <legend>Contact client : </legend>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'label', array("label" => " "));
        echo "</div>
<span class=\"\">";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'widget');
        echo "</span><span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clientDestinataire", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clientDestinataire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clientDestinataire", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomresponsable", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomresponsable", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomresponsable", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telresponsable", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telresponsable", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telresponsable", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset> 
            <legend>Facture client : </legend>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montantfacture", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montantfacture", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montantfacture", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "remise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "remise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "remise", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "motifremise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "motifremise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "motifremise", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
 ";
        // line 142
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montantregle", array()) || $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "client", array()), "encompte", array()))) {
            // line 143
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montantregle", array()), 'widget', array("attr" => array("checked" => true)));
            echo "
 ";
        } else {
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montantregle", array()), 'widget', array("attr" => array("checked" => false)));
            echo "
";
        }
        // line 147
        echo "                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montantregle", array()), 'errors');
        echo "</span>
";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "montantregle", array()), 'label', array("label" => "Regle"));
        echo "
            </div>

        </fieldset>
    </div> 

    <div class=\"span3\">
        <fieldset> 
            <legend>Asssurance/Banque : </legend>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "valdeclassurance", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "valdeclassurance", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "valdeclassurance", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombnq", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombnq", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombnq", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numcheque", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numcheque", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "numcheque", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>

    </div>
</div>
";
        // line 176
        $context["variable"] = "cacher";
        // line 177
        if (((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "fdr-cloturer")) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "valider"))) {
            // line 178
            $context["variable"] = "";
        }
        // line 180
        echo "<div class=\"row-flluid ";
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
        echo "\">
    <div class=\"span6 ";
        // line 181
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "confRecDocClient", array())) ? ("") : ("cacher"));
        echo "\">
        <span class=\"span1\">";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocClient", array()), 'widget');
        echo "</span>
";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocClient", array()), 'label', array("label" => " Confirmation de reception des documents de la part du client"));
        echo "
        <span class=\"alert-danger \">";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocClient", array()), 'errors');
        echo "</span>
    </div>

    <div class=\"span6 ";
        // line 187
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "confRecDocCtm", array())) ? ("") : ("cacher"));
        echo "\">
        <span class=\"span1\"> ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocCtm", array()), 'widget');
        echo "</span>
";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocCtm", array()), 'label', array("label" => " Confirmation de reception des documents de la part du CTM"));
        echo "
        <span class=\"alert-danger \">";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocCtm", array()), 'errors');
        echo "</span>
    </div>

</div>
<div class=\"row-fluid\">
    <div class=\"span12 center-block\">
";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
";
        // line 199
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

 ";
        // line 201
        if (((((((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientNnCompeFDL", array())) || $this->getAttribute(        // line 202
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cancelClientNnCompeFDL", array()))) {
            // line 203
            echo "<div class=\"row-fluid\">
    <a href=\"";
            // line 204
            echo $this->env->getExtension('routing')->getPath("missionaffretement");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>

<script>
    function verifDateRamLiv()
    {
        var htmldateRam = \$(\"#fdr_adminbundle_missionaffretement_dateramassage_date\").val();
        var htmltimeRam = \$(\"#fdr_adminbundle_missionaffretement_dateramassage_time\").val().split(\":\", 2);
        var dateRam = new Date(htmldateRam);
        dateRam.setHours(parseInt(\"0\" + htmltimeRam[0]));
        dateRam.setMinutes(parseInt(\"0\" + htmltimeRam[1]));

        var htmldateLiv = \$(\"#fdr_adminbundle_missionaffretement_datelivraison_date\").val();
        var htmltimeLiv = \$(\"#fdr_adminbundle_missionaffretement_datelivraison_time\").val().split(\":\", 2);
        var dateLiv = new Date(htmldateLiv);
        dateLiv.setHours(parseInt(\"0\" + htmltimeLiv[0]));
        dateLiv.setMinutes(parseInt(\"0\" + htmltimeLiv[1]));
        if (dateLiv <= dateRam)
        {
            alert(\"La date de livraison doit être supérieure à celle de ramassage\");
            \$(\"#fdr_adminbundle_missionaffretement_dateramassage_date\").css('border-color', '#F00');
            \$(\"#fdr_adminbundle_missionaffretement_dateramassage_time\").css('border-color', '#F00');
            \$(\"#fdr_adminbundle_missionaffretement_datelivraison_date\").css('border-color', '#F00');
            \$(\"#fdr_adminbundle_missionaffretement_datelivraison_time\").css('border-color', '#F00');
            return false;
        }
        else {
            \$(\"#fdr_adminbundle_missionaffretement_dateramassage_date\").css('border-color', '#0F0');
            \$(\"#fdr_adminbundle_missionaffretement_dateramassage_time\").css('border-color', '#0F0');
            \$(\"#fdr_adminbundle_missionaffretement_datelivraison_date\").css('border-color', '#0F0');
            \$(\"#fdr_adminbundle_missionaffretement_datelivraison_time\").css('border-color', '#0F0');
            return true;
        }

    }
</script>

";
        }
        // line 244
        echo "
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:MissionAffretement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 244,  514 => 204,  511 => 203,  509 => 202,  508 => 201,  503 => 199,  497 => 196,  488 => 190,  484 => 189,  480 => 188,  476 => 187,  470 => 184,  466 => 183,  462 => 182,  458 => 181,  453 => 180,  450 => 178,  448 => 177,  446 => 176,  434 => 169,  430 => 168,  421 => 164,  417 => 163,  408 => 159,  404 => 158,  391 => 148,  386 => 147,  381 => 145,  376 => 143,  374 => 142,  365 => 138,  361 => 137,  352 => 133,  348 => 132,  339 => 128,  335 => 127,  319 => 116,  315 => 115,  306 => 111,  302 => 110,  293 => 106,  289 => 105,  280 => 101,  276 => 100,  257 => 88,  249 => 87,  241 => 86,  233 => 85,  225 => 84,  211 => 75,  207 => 74,  198 => 70,  194 => 69,  185 => 65,  181 => 64,  172 => 60,  168 => 59,  159 => 55,  155 => 54,  146 => 50,  142 => 49,  126 => 38,  122 => 37,  115 => 33,  111 => 32,  107 => 31,  98 => 27,  94 => 26,  86 => 23,  82 => 22,  71 => 14,  67 => 13,  59 => 8,  54 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
