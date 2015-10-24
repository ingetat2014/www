<?php

/* FdrAdminBundle:FeuilleDeRoute:editdebut.html.twig */
class __TwigTemplate_3d9aa4876659857bb4005368ceafcddef217796c824a0bdbd7df25ae34abd7e6 extends Twig_Template
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
        echo "Feuille de route|Edit-Debut";
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
        echo "<div class=\"page-header\">  <h2> Modification de feuille de route(Début de mission-";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo ")[";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array())), "html", null, true);
        echo "]</h2> </div>  

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
<div class=\"row\">
    <span class=\"alert-danger \">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "</span>
</div>

<div class=\"row\">
    <div class=\"span7\">
        <div class=\"row\">
            <div class=\"span4\">
                <fieldset>
                    <legend>Déroulement de mission  </legend>
                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fdrInstance", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span3\"><label>En instance</label></div>
                        ";
        // line 21
        if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer"))) {
            echo "  
                        ";
            // line 22
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fdrInstance", array())) {
                // line 23
                echo "                    <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 25
                echo "                    <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 27
            echo "                    
                        <span class=\"cacher\">";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fdrInstance", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 30
            echo "                        
                        <span class=\"span8 cacher\">";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fdrInstance", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 32
        echo "  
                        <span class=\"alert-danger \">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fdrInstance", array()), 'errors');
        echo "</span>
                        
                    </div>
                    
                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateDebutMission", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span3\"><label>Debut Mission</label></div>
                        ";
        // line 40
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo "  
                        <div class=\"span8\">
                            <input type=\"text\" readonly=\"readonly\" 
                                   value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "\"/>
                        </div>
                        <span class=\"cacher\">";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateDebutMission", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 47
            echo "                        <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateDebutMission", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 48
        echo "                        
                        <span class=\"alert-danger \">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateDebutMission", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid ";
        // line 52
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array())) ? ("") : ("cacher"));
        echo "\">
                        <div class=\"span1\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "filiale", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span3\"><label>Filiale</label></div>

                        ";
        // line 56
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                        <div class=\"span8\">
                            <input type=\"text\" readonly=\"readonly\" 
                                   value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "filiale", array()), "html", null, true);
            echo "\"/>
                        </div>
                        <span class=\"cacher\">";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "filiale", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 63
            echo "                        <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "filiale", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 65
        echo "                        <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "filiale", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid ";
        // line 68
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array())) ? ("") : ("cacher"));
        echo "\">
                        <div class=\"span1\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "depot", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span3\"><label>Depôt</label></div>

                        ";
        // line 72
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                        <div class=\"span8\">
                            <input type=\"text\" readonly=\"readonly\" 
                                   value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depot", array()), "html", null, true);
            echo "\"/></div>
                        <span class=\"cacher\">";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "depot", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 78
            echo "                        <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "depot", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 80
        echo "                        <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "depot", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vehicule", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span3\"><label>Vehicule</label></div>

                        ";
        // line 87
        if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()))) {
            echo " 
                        <div class=\"span8\">
                            <input type=\"text\" readonly=\"readonly\" 
                                   value=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vehicule", array()), "html", null, true);
            echo "\"/></div>
                        <span class=\"cacher\">";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vehicule", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 93
            echo "                        <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vehicule", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 95
        echo "                        <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vehicule", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compteurReel", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span3\"><label>Compteur Réel</label></div>

                        ";
        // line 102
        if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editCompteur", array()))) {
            echo " 
                        <div class=\"span8\">
                            <input type=\"text\" readonly=\"readonly\" 
                                   value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compteurReel", array()), "html", null, true);
            echo "\"/></div>
                        <span class=\"cacher\">";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compteurReel", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 108
            echo "                        <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compteurReel", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 110
        echo "                        <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compteurReel", array()), 'errors');
        echo "</span>
                    </div>

                </fieldset>
            </div>

            <div class=\"span3\">
                <fieldset> 
                    <legend>Prestation/Clients/Secteurs </legend>

                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typePrestation", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span11\"><label>Prestation : </label></div>

                        ";
        // line 124
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                        <div class=\"span5\">
                            <input type=\"text\" readonly=\"readonly\" 
                                   value=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typePrestation", array()), "html", null, true);
            echo "\"/></div>
                        <span class=\"cacher\">";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typePrestation", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 130
            echo "                        <span class=\"span5\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typePrestation", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 132
        echo "                        <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typePrestation", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "secteurs", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span11\"><label>Secteurs : </label></div>

                        ";
        // line 139
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                        <div class=\"span11\">
                            <ul>
                        ";
            // line 142
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secteurs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 143
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                            </ul>
                        </div>
                        <span class=\"cacher\">";
            // line 147
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "secteurs", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 149
            echo "                        <span class=\"span11\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "secteurs", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 151
        echo "                        <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "secteurs", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span12\">";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clients", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span12\"><label>Clients : </label></div>

                        ";
        // line 158
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                        <div class=\"span12\">
                            <ul>
                        ";
            // line 161
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clientFdrVs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 162
                echo "                                <li>";
                echo twig_escape_filter($this->env, trim($this->getAttribute($context["item"], "client", array()), "*/"), "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                            </ul>
                        </div>
                        <span class=\"cacher\">";
            // line 166
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clients", array()), 'widget', array("attr" => array("novalidate" => "novalidate", "class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 168
            echo "                        <span class=\"span12\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clients", array()), 'widget', array("attr" => array("novalidate" => "novalidate")));
            echo "</span>
                        ";
        }
        // line 170
        echo "                        <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clients", array()), 'errors');
        echo "</span>
                    </div>

                </fieldset>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"span6\">
                <fieldset>
                    <legend> Manutentions Externes </legend>
                    <div class=\"span3\">
                        <fieldset>
                            <legend class=\"subfieldset\" style=\"text-align: center\"> 1 </legend>

                            <div class=\"row-fluid\">
                                <div class=\"span1\">";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne1", array()), 'label', array("label" => " "));
        echo "</div>
                                <div class=\"span11\"><label>Man. Ext1</label></div>

                        ";
        // line 188
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                                <div class=\"span11\">
                                    <input type=\"text\" readonly=\"readonly\" 
                                           value=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne1", array()), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"span11 cacher\">";
            // line 193
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne1", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</div>
                        ";
        } else {
            // line 195
            echo "                                <span class=\"span11\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne1", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 197
        echo "                                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne1", array()), 'errors');
        echo "</span>
                            </div>

                            <div class=\"row-fluid\">
                                <div class=\"span1\">";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne1", array()), 'label', array("label" => " "));
        echo "</div>
                                <div class=\"span11\"><label>CIN Ext1</label></div>

                        ";
        // line 204
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                                <div class=\"span11\">
                                    <input type=\"text\" readonly=\"readonly\" 
                                           value=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne1", array()), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"span11 cacher\">";
            // line 209
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne1", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</div>
                        ";
        } else {
            // line 211
            echo "                                <span class=\"span11\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne1", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 213
        echo "                                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne1", array()), 'errors');
        echo "</span>
                            </div>
                        </fieldset>
                    </div>
                    <div class=\"span3\">
                        <fieldset>
                            <legend class=\"subfieldset\" style=\"text-align: center\"> 2 </legend>
                            <div class=\"row-fluid\">
                                <div class=\"span1\">";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne2", array()), 'label', array("label" => " "));
        echo "</div>
                                <div class=\"span11\"><label>Man. Ext2</label></div>

                        ";
        // line 224
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                                <div class=\"span11\">
                                    <input type=\"text\" readonly=\"readonly\" 
                                           value=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne2", array()), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"span11 cacher\">";
            // line 229
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne2", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</div>
                        ";
        } else {
            // line 231
            echo "                                <span class=\"span11\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne2", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 233
        echo "                                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomManExterne2", array()), 'errors');
        echo "</span>
                            </div>

                            <div class=\"row-fluid\">
                                <div class=\"span1\">";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne2", array()), 'label', array("label" => " "));
        echo "</div>
                                <div class=\"span11\"><label>CIN Ext2</label></div>

                        ";
        // line 240
        if ( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) {
            echo " 
                                <div class=\"span11\">
                                    <input type=\"text\" readonly=\"readonly\" 
                                           value=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cinManExterne2", array()), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"span11 cacher\">";
            // line 245
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne2", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</div>
                        ";
        } else {
            // line 247
            echo "                                <span class=\"span11\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne2", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 249
        echo "                                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinManExterne2", array()), 'errors');
        echo "</span>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class=\"span4\">
        <fieldset>
            <legend> Manutention/Chauffeur </legend>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreManutention", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span4\"><label>Nombre Manutentions</label></div>

                        ";
        // line 264
        if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationChauffManu", array()))) {
            echo " 
                <div class=\"span7\">
                    <input type=\"text\" readonly=\"readonly\" 
                           value=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutention", array()), "html", null, true);
            echo "\"/></div>
                <span class=\"cacher\">";
            // line 268
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreManutention", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                        ";
        } else {
            // line 270
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreManutention", array()), 'widget');
            echo "</span>
                        ";
        }
        // line 272
        echo "                <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreManutention", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "manutentions", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span10\"><label>Les Chauffeurs/Manutentionnaires :</label>
                    <div id=\"Span2\" class=\"cacher\" style=\"width: 250px;\"><span class=\"text-danger badge-error badge center-block\"> Nota Bene : </span><br/>
                        ";
        // line 278
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "manutentions", array()));
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
            // line 279
            echo "                        -";
            echo twig_escape_filter($this->env, $context["man"], "html", null, true);
            echo " : <span class=\"";
            echo ((($this->getAttribute($context["man"], "disponibilite", array()) == 1)) ? ("text-success") : ("text-danger"));
            echo "\">";
            echo ((($this->getAttribute($context["man"], "disponibilite", array()) == 1)) ? ("Disponible") : ("Indisponible"));
            echo "</span>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " <br/>";
            }
            echo "                 
                       ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "                        <div class=\"text-info\">La liste déroulante contient normalement que ceux qui portent l'état <strong style=\"color: green;\">\"Disponible\"</strong> 
                            <br/>et <strong class=\"text-danger\">excepté </strong> ceux qui étaient séléctionnés au préalable: </div>
                        <div style=\"font-family: monospace;\">La feuille est <strong style=\"color: blue;\">\"";
        // line 283
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array())), "html", null, true);
        echo "\"</strong>
                            ";
        // line 284
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "cloturer")) {
            echo "Tout changement des chauffeurs(ou Manutentionnaire) séléctionnés; n'aura aucun impact sur leurs disponibilités
                            ";
        } elseif (($this->getAttribute(        // line 285
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) === "ouverte")) {
            echo "Dans le cas ou un chauffeur(ou Manutentionnaire) séléctionné est <strong style=\"color: red;\">\"Indisponible\"</strong> ;
                            <br/>vous pouvez cocher la case en instance pour les rendre <strong style=\"color: green;\">\"Disponible\"</strong> <br/><span class=\"alert-danger\">Mais si jamais un des séléctionnés(ayant état:indisponible); a été changé => il ne sera plus recupéré</span> ";
        }
        // line 286
        echo " 
                            <br><span class=\"text-center text-warning danger\">Si jamais vous aurez besoin de changer <strong class=\"text-danger\">\"explicitement\"</strong> la dispinibilité d'un chauffeur(& Manu.) 
                                <br/>Vous pouvez Contacter la personne qui en a le droit.</span>
                        </div>    </div>
                    <img  onmouseover=\"TagToTip('Span2');\" onmouseout=\"UnTip();\" class=\"img-circle\" title=\"Information importante\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/alerte.png"), "html", null, true);
        echo "\"/></div>
                        ";
        // line 291
        if (( !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array()) &&  !$this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationChauffManu", array()))) {
            // line 292
            echo "                <div class=\"span11\">
                ";
            // line 293
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
                // line 294
                echo "                        -<input style=\"white-space:normal;text-overflow: string;\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, $context["man"], "html", null, true);
                echo "\" size=\"35\" readonly/>";
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
                // line 296
                echo "                        -<input type=\"text\" value=\"Aucun\" size=\"35\" readonly/>                  
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            echo "                </div>
                <span class=\"span11 cacher\">";
            // line 299
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "manutentions", array()), 'widget', array("attr" => array("class" => "cacher")));
            echo "</span>
                      ";
        } else {
            // line 301
            echo "                <span class=\"span8\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "manutentions", array()), 'widget');
            echo "</span> 
                      ";
        }
        // line 303
        echo "
                <span class=\"alert-danger \">";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "manutentions", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"row-fluid\">
    <div class=\"span8 offset5\"><span class=\"\">";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "</span>
    </div>
