<?php

/* FdrAdminBundle:FeuilleDeRoute:newfdl.html.twig */
class __TwigTemplate_ea55a0b04e660b5921a19af911cc53ff4f14ebe3fde961f94bb40aa816a41f9a extends Twig_Template
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
        echo "NewFdl|New-Edit";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $context["valider"] = "Enregistrer";
        // line 5
        echo "        ";
        if (($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "etat", array()) === "cloturer")) {
            $context["valider"] = "Modifier";
            // line 6
            echo "        ";
        } elseif (($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "etat", array()) === "annuler")) {
            $context["valider"] = "Feuille Annulée";
            // line 7
            echo "        ";
        } else {
            $context["valider"] = "Enregistrer";
            // line 8
            echo "        ";
        }
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"page-header\">  <h2>
       ";
        // line 11
        if (($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "etat", array()) === "annuler")) {
            echo "Cette Feuille de route est associée à <span class=\"text-danger\"> une feuille d'affrêtement annulée</span>
       ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 12
(isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            echo "Modification de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "etat", array())), "html", null, true);
            echo "] (Affretement code=";
            echo twig_escape_filter($this->env, (isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "html", null, true);
            echo ")
       ";
        } else {
            // line 13
            echo "Ajout de feuille de route (Affretement code=";
            echo twig_escape_filter($this->env, (isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "html", null, true);
            echo ")";
        }
        // line 14
        echo "       ";
        if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDL", array()))) {
            // line 15
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => (isset($context["id_fdl"]) ? $context["id_fdl"] : $this->getContext($context, "id_fdl")))), "html", null, true);
            echo "\">
            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
            echo "\" alt=\"Aperçu\" title=\"Feuille affrêtement : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "etat", array()), "html", null, true);
            echo ",Nombre Manutentions:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "nombreManutentionVoulu", array()), "html", null, true);
            echo ", Cliquer pour plus\"/>
        </a>
       ";
        }
        // line 19
        echo "
    </h2> 
    <input type=\"hidden\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "etat", array()), "html", null, true);
        echo "\" id='etat'/>
</div>  


<div class=\"row\">
    <span class=\"alert-danger \">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
