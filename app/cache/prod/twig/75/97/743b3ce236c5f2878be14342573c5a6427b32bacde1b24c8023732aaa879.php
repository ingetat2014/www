<?php

/* FdrAdminBundle:Role:new.html.twig */
class __TwigTemplate_7597743b3ce236c5f2878be14342573c5a6427b32bacde1b24c8023732aaa879 extends Twig_Template
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
        echo "Role|New";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 732
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\"><h1>Ajout d'un role</h1></div>



";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"row-fluid\">
    <span class=\"alert-danger \">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
</div>

<div class=\"row-fluid\">
    <div class=\"span12\">
        <fieldset><!--1-->
            <legend>Formulaire d'ajout : </legend>
            <div class=\"row-fluid\">
                <div class=\"span2 offset3\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomRole", array()), 'label');
        echo "</div>
";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomRole", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span2 offset3\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</div>
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
</div>


<div class=\"row-fluid\">
    <fieldset>
        <legend></legend>
        <div class=\"span2\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crudAdmin", array()), 'label');
        echo "</div>
";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crudAdmin", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crudAdmin", array()), 'errors');
        echo "</span>
    </fieldset>
</div>  

<div class=\"row-fluid\">
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
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDR", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDR", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDR", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDR", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 70
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
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"panneFDR\"/>
                        Panne :
                    </legend>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRPanne", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRPanne", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRPanne", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRPanne", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRPanne", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRPanne", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRPanne", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRPanne", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 98
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
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"autreAgenceFDR\"/>
                        Autre Agence : 
                    </legend>    
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRAutrAgence", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFDRAutrAgence", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRAutrAgence", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFDRAutrAgence", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRAutrAgence", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRAutrAgence", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFDRAutrAgence", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFDRAutrAgence", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 126
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
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"autreFDR\"/>
                        Autres : 
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDR", array()), 'label', array("label" => " Cloture "));
        echo "</div>
";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDR", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDR", array()), 'label', array("label" => " Modifier après Cloture  "));
        echo "</div>
";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDR", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelFDR", array()), 'label', array("label" => " Annulation  "));
        echo "</div>
";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelFDR", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDR", array()), 'label', array("label" => " Impression  "));
        echo "</div>
";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDR", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDR", array()), 'label', array("label" => " Recherche  "));
        echo "</div>
";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDR", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDR", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editCompteur", array()), 'label', array("label" => " Edition Compteur "));
        echo "</div>
";
        // line 160
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientCompeFDL", array()), 'label', array("label" => " Affichage"));
        echo "</div>
";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientCompeFDL", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientCompeFDL", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientCompeFDL", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientCompeFDL", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientCompeFDL", array()), 'label', array("label" => " Annulation "));
        echo "</div>
";
        // line 202
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
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"clientNnCmpteFDL\"/>
                        Client Non En Compte : 
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientNnCompeFDL", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientNnCompeFDL", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientNnCompeFDL", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientNnCompeFDL", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientNnCompeFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClientNnCompeFDL", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancelClientNnCompeFDL", array()), 'label', array("label" => " Annulation "));
        echo "</div>
";
        // line 234
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
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"accusRecFDL\"/>
                        Accusé De Reception : 
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'label', array("label" => " Auprès du CTM "));
        echo "</div>
";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'label', array("label" => " Auprès du Client "));
        echo "</div>
";
        // line 251
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
                        <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"autreFDL\"/>
                        Autres :
                    </legend> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDL", array()), 'label', array("label" => " Impression  "));
        echo "</div>
";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imprimerFDL", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDL", array()), 'label', array("label" => " Recherche  "));
        echo "</div>
";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDL", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rechercherFDL", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ttEtatAfficherParFdl", array()), 'label', array("label" => " Afficher par tout état  "));
        echo "</div>
";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ttEtatAfficherParFdl", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ttEtatAfficherParFdl", array()), 'errors');
        echo "</span>
                    </div> 
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationVehicule", array()), 'label', array("label" => " Affectation Véhicule"));
        echo "</div>
";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationVehicule", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationChauffManu", array()), 'label', array("label" => " Affectation Chauffeur"));
        echo "</div>
";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationChauffManu", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affectationChauffManu", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDRAffr", array()), 'label', array("label" => "Cloture "));
        echo "</div>
";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDRAffr", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cloturerFDRAffr", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDRAffr", array()), 'label', array("label" => "Modifier après Cloture "));
        echo "</div>
";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDRAffr", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upCloturerFDRAffr", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPercentAssurParam", array()), 'label', array("label" => "Edition % Assurance"));
        echo "</div>
