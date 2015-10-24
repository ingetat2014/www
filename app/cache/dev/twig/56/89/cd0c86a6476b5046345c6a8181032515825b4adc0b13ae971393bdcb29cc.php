<?php

/* FdrAdminBundle:Role:show.html.twig */
class __TwigTemplate_5689cd0c86a6476b5046345c6a8181032515825b4adc0b13ae971393bdcb29cc extends Twig_Template
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
        echo "Role|Show";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 706
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\"><h1>Affichage d'un role</h1></div>



";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"desactiver-champs\">
    <div class=\"row-fluid\">
        <span class=\"alert-danger \">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
    </div>

    <div class=\"row-fluid\">
        <div class=\"span12\">
            <fieldset><!--1-->
                <legend></legend>
                <div class=\"row-fluid\">
                    <div class=\"span2 offset3\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'label', array("label" => " Identifiant "));
        echo "</div>
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span2 offset3\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomRole", array()), 'label');
        echo "</div>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomRole", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span2 offset3\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</div>
";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</span>
                </div>
            </fieldset><!--1-->
        </div>
    </div>

    <div class=\"row-fluid\"><!--fdr+fdl-->
        <div class=\"span6\">
            <fieldset> 
                <legend>
                    Feuille De Route : 
                </legend>
                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\">
                            Gestion globale :
                        </legend>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDR", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDR", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDR", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDR", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDR", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDR", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDR", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDR", array()), 'errors');
        echo "</span>
                        </div>
                    </fieldset>
                </div>

                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\"> 
                            Panne :
                        </legend>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRPanne", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRPanne", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRPanne", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRPanne", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRPanne", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRPanne", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRPanne", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRPanne", array()), 'errors');
        echo "</span>
                        </div>
                    </fieldset>
                </div>

                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\" >
                            Autre Agence : 
                        </legend>    
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRAutrAgence", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRAutrAgence", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRAutrAgence", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRAutrAgence", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRAutrAgence", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRAutrAgence", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRAutrAgence", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRAutrAgence", array()), 'errors');
        echo "</span>
                        </div>
                    </fieldset>
                </div>

                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\">
                            Autres : 
                        </legend> 
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDR", array()), 'label', array("label" => " Cloture "));
        echo "</div>
";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDR", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDR", array()), 'label', array("label" => " Modifier après Cloture  "));
        echo "</div>
";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDR", array()), 'errors');
        echo "</span>
                    </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelFDR", array()), 'label', array("label" => " Annulation "));
        echo "</div>
";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelFDR", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDR", array()), 'label', array("label" => " Impression  "));
        echo "</div>
";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDR", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDR", array()), 'label', array("label" => " Recherche  "));
        echo "</div>
";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDR", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editCompteur", array()), 'label', array("label" => " Edition Compteur "));
        echo "</div>
";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editCompteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editCompteur", array()), 'errors');
        echo "</span>
                        </div>    
                    </fieldset>
                </div>

            </fieldset>
        </div>

        <div class=\"span6\">
            <fieldset> 
                <legend> 
                    Feuille De Mission : 
                </legend>

                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\"> 
                            Client En Compte :
                        </legend>  
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientCompeFDL", array()), 'label', array("label" => " Affichage"));
        echo "</div>
";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientCompeFDL", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientCompeFDL", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientCompeFDL", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientCompeFDL", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientCompeFDL", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientCompeFDL", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientCompeFDL", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientCompeFDL", array()), 'label', array("label" => " Annulation "));
        echo "</div>
";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientCompeFDL", array()), 'errors');
        echo "</span>
                        </div>
                    </fieldset>
                </div>

                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\">
                            Client Non En Compte : 
                        </legend> 
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientNnCompeFDL", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientNnCompeFDL", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientNnCompeFDL", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientNnCompeFDL", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientNnCompeFDL", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientNnCompeFDL", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientNnCompeFDL", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientNnCompeFDL", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientNnCompeFDL", array()), 'label', array("label" => " Annulation "));
        echo "</div>