</div>
<div class=\"row\">
    <div class=\"span4\">
        <fieldset>
            <legend>Déroulement de mission </legend>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span3\"><label>En instance</label></div>
                        ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 37
            echo "                        ";
            if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer"))) {
                echo "   
                ";
                // line 38
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fdrInstance", array())) {
                    // line 39
                    echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
                } else {
                    // line 41
                    echo "                    <input type=\"checkbox\" disabled readonly />
                ";
                }
                // line 43
                echo "                    
                <span class=\"cacher\">";
                // line 44
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'widget');
                echo "</span>
                        ";
            } else {
                // line 46
                echo "                <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 48
            echo "                        ";
        } else {
            // line 49
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 51
        echo "
                <span class=\"alert-danger \">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'errors');
        echo "</span>
            </div>
            
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span3\"><label>Debut Mission</label></div>
                        ";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 59
            echo "                        ";
            if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
                echo "  
                <div class=\"span8\">
                    <input type=\"text\" readonly=\"readonly\" 
                           value=\"";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "\"/>
                </div>
                <span class=\"cacher\">";
                // line 64
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'widget');
                echo "</span>
                        ";
            } else {
                // line 66
                echo "                <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 68
            echo "                        ";
        } else {
            // line 69
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 71
        echo "
                <span class=\"alert-danger \">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid ";
        // line 75
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array())) ? ("") : ("cacher"));
        echo "\">
                <div class=\"span1\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span3\"><label>Filiale</label></div>
                        ";
        // line 78
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 79
            echo "                <div class=\"span8\">
                        ";
            // line 80
            if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
                echo " 
                    <input type=\"text\" readonly=\"readonly\" 
                           value=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "filiale", array()), "html", null, true);
                echo "\"/></div>
                <span class=\"cacher\">";
                // line 83
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'widget');
                echo "</span>
                        ";
            } else {
                // line 85
                echo "
                <span class=\"span8\">";
                // line 86
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 88
            echo "                        ";
        } else {
            // line 89
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 91
        echo "                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid ";
        // line 94
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array())) ? ("") : ("cacher"));
        echo "\">
                <div class=\"span1\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span3\"><label>Depôt</label></div>
                        ";
        // line 97
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 98
            echo "                <div class=\"span8\">
                        ";
            // line 99
            if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
                echo " 
                    <input type=\"text\" readonly=\"readonly\" 
                           value=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depot", array()), "html", null, true);
                echo "\"/></div>
                <span class=\"cacher\">";
                // line 102
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'widget');
                echo "</span>
                        ";
            } else {
                // line 104
                echo "                <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 106
            echo "                        ";
        } else {
            // line 107
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 109
        echo "                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span3\"><label>Vehicule</label></div>
                        ";
        // line 115
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 116
            echo "                <div class=\"span8\">
                        ";
            // line 117
            if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()))) {
                echo " 
                    <input type=\"text\" readonly=\"readonly\" 
                           value=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vehicule", array()), "html", null, true);
                echo "\"/></div>
                <span class=\"";
                // line 120
                echo ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()))) ? ("") : ("cacher"));
                echo "\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'widget');
                echo "</span>
                        ";
            } else {
                // line 122
                echo "                <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 124
            echo "                        ";
        } else {
            // line 125
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 127
        echo "                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span3\"><label>Compteur Réel</label></div>
                        ";
        // line 133
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 134
            echo "                <div class=\"span8\">
                        ";
            // line 135
            if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editCompteur", array()))) {
                echo " 
                    <input type=\"text\" readonly=\"readonly\" 
                           value=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compteurReel", array()), "html", null, true);
                echo "\"/></div>
                <span class=\"cacher\">";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'widget');
                echo "</span>
                        ";
            } else {
                // line 140
                echo "                <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 142
            echo "                        ";
        } else {
            // line 143
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 145
        echo "                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset> 
            <legend>Chauffeur(s)/Manut. </legend>
            <div class=\"row-fluid\">
                <div class=\"span10 text-center\">Nombre des manutentions du client : <span class=\"text-info text-primary\"><strong id=\"nombreManutentionVoulu\">";
        // line 155
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "nombreManutentionVoulu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "nombreManutentionVoulu", array()), 0)) : (0)), "html", null, true);
        echo "</strong></span></div>

            </div>

            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span11\"><label>Les Chauffeurs/Manutentionnaires: </label></div>
                        ";
        // line 162
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 163
            echo "                <div class=\"span8\">
                        ";
            // line 164
            if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationChauffManu", array()))) {
                // line 165
                echo "                    <ul>
                ";
                // line 166
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "manutentions", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
                    // line 167
                    echo "
                    ";
                    // line 168
                    $context["qui"] = (($this->getAttribute($context["man"], "chauffeur", array())) ? ((("[Chauff.: " . $this->getAttribute($context["man"], "chauffeur", array())) . "]")) : ((($this->getAttribute($context["man"], "manutentionnaire", array())) ? ((("[Manu.: " . $this->getAttribute($context["man"], "manutentionnaire", array())) . "]")) : (""))));
                    // line 169
                    echo "                    ";
                    $context["nombre"] = ((((isset($context["qui"]) ? $context["qui"] : $this->getContext($context, "qui")) != "")) ? ((($this->getAttribute($context["man"], "nombreManutentions", array())) ? ((("[" . $this->getAttribute($context["man"], "nombreManutentions", array())) . "]")) : ("[Sans manutention]"))) : (""));
                    // line 170
                    echo "                  ";
                    if ( !((isset($context["qui"]) ? $context["qui"] : $this->getContext($context, "qui")) === "")) {
                        echo "  
                        <li><input style=\"white-space:normal;text-overflow: string;\" type=\"text\" value=\"";
                        // line 171
                        echo twig_escape_filter($this->env, ((isset($context["qui"]) ? $context["qui"] : $this->getContext($context, "qui")) . (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre"))), "html", null, true);
                        echo "\" size=\"35\" readonly/></li>
                    ";
                    }
                    // line 173
                    echo "                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 174
                    echo "                        <li><input type=\"text\" value=\"Aucun\" size=\"35\" readonly/></li>                     
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                    </ul>
                </div>
                <span class=\"span8 cacher\">";
                // line 178
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'widget', array("attr" => array("class" => "cacher")));
                echo "</span>
                        ";
            } else {
                // line 180
                echo "                <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 182
            echo "                        ";
        } else {
            // line 183
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 185
        echo "                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'errors');
        echo "</span>
            </div>

        </fieldset>
    </div>

    <div class=\"span3\">
        <fieldset>
            <legend> Manutention Externe(s) </legend>

            <div class=\"row-fluid\">
                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'label', array("label" => " "));
        echo "</div>
                    <div class=\"span3\"><label>Man. Ext1</label></div>
                        ";
        // line 199
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 200
            echo "
                        ";
            // line 201
            if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
                echo " 
                    <div class=\"span8\">
                        <input type=\"text\" readonly=\"readonly\" 
                               value=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne1", array()), "html", null, true);
                echo "\"/>
                    </div>
                    <div class=\"span8 cacher\">";
                // line 206
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'widget', array("attr" => array("class" => "cacher")));
                echo "</div>
                        ";
            } else {
                // line 208
                echo "                    <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 210
            echo "                        ";
        } else {
            // line 211
            echo "                    <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 213
        echo "                    <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'label', array("label" => " "));
        echo "</div>
                    <div class=\"span3\"><label>CIN Ext1</label></div>
                        ";
        // line 218
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 219
            echo "                    <div class=\"span8\">
                        ";
            // line 220
            if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
                echo " 
                        <input type=\"text\" readonly=\"readonly\" 
                               value=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne1", array()), "html", null, true);
                echo "\"/></div>
                    <span class=\"span8 cacher\">";
                // line 223
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'widget', array("attr" => array("class" => "cacher")));
                echo "</span>
                        ";
            } else {
                // line 225
                echo "                    <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 227
            echo "                        ";
        } else {
            // line 228
            echo "                    <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 230
        echo "                    <span class=\"alert-danger\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'errors');
        echo "</span>
                </div>
            </div>
            <br/>
            <div class=\"row-flluid\">
                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'label', array("label" => " "));
        echo "</div>
                    <div class=\"span3\"><label>Man. Ext2</label></div>
                        ";
        // line 238
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 239
            echo "
                        ";
            // line 240
            if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
                echo " 
                    <div class=\"span8\">
                        <input type=\"text\" readonly=\"readonly\" 
                               value=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne2", array()), "html", null, true);
                echo "\"/></div>
                    <span class=\"span8 cacher\">";
                // line 244
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'widget', array("attr" => array("class" => "cacher")));
                echo "</span>
                        ";
            } else {
                // line 246
                echo "                    <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 248
            echo "                        ";
        } else {
            // line 249
            echo "                    <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 251
        echo "                    <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span1\">";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'label', array("label" => " "));
        echo "</div>
                    <div class=\"span3\"><label>CIN Ext2</label></div>
                        ";
        // line 256
        if (($this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : null), "feuilleDeRoute", array(), "any", false, true), "id", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "feuilleDeRoute", array()), "id", array())))) {
            // line 257
            echo "                    <div class=\"span8\">
                        ";
            // line 258
            if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
                echo " 
                        <input type=\"text\" readonly=\"readonly\" 
                               value=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne2", array()), "html", null, true);
                echo "\"/></div>
                    <span class=\"span8 cacher\">";
                // line 261
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'widget', array("attr" => array("class" => "cacher")));
                echo "</span>
                        ";
            } else {
                // line 263
                echo "                    <span class=\"span8\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'widget');
                echo "</span>
                        ";
            }
            // line 265
            echo "                        ";
        } else {
            // line 266
            echo "                    <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 268
        echo "                    <span class=\"alert-danger\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'errors');
        echo "</span>
                </div>
            </div>
        </fieldset>
    </div>

    <div class=\"row-fluid\">
        ";
        // line 275
        if ( !($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "etat", array()) === "annuler")) {
            echo "<div class=\"span8 offset5\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => (isset($context["valider"]) ? $context["valider"] : $this->getContext($context, "valider"))));
            echo "</div>";
        }
        // line 276
        echo "    </div>
