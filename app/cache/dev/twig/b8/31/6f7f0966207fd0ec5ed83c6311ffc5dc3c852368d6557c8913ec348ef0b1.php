<?php

/* FdrAdminBundle:Peage:index.html.twig */
class __TwigTemplate_b8316f7f0966207fd0ec5ed83c6311ffc5dc3c852368d6557c8913ec348ef0b1 extends Twig_Template
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
        echo "Peage|Accueil";
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
        echo "<div  class=\"page-header\"> <h1>Liste des Peages</h1></div>
<div class=\"row-fluid\">
<table class=\"table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Code</th>
            <th>Numcarte</th>
            <th>Datepassage</th>
            <th>Lieu</th>
            <th>Montant(Dhs)</th>
            <th>Feuille de route associée</th>
            
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "numCarte", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "numCarte", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "datePassage", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datePassage", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "lieu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "lieu", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "montant", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "montant", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "feuillederoute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "feuillederoute", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
            <td>
                    ";
            // line 29
            if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affPeage", array())) {
                // line 30
                echo "                <div class=\"col-md-2\">
                    <a target=\"_blank\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("peage_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <button title=\"Afficher\" type=\"submit\">
                            <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
                echo "\" />
                        </button>
                    </a> 
                </div>
                    ";
            }
            // line 38
            echo "
            </td>
        </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "<tr><td colspan=\"7\"><em>Aucun bon peage n'existe pour le moment</em></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tbody>
</table>
</div>
<div class=\"span12\" style=\"text-align: center\">
    <div class=\"row-fluid\">
        <div class=\"pagination-lg\">";
        // line 48
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
</div>

<script>
    \$('* [id=\"form_supprimer\"]').each(function() {
        var c = \$(this).parent().parent().parent();
        \$(this).confirm({
            title: \"<span class='text-danger header-logo'>Confirmation de suppression : <span class='badge help-block' title='Si vous confirmez; cette feuille ne sera plus recupérée'> ( Action irréversible ? )</span></span>\",
            text: \"<div class='text-danger'>Voulez-vous vraiment supprimer  ? </div>\",
            post: true,
            confirm: function(button) {
                button.fadeOut(500).fadeIn(500);
                c.submit();
            },
            cancel: function(button) {
                button.fadeOut(500).fadeIn(500);
                button.preventDefault();
            },
            confirmButton: \"Oui, J'en veux\",
            cancelButton: \"Non, Merci\",
            confirmButtonClass: \"btn-danger\"
        });
    }
    );
</script>
 ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Peage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  138 => 43,  131 => 41,  123 => 38,  115 => 33,  110 => 31,  107 => 30,  105 => 29,  100 => 27,  96 => 26,  92 => 25,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  70 => 20,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
