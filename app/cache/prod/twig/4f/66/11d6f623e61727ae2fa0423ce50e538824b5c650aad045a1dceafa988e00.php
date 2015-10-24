<?php

/* FdrAdminBundle:Role:edit.html.twig */
class __TwigTemplate_4f6611d6f623e61727ae2fa0423ce50e538824b5c650aad045a1dceafa988e00 extends Twig_Template
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
        echo "Role|Edit";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 737
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\"><h1>Modification d'un role</h1></div>



";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
<div class=\"row-fluid\">
    <span class=\"alert-danger \">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "</span>
</div>

<div class=\"row-fluid\">
    <div class=\"span12\">
        <fieldset><!--1-->
            <legend>Formulaire de modification : </legend>
            <div class=\"row-fluid\">
                <div class=\"span2 offset3\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomRole", array()), 'label');
        echo "</div>
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomRole", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span2 offset3\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "</div>
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "</span>
            </div>
        </fieldset><!--1-->
    </div>
</div>
<div class=\"row-fluid\">
    <fieldset>
        <legend></legend>
        <div class=\"span2\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crudAdmin", array()), 'label');
        echo "</div>
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crudAdmin", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crudAdmin", array()), 'errors');
        echo "</span>
    </fieldset>
</div>  

<div class=\"row-fluid\"><!--fdr+fdl-->
    <div class=\"span6\">
        <fieldset> 
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudFDR\"/>
                Feuille De Route : 
            </legend>
            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\">
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"gestionGlobaleFDR\"/>
                        Gestion globale :
                    </legend>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDR", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDR", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDR", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDR", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDR", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>
            </div>

            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\"> 
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"panneFDR\"/>
                        Panne :
                    </legend>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDRPanne", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDRPanne", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDRPanne", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDRPanne", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDRPanne", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDRPanne", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDRPanne", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDRPanne", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>
            </div>

            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\" >
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"autreAgenceFDR\"/>
                        Autre Agence : 
                    </legend>    
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDRAutrAgence", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFDRAutrAgence", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDRAutrAgence", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFDRAutrAgence", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDRAutrAgence", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFDRAutrAgence", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDRAutrAgence", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFDRAutrAgence", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>
            </div>

            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\">
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"autreFDR\"/>
                        Autres : 
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cloturerFDR", array()), 'label', array("label" => " Cloture  "));
        echo "</div>
";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cloturerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cloturerFDR", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upCloturerFDR", array()), 'label', array("label" => " Modifier après Cloture  "));
        echo "</div>
";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upCloturerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upCloturerFDR", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelFDR", array()), 'label', array("label" => " Annulation  "));
        echo "</div>
";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imprimerFDR", array()), 'label', array("label" => " Impression  "));
        echo "</div>
";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imprimerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imprimerFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rechercherFDR", array()), 'label', array("label" => " Recherche  "));
        echo "</div>
";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rechercherFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rechercherFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editCompteur", array()), 'label', array("label" => " Edition Compteur "));
        echo "</div>
";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editCompteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editCompteur", array()), 'errors');
        echo "</span>
                    </div>    
                </fieldset>
            </div>

        </fieldset>
    </div>

    <div class=\"span6\">
        <fieldset> 
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudFDL\"/>  
                Feuille De Mission : 
            </legend>

            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\"> 
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"clientCmpteFDL\"/>
                        Client En Compte :
                    </legend>  
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClientCompeFDL", array()), 'label', array("label" => " Affichage"));
        echo "</div>
";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClientCompeFDL", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClientCompeFDL", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClientCompeFDL", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelClientCompeFDL", array()), 'label', array("label" => " Annulation "));
        echo "</div>
";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>
            </div>

            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\">
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"clientNnCmpteFDL\"/>
                        Client Non En Compte : 
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClientNnCompeFDL", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClientNnCompeFDL", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClientNnCompeFDL", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClientNnCompeFDL", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelClientNnCompeFDL", array()), 'label', array("label" => " Annulation "));
        echo "</div>