</div>

<div class=\"cacher\">";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest', array("attr" => array("class" => "cacher")));
        echo "</div>
    ";
        // line 280
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\">
\$('#fdr_adminbundle_feuillederoute_secteurs, label[for=\"fdr_adminbundle_feuillederoute_secteurs\"]').hide();
\$('#fdr_adminbundle_feuillederoute_clients').hide();
    jQuery(document).ready(function() {
        var \$container = \$('div#fdr_adminbundle_feuillederoute_manutentions');
        var \$addLink = \$('<br/><a href=\"#\" id=\"add_manutention\" class=\"btn btn-default\">Ajouter Manu.</a>');
        \$container.append(\$addLink);
        \$container.data('index', \$container.children('div').length);
        boucler('chauffeur');
        boucler('manutentionnaire');
        \$addLink.click(function(e) {
            var tot = 0;
            var global = parseInt(\"0\" + \$(\"#nombreManutentionVoulu\").text());
            for (i = 0; i < \$(\"*[id\$='_nombreManutentions']\").length; i++)
            {
                tot += parseInt(\"0\" + \$(\"*[id\$='_nombreManutentions']\").get(i).value);
            }
            if (tot <= global) {
                addManutention(\$container);
                \$container.data('index', \$container.data('index') + 1);
                if (\$container.children('div').length >= 3)
                {
                    \$('#add_manutention').hide(200);
                    \$('#add_manutention').disabled = true;
                }
            }
            else {
                alert('Le total des manutentions (' + tot + ') est > au nombre voulu (' + global + '),on va reinitialiser ces champs');
                \$(\"*[id\$='_nombreManutentions']\").val(0);
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'red');
                \$(\"#nombreManutentionVoulu\").css('border-color', 'red');
            }
            e.preventDefault();
            return false;
        });
        if (\$container.data('index') === 0) {
            addManutention(\$container);
            \$container.data('index', \$container.data('index') + 1);
        }
        else {
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));

            });
        }
        function addManutention(\$container) {

            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Manutention N°' + (\$container.data('index') + 1))
                    .replace(/__name__/g, (\$container.data('index'))));
            addDeleteLink(\$prototype);
            \$container.append(\$prototype);
            visibilte(\$container.data('index'), false);

        }
        function addDeleteLink(\$prototype) {
            \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger btn-sm\">Supprimer</a>');
            \$prototype.append(\$deleteLink);
            \$deleteLink.click(function(e) {
                if (\$container.children('div').length <= 5 && \$container.children('div').length > 1)
                {
                    \$prototype.remove();
                    \$('#add_manutention').show(200);
                    \$('#add_manutention').disabled = false;
                }
                e.preventDefault();
                return false;
            });
        }
    });


    function boucler(qui)
    {
        for (i = 0; i < \$(\"select[id\$='_\" + qui + \"']\").length; i++)
        {
            if (\$(\"select[id\$='_\" + qui + \"'] option:selected\").get(i).value)
            {
                selectionnerManOuChauff(\$(\"select[id\$='_\" + qui + \"'] option:selected\").get(i).parentNode.getAttribute('id'), qui);
            }
        }
    }

    function selectionnerManOuChauff(id, qui)
    {
        var res = id.split(\"_\");
        var manlst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_manutentionnaire\";
        var chaufflst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_chauffeur\";
        var manOuChauff = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_manOuChauff option[value='\" + qui + \"']\";
        var nbreManu = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_nombreManutentions\";
        var ayantMan = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_ayantManutentions\";
        \$(manOuChauff).prop('selected', true);
        if (qui === 'chauffeur')
        {
            \$(manlst).hide();
            \$(manlst).prop('required', false);
            \$(chaufflst).show();
            \$(chaufflst).prop('required', true);
        }
        else
        {
            \$(chaufflst).hide();
            \$(chaufflst).prop('required', false);
            \$(manlst).show();
            \$(manlst).prop('required', true);

        }
        \$(ayantMan).attr('checked', true);
    }

    function visibilte(id, etat)
    {
        var manlst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + id + \"_manutentionnaire\";
        var chaufflst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + id + \"_chauffeur\";
        var nbreManu = \"#fdr_adminbundle_feuillederoute_manutentions_\" + id + \"_nombreManutentions\";
        if (etat === false)
        {
            \$(manlst).hide();
            \$(chaufflst).hide();
            \$(nbreManu).hide();
        }
        else
        {
            \$(manlst).show();
            \$(chaufflst).show();
            \$(nbreManu).show();
        }
    }
    function verifMan() {
        for (i = 0; i < \$(\"*[id\$='_chauffeur']\").length; i++)
        {
            for (j = i + 1; j < \$(\"*[id\$='_chauffeur']\").length; j++)
            {
                if (\$(\"*[id\$='_chauffeur']\").get(i).value === \$(\"*[id\$='_chauffeur']\").get(j).value
                        && \$(\"*[id\$='_chauffeur']\").get(i).value !== \"\"
                        && \$(\"*[id\$='_manOuChauff']\").get(i).value === \$(\"*[id\$='_manOuChauff']\").get(j).value)
                {
                    alert(\"Un seul/unique chauffeur pour chaque choix\");
                    return false;
                }
            }
        }
        for (i = 0; i < \$(\"*[id\$='_manutentionnaire']\").length; i++)
        {
            for (j = i + 1; j < \$(\"*[id\$='_manutentionnaire']\").length; j++)
            {
                if (\$(\"*[id\$='_manutentionnaire']\").get(i).value === \$(\"*[id\$='_manutentionnaire']\").get(j).value
                        && \$(\"*[id\$='_manutentionnaire']\").get(i).value !== \"\"
                        && \$(\"*[id\$='_manOuChauff']\").get(i).value === \$(\"*[id\$='_manOuChauff']\").get(j).value)
                {
                    alert(\"Un seul/unique manutentionnaire pour chaque choix\");
                    return false;
                }
            }
        }
        var global = parseInt(\"0\" + \$(\"#nombreManutentionVoulu\").text());
        var tot = 0;
        for (i = 0; i < \$(\"*[id\$='_nombreManutentions']\").length; i++)
        {
            \$(\"*[id\$='_nombreManutentions']\").get(i).value=parseInt(\"0\" + \$(\"*[id\$='_nombreManutentions']\").get(i).value);
            tot += parseInt(\"0\" + \$(\"*[id\$='_nombreManutentions']\").get(i).value);
        }
        if (tot > global) {
            alert(\"La répartition des manutentions n'est pas correcte(Le total des manutentions doit être <= au nombre voulu des manu.,on va reinitialiser ces champs )\");
            \$(\"*[id\$='_nombreManutentions']\").val(0);
            \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'red');
            \$(\"#nombreManutentionVoulu\").css('border-color', 'red');
            return false;
        }
        else
        {
            if (tot === global) {
                \$(\"*[id='fdr_adminbundle_feuillederoute_nomManExterne1']\").val(\"\");
                \$(\"*[id='fdr_adminbundle_feuillederoute_nomManExterne2']\").val(\"\");
                \$(\"*[id='fdr_adminbundle_feuillederoute_cinManExterne1']\").val(\"\");
                \$(\"*[id='fdr_adminbundle_feuillederoute_cinManExterne2']\").val(\"\");
            }
            if (\$(\"*[id\$='_nombreManutentions']\").css('border-color') === 'rgb(255,0,0)')
            {
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'green');
                \$(\"#nombreManutentionVoulu\").css('border-color', 'green');
            }
            if(\$(\"*[id\$='_manOuChauff'] option:selected[value='chauffeur']\").length===0 && \$(\"*[id\$='_manOuChauff'] option:selected[value='']\").length===0)
                {
                    alert(\"Un chauffeur au minimum doit etre selectionne\");
                    return false;
                }
            return true;
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:newfdl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 280,  741 => 279,  736 => 276,  730 => 275,  719 => 268,  713 => 266,  710 => 265,  704 => 263,  699 => 261,  695 => 260,  690 => 258,  687 => 257,  685 => 256,  680 => 254,  673 => 251,  667 => 249,  664 => 248,  658 => 246,  653 => 244,  649 => 243,  643 => 240,  640 => 239,  638 => 238,  633 => 236,  623 => 230,  617 => 228,  614 => 227,  608 => 225,  603 => 223,  599 => 222,  594 => 220,  591 => 219,  589 => 218,  584 => 216,  577 => 213,  571 => 211,  568 => 210,  562 => 208,  557 => 206,  552 => 204,  546 => 201,  543 => 200,  541 => 199,  536 => 197,  520 => 185,  514 => 183,  511 => 182,  505 => 180,  500 => 178,  496 => 176,  489 => 174,  484 => 173,  479 => 171,  474 => 170,  471 => 169,  469 => 168,  466 => 167,  461 => 166,  458 => 165,  456 => 164,  453 => 163,  451 => 162,  446 => 160,  438 => 155,  424 => 145,  418 => 143,  415 => 142,  409 => 140,  404 => 138,  400 => 137,  395 => 135,  392 => 134,  390 => 133,  385 => 131,  377 => 127,  371 => 125,  368 => 124,  362 => 122,  355 => 120,  351 => 119,  346 => 117,  343 => 116,  341 => 115,  336 => 113,  328 => 109,  322 => 107,  319 => 106,  313 => 104,  308 => 102,  304 => 101,  299 => 99,  296 => 98,  294 => 97,  289 => 95,  285 => 94,  278 => 91,  272 => 89,  269 => 88,  264 => 86,  261 => 85,  256 => 83,  252 => 82,  247 => 80,  244 => 79,  242 => 78,  237 => 76,  233 => 75,  227 => 72,  224 => 71,  218 => 69,  215 => 68,  209 => 66,  204 => 64,  199 => 62,  192 => 59,  190 => 58,  185 => 56,  178 => 52,  175 => 51,  169 => 49,  166 => 48,  160 => 46,  155 => 44,  152 => 43,  148 => 41,  144 => 39,  142 => 38,  137 => 37,  135 => 36,  130 => 34,  119 => 26,  111 => 21,  107 => 19,  97 => 16,  92 => 15,  89 => 14,  84 => 13,  73 => 12,  69 => 11,  64 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
