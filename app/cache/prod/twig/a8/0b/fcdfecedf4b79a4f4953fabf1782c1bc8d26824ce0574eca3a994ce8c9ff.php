<?php

/* FdrAdminBundle:MissionAffretement:new.html.twig */
class __TwigTemplate_a80bfcdfecedf4b79a4f4953fabf1782c1bc8d26824ce0574eca3a994ce8c9ff extends Twig_Template
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
        echo "Feuille d'Affretement|New";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 280
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\">
    <h2> Ajout d'une feuille D'Affretement 
        ";
        // line 7
        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientNnCompeFDL", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientCompeFDL", array()))) {
            // line 8
            echo "        <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "pour des clients non en compte"), "html", null, true);
            echo "</span>
        ";
        } elseif (( !$this->getAttribute(        // line 9
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientNnCompeFDL", array()) && $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientCompeFDL", array()))) {
            // line 10
            echo "        <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "pour des clients en compte"), "html", null, true);
            echo "</span>
";
        }
        // line 12
        echo "    </h2>
</div>
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"span12 cacher\">
    <div class=\"row-fluid\">
        <div class=\"span3\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGeneree", array()), 'label', array("label" => "Date ouverture :"));
        echo "</div>
        <div class=\"span3\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGeneree", array()), 'widget');
        echo "</div>
    </div>
</div>
<div class=\"row\">
    <div class=\"span4\">
        <fieldset>
            <legend>Ramassage : </legend>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateramassage", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateramassage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateramassage", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuramassage", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuramassage", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuramassage", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicule", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicule", array()), 'widget');
        echo "</div>
                <span class=\"alert-danger \">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeVehicule", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionVoulu", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionVoulu", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionVoulu", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>
    </div>

    <div  class=\"span4\">
        <fieldset> 
            <legend>Livraison : </legend>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datelivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datelivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datelivraison", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieulivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieulivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieulivraison", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naturemarchandise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naturemarchandise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "naturemarchandise", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrecolis", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrecolis", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrecolis", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bonlivraison", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bonlivraison", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bonlivraison", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numexpedition", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 79
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
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecc", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecc", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ecc", array()), 'label', array("label" => "ECC"));
        echo "</div>
            <div class=\"span2\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ect", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ect", array()), 'errors');
        echo "</span>  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ect", array()), 'label', array("label" => "ECT"));
        echo "</div>
            <div class=\"span2\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ebl", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ebl", array()), 'errors');
        echo "</span> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ebl", array()), 'label', array("label" => "EBL"));
        echo "</div>
            <div class=\"span2\">";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'errors');
        echo "</span> ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espece", array()), 'label', array("label" => "ESPECE"));
        echo "</div>
            <div class=\"span2\">";
        // line 92
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
                <span class=\"span1\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'label', array("label" => " "));
        echo "</span>
                <span class=\"\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget');
        echo "</span>
                <span class=\"\">";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'errors', array("attr" => array("class" => "span12 alert-danger ")));
        echo "</span>
";
        // line 106
        if ((array_key_exists("role", $context) &&  !(null === (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))))) {
            // line 107
            echo "   ";
            $context["varr"] = 0;
            // line 108
            echo "   ";
            if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientNnCompeFDL", array()) && $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientCompeFDL", array()))) {
                $context["varr"] = 2;
                // line 109
                echo "   ";
            } elseif ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientCompeFDL", array())) {
                $context["varr"] = 1;
                // line 110
                echo "   ";
            }
            // line 111
            echo "                <span class=\"span2\">
                <a id=\"actualiser_client_nn_compte\"  title=\"Actualiser\" onclick=\"raffClientsAffr(";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["varr"]) ? $context["varr"] : $this->getContext($context, "varr")), "html", null, true);
            echo ");\" style=\"cursor: pointer;\">
                    <img src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/actualiser.png"), "html", null, true);
            echo "\" alt=\"actualiser\"/>
                </a>
";
            // line 115
            if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientNnCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientCompeFDL", array()))) {
                // line 116
                echo "                    <a id=\"add_client_nn_compte\" title=\"Ajouter\" href=\"";
                echo $this->env->getExtension('routing')->getPath("client_new");
                echo "\" target=\"_blank\">
                        <img src=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/plus.png"), "html", null, true);
                echo "\" alt=\"Ajouter\"  />
                    </a>
                </span>
";
            }
        }
        // line 122
        echo "            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDestinataire", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDestinataire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDestinataire", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telresponsable", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telresponsable", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telresponsable", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset> 
            <legend>Facture client : </legend>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantfacture", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantfacture", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantfacture", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motifremise", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motifremise", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motifremise", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\"></div>
";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantregle", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantregle", array()), 'errors');
        echo "</span>
";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montantregle", array()), 'label', array("label" => "Regle"));
        echo "</div>
    </div>