</div>

<div class=\"cacher\">";
        // line 315
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest', array("attr" => array("class" => "cacher")));
        echo "</div>
    ";
        // line 316
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
<div class=\"row-fluid\" class=\"pull-right\">
    ";
        // line 318
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array())) {
            // line 319
            echo "    <a target=\"_blank\" href=\"";
            echo $this->env->getExtension('routing')->getPath("feuillederoute");
            echo "\" >
        Revenir à la liste
    </a>
    ";
        }
        // line 323
        echo "    &nbsp;&nbsp;
    <a target=\"_blank\" href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
        Afficher la feuille
    </a>
</div>
<script>
        jQuery(document).ready(function() {
        var secteurs = document.getElementById(\"fdr_adminbundle_feuillederoute_secteurs\");
        var \$container = \$('div#fdr_adminbundle_feuillederoute_manutentions');
        var \$addLink = \$('<br/><a href=\"#\" id=\"add_manutention\" class=\"btn btn-default\">Ajouter Manu.</a>');
        \$container.append(\$addLink);
        \$container.data('index', \$container.children('div').length);
        boucler('chauffeur');
        boucler('manutentionnaire');

        \$addLink.click(function(e) {
            var global = parseInt(\"0\" + \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val());
            \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val(global);
            var tot = 0;
            for (i = 0; i < \$(\"*[id\$='_nombreManutentions']\").length; i++)
            {
                var elt = parseInt(\"0\" + \$(\"*[id\$='_nombreManutentions']\").get(i).value);
                \$(\"*[id\$='_nombreManutentions']\").get(i).value = elt;
                tot += elt;
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
                alert('Le total des manutentions (' + tot + ') est > au nombre total (' + global + '),on va reinitialiser ces champs');
                \$(\"*[id\$='_nombreManutentions']\").val(0);
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'red');
                \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").css('border-color', 'red');
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

    function selectionnerManOuChauff(id, qui){
        var res = id.split(\"_\");
        var manlst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_manutentionnaire\";
        var chaufflst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_chauffeur\";
        var manOuChauff = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_manOuChauff option[value='\" + qui + \"']\";
        var nbreManu = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_nombreManutentions\";
        var ayantMan = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_ayantManutentions\";
        \$(manOuChauff).prop('selected', true);
        if (qui === 'chauffeur')
        {
            \$(manlst+ ' option[value=\"\"]').attr('selected', 'selected');
            \$(manlst+ ' option[value!=\"\"]').attr('selected', false);
            \$(manlst).hide();
            \$(chaufflst).show();
        }
        else if (qui === 'manutentionnaire')
        {
            \$(chaufflst+ ' option[value=\"\"]').attr('selected', 'selected');
            \$(chaufflst+ ' option[value!=\"\"]').attr('selected', false);
            \$(chaufflst).hide();
            \$(manlst).show();

        }
        else
        {
            \$(chaufflst).hide();
            \$(manlst).hide();
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
        if (true)
        {
            var global = parseInt(\"0\" + \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val());
            \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val(global);
            var tot = 0;
            for (i = 0; i < \$(\"*[id\$='_nombreManutentions']\").length; i++)
            {
                var elt = parseInt(\"0\" + \$(\"*[id\$='_nombreManutentions']\").get(i).value);
                \$(\"*[id\$='_nombreManutentions']\").get(i).value = elt;
                tot += elt;
            }
            if (tot > global) {
                alert(\"La répartition des manutentions n'est pas correcte(Le total des manutentions doit être <= au nombre voulu des manu.,on va reinitialiser ces champs )\");
                \$(\"*[id\$='_nombreManutentions']\").val(0);
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'red');
                \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").css('border-color', 'red');
                return false;
            }


            else
            {
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', '#515151');
                if (tot === global) {
                    \$(\"*[id='fdr_adminbundle_feuillederoute_nomManExterne1']\").val(\"\");
                    \$(\"*[id='fdr_adminbundle_feuillederoute_nomManExterne2']\").val(\"\");
                    \$(\"*[id='fdr_adminbundle_feuillederoute_cinManExterne1']\").val(\"\");
                    \$(\"*[id='fdr_adminbundle_feuillederoute_cinManExterne2']\").val(\"\");
                }
                if (\$(\"*[id\$='_nombreManutentions']\").css('border-color') === 'rgb(255,0,0)')
                {
                    \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'green');
                    \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").css('border-color', 'green');
                }
                if(\$(\"*[id\$='_manOuChauff'] option:selected[value='chauffeur']\").length===0 && \$(\"*[id\$='_manOuChauff'] option:selected[value='']\").length===0)
                {
                    alert(\"Un chauffeur au minimum doit etre selectionne\");
                    return false;
                }
                return true;
            }

        } else {
        }
    }
    /***********edit-fdr*******/
    //selectionnerLesClients();
    function selectionnerLesClients(){
    var select = document.getElementById('fdr_adminbundle_feuillederoute_clients');
    var selectSec = document.getElementById('fdr_adminbundle_feuillederoute_secteurs');
    var fdrTsCl = document.getElementById('fdr_adminbundle_feuillederoute_hid_clientsFdrTs');
    var fdrTsClSel = document.getElementById('fdr_adminbundle_feuillederoute_hid_clientsFdrSelected');
    var tsClients = fdrTsCl.value.split('@');
    var tsClientsSel = fdrTsClSel.value.split('@');
    var ligne = null;
    var existe = false;
    var indexAsupprimer = new Array();
    var supp = 0;
    //secteurs
    for (var i = 0; i < selectSec.options.length; i++)
    {
        var o = selectSec.options[i];
        for (var j = 0; j < tsClients.length; j++) {
            ligne = tsClients[j].split(\"-\");
            if (o.value === ligne[3]) {
                existe = true;
                break;
            }
            else {
                existe = false;
                continue;
            }
        }
        if (!existe) {
            indexAsupprimer.push(i);
        }       
    }
    
    for (var k = 0; k < indexAsupprimer.length; k++)
    {
        selectSec.options[indexAsupprimer[k - supp]] = null;
        supp++;
    }
    select.options.length=0;
    for (var j = 0; j < tsClients.length; j++) {
        if(tsClients[j]){
            ligne = tsClients[j].split(\"-\");
        if ((ligne[0].substr(0, 2)) === \"*/\")
        {
            ligne[0] = ligne[0].substr(2);
        }
        
        select.options[select.length] = new Option(ligne[0]+\".\"+ligne[2], ligne[1]+\"-\"+ligne[3], true, false);
        
        for (var k = 0; k < tsClientsSel.length; k++){
            if(tsClients[k]){
            var selligne = tsClientsSel[k].split(\"-\");
            if ((selligne[0].substr(0, 2)) === \"*/\")
            {
            selligne[0] = selligne[0].substr(2);
            }
            
            if (ligne[1] + \"-\" + ligne[3] === selligne[1] + \"-\" + selligne[3])
            {
               select.options[select.length-1].selected=true;
            }
        }
        }
    }
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:editdebut.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  829 => 324,  826 => 323,  818 => 319,  816 => 318,  811 => 316,  807 => 315,  800 => 311,  790 => 304,  787 => 303,  781 => 301,  776 => 299,  773 => 298,  766 => 296,  746 => 294,  728 => 293,  725 => 292,  723 => 291,  719 => 290,  713 => 286,  708 => 285,  704 => 284,  700 => 283,  696 => 281,  671 => 279,  654 => 278,  648 => 275,  641 => 272,  635 => 270,  630 => 268,  626 => 267,  620 => 264,  614 => 261,  598 => 249,  592 => 247,  587 => 245,  582 => 243,  576 => 240,  570 => 237,  562 => 233,  556 => 231,  551 => 229,  546 => 227,  540 => 224,  534 => 221,  522 => 213,  516 => 211,  511 => 209,  506 => 207,  500 => 204,  494 => 201,  486 => 197,  480 => 195,  475 => 193,  470 => 191,  464 => 188,  458 => 185,  439 => 170,  433 => 168,  428 => 166,  424 => 164,  415 => 162,  411 => 161,  405 => 158,  399 => 155,  391 => 151,  385 => 149,  380 => 147,  376 => 145,  367 => 143,  363 => 142,  357 => 139,  351 => 136,  343 => 132,  337 => 130,  332 => 128,  328 => 127,  322 => 124,  316 => 121,  301 => 110,  295 => 108,  290 => 106,  286 => 105,  280 => 102,  274 => 99,  266 => 95,  260 => 93,  255 => 91,  251 => 90,  245 => 87,  239 => 84,  231 => 80,  225 => 78,  220 => 76,  216 => 75,  210 => 72,  204 => 69,  200 => 68,  193 => 65,  187 => 63,  182 => 61,  177 => 59,  171 => 56,  165 => 53,  161 => 52,  155 => 49,  152 => 48,  146 => 47,  141 => 45,  136 => 43,  130 => 40,  125 => 38,  117 => 33,  114 => 32,  109 => 31,  106 => 30,  101 => 28,  98 => 27,  94 => 25,  90 => 23,  88 => 22,  84 => 21,  79 => 19,  66 => 9,  61 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