";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientNnCompeFDL", array()), 'errors');
        echo "</span>
                        </div>
                    </fieldset>
                </div>

                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\">
                            Accusé De Reception : 
                        </legend> 
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'label', array("label" => " Auprès du CTM "));
        echo "</div>
";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'label', array("label" => " Auprès du Client "));
        echo "</div>
";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'errors');
        echo "</span>
                        </div>
                    </fieldset>
                </div>

                <div class=\"row-fluid\">
                    <fieldset>
                        <legend class=\"subfieldset\"> 
                            Autres :
                        </legend>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDL", array()), 'label', array("label" => " Impression  "));
        echo "</div>
";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDL", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDL", array()), 'label', array("label" => " Recherche  "));
        echo "</div>
";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDL", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ttEtatAfficherParFdl", array()), 'label', array("label" => " Afficher par tout état  "));
        echo "</div>
";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ttEtatAfficherParFdl", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ttEtatAfficherParFdl", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationVehicule", array()), 'label', array("label" => " Affectation Véhicule"));
        echo "</div>
";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationVehicule", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationChauffManu", array()), 'label', array("label" => " Affectation Chauffeur"));
        echo "</div>
";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationChauffManu", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationChauffManu", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDRAffr", array()), 'label', array("label" => "Cloture "));
        echo "</div>
";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDRAffr", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDRAffr", array()), 'errors');
        echo "</span>
                        </div>
                        <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDRAffr", array()), 'label', array("label" => "Modifier après Cloture "));
        echo "</div>
";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDRAffr", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDRAffr", array()), 'errors');
        echo "</span>
                    </div>
                        <div class=\"row-fluid\">
                            <div class=\"span4\">";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPercentAssurParam", array()), 'label', array("label" => "Edition % Assurance"));
        echo "</div>
";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPercentAssurParam", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPercentAssurParam", array()), 'errors');
        echo "</span>
                        </div>
                    </fieldset>

                </div>
            </fieldset>
        </div>

    </div><!--fdr+fdl-->

    <div class=\"row-fluid\">
        <div class=\"span4 \">
            <fieldset>
                <legend>
                    Client :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClient", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 297
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClient", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClient", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 301
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClient", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClient", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClient", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClient", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClient", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    Vehicule :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 320
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVehicule", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVehicule", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVehicule", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 325
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVehicule", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 328
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVehicule", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 329
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVehicule", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 332
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVehicule", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 333
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVehicule", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    Chauffeur :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affChauffeur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 345
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affChauffeur", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crChauffeur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 349
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crChauffeur", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upChauffeur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 353
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upChauffeur", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 356
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delChauffeur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 357
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delChauffeur", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>
    </div>

    <div class=\"row-fluid\">

        <div class=\"span4 \">
            <fieldset>
                <legend>
                    Utilisateur :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 371
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affUtilisateur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affUtilisateur", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 375
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crUtilisateur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 376
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crUtilisateur", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 379
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upUtilisateur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 380
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upUtilisateur", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 383
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delUtilisateur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 384
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delUtilisateur", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    Depot :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 395
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affDepot", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 396
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affDepot", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 399
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crDepot", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 400
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crDepot", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 403
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upDepot", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 404
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upDepot", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 407
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delDepot", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 408
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delDepot", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    Filiale :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 419
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFiliale", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 420
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFiliale", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 423
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFiliale", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 424
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFiliale", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 427
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFiliale", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 428
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFiliale", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 431
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFiliale", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 432
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFiliale", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>
    </div>

    <div class=\"row-fluid\">
        <div class=\"span4 \">
            <fieldset>
                <legend>
                    Indisponibilite :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 445
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affIndisponibilite", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 446
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affIndisponibilite", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 449
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crIndisponibilite", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 450
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crIndisponibilite", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 453
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upIndisponibilite", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 454
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upIndisponibilite", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 457
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delIndisponibilite", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 458
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delIndisponibilite", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    Secteur :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 469
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affSecteur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 470
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affSecteur", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 473
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crSecteur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 474
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crSecteur", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 477
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upSecteur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 478
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upSecteur", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 481
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delSecteur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 482
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delSecteur", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    Type De Prestation :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 493
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypePrestation", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 494
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypePrestation", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 497
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypePrestation", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 498
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypePrestation", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 501
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypePrestation", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 502
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypePrestation", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 505
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypePrestation", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 506
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypePrestation", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>
    </div>

    <div class=\"row-fluid\">
        <div class=\"span4 \">
            <fieldset>
                <legend>
                    Type De Consommation :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 519
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypeConsommation", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 520
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypeConsommation", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 523
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypeConsommation", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 524
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypeConsommation", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 527
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypeConsommation", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 528
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypeConsommation", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 531
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypeConsommation", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 532
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypeConsommation", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    Manutentionnaire :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 543
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affManutentionnaire", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 544
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affManutentionnaire", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 547
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crManutentionnaire", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 548
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crManutentionnaire", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 551
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upManutentionnaire", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 552
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upManutentionnaire", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 555
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delManutentionnaire", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 556
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delManutentionnaire", array()), 'errors');
        echo "</span>
                </div>
            </fieldset>
        </div>
        <div class=\"span4\">
            <fieldset>
                <legend>
                    <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudRole\"/>
                    Role :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 567
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affRole", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 568
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affRole", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 571
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crRole", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 572
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crRole", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 575
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upRole", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 576
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upRole", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 579
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delRole", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 580
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delRole", array()), 'errors');
        echo "</span>
                </div>
            </fieldset>
        </div>
    </div>
    <div class=\"row-fluid\">
        <div class=\"span4\">
            <fieldset>
                <legend>
                    <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudVille\"/>
                    Ville :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 593
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVille", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 594
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVille", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 597
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVille", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 598
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVille", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 601
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVille", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 602
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVille", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 605
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVille", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 606
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVille", array()), 'errors');
        echo "</span>
                </div>
            </fieldset>
        </div>

        <div class=\"span4\">
            <fieldset>
                <legend>
                    <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudParamEtModif\"/>
                    Parametres/Modification :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 618
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affModification", array()), 'label', array("label" => " Affichage Modification "));
        echo "</div>
