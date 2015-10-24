<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f8cce57a8e85e579440bfb0bfbcaed7a8585fe7ab0ec1b91a2550dcd9903110e extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Page d'authentification";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "

<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"row-fluid\">
        <div class=\"span6 offset3 text-center\">  
            <fieldset>
                <legend>Formulaire de connexion
                </legend>

                <div class=\"row-fluid\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                </div>
               
    ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "                 <div class=\"row-fluid\">
                    <span class=\"text-primary text-danger\">
        ";
            // line 21
            if ( !($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security") === "Droits invalides.")) {
                // line 22
                echo "         ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
                echo "
                    </span>
        ";
            } else {
                // line 25
                echo "                     <span class=\"text-error\">Les coordonnées ne semblent pas correctes</span>
        ";
            }
            // line 27
            echo "                    
                     </div>
                <br/>
";
        }
        // line 31
        echo "               
                
                <div class=\"row-fluid\">
                    <div class=\"span4 text-left\"><label for=\"username\">Nom d'utilisateur/Email</label></div>
                    <div class=\"span4\"><input  type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /></div>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4 text-left\"><label for=\"password\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></div>
                    <div class=\"span4\"><input  type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /></div>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span4 text-right\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /></div>
                    <div class=\"span4\"><label for=\"remember_me\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></div>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span6 offset1 text-center\"><input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></div>
                </div>

        </fieldset>
    </div>
</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  112 => 43,  104 => 38,  98 => 35,  92 => 31,  86 => 27,  82 => 25,  75 => 22,  73 => 21,  69 => 19,  67 => 18,  61 => 15,  50 => 7,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
