<?php

/* FdrAdminBundle:Modification:show.html.twig */
class __TwigTemplate_afa28452049b6af9789e5bb69326cf999237f954f4a7fb602c37942de399ee2d extends Twig_Template
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
        echo "Modication|Show";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\"><h1> Affichage de Modification de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classe", array()), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codeFeuille", array()), "html", null, true);
        echo ")</h1></div>

<div class=\"row\">
    <span class=\"alert-danger \">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
</div>

<div class=\"row-fluid\">
    <div class=\"span6 offset1\">
        <div class=\"row-fluid\">
            <table class=\"table-responsive records_list table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th rowspan=\"2\">Type de Colonne</th>
                        <th rowspan=\"2\">Nom de Colonne</th>
                        <th colspan=\"2\">Modification</th>
                    </tr>
                    <tr>
                        <th>Valeur ancienne</th>
                        <th>Nouvelle Valeur</th>
                    </tr>
                </thead>
                <tbody>
                        ";
        // line 27
        $context["cnt"] = 0;
        // line 28
        echo "                             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "motifs", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 29
            echo "
                    <tr style=\"";
            // line 30
            if ((($this->getAttribute($context["loop"], "index0", array()) + 2) == twig_length_filter($this->env, $context["item"]))) {
                echo "border-bottom: 1px solid black";
            }
            echo "\"><td rowspan=\"";
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $context["item"]) / 2), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
                            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["item"]);
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
            foreach ($context['_seq'] as $context["keyy"] => $context["itemm"]) {
                // line 32
                echo "                            ";
                $context["cnt"] = ((isset($context["cnt"]) ? $context["cnt"] : $this->getContext($context, "cnt")) + 1);
                // line 33
                echo "                        ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 34
                    echo "
                        <td><span class=\"text-primary\">";
                    // line 35
                    echo twig_escape_filter($this->env, twig_slice($this->env, $context["keyy"], 0, (twig_length_filter($this->env, $context["keyy"]) - 4)), "html", null, true);
                    echo "</span></td>
                        <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $context["itemm"], "html", null, true);
                    echo "</td>
                        ";
                } elseif ($this->getAttribute(                // line 37
$context["loop"], "last", array())) {
                    // line 38
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $context["itemm"], "html", null, true);
                    echo "</td>
                    </tr>
                        ";
                } elseif ((0 == $this->getAttribute(                // line 40
$context["loop"], "index0", array()) % 2)) {
                    echo "                       
                    </tr>
                    <tr style=\"";
                    // line 42
                    if ((($this->getAttribute($context["loop"], "index0", array()) + 2) == twig_length_filter($this->env, $context["item"]))) {
                        echo "border-bottom: 1px solid black";
                    }
                    echo "\">

                        <td> <span class=\"text-primary\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_slice($this->env, $context["keyy"], 0, (twig_length_filter($this->env, $context["keyy"]) - 4)), "html", null, true);
                    echo "</span></td>
                        <td>
                                ";
                    // line 46
                    echo twig_escape_filter($this->env, $context["itemm"], "html", null, true);
                    echo "
                        </td>
                        ";
                } else {
                    // line 49
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $context["itemm"], "html", null, true);
                    echo "</td>
                        ";
                }
                // line 51
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
            unset($context['_seq'], $context['_iterated'], $context['keyy'], $context['itemm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <th colspan=\"2\">Nombre total des modifications </th>
                        <td colspan=\"2\"> ";
        // line 59
        echo twig_escape_filter($this->env, ((isset($context["cnt"]) ? $context["cnt"] : $this->getContext($context, "cnt")) / 2), "html", null, true);
        echo "      </td>
                    </tr>
                </tfoot>
            </table>

        </div>

    </div>
    <div class=\"span4\">

        <div class=\"row-fluid\">
             <table style=\"border-width: 0px\" class=\"table-responsive records_list table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th>Code de modification</th> <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Type de Feuille</th><td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classe", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Code de la feuille</th>
                        <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codeFeuille", array()), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <th>Utilisateur</th><td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date de modification</th><td> ";
        // line 87
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateMaj", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateMaj", array()), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</td>
                    </tr>
                </thead>
            </table>
        </div>
        <br/>
        <div class=\"row-fluid\">
            <label>Remarque</label>
        </div>
        <div class=\"row-fluid\">
            <textarea style=\"text-align: left\" cols=\"40\" rows=\"10\" readonly=\"readonly\">
                    ";
        // line 98
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "remarque", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "remarque", array()), "Pas de remarque")) : ("Pas de remarque")), "html", null, true);
        echo "
            </textarea>
        </div>
    </div>
</div>
<br/>
";
        // line 104
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affModification", array())) {
            // line 105
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("modification");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Modification:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 106,  298 => 105,  296 => 104,  287 => 98,  271 => 87,  265 => 84,  258 => 80,  251 => 76,  245 => 73,  228 => 59,  222 => 55,  207 => 53,  192 => 51,  186 => 49,  180 => 46,  175 => 44,  168 => 42,  163 => 40,  157 => 38,  155 => 37,  151 => 36,  147 => 35,  144 => 34,  141 => 33,  138 => 32,  121 => 31,  111 => 30,  108 => 29,  90 => 28,  88 => 27,  66 => 8,  57 => 5,  54 => 4,  49 => 112,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
