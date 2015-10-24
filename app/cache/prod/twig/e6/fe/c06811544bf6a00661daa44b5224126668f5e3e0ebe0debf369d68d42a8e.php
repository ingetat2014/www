<?php

/* FdrAdminBundle:MissionAffretement:show.html.twig */
class __TwigTemplate_e6fec06811544bf6a00661daa44b5224126668f5e3e0ebe0debf369d68d42a8e extends Twig_Template
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
        echo "Feuille d'Affretement|Show";
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
        echo "<div class=\"page-header\"><h2> Affichage d'une feuille D'Affretement(";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo ")</h2></div>

<div class=\"span12\">
    <div class=\"row-fluid\">
        <div class=\"span2 desactiver-champs\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'label', array("label" => "Code :"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "</span></div>
        <div class=\"span2 desactiver-champs\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'label', array("label" => "Etat :"));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "</span></div>
        <div class=\"span3\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGeneree", array()), 'label', array("label" => "Date d'ouverture :"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGeneree", array()), 'widget');
        echo "</div>
";
        // line 15
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDL", array())) {
            // line 16
            echo "        <div class=\"span1 offset3\" >
    ";
            // line 17
            if ( !($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "annuler")) {
                // line 18
                echo "    ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["apercu_form"]) ? $context["apercu_form"] : $this->getContext($context, "apercu_form")), 'form_start', array("attr" => array("target" => "_blank")));
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["apercu_form"]) ? $context["apercu_form"] : $this->getContext($context, "apercu_form")), 'form');
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["apercu_form"]) ? $context["apercu_form"] : $this->getContext($context, "apercu_form")), 'form_end');
                echo "
     ";
            }
            // line 20
            echo "        </div>
        <div class=\"span1\" >
    ";
            // line 22
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
                // line 23
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["save_form"]) ? $context["save_form"] : $this->getContext($context, "save_form")), 'form_start', array("attr" => array("id" => "save")));
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["save_form"]) ? $context["save_form"] : $this->getContext($context, "save_form")), 'form');
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["save_form"]) ? $context["save_form"] : $this->getContext($context, "save_form")), 'form_end');
                echo "
";
            }
            // line 25
            echo "        </div>
";
        }
        // line 27
        echo "    </div>
</div>

<div class=\"desactiver-champs\">
";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <span class=\"alert-danger \">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
    </div>
    <div class=\"row\">
        <div class=\"span4\">
            <fieldset>
                <legend>Ramassage : </legend>
                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateramassage", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateramassage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateramassage", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuramassage", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuramassage", array()), 'widget', array("attr" => array("class" => "disable-input", "disabled" => true)));
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuramassage", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicule", array()), 'label', array("label" => " "));
        echo "</div>
                    <span class=\"\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicule", array()), 'widget');
        echo "</span>
                    <span class=\"alert-danger \">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicule", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionVoulu", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionVoulu", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionVoulu", array()), 'errors');
        echo "</span>
                </div>

            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset> 
                <legend>Livraison : </legend>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datelivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datelivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datelivraison", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieulivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieulivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieulivraison", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naturemarchandise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naturemarchandise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naturemarchandise", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrecolis", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrecolis", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrecolis", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bonlivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bonlivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bonlivraison", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numexpedition", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numexpedition", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numexpedition", array()), 'errors');
        echo "</span>
                </div>

            </fieldset>
        </div>

        <div class=\"span3\">
            <fieldset>
                <legend>P.J. :</legend>
                <div class=\"span2\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecc", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecc", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecc", array()), 'label', array("label" => "ECC"));
        echo "</div>
                <div class=\"span2\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ect", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ect", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ect", array()), 'label', array("label" => "ECT"));
        echo "</div>
                <div class=\"span2\">";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ebl", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ebl", array()), 'errors');
        echo "</span> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ebl", array()), 'label', array("label" => "EBL"));
        echo "</div>
                <div class=\"span2\">";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'errors');
        echo "</span> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'label', array("label" => "ESPECE"));
        echo "</div>
                <div class=\"span2\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autredoc", array()), 'label', array("label" => " "));
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autredoc", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autredoc", array()), 'widget');
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
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'label', array("label" => " "));
        echo "</div>