";
        // line 293
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudClient\"/>
                Client :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClient", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affClient", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClient", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crClient", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 319
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClient", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 320
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClient", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upClient", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 323
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delClient", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 324
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudVehicule\"/>
                Vehicule :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 336
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVehicule", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 337
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVehicule", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVehicule", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVehicule", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVehicule", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 345
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVehicule", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVehicule", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVehicule", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 349
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudChauffeur\"/>
                Chauffeur :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 361
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affChauffeur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 362
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affChauffeur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 365
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crChauffeur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 366
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crChauffeur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 369
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upChauffeur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 370
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upChauffeur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upChauffeur", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delChauffeur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 374
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudUtilisateur\"/>
                Utilisateur :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 389
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affUtilisateur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 390
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affUtilisateur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 393
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crUtilisateur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 394
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crUtilisateur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upUtilisateur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 398
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upUtilisateur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upUtilisateur", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 401
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delUtilisateur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 402
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudDepot\"/>
                Depot :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 414
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affDepot", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 415
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affDepot", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 418
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crDepot", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 419
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crDepot", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 422
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upDepot", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 423
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upDepot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upDepot", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 426
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delDepot", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 427
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudFiliale\"/>
                Filiale :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 439
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFiliale", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 440
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affFiliale", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFiliale", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 444
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crFiliale", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 447
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFiliale", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 448
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFiliale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upFiliale", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 451
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delFiliale", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 452
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudIndisponibilite\"/>
                Indisponibilite :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 466
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affIndisponibilite", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 467
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affIndisponibilite", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 470
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crIndisponibilite", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 471
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crIndisponibilite", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 474
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upIndisponibilite", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 475
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upIndisponibilite", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upIndisponibilite", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 478
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delIndisponibilite", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 479
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudSecteur\"/>
                Secteur :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 491
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affSecteur", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 492
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affSecteur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 495
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crSecteur", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 496
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crSecteur", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 499
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upSecteur", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 500
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upSecteur", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upSecteur", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 503
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delSecteur", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 504
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudTypePrestation\"/>
                Type De Prestation :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 516
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypePrestation", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 517
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypePrestation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 520
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypePrestation", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 521
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypePrestation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 524
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypePrestation", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 525
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypePrestation", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 528
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypePrestation", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 529
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudTypeConsommation\"/>
                Type De Consommation :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 543
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypeConsommation", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 544
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affTypeConsommation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 547
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypeConsommation", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 548
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crTypeConsommation", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 551
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypeConsommation", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 552
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypeConsommation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upTypeConsommation", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 555
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delTypeConsommation", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 556
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
                <input   title=\"(Dé)selectionner Tout\" type=\"checkbox\" id=\"crudManutentionnaire\"/>
                Manutentionnaire :
            </legend>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 568
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affManutentionnaire", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 569
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affManutentionnaire", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 572
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crManutentionnaire", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 573
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crManutentionnaire", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 576
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upManutentionnaire", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 577
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upManutentionnaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upManutentionnaire", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 580
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delManutentionnaire", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 581
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
        // line 592
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affRole", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 593
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affRole", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 596
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crRole", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 597
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crRole", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 600
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upRole", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 601
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upRole", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upRole", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 604
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delRole", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 605
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
        // line 618
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVille", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 619
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affVille", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 622
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVille", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 623
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crVille", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 626
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVille", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 627
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVille", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upVille", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 630
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delVille", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 631
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
        // line 643
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affModification", array()), 'label', array("label" => " Affichage Modification "));
        echo "</div>
";
        // line 644
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affModification", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affModification", array()), 'errors');
        echo "</span>
            </div> 

            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 648
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delModification", array()), 'label', array("label" => " Suppression Modification "));
        echo "</div>
";
        // line 649
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delModification", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delModification", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 653
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPlageHoraireParam", array()), 'label', array("label" => " Edition Plages Horaires "));
        echo "</div>
";
        // line 654
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPlageHoraireParam", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editerPlageHoraireParam", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 657
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reporting", array()), 'label', array("label" => " Reporting "));
        echo "</div>
";
        // line 658
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
        // line 671
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affBonCarburantHuile", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 672
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affBonCarburantHuile", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 675
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crBonCarburantHuile", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 676
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crBonCarburantHuile", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 679
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upBonCarburantHuile", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 680
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upBonCarburantHuile", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upBonCarburantHuile", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 683
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delBonCarburantHuile", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 684
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
        // line 698
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affPeage", array()), 'label', array("label" => " Affichage "));
        echo "</div>
";
        // line 699
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affPeage", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 702
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crPeage", array()), 'label', array("label" => " Ajout "));
        echo "</div>
";
        // line 703
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crPeage", array()), 'errors');
        echo "</span>
            </div> 
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 706
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upPeage", array()), 'label', array("label" => " Modification "));
        echo "</div>