";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cancelClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>
            </div>

            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\">
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"accusRecFDL\"/>
                        Accusé De Reception : 
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocCtm", array()), 'label', array("label" => " Auprès du CTM "));
        echo "</div>
";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocCtm", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocCtm", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocClient", array()), 'label', array("label" => " Auprès du Client "));
        echo "</div>
";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "confRecDocClient", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>
            </div>

            <div class=\"row-fluid\">
                <fieldset>
                    <legend class=\"subfieldset\"> 
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"autreFDL\"/>
                        Autres :
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imprimerFDL", array()), 'label', array("label" => " Impression  "));
        echo "</div>
";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imprimerFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "imprimerFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rechercherFDL", array()), 'label', array("label" => " Recherche  "));
        echo "</div>
";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rechercherFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rechercherFDL", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ttEtatAfficherParFdl", array()), 'label', array("label" => " Afficher par tout état  "));
        echo "</div>
";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ttEtatAfficherParFdl", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ttEtatAfficherParFdl", array()), 'errors');
        echo "</span>
                    </div> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affectationVehicule", array()), 'label', array("label" => " Affectation Véhicule"));
        echo "</div>
";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affectationVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affectationVehicule", array()), 'errors');
        echo "</span>
                    </div> 

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affectationChauffManu", array()), 'label', array("label" => " Affectation Chauffeur"));
        echo "</div>
";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affectationChauffManu", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affectationChauffManu", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upCloturerFDRAffr", array()), 'label', array("label" => "Cloture "));
        echo "</div>
";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cloturerFDRAffr", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cloturerFDRAffr", array()), 'errors');
        echo "</span>
                    </div>
                    
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 290
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upCloturerFDRAffr", array()), 'label', array("label" => "Modifier après Cloture "));
        echo "</div>
";
        // line 291
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upCloturerFDRAffr", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upCloturerFDRAffr", array()), 'errors');
        echo "</span>
                    </div>
                    
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editerPercentAssurParam", array()), 'label', array("label" => "Edition % Assurance"));
        echo "</div>
";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editerPercentAssurParam", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editerPercentAssurParam", array()), 'errors');
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudClient\"/>
                Client :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 314
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClient", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affClient", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 318
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClient", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 319
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crClient", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 322
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClient", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 323
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upClient", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 326
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClient", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 327
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delClient", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudVehicule\"/>
                Vehicule :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 339
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affVehicule", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affVehicule", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crVehicule", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crVehicule", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 347
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upVehicule", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upVehicule", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 351
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delVehicule", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delVehicule", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudChauffeur\"/>
                Chauffeur :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 364
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affChauffeur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 365
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affChauffeur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crChauffeur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 369
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crChauffeur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upChauffeur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upChauffeur", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 376
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delChauffeur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 377
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delChauffeur", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>
</div>

<div class=\"row-fluid\">

    <div class=\"span4 \">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudUtilisateur\"/>
                Utilisateur :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 392
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affUtilisateur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 393
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affUtilisateur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 396
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crUtilisateur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crUtilisateur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 400
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upUtilisateur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 401
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upUtilisateur", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 404
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delUtilisateur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 405
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delUtilisateur", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudDepot\"/>
                Depot :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 417
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affDepot", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 418
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affDepot", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 421
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crDepot", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 422
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crDepot", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 425
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upDepot", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 426
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upDepot", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 429
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delDepot", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 430
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delDepot", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudFiliale\"/>
                Filiale :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 442
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFiliale", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affFiliale", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 446
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFiliale", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 447
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crFiliale", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 450
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFiliale", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 451
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upFiliale", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 454
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFiliale", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 455
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delFiliale", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>
</div>

