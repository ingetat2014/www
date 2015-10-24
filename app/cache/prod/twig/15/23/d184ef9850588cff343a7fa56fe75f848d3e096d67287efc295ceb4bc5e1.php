<?php

/* FdrAdminBundle:BonCarburantHuile:index.html.twig */
class __TwigTemplate_1523d184ef9850588cff343a7fa56fe75f848d3e096d67287efc295ceb4bc5e1 extends Twig_Template
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
        echo "BonCarburantHuile|Accueil";
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
        echo "<div class=\"page-header\"><h2> Liste des bons de carburant</h2></div>
<div class=\"row-fluid\">
    <table class=\"table-responsive records_list table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Feuille De Route</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>Quantite(Litres)</th>
                <th>Prix Unitaire(Dhs)</th>
                <th>Montant(Dhs)</th>
                <th>Compteur(Km)</th>
                <th>Type de Consommation</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "feuilleDeRoute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "lieu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "lieu", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y/m/d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "quantite", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "quantite", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "prixUnitaire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "prixUnitaire", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "montant", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "montant", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>               

                <td>";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "compteur", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "compteur", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "typeConsommation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "typeConsommation", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 

                <td>
                    ";
            // line 37
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affBonCarburantHuile", array())) {
                // line 38
                echo "                    <div class=\"col-md-2\">
                        <a target=\"_blank\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boncarburanthuile_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            <button title=\"Afficher\" type=\"submit\">
                                <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                            </button>
                        </a> 
                    </div>
                    
                        ";
            }
            // line 47
            echo "                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "<tr><td colspan=\"9\"><em>Aucun bon carburant n'existe pour le moment</em></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 56
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:BonCarburantHuile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  155 => 51,  148 => 49,  141 => 47,  132 => 41,  127 => 39,  124 => 38,  122 => 37,  116 => 34,  112 => 33,  107 => 31,  103 => 30,  99 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  78 => 24,  73 => 23,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
