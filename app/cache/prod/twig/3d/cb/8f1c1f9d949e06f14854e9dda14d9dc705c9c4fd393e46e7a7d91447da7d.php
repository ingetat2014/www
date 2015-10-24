<?php

/* FdrAdminBundle:TypeConsommation:show.html.twig */
class __TwigTemplate_3dcb8f1c1f9d949e06f14854e9dda14d9dc705c9c4fd393e46e7a7d91447da7d extends Twig_Template
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
        echo "TypeConsommation|Show";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page-header\"><h1> Affichage d'un Type de Consommation</h1></div>


<div class=\"desactiver-champs\">
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
                <legend></legend>

                <div class=\"row-fluid\">
                    <div class=\"span5\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'label', array("label" => " Identifiant "));
        echo "</div>
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span5\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label" => " Type "));
        echo "</div>
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span5\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'label', array("label" => " Agence "));
        echo "</div>
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span5\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label" => "Ville "));
        echo "</div>
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "</span>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span5\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "produit", array()), 'label', array("label" => " Produit "));
        echo "</div>
";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "produit", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "produit", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"row-fluid\">
                    <div class=\"span5\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaire", array()), 'label', array("label" => " Prix Unitaire "));
        echo "</div>
";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaire", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaire", array()), 'errors');
        echo "</span>
                </div>


            </fieldset>

        </div>
    </div>
";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<br/>
";
        // line 57
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypeConsommation", array())) {
            // line 58
            echo "<div class=\"row-fluid\">
    <a  href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("typeconsommation");
            echo "\" class=\"pull-right\">
        <button class=\"btn btn-default\">Revenir à la liste</button>
    </a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:TypeConsommation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 59,  170 => 58,  168 => 57,  162 => 54,  149 => 46,  145 => 45,  136 => 41,  132 => 40,  124 => 37,  120 => 36,  112 => 33,  108 => 32,  99 => 28,  95 => 27,  86 => 23,  82 => 22,  68 => 11,  63 => 9,  57 => 5,  54 => 4,  49 => 65,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
