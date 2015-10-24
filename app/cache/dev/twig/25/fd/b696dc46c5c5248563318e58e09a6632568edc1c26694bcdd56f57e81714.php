<?php

/* FdrAdminBundle:Manutention:index.html.twig */
class __TwigTemplate_25fdb696dc46c5c5248563318e58e09a6632568edc1c26694bcdd56f57e81714 extends Twig_Template
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
        echo "Manutention|Accueil";
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
        echo "<div  class=\"page-header\">  <h1>Liste des Manutentions</h1></div>
<div class=\"row-fluid\">
    <table class=\"table-responsive records_list table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Manutentionnaire</th>
                <th>Chauffeur</th>
                <th>Nombre de Manutentions</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "manutentionnaire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "manutentionnaire", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "chauffeur", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "chauffeur", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nombreManutentions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nombreManutentions", array()), "0")) : ("0")), "html", null, true);
            echo "</td>
               <td class=\"col-md-12\">
                <div class=\"col-md-4\">
                         <a target=\"_blank\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manutention_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                         <button title=\"Afficher\" type=\"submit\">
                         <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
            echo "\" />
                         </button>
                         </a> 
                        </div>
                        
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Manutention:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  99 => 29,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 19,  68 => 18,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