<span class=\"\">";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget');
        echo "</span><span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDestinataire", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDestinataire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDestinataire", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telresponsable", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telresponsable", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telresponsable", array()), 'errors');
        echo "</span>
                </div>

            </fieldset>
        </div>

        <div class=\"span4 cacher\">
            <fieldset> 
                <legend>Facture client : </legend>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantfacture", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantfacture", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantfacture", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motifremise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motifremise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motifremise", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
 ";
        // line 161
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montantregle", array()) || $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "client", array()), "encompte", array()))) {
            // line 162
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantregle", array()), 'widget', array("attr" => array("checked" => true)));
            echo "
 ";
        } else {
            // line 164
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantregle", array()), 'widget', array("attr" => array("checked" => false)));
            echo "
";
        }
        // line 166
        echo "                    <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantregle", array()), 'errors');
        echo "</span>
";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantregle", array()), 'label', array("label" => "Regle"));
        echo "
                </div>

            </fieldset>
        </div> 

        <div class=\"span3\">
            <fieldset> 
                <legend>Asssurance/Banque : </legend>
                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valdeclassurance", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valdeclassurance", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valdeclassurance", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombnq", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombnq", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombnq", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcheque", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcheque", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcheque", array()), 'errors');
        echo "</span>
                </div>

            </fieldset>

        </div>
    </div>
    <div class=\"row-flluid\">
        <div class=\"span6\">
            <span class=\"span1\">";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'widget');
        echo "</span>
";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'label', array("label" => " Confirmation de reception des documents de la part du client"));
        echo "
            <span class=\"alert-danger \">";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"span6\">
            <span class=\"span1\"> ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'widget');
        echo "</span>
";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'label', array("label" => " Confirmation de reception des documents de la part du CTM"));
        echo "
            <span class=\"alert-danger \">";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'errors');
        echo "</span>
        </div>

    </div>  
";
        // line 209
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<div class=\"row-fluid\">
    <a target=\"_blank\" href=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("missionaffretement");
        echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
<script>

    \$(\"#form_enregistrerFdl\").confirm({
        title: \"Confirmation d'impression\",
        text: \"Voulez-vous vraiment imprimer cette feuille ? \",
        post: true,
        confirm: function(button) {
            button.fadeOut(500).fadeIn(500);
            \$(\"#form_enregistrerFdl\").parent().parent().parent().submit();
        },
        cancel: function(button) {
            button.fadeOut(500).fadeIn(500);
            button.preventDefault();
        },
        confirmButton: \"Oui, J'en veux\",
        cancelButton: \"Non, Merci\"
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:MissionAffretement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 212,  539 => 209,  532 => 205,  528 => 204,  524 => 203,  517 => 199,  513 => 198,  509 => 197,  495 => 188,  491 => 187,  482 => 183,  478 => 182,  469 => 178,  465 => 177,  452 => 167,  447 => 166,  442 => 164,  437 => 162,  435 => 161,  426 => 157,  422 => 156,  413 => 152,  409 => 151,  400 => 147,  396 => 146,  380 => 135,  376 => 134,  367 => 130,  363 => 129,  354 => 125,  350 => 124,  341 => 120,  337 => 119,  318 => 107,  310 => 106,  302 => 105,  294 => 104,  286 => 103,  272 => 94,  268 => 93,  259 => 89,  255 => 88,  246 => 84,  242 => 83,  233 => 79,  229 => 78,  220 => 74,  216 => 73,  207 => 69,  203 => 68,  187 => 57,  183 => 56,  176 => 52,  172 => 51,  168 => 50,  159 => 46,  155 => 45,  147 => 42,  143 => 41,  133 => 34,  127 => 31,  121 => 27,  117 => 25,  110 => 23,  108 => 22,  104 => 20,  96 => 18,  94 => 17,  91 => 16,  89 => 15,  85 => 14,  81 => 13,  75 => 12,  71 => 11,  65 => 10,  61 => 9,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