<div class=\"row-fluid\">
    <div class=\"span4 \">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudIndisponibilite\"/>
                Indisponibilite :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 469
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affIndisponibilite", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 470
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affIndisponibilite", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 473
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crIndisponibilite", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 474
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crIndisponibilite", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 477
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upIndisponibilite", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 478
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upIndisponibilite", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 481
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delIndisponibilite", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 482
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delIndisponibilite", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudSecteur\"/>
                Secteur :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 494
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affSecteur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 495
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affSecteur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 498
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crSecteur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 499
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crSecteur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 502
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upSecteur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 503
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upSecteur", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 506
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delSecteur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 507
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delSecteur", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudTypePrestation\"/>
                Type De Prestation :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 519
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affTypePrestation", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 520
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affTypePrestation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 523
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crTypePrestation", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 524
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crTypePrestation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 527
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upTypePrestation", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 528
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upTypePrestation", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 531
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delTypePrestation", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 532
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delTypePrestation", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>
</div>

<div class=\"row-fluid\">
    <div class=\"span4 \">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudTypeConsommation\"/>
                Type De Consommation :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 546
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affTypeConsommation", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 547
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affTypeConsommation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 550
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crTypeConsommation", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 551
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crTypeConsommation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 554
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upTypeConsommation", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 555
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upTypeConsommation", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 558
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delTypeConsommation", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 559
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delTypeConsommation", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudManutentionnaire\"/>
                Manutentionnaire :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 571
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affManutentionnaire", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 572
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affManutentionnaire", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 575
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crManutentionnaire", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 576
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crManutentionnaire", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 579
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upManutentionnaire", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 580
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upManutentionnaire", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 583
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delManutentionnaire", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 584
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delManutentionnaire", array()), 'errors');
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
        // line 595
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affRole", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 596
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affRole", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 599
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crRole", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 600
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crRole", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 603
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upRole", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 604
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upRole", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 607
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delRole", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 608
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delRole", array()), 'errors');
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
        // line 621
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affVille", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 622
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affVille", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 625
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crVille", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 626
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crVille", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 629
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upVille", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 630
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upVille", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 633
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delVille", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 634
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delVille", array()), 'errors');
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
        // line 646
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affModification", array()), 'label', array("label" => " Affichage Modification "));
        echo "</div>
";
        // line 647
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affModification", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affModification", array()), 'errors');
        echo "</span>
            </div> 

            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 651
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delModification", array()), 'label', array("label" => " Suppression Modification "));
        echo "</div>
";
        // line 652
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delModification", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delModification", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 656
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editerPlageHoraireParam", array()), 'label', array("label" => " Edition Plages Horaires "));
        echo "</div>
";
        // line 657
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editerPlageHoraireParam", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "editerPlageHoraireParam", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 660
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reporting", array()), 'label', array("label" => " Reporting "));
        echo "</div>
";
        // line 661
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reporting", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reporting", array()), 'errors');
        echo "</span>
            </div> 

        </fieldset>
    </div>


    <div class=\"span4 \">
        <fieldset>
            <legend>
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudBonCarburantHuile\"/>
                Bon Carburant:
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 675
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affBonCarburantHuile", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 676
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affBonCarburantHuile", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 679
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crBonCarburantHuile", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 680
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crBonCarburantHuile", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 683
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upBonCarburantHuile", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 684
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upBonCarburantHuile", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 687
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delBonCarburantHuile", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 688
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delBonCarburantHuile", array()), 'errors');
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
        // line 703
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affPeage", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 704
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "affPeage", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 707
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crPeage", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 708
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "crPeage", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 711
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upPeage", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 712
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "upPeage", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 715
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delPeage", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 716
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "delPeage", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>
</div>
<div class=\"row-fluid\">
    <div class=\"span12 center-block\">
";
        // line 723
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
    </div>
            </div>