";
        // line 707
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upPeage", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 710
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delPeage", array()), 'label', array("label" => " Suppression "));
        echo "</div>
";
        // line 711
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delPeage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delPeage", array()), 'errors');
        echo "</span>
            </div> 
        </fieldset>
    </div>
</div>
<div class=\"row-fluid\">
    <div class=\"span12 center-block\">
";
        // line 718
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
    </div>
            </div>

";
        // line 722
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<br/>
";
        // line 724
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) {
            // line 725
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 726
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
        return "FdrAdminBundle:Role:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1635 => 726,  1632 => 725,  1630 => 724,  1625 => 722,  1618 => 718,  1606 => 711,  1602 => 710,  1594 => 707,  1590 => 706,  1582 => 703,  1578 => 702,  1570 => 699,  1566 => 698,  1547 => 684,  1543 => 683,  1535 => 680,  1531 => 679,  1523 => 676,  1519 => 675,  1511 => 672,  1507 => 671,  1489 => 658,  1485 => 657,  1477 => 654,  1473 => 653,  1464 => 649,  1460 => 648,  1451 => 644,  1447 => 643,  1430 => 631,  1426 => 630,  1418 => 627,  1414 => 626,  1406 => 623,  1402 => 622,  1394 => 619,  1390 => 618,  1372 => 605,  1368 => 604,  1360 => 601,  1356 => 600,  1348 => 597,  1344 => 596,  1336 => 593,  1332 => 592,  1316 => 581,  1312 => 580,  1304 => 577,  1300 => 576,  1292 => 573,  1288 => 572,  1280 => 569,  1276 => 568,  1259 => 556,  1255 => 555,  1247 => 552,  1243 => 551,  1235 => 548,  1231 => 547,  1223 => 544,  1219 => 543,  1200 => 529,  1196 => 528,  1188 => 525,  1184 => 524,  1176 => 521,  1172 => 520,  1164 => 517,  1160 => 516,  1143 => 504,  1139 => 503,  1131 => 500,  1127 => 499,  1119 => 496,  1115 => 495,  1107 => 492,  1103 => 491,  1086 => 479,  1082 => 478,  1074 => 475,  1070 => 474,  1062 => 471,  1058 => 470,  1050 => 467,  1046 => 466,  1027 => 452,  1023 => 451,  1015 => 448,  1011 => 447,  1003 => 444,  999 => 443,  991 => 440,  987 => 439,  970 => 427,  966 => 426,  958 => 423,  954 => 422,  946 => 419,  942 => 418,  934 => 415,  930 => 414,  913 => 402,  909 => 401,  901 => 398,  897 => 397,  889 => 394,  885 => 393,  877 => 390,  873 => 389,  853 => 374,  849 => 373,  841 => 370,  837 => 369,  829 => 366,  825 => 365,  817 => 362,  813 => 361,  796 => 349,  792 => 348,  784 => 345,  780 => 344,  772 => 341,  768 => 340,  760 => 337,  756 => 336,  739 => 324,  735 => 323,  727 => 320,  723 => 319,  715 => 316,  711 => 315,  703 => 312,  699 => 311,  676 => 293,  672 => 292,  664 => 289,  660 => 288,  652 => 285,  648 => 284,  640 => 281,  636 => 280,  628 => 277,  624 => 276,  616 => 273,  612 => 272,  604 => 269,  600 => 268,  591 => 264,  587 => 263,  570 => 251,  566 => 250,  558 => 247,  554 => 246,  537 => 234,  533 => 233,  525 => 230,  521 => 229,  512 => 225,  508 => 224,  499 => 220,  495 => 219,  486 => 215,  482 => 214,  465 => 202,  461 => 201,  453 => 198,  449 => 197,  440 => 193,  436 => 192,  427 => 188,  423 => 187,  414 => 183,  410 => 182,  383 => 160,  379 => 159,  371 => 156,  367 => 155,  358 => 151,  354 => 150,  346 => 147,  342 => 146,  334 => 143,  330 => 142,  322 => 139,  318 => 138,  301 => 126,  297 => 125,  288 => 121,  284 => 120,  275 => 116,  271 => 115,  262 => 111,  258 => 110,  241 => 98,  237 => 97,  228 => 93,  224 => 92,  215 => 88,  211 => 87,  202 => 83,  198 => 82,  181 => 70,  177 => 69,  168 => 65,  164 => 64,  155 => 60,  151 => 59,  142 => 55,  138 => 54,  114 => 35,  110 => 34,  95 => 24,  91 => 23,  83 => 20,  79 => 19,  68 => 11,  63 => 9,  57 => 5,  54 => 4,  49 => 732,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
