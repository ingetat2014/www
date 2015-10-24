<?php

/* FdrAdminBundle:TypePrestation:new.html.twig */
class __TwigTemplate_9f247201446a4ba7f023ca2192ae77171cbd841e84359ad53599b6ec313c7b3f extends Twig_Template
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
        echo "TypePrestation|New";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\"><h1> Ajout d'un TypePrestation</h1></div>



";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"row\">
    <span class=\"alert-danger \">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
</div>

<div class=\"row\">

    <div class=\"span6 offset3\">

        <fieldset>
            <legend>Formulaire d'ajout</legend>

            <div class=\"row-fluid\">
                <div class=\"span5\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label', array("label" => " Libelle "));
        echo "</div>
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'errors');
        echo "</span>
            </div>
            <br/>
            <div class=\"row-fluid\">
    <div class=\"span12 center-block\">
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
    </div>
            </div>
            


        </fieldset>

    </div>
</div>
";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<br/>
";
        // line 40
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypePrestation", array())) {
            // line 41
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("typeprestation");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:TypePrestation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  116 => 41,  114 => 40,  109 => 38,  96 => 28,  86 => 23,  82 => 22,  68 => 11,  63 => 9,  57 => 5,  54 => 4,  49 => 48,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