</fieldset>


<div class=\"span3\">
    <fieldset> 
        <legend>Asssurance/Banque : </legend>
        <div class=\"row-fluid\">
            <div class=\"span1\">";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valdeclassurance", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valdeclassurance", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valdeclassurance", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"row-fluid\">
            <div class=\"span1\">";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombnq", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombnq", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombnq", array()), 'errors');
        echo "</span>
        </div>

        <div class=\"row-fluid\">
            <div class=\"span1\">";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcheque", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcheque", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numcheque", array()), 'errors');
        echo "</span>
        </div>

    </fieldset>
</div>
</div>
";
        // line 191
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 192
            echo "<div class=\"row-flluid\">
    <div class=\"span6\">
        <span class=\"span1\">";
            // line 194
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'widget');
            echo "</span>
";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'label', array("label" => " Confirmation de reception des documents de la part du client"));
            echo "
        <span class=\"alert-danger \">";
            // line 196
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'errors');
            echo "</span>
    </div>

    <div class=\"span6\">
        <span class=\"span1\"> ";
            // line 200
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'widget');
            echo "</span>
";
            // line 201
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'label', array("label" => " Confirmation de reception des documents de la part du CTM"));
            echo "
        <span class=\"alert-danger \">";
            // line 202
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'errors');
            echo "</span>
    </div>

</div>
";
        } else {
            // line 207
            echo "<div class=\"cacher\">
    <div class=\"row-flluid\">
        <div class=\"span6\">
            <span class=\"span1\">";
            // line 210
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'widget');
            echo "</span>
";
            // line 211
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'label', array("label" => " Confirmation de reception des documents de la part du client"));
            echo "
            <span class=\"alert-danger \">";
            // line 212
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocClient", array()), 'errors');
            echo "</span>
        </div>

        <div class=\"span6\">
            <span class=\"span1\"> ";
            // line 216
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'widget');
            echo "</span>
";
            // line 217
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'label', array("label" => " Confirmation de reception des documents de la part du CTM"));
            echo "
            <span class=\"alert-danger \">";
            // line 218
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "confRecDocCtm", array()), 'errors');
            echo "</span>
        </div>

    </div>
</div>
";
        }
        // line 224
        echo "<div class=\"row-fluid\">
    <div class=\"span12 center-block\">
";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
";
        // line 229
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<div class=\"row-fluid\">
    <a href=\"";
        // line 231
        echo $this->env->getExtension('routing')->getPath("missionaffretement");
        echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>

<div id=\"info_add_client_nn_compte\" title=\"Rappel\" style=\"display: none\">
    Après le clic sur Nouveau ,vous serez redirigé vers une autre page;<br/>
    Après avoir ajouté le client,
    veuillez ne pas oublier de raffraichir cette page coutrante en cliquant sur l'icone
    <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/actualiser.png"), "html", null, true);
        echo "\" alt=\"actualiser\" title=\"Actualiser\" />
    <br />
    A bientot.
    <img src=\"";
        // line 243
        echo "\" alt=\"CTM\" title=\"CTM ME\" />
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

    public function getTemplateName()
    {
        return "FdrAdminBundle:MissionAffretement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 243,  601 => 240,  589 => 231,  584 => 229,  578 => 226,  574 => 224,  565 => 218,  561 => 217,  557 => 216,  550 => 212,  546 => 211,  542 => 210,  537 => 207,  529 => 202,  525 => 201,  521 => 200,  514 => 196,  510 => 195,  506 => 194,  502 => 192,  500 => 191,  489 => 185,  485 => 184,  476 => 180,  472 => 179,  463 => 175,  459 => 174,  446 => 164,  440 => 163,  430 => 158,  426 => 157,  417 => 153,  413 => 152,  404 => 148,  400 => 147,  384 => 136,  380 => 135,  371 => 131,  367 => 130,  358 => 126,  354 => 125,  349 => 122,  341 => 117,  336 => 116,  334 => 115,  329 => 113,  325 => 112,  322 => 111,  319 => 110,  315 => 109,  311 => 108,  308 => 107,  306 => 106,  302 => 105,  298 => 104,  294 => 103,  276 => 92,  268 => 91,  260 => 90,  252 => 89,  244 => 88,  230 => 79,  226 => 78,  217 => 74,  213 => 73,  204 => 69,  200 => 68,  191 => 64,  187 => 63,  178 => 59,  174 => 58,  165 => 54,  161 => 53,  145 => 42,  141 => 41,  134 => 37,  130 => 36,  126 => 35,  118 => 32,  114 => 31,  105 => 27,  101 => 26,  90 => 18,  86 => 17,  80 => 14,  76 => 12,  70 => 10,  68 => 9,  63 => 8,  61 => 7,  57 => 5,  54 => 4,  49 => 280,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
