<?php

/* FdrAdminBundle:FeuilleDeRoute:show.html.twig */
class __TwigTemplate_a3ed463e177ab5f341bdeabb374910597622a5e8c7867330dbc48a231c76a646 extends Twig_Template
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
        echo "Feuille de route|Show";
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
        echo "<div class=\"page-header\">  <h2> Affichage de la feuille de route ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo "</h2> </div>  
<div class=\"row-fluid\">
    <div class=\"span12\">
        <div class=\"span4\">
        <div class=\"span3\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGeneree", array()), 'label', array("label" => "Date d'ouverture:"));
        echo "</div>
            <div class=\"span9\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateGeneree", array()), 'widget');
        echo "</div>
        </div>
        <div class=\"span3\">
        <div class=\"span6\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label', array("label" => "Propriétaire:"));
        echo "</div>
            <div class=\"span6\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget');
        echo "</div>
        </div>
        <div class=\"span5\">
    ";
        // line 17
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDR", array())) {
            // line 18
            echo "     ";
            if (((( !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fdrInstance", array()) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fdrInstance", array()) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer"))) &&  !($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "annuler")) &&  !($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "orpheline"))) {
                // line 19
                echo "    <div class=\"span3\">
";
                // line 20
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["save_form"]) ? $context["save_form"] : $this->getContext($context, "save_form")), 'form_start', array("attr" => array("id" => "save")));
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["save_form"]) ? $context["save_form"] : $this->getContext($context, "save_form")), 'form');
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["save_form"]) ? $context["save_form"] : $this->getContext($context, "save_form")), 'form_end');
                echo "
    </div>
    <div class=\"span3\" >
";
                // line 23
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["apercu_form"]) ? $context["apercu_form"] : $this->getContext($context, "apercu_form")), 'form_start', array("attr" => array("target" => "_blank")));
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["apercu_form"]) ? $context["apercu_form"] : $this->getContext($context, "apercu_form")), 'form');
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["apercu_form"]) ? $context["apercu_form"] : $this->getContext($context, "apercu_form")), 'form_end');
                echo "
    </div>
            ";
            } else {
                // line 25
                echo "<div class=\"span6\" ></div>
     ";
            }
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upCloturerFDR", array()))) {
            // line 29
            echo "            ";
            if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer") || (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "ouverte") &&  !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fdrInstance", array())))) {
                // line 30
                echo "    <div class=\"span3 offset1\">
        ";
                // line 31
                if ( !($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "annuler")) {
                    // line 32
                    echo "           ";
                    if (( !($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer") && $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array()))) {
                        // line 33
                        echo "            ";
                        $context["cloturer"] = "Clôturer";
                        // line 34
                        echo "            <a target=\"_blank\"  href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_updatecloture", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                        echo "\">
                <button class=\"btn btn-default\" title=\"";
                        // line 35
                        echo twig_escape_filter($this->env, (isset($context["cloturer"]) ? $context["cloturer"] : $this->getContext($context, "cloturer")), "html", null, true);
                        echo "\" type=\"submit\">
                ";
                        // line 36
                        echo twig_escape_filter($this->env, (isset($context["cloturer"]) ? $context["cloturer"] : $this->getContext($context, "cloturer")), "html", null, true);
                        echo "
                </button>
            </a> 
            ";
                    } elseif ((($this->getAttribute(                    // line 39
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer") && $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upCloturerFDR", array()))) {
                        // line 40
                        echo "            ";
                        $context["cloturer"] = "Modifier la clôture";
                        echo "           
            <a target=\"_blank\"  href=\"";
                        // line 41
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_updatecloture", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                        echo "\">
                <button class=\"btn btn-default\" title=\"";
                        // line 42
                        echo twig_escape_filter($this->env, (isset($context["cloturer"]) ? $context["cloturer"] : $this->getContext($context, "cloturer")), "html", null, true);
                        echo "\" type=\"submit\">
                ";
                        // line 43
                        echo twig_escape_filter($this->env, (isset($context["cloturer"]) ? $context["cloturer"] : $this->getContext($context, "cloturer")), "html", null, true);
                        echo "
                </button>
            </a> 
           ";
                    }
                    // line 47
                    echo "        
        ";
                }
                // line 49
                echo "    </div>
            ";
            }
            // line 51
            echo "    ";
        }
        // line 52
        echo "        </div>
</div>
</div>
<div class=\"desactiver-champs\">
";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"span4\">
        <fieldset>
            <legend>Déroulement de mission  </legend>
            <div class=\"row-fluid\">
                <div class=\"span3\"> <label for=\"etat\">Etat</label></div>
                <input type=\"text\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fdrInstance", array())) ? (" (en instance)") : (""));
        echo "\" size=\"25\"/> 
            </div>
            <div class=\"row-fluid\">
                <div class=\"span3\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'label', array("label" => " Date début de mission"));
        echo "</div>
