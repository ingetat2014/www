<?php

/* FdrUserBundle:User:index.html.twig */
class __TwigTemplate_c88142897179579395ea22ec045bfc73be35f2e5228a4f41e70721a2167cb654 extends Twig_Template
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
        echo "Utilisateur | Accueil";
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
        echo "<div  class=\"page-header\"> <h1>Liste des utilisateurs</h1></div>

";
        // line 7
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crUtilisateur", array()))) {
            // line 8
            echo "<div class=\"row-fluid\">
  
        <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" target=\"_blank\">  
            <button class=\"btn btn-default\">
            Ajouter un utilisateur
        </button>
</a>
    
</div>
<br/>
";
        }
        // line 19
        echo "
  ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), 'form_start');
        echo "  
<div class=\"row-fluid\">
    <div class=\"span5 offset7\">   

";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "par", array()), 'errors');
        echo "</span>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'widget');
        echo " <span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "libelle", array()), 'errors');
        echo "</span>

";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'label', array("label" => " "));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["search_form"]) ? $context["search_form"] : $this->getContext($context, "search_form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
    ";
        // line 30
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
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "            <tr class=\"";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $context["entity"])) ? ("monRole") : (""));
            echo "\" title=\"";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $context["entity"])) ? ("Votre profil") : (""));
            echo "\">
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prenom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prenom", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "matricule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "matricule", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["entity"], "roles", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["entity"], "roles", array(), "any", false, true), 0, array(), "array"), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "depot", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "depot", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            if ($this->getAttribute($context["entity"], "locked", array())) {
                echo "<span class=\"alert-danger\">Oui</span> ";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>";
            // line 61
            if ($this->getAttribute($context["entity"], "expired", array())) {
                echo "<span class=\"alert-danger\">Oui</span> ";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>";
            // line 62
            if ($this->getAttribute($context["entity"], "expiresAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
            } else {
                echo "-----";
            }
            echo "</td>
                <td class=\"col-md-12\">
                    ";
            // line 64
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affUtilisateur", array())) {
                // line 65
                echo "                    <div class=\"col-md-4\">
                        <a target=\"_blank\"  href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            <button title=\"Afficher\" type=\"submit\">
                                <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                            </button>
                        </a> 
                    </div>
                    ";
            }
            // line 73
            echo "                    ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upUtilisateur", array())) {
                // line 74
                echo "                     ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $context["entity"])) {
                    // line 75
                    echo "                    <div class=\"col-md-4\">
                        <a target=\"_blank\" href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                            <button title=\"Modifier\" type=\"submit\">
                                <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
                    echo "\" />
                            </button>
                        </a> 
                    </div>
                     ";
                }
                // line 83
                echo "                    ";
            }
            // line 84
            echo "                     ";
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delUtilisateur", array())) {
                // line 85
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) != $context["entity"])) {
                    // line 86
                    echo "                    <div class=\"col-md-4\">
                        ";
                    // line 87
                    echo                     $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'form');
                    echo "
                    </div>
                    ";
                }
                // line 90
                echo "                    ";
            }
            // line 91
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 99
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "FdrUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 99,  267 => 94,  259 => 91,  256 => 90,  250 => 87,  247 => 86,  244 => 85,  241 => 84,  238 => 83,  230 => 78,  225 => 76,  222 => 75,  219 => 74,  216 => 73,  208 => 68,  203 => 66,  200 => 65,  198 => 64,  189 => 62,  181 => 61,  173 => 60,  169 => 59,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  134 => 51,  130 => 50,  107 => 30,  100 => 27,  92 => 25,  85 => 24,  78 => 20,  75 => 19,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
