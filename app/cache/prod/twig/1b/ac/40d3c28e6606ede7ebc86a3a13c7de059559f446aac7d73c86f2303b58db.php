<?php

/* FdrAdminBundle:Ville:edit.html.twig */
class __TwigTemplate_1bac40d3c28e6606ede7ebc86a3a13c7de059559f446aac7d73c86f2303b58db extends Twig_Template
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
        echo "Ville|Edit";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"page-header\"><h1> Modification d'une ville</h1></div>

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

<div class=\"row\">
    <span class=\"alert-danger \">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "</span>
</div>

<div class=\"row\">

    <div class=\"span6 offset3\">

        <fieldset>
            <legend>Formulaire de modification</legend>

            <div class=\"row-fluid\">
                <div class=\"span5\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'label', array("label" => " Libelle "));
        echo "</div>
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'errors');
        echo "</span>
            </div>
            
            <div class=\"row-fluid\">
    <div class=\"span12 center-block\">
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget');
        echo "
    </div>
            </div>

        </fieldset>

    </div>
</div>


";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
<br/>
";
        // line 40
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVille", array())) {
            // line 41
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("ville");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Ville:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  118 => 41,  116 => 40,  111 => 38,  98 => 28,  88 => 23,  84 => 22,  70 => 11,  64 => 8,  60 => 6,  57 => 5,  52 => 48,  50 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