";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'widget');
        echo "
            </div>
";
        // line 68
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 69
            echo "            <div class=\"row-fluid\">
                <div class=\"span3\">";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFinMission", array()), 'label', array("label" => " Date Fin de mission"));
            echo "</div>
";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFinMission", array()), 'widget');
            echo "
            </div>
";
        }
        // line 74
        echo "            <div class=\"row-fluid\">
                <div class=\"span3\">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'label', array("label" => "Filiale "));
        echo "</div>
";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'widget');
        echo "
            </div>

            <div class=\"row-fluid\">
                <div class=\"span3\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'label', array("label" => " Dépôt"));
        echo "</div>
";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'widget');
        echo "
            </div>

            <div class=\"row-fluid\">
                <div class=\"span3\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'label', array("label" => "Véhicule "));
        echo "</div>
                <span class=\"\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'widget');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span3\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'label', array("label" => "Compteur réel "));
        echo "</div>
";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'widget');
        echo "
            </div>
            ";
        // line 92
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 93
            echo "            <div class=\"row-fluid\">
                <div class=\"span3\">";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurFinal", array()), 'label', array("label" => "Compteur final "));
            echo "</div>
                ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurFinal", array()), 'widget');
            echo "
            </div>
            <div class=\"row-fluid\">
                <div class=\"span3\">";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateClotureMission", array()), 'label', array("label" => "Date de cloture "));
            echo "</div>
                ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateClotureMission", array()), 'widget');
            echo "
            </div>
            ";
        }
        // line 102
        echo "        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset> 
            <legend>Prestation </legend>

            <div class=\"row-fluid\">
                <div class=\"span4\">";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typePrestation", array()), 'label', array("label" => " Prestation"));
        echo "</div>
