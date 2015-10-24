<?php

/* FdrUserBundle:User:recherche.html.twig */
class __TwigTemplate_85d02a260269ea459a029977067ba733d59ce4ff408f0316fee7cd61f28772f3 extends Twig_Template
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
        echo "Utilisateur | Recherche";
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
        echo "<div  class=\"page-header\"> <h1>Recherche des utilisateurs</h1></div>


<div class=\"row-fluid anime\">
    <span class=\"text-primary badge \"> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["par"]) ? $context["par"] : $this->getContext($context, "par")), "html", null, true);
        echo "</span> &#10174; <span class=\"badge\"> ";
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo " </span>
</div>

  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
        echo "  
<div class=\"row-fluid\">
    <div class=\"span5 offset7\">   

";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
        echo "</span>
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
        echo "</span>

";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_end');
        echo "

<div class=\"row-fluid\">
    <table class=\"table-responsive records_list table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Nom d'utilisateur</th>
                <th>Email</th>
                <th>Matricule</th>
                <th>Role</th>
                <th>Depot</th>
                <th>Verrouillé</th>
                <th>Expiré</th>
                <th>Date d'expiration</th>            
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "            <tr class=\"";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $context["entity"])) ? ("monRole") : (""));
            echo "\" title=\"";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $context["entity"])) ? ("Votre profil") : (""));
            echo "\">
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matricule", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "roles", array()), 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            if ($this->getAttribute($context["entity"], "locked", array())) {
                echo "<span class=\"alert-danger\">Oui</span> ";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>";
            // line 53
            if ($this->getAttribute($context["entity"], "expired", array())) {
                echo "<span class=\"alert-danger\">Oui</span> ";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>";
            // line 54
            if ($this->getAttribute($context["entity"], "expiresAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
            } else {
                echo "-----";
            }
            echo "</td>
                <td class=\"col-md-12\">
                    ";
            // line 56
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affUtilisateur", array())) {
                // line 57
                echo "                    <div class=\"col-md-4\">
                        <a target=\"_blank\"  href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            <button title=\"Afficher\" type=\"submit\">
                                <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                            </button>
                        </a> 
                    </div>
                    ";
            }
            // line 65
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upUtilisateur", array())) {
                // line 66
                echo "                     ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $context["entity"])) {
                    // line 67
                    echo "                    <div class=\"col-md-4\">
                        <a target=\"_blank\" href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                            <button title=\"Modifier\" type=\"submit\">
                                <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                    echo "\" />
                            </button>
                        </a> 
                    </div>
                     ";
                }
                // line 75
                echo "                    ";
            }
            // line 76
            echo "                     ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delUtilisateur", array())) {
                // line 77
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $context["entity"])) {
                    // line 78
                    echo "                    <div class=\"col-md-4\">
                        ";
                    // line 79
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                    </div>
                    ";
                }
                // line 82
                echo "                    ";
            }
            // line 83
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "            <tr><th colspan=\"11\">Aucun utilisateur n'existe pour votre recherche</th></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </tbody>
    </table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 93
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
";
        // line 96
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affUtilisateur", array())) {
            // line 97
            echo "<div class=\"row-fluid\">
    <a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("user");
            echo "\" class=\"pull-right\">
        Revenir à la liste
    </a>
</div>
 ";
        }
        // line 103
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FdrUserBundle:User:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 103,  281 => 98,  278 => 97,  276 => 96,  270 => 93,  263 => 88,  256 => 86,  249 => 83,  246 => 82,  240 => 79,  237 => 78,  234 => 77,  231 => 76,  228 => 75,  220 => 70,  215 => 68,  212 => 67,  209 => 66,  206 => 65,  198 => 60,  193 => 58,  190 => 57,  188 => 56,  179 => 54,  171 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  124 => 43,  119 => 42,  96 => 22,  89 => 19,  81 => 17,  74 => 16,  67 => 12,  59 => 9,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