";
        // line 619
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affModification", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affModification", array()), 'errors');
        echo "</span>
                </div> 

                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 623
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delModification", array()), 'label', array("label" => " Suppression Modification "));
        echo "</div>
";
        // line 624
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delModification", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delModification", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 628
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPlageHoraireParam", array()), 'label', array("label" => " Edition Plages Horaires "));
        echo "</div>
";
        // line 629
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPlageHoraireParam", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPlageHoraireParam", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 632
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reporting", array()), 'label', array("label" => " Reporting "));
        echo "</div>
";
        // line 633
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reporting", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reporting", array()), 'errors');
        echo "</span>
            </div> 

            </fieldset>
        </div>

        <div class=\"span4 \">
            <fieldset>
                <legend>
                    <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudBonCarburantHuile\"/>
                    Bon Carburant :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 646
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affBonCarburantHuile", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 647
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affBonCarburantHuile", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 650
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crBonCarburantHuile", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 651
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crBonCarburantHuile", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 654
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upBonCarburantHuile", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 655
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upBonCarburantHuile", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 658
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delBonCarburantHuile", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 659
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delBonCarburantHuile", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>

    </div>

    <div class=\"row-fluid\">
        <div class=\"span4 \">
            <fieldset>
                <legend>
                    <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudPeage\"/>
                    Peage :
                </legend>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 674
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affPeage", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 675
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affPeage", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 678
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crPeage", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 679
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crPeage", array()), 'errors');
        echo "</span>
                </div> 
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 682
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upPeage", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 683
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upPeage", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4\">";
        // line 686
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delPeage", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 687
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delPeage", array()), 'errors');
        echo "</span>
                </div> 
            </fieldset>
        </div>
    </div>
</div>