";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typePrestation", array()), 'widget');
        echo "
                ";
        // line 112
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 113
            echo "                <br/>
                Code : ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "html", null, true);
            echo "
                ";
            // line 115
            if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDL", array()))) {
                // line 116
                echo "                <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "id", array()))), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" alt=\"Aperçu\" title=\"Feuille affrêtement : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionaffretement", array()), "etat", array()), "html", null, true);
                echo ",Nombre Manutentions:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionaffretement", array()), "nombreManutentionVoulu", array()), "html", null, true);
                echo ", Cliquer pour plus\"/>
                </a>
                ";
            }
            // line 120
            echo "                ";
        }
        // line 121
        echo "            </div>

            ";
        // line 123
        if ( !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 124
            echo "            <div class=\"row-fluid\">
                <div class=\"span4\">
                    <label for=\"secteurs\">Secteurs :</label>
                </div>
            </div>  
            
            <div class=\"row-fluid\">
                <div class=\"span8\">
       ";
            // line 132
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secteurs", array()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["secteur"]) {
                echo "        
                       -<input type=\"text\" value=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["secteur"], "libelle", array()), "html", null, true);
                echo "\" size=\"25\"/> ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " <br/>";
                }
                // line 134
                echo "                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 135
                echo "                       -<input type=\"text\" value=\"Aucun\" size=\"25\"/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "   
                </div>  

            </div>
            ";
        }
        // line 141
        echo "            <div class=\"row-fluid\">
                <div class=\"span4\">
                    <label for=\"clients\">Clients :</label>
                </div>
            </div>
            <div class=\"row-fluid\">
                    ";
        // line 147
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array())) {
            // line 148
            echo "                    - Client Exp. : <strong><font style=\"color: ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "client", array()), "encompte", array())) {
                echo "green ";
            } else {
                echo "black ";
            }
            echo "\" >";
            echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "client", array()), "*/"), "html", null, true);
            echo "</font></strong>
                    <br/>
                    - Client Dest. : <strong><font style=\"color:black\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "missionAffretement", array()), "clientDestinataire", array()), "html", null, true);
            echo "</font></strong>
                    ";
        } else {
            // line 152
            echo "                 ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientFdrVs", array()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
                // line 153
                echo "                    - <font style=\"color: ";
                if ($this->getAttribute($this->getAttribute($context["cl"], "client", array()), "encompte", array())) {
                    echo "green ";
                } else {
                    echo "black ";
                }
                echo "\" >";
                echo twig_escape_filter($this->env, trim($this->getAttribute($context["cl"], "client", array()), "*/"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "secteur", array()), "html", null, true);
                echo ")</font>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " <br/>";
                }
                echo " 
                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 155
                echo "                    -Aucun client n'a été spécifié
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                    ";
        }
        // line 158
        echo "            </div>  
        </fieldset>
    </div>

    <div class=\"span4\">
        <fieldset>
            <legend> Chauffeurs/Manutentions </legend>

            <div class=\"row-fluid\">
                <div class=\"span4\">
                    <label for=\"nombreManutention\">Nombre De Manutentions </label>
                </div>
                <input id=\"nombreManutention\" type=\"number\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreManutention", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreManutention", array()), 0)) : (0)), "html", null, true);
        echo "\" size=\"3\"/>
            </div>

            <div class=\"row-fluid\">
                <label for=\"manutentions\">Chauffeur(s)/ Manutentionnaire(s): </label>
            </div>

            <div class=\"row-fluid\" id=\"manutentions\">
                
                ";
        // line 179
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "manutentions", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
            // line 180
            echo "                        -<input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $context["man"], "html", null, true);
            echo "\" size=\"35\" readonly/> ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " <br/>";
            }
            echo "    
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 181
            echo " - Aucune affectation ( Erreur inintentionnelle. )
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                   
            </div>

          ";
        // line 186
        if (( !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne1", array())) ||  !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne1", array())))) {
            echo " 
            <div class=\"row-fluid\">
                <div class=\"span3\">";
            // line 188
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'label', array("label" => "Manu. ext1"));
            echo "</div>
                <div class=\"span8\">";
            // line 189
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'widget');
            echo "</div>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span3\">";
            // line 192
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'label', array("label" => "CIN ext1"));
            echo "</div>
                <div class=\"span8\">";
            // line 193
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'widget');
            echo "</div>
            </div>
             ";
        }
        // line 196
        echo "            ";
        if (( !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne2", array())) ||  !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne2", array())))) {
            echo " 
            <br/>
            <div class=\"row-fluid\">
                <div class=\"span3\">";
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'label', array("label" => "Manu. ext2"));
            echo "</div>
                <div class=\"span8\">";
            // line 200
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'widget');
            echo "</div>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span3\">";
            // line 203
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'label', array("label" => "CIN ext2"));
            echo "</div>
                <div class=\"span8\">";
            // line 204
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'widget');
            echo "</div>
            </div>
             ";
        }
        // line 207
        echo "        </fieldset>
    </div>
    <div class=\"row-fluid\">
        <div class=\"span12\">

            <fieldset> 
                <legend>Les bons de péage </legend>

                <div class=\"row-fluid\">
                    <table class=\"table-responsive records_list table-bordered table-condensed\">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Datepassage</th>
                                <th>Montant (Dhs)</th>
                            </tr>
                        </thead>
                        <tbody>
        ";
        // line 225
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getPeages", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bonPeage"]) {
            // line 226
            echo "                            <tr>
                                <td>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["bonPeage"], "numCarte", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 228
            if ($this->getAttribute($context["bonPeage"], "datePassage", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bonPeage"], "datePassage", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["bonPeage"], "montant", array()), "html", null, true);
            echo "</td>
                            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 232
            echo "            ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
                // line 233
                echo "                            <tr><td colspan=\"3\">Aucun bon de péage n'a été enregistré.</td></tr>
            ";
            } else {
                // line 235
                echo "                            <tr class=\"text-danger\"><td colspan=\"10\">Les bons Péage seront mentionnés une fois la feuille de mission serait clôturée</td></tr>
\t\t";
            }
            // line 236
            echo "\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bonPeage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                        </tbody>
                    </table>
                </div>

            </fieldset>
        </div>
    </div>

    <div class=\"row-fluid\">
        <div class=\"span12\">
            <fieldset>
                <legend> Les bons de carburant et huile </legend>

                <!--div class=\"row-fluid\">
                <ol class=\"span4 manutentions\" data-prototype=\"";
        // line 252
        echo "\">       
                </ol>
                </div-->     
                <div class=\"row-fluid\">
                   <table class=\"table-responsive records_list table-bordered table-condensed\">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Lieu</th>
                                <th>Ville</th>
                                <th>Date</th>
                                <th>Quantite (Litres)</th>
                                 <th>P.U. (Dhs)</th>
                                <th>Montant (Dhs)</th>
                                <th>Compteur (Km)</th>
                                <th>Type de Consommation</th>
                            </tr>
                        </thead>
                        <tbody>
        ";
        // line 271
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getBonCarburantHuiles", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bon"]) {
            // line 272
            echo "                            <tr>
                                <td>";
            // line 273
            echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "numCarte", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "numCarte", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                                <td>";
            // line 274
            echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "lieu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "lieu", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                                <td>";
            // line 275
            echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "ville", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "ville", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                                <td>";
            // line 276
            if ($this->getAttribute($context["bon"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bon"], "date", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 277
            echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "quantite", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "quantite", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                                <td>";
            // line 278
            echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "prixUnitaire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "prixUnitaire", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>  
                                <td>";
            // line 279
            echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "montant", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "montant", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>               
                                <td>";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($context["bon"], "compteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 281
            echo twig_escape_filter($this->env, (($this->getAttribute($context["bon"], "typeConsommation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["bon"], "typeConsommation", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                            </tr>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 285
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
                // line 286
                echo "                            <tr><td colspan=\"8\">Aucun bon de Carburant n'a été enregistré.</td></tr>
            ";
            } else {
                // line 288
                echo "                            <tr class=\"text-danger\"><td colspan=\"9\">Les bons Carburant seront mentionnés une fois la feuille de mission serait clôturée</td></tr>
\t\t";
            }
            // line 290
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                        </tbody>
                    </table>
                </div>

            </fieldset>
        </div>
    </div>  

    <div class=\"row-fluid\">
        <div class=\"span12\">
            <fieldset>
                <legend> Synthèse de mesures </legend>

                <table class=\"table-responsive records_list table-bordered table-condensed\">
                    <thead>
                        <tr>
                            <th rowspan=\"2\">Différence de kilométrage (Km)</th>
                            <th rowspan=\"2\">Distance Parcourue (Km)</th>
                            <th colspan=\"3\">Bénificier de : </th>
                            <th rowspan=\"2\">Quantite (Litres)</th>
                            <th rowspan=\"2\">Nombre des Prises</th>
                            <th colspan=\"2\">Montant (Dhs)</th>
                            <th rowspan=\"2\">Nombre de jours</th>
                            <th rowspan=\"2\">Prime De Remorque</th>

                        </tr>
                        <tr>
                            <th>Petit Déjeuner</th>
                            <th>Repas</th>
                            <th>Découcher</th>
                            <th>Carburant</th>
                            <th>Peage</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                ";
        // line 328
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            // line 329
            echo "                            <td class=\"alert ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcDiffKm", array()) > 10)) {
                echo "alert-danger";
            } else {
                echo "alert-success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcDiffKm", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcDiffKm", array()), "0")) : ("0")), "html", null, true);
            echo "</td>
                            <td>";
            // line 330
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcKmParcourus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcKmParcourus", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 331
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbPetitDej", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbPetitDej", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 332
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbRepas", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbRepas", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 333
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbDecoucher", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbDecoucher", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 334
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcQuantite", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcQuantite", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 335
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcPrise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcPrise", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 336
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcMontantCarburant", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcMontantCarburant", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 337
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcMontantPeage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcMontantPeage", array()), "------")) : ("------")), "html", null, true);
            echo "</td>
                            <td>";
            // line 338
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbJours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calcNbJours", array()), "------")) : ("------")), "html", null, true);
            echo "</td>               
                            <td>";
            // line 339
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "primeRemorque", array())) {
                echo "Bénificiaire";
            } else {
                echo "Non";
            }
            echo "</td>
                ";
        } else {
            // line 341
            echo "                            <td colspan=\"10\" class=\"text-danger\">Ces mesures seront calculés une fois la feuille de mission serait clôturée</td>
                ";
        }
        // line 343
        echo "                        </tr>
                    </tbody>
                </table>

            </fieldset>
        </div>
    </div>

</div> 
";
        // line 352
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array())) {
            // line 353
            echo "<div class=\"row-fluid\">
    <a href=\"";
            // line 354
            echo $this->env->getExtension('routing')->getPath("feuillederoute");
            echo "\" class=\"pull-right\">
        Revenir à la liste
    </a>
</div>
";
        }
        // line 359
        echo "<div class=\"cacher\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</div>

