<?php

/* FdrAdminBundle:Email:fdr-cloturer.html.twig */
class __TwigTemplate_e99dcf0ad84a2b072d2cb2e105637d2a48c80b9307a7ea5dff0651f62dfc6729 extends Twig_Template
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
        echo "Fdr-Cloturer";
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
        echo "<div  class=\"page-header\"> <span class=\"info\">Bonjour</span></div>
<div class=\"row-fluid\">
Nous vous informons que le feuille de route (code= ) et qui est affectée à l'affrêtement(code=)
a bien été cloturée
<br/> et elle est en attente de confirmation de votre part,
Veuillez accuser la réception des documents
</div>

";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Email:fdr-cloturer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
