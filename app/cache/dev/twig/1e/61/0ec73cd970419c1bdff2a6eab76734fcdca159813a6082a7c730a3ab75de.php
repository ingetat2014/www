<?php

/* base.html.twig */
class __TwigTemplate_1e610ec73cd970419c1bdff2a6eab76734fcdca159813a6082a7c730a3ab75de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"description\" content=\"ismailkomay\"/>
        <meta name=\"author\" content=\"ismailkomay\"/>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"container\">
         ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "         ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    
         ";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "    </div>
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        echo "         ";
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        // line 18
        echo "         ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  77 => 17,  71 => 15,  66 => 14,  60 => 9,  54 => 19,  52 => 17,  49 => 16,  46 => 15,  44 => 14,  37 => 10,  33 => 9,  23 => 1,);
    }
}