";
        // line 361
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  920 => 361,  914 => 359,  906 => 354,  903 => 353,  901 => 352,  890 => 343,  886 => 341,  877 => 339,  873 => 338,  869 => 337,  865 => 336,  861 => 335,  857 => 334,  853 => 333,  849 => 332,  845 => 331,  841 => 330,  830 => 329,  828 => 328,  789 => 291,  783 => 290,  779 => 288,  775 => 286,  772 => 285,  763 => 281,  759 => 280,  755 => 279,  751 => 278,  747 => 277,  741 => 276,  737 => 275,  733 => 274,  729 => 273,  726 => 272,  721 => 271,  700 => 252,  684 => 238,  677 => 236,  673 => 235,  669 => 233,  666 => 232,  658 => 229,  652 => 228,  648 => 227,  645 => 226,  640 => 225,  620 => 207,  614 => 204,  610 => 203,  604 => 200,  600 => 199,  593 => 196,  587 => 193,  583 => 192,  577 => 189,  573 => 188,  568 => 186,  563 => 183,  556 => 181,  536 => 180,  518 => 179,  506 => 170,  492 => 158,  489 => 157,  482 => 155,  454 => 153,  435 => 152,  430 => 150,  418 => 148,  416 => 147,  408 => 141,  401 => 136,  394 => 135,  381 => 134,  375 => 133,  355 => 132,  345 => 124,  343 => 123,  339 => 121,  336 => 120,  326 => 117,  321 => 116,  319 => 115,  315 => 114,  312 => 113,  310 => 112,  306 => 111,  302 => 110,  292 => 102,  286 => 99,  282 => 98,  276 => 95,  272 => 94,  269 => 93,  267 => 92,  262 => 90,  258 => 89,  252 => 86,  248 => 85,  241 => 81,  237 => 80,  230 => 76,  226 => 75,  223 => 74,  217 => 71,  213 => 70,  210 => 69,  208 => 68,  203 => 66,  199 => 65,  192 => 62,  183 => 56,  177 => 52,  174 => 51,  170 => 49,  166 => 47,  159 => 43,  155 => 42,  151 => 41,  146 => 40,  144 => 39,  138 => 36,  134 => 35,  129 => 34,  126 => 33,  123 => 32,  121 => 31,  118 => 30,  115 => 29,  112 => 28,  109 => 27,  105 => 25,  97 => 23,  89 => 20,  86 => 19,  83 => 18,  81 => 17,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