<div class=\"cacher\">";
        // line 694
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</div>
";
        // line 695
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<br/>
";
        // line 697
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) {
            // line 698
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 699
            echo $this->env->getExtension('routing')->getPath("role");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
        // line 704
        echo "
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Role:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1616 => 704,  1608 => 699,  1605 => 698,  1603 => 697,  1598 => 695,  1594 => 694,  1582 => 687,  1578 => 686,  1570 => 683,  1566 => 682,  1558 => 679,  1554 => 678,  1546 => 675,  1542 => 674,  1522 => 659,  1518 => 658,  1510 => 655,  1506 => 654,  1498 => 651,  1494 => 650,  1486 => 647,  1482 => 646,  1464 => 633,  1460 => 632,  1452 => 629,  1448 => 628,  1439 => 624,  1435 => 623,  1426 => 619,  1422 => 618,  1405 => 606,  1401 => 605,  1393 => 602,  1389 => 601,  1381 => 598,  1377 => 597,  1369 => 594,  1365 => 593,  1347 => 580,  1343 => 579,  1335 => 576,  1331 => 575,  1323 => 572,  1319 => 571,  1311 => 568,  1307 => 567,  1291 => 556,  1287 => 555,  1279 => 552,  1275 => 551,  1267 => 548,  1263 => 547,  1255 => 544,  1251 => 543,  1235 => 532,  1231 => 531,  1223 => 528,  1219 => 527,  1211 => 524,  1207 => 523,  1199 => 520,  1195 => 519,  1177 => 506,  1173 => 505,  1165 => 502,  1161 => 501,  1153 => 498,  1149 => 497,  1141 => 494,  1137 => 493,  1121 => 482,  1117 => 481,  1109 => 478,  1105 => 477,  1097 => 474,  1093 => 473,  1085 => 470,  1081 => 469,  1065 => 458,  1061 => 457,  1053 => 454,  1049 => 453,  1041 => 450,  1037 => 449,  1029 => 446,  1025 => 445,  1007 => 432,  1003 => 431,  995 => 428,  991 => 427,  983 => 424,  979 => 423,  971 => 420,  967 => 419,  951 => 408,  947 => 407,  939 => 404,  935 => 403,  927 => 400,  923 => 399,  915 => 396,  911 => 395,  895 => 384,  891 => 383,  883 => 380,  879 => 379,  871 => 376,  867 => 375,  859 => 372,  855 => 371,  836 => 357,  832 => 356,  824 => 353,  820 => 352,  812 => 349,  808 => 348,  800 => 345,  796 => 344,  780 => 333,  776 => 332,  768 => 329,  764 => 328,  756 => 325,  752 => 324,  744 => 321,  740 => 320,  724 => 309,  720 => 308,  712 => 305,  708 => 304,  700 => 301,  696 => 300,  688 => 297,  684 => 296,  662 => 279,  658 => 278,  650 => 275,  646 => 274,  638 => 271,  634 => 270,  626 => 267,  622 => 266,  614 => 263,  610 => 262,  602 => 259,  598 => 258,  590 => 255,  586 => 254,  577 => 250,  573 => 249,  557 => 238,  553 => 237,  545 => 234,  541 => 233,  525 => 222,  521 => 221,  513 => 218,  509 => 217,  500 => 213,  496 => 212,  487 => 208,  483 => 207,  474 => 203,  470 => 202,  454 => 191,  450 => 190,  442 => 187,  438 => 186,  429 => 182,  425 => 181,  416 => 177,  412 => 176,  403 => 172,  399 => 171,  374 => 151,  370 => 150,  362 => 147,  358 => 146,  349 => 142,  345 => 141,  337 => 138,  333 => 137,  325 => 134,  321 => 133,  313 => 130,  309 => 129,  293 => 118,  289 => 117,  280 => 113,  276 => 112,  267 => 108,  263 => 107,  254 => 103,  250 => 102,  234 => 91,  230 => 90,  221 => 86,  217 => 85,  208 => 81,  204 => 80,  195 => 76,  191 => 75,  175 => 64,  171 => 63,  162 => 59,  158 => 58,  149 => 54,  145 => 53,  136 => 49,  132 => 48,  108 => 29,  104 => 28,  96 => 25,  92 => 24,  84 => 21,  80 => 20,  69 => 12,  63 => 9,  57 => 5,  54 => 4,  49 => 706,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
