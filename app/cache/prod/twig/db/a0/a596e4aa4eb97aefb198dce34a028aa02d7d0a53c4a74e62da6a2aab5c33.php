<?php

/* FdrAdminBundle:FeuilleDeRoute:reporting.html.twig */
class __TwigTemplate_dba0a596e4aa4eb97aefb198dce34a028aa02d7d0a53c4a74e62da6a2aab5c33 extends Twig_Template
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
        echo "Reporting|Filtre";
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("target" => "_blank")));
        echo "
<div class=\"page-header\">  <h2> Reporting </h2> </div>  
<fieldset>
    <div class=\"span6\">
    <legend>Formulaire de Filtre</legend>
<div class=\"row-fluid\">
    <div class=\"span4\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'label', array("label" => "Date Début "));
        echo "</div>
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'errors');
        echo "</span>
</div>
<div class=\"row-fluid\">
    <div class=\"span4\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'label', array("label" => "Date Fin "));
        echo "</div>
";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'errors');
        echo "</span>
</div>
<br/>
<div class=\"row-fluid\">
    <div class=\"span4\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Type de filtre "));
        echo "</div>
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "</span>
</div>
<div class=\"row-fluid\">
    <div class=\"span2\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicules", array()), 'label', array("label" => "  "));
        echo "</div>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicules", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicules", array()), 'errors');
        echo "</span>

    <div class=\"span2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chauffeurs", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chauffeurs", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chauffeurs", array()), 'errors');
        echo "</span>
</div> 

<div class=\"row-fluid\">
    <div class=\"span2 offset5\">
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
    </div>
</div>
    </div>
</fieldset>
";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script type=\"text/javascript\">
    \$('#form_chauffeurs').hide();
    \$('#form_vehicules').hide();
    function rechercherReporting() {
        var jr = 86400000;
        var datedebut = \$(\"#form_dateDebut\").val();
        var dateDebut = new Date(datedebut);
        var datefin = \$(\"#form_dateFin\").val();
        var dateFin = new Date(datefin);
        var logique = (dateFin.getTime()>= dateDebut.getTime()+jr) ? true : false;
        if (logique) {
            return true;
        }
        else
        {
            alert('Periode illogique (la fin de période doit etre au minimum décalée d\\'un jour par rapport le début de periode )'); 
            return false;
        }
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:reporting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  124 => 33,  114 => 28,  110 => 27,  103 => 25,  99 => 24,  91 => 21,  87 => 20,  78 => 16,  74 => 15,  66 => 12,  62 => 11,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
