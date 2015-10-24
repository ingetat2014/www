<?php

/* FdrAdminBundle:Indisponibilite:index.html.twig */
class __TwigTemplate_5f01b2ce0793fdf2d7d98dd510494c4631394b73ea22f9071ad696740c5daa53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Filiale|Accueil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Filiale list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Chauffeur</th>
                <th>Motif</th>
                <th>Date de but</th>
\t\t\t\t<th>Date de fin</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indisponibilite_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "chauffeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "motif", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "datedebut", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "datefin", array()), "html", null, true);
            echo "</td>
                <td>
                        <div class=\"col-md-2\">
                         <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indisponibilite_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                         <button title=\"Afficher\" type=\"submit\">
                         <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
            echo "\" />
                         </button>
                         </a> 
                        </div>
                        &nbsp;&nbsp;
                        
                        <div class=\"col-md-2\">
                         <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indisponibilite_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                         <button title=\"Afficher\" type=\"submit\">
                         <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
            echo "\" />
                         </button>
                         </a> 
                        </div>
                        &nbsp;&nbsp;

                        <div class=\"col-md-2\">
                        
                        ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
            echo "
                        </div>
                        &nbsp;&nbsp;
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("indisponibilite_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Indisponibilite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 56,  135 => 51,  123 => 45,  112 => 37,  107 => 35,  97 => 28,  92 => 26,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  68 => 19,  65 => 18,  61 => 17,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
