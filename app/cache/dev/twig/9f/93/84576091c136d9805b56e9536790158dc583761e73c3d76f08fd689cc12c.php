<?php

/* FdrAdminBundle:Manutention:show.html.twig */
class __TwigTemplate_9f9384576091c136d9805b56e9536790158dc583761e73c3d76f08fd689cc12c extends Twig_Template
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
        echo "Manutention|Show";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div  class=\"page-header\"> <h1>Manutention Affichage</h1></div>

    <table>
        <tbody>
            <tr>
                <th>Nombremanutentions</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutentions", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"row-fluid\">
    <a target=\"_blank\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("manutention");
        echo "\" class=\"pull-right\">
                Revenir à la liste
            </a>
\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Manutention:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  68 => 16,  61 => 12,  53 => 6,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
