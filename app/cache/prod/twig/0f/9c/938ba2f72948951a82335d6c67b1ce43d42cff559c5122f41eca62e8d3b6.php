<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0f9c938ba2f72948951a82335d6c67b1ce43d42cff559c5122f41eca62e8d3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<br/>
<div class=\"fos_user_user_show\">
    <div class=\"span8\"> 
    <div class=\"row-fluid\">         
        <div class=\"span4 text-left \">Nom d'utilisateur :</div>
        <div class=\"span4 text-left badge\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</div>
    </div>   
    <div class=\"row-fluid\">  
        <div class=\"span4 text-left\">Adresse Email :</div>
        <div class=\"span4 text-left badge\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</div>
    </div>
    <div class=\"row-fluid\">  
        <div class=\"span4 text-left\">Role(s) :</div>
        <div class=\"span4 text-left\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()), 0, array(), "array"), "html", null, true);
        echo "</div>
    </div>
   <div class=\"row-fluid\">  
        <div class=\"span4 text-left\">Nom :</div>
        <div class=\"span4 text-left\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</div>
   </div> 
   <div class=\"row-fluid\">  
        <div class=\"span4 text-left\">Prénom :</div>
        <div class=\"span4 text-left\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</div>
   </div>    
   <div class=\"row-fluid\">       
        <div class=\"span4 text-left\"> Matricule :</div>
        <div class=\"span4 text-left\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "matricule", array()), "html", null, true);
        echo "</div>
   </div>
   <div class=\"row-fluid\">       
        <div class=\"span4 text-left\">CIN :</div>
        <div class=\"span4 text-left\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cin", array()), "html", null, true);
        echo "</div>
   </div>
  <div class=\"row-fluid\">        
        <div class=\"span4 text-left\">Dépot :</div>
        <div class=\"span4 text-left\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "depot", array()), "html", null, true);
        echo "</div>
  </div>     
    </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 35,  68 => 31,  61 => 27,  54 => 23,  47 => 19,  40 => 15,  33 => 11,  26 => 7,  19 => 2,);
    }
}