";
        // line 727
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
<br/>
      ";
        // line 729
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) {
            // line 730
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 731
            echo $this->env->getExtension('routing')->getPath("role");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Role:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1640 => 731,  1637 => 730,  1635 => 729,  1630 => 727,  1623 => 723,  1611 => 716,  1607 => 715,  1599 => 712,  1595 => 711,  1587 => 708,  1583 => 707,  1575 => 704,  1571 => 703,  1551 => 688,  1547 => 687,  1539 => 684,  1535 => 683,  1527 => 680,  1523 => 679,  1515 => 676,  1511 => 675,  1492 => 661,  1488 => 660,  1480 => 657,  1476 => 656,  1467 => 652,  1463 => 651,  1454 => 647,  1450 => 646,  1433 => 634,  1429 => 633,  1421 => 630,  1417 => 629,  1409 => 626,  1405 => 625,  1397 => 622,  1393 => 621,  1375 => 608,  1371 => 607,  1363 => 604,  1359 => 603,  1351 => 600,  1347 => 599,  1339 => 596,  1335 => 595,  1319 => 584,  1315 => 583,  1307 => 580,  1303 => 579,  1295 => 576,  1291 => 575,  1283 => 572,  1279 => 571,  1262 => 559,  1258 => 558,  1250 => 555,  1246 => 554,  1238 => 551,  1234 => 550,  1226 => 547,  1222 => 546,  1203 => 532,  1199 => 531,  1191 => 528,  1187 => 527,  1179 => 524,  1175 => 523,  1167 => 520,  1163 => 519,  1146 => 507,  1142 => 506,  1134 => 503,  1130 => 502,  1122 => 499,  1118 => 498,  1110 => 495,  1106 => 494,  1089 => 482,  1085 => 481,  1077 => 478,  1073 => 477,  1065 => 474,  1061 => 473,  1053 => 470,  1049 => 469,  1030 => 455,  1026 => 454,  1018 => 451,  1014 => 450,  1006 => 447,  1002 => 446,  994 => 443,  990 => 442,  973 => 430,  969 => 429,  961 => 426,  957 => 425,  949 => 422,  945 => 421,  937 => 418,  933 => 417,  916 => 405,  912 => 404,  904 => 401,  900 => 400,  892 => 397,  888 => 396,  880 => 393,  876 => 392,  856 => 377,  852 => 376,  844 => 373,  840 => 372,  832 => 369,  828 => 368,  820 => 365,  816 => 364,  799 => 352,  795 => 351,  787 => 348,  783 => 347,  775 => 344,  771 => 343,  763 => 340,  759 => 339,  742 => 327,  738 => 326,  730 => 323,  726 => 322,  718 => 319,  714 => 318,  706 => 315,  702 => 314,  679 => 296,  675 => 295,  666 => 291,  662 => 290,  653 => 286,  649 => 285,  641 => 282,  637 => 281,  628 => 277,  624 => 276,  616 => 273,  612 => 272,  604 => 269,  600 => 268,  591 => 264,  587 => 263,  570 => 251,  566 => 250,  558 => 247,  554 => 246,  537 => 234,  533 => 233,  525 => 230,  521 => 229,  512 => 225,  508 => 224,  499 => 220,  495 => 219,  486 => 215,  482 => 214,  465 => 202,  461 => 201,  453 => 198,  449 => 197,  440 => 193,  436 => 192,  427 => 188,  423 => 187,  414 => 183,  410 => 182,  383 => 160,  379 => 159,  370 => 155,  366 => 154,  357 => 150,  353 => 149,  344 => 145,  340 => 144,  332 => 141,  328 => 140,  320 => 137,  316 => 136,  299 => 124,  295 => 123,  286 => 119,  282 => 118,  273 => 114,  269 => 113,  260 => 109,  256 => 108,  239 => 96,  235 => 95,  226 => 91,  222 => 90,  213 => 86,  209 => 85,  200 => 81,  196 => 80,  179 => 68,  175 => 67,  166 => 63,  162 => 62,  153 => 58,  149 => 57,  140 => 53,  136 => 52,  112 => 33,  108 => 32,  95 => 24,  91 => 23,  83 => 20,  79 => 19,  68 => 11,  63 => 9,  57 => 5,  54 => 4,  49 => 737,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
