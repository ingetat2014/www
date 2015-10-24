<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8ab896c83dfd6f51c5ad37ddae7f834ece294a591616d47fd69e6facb120a193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("divers/bootstrap.min.css"), "html", null, true);
        echo "\" />
        
        <!--Ajoute recemment-->
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("combobox/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("combobox/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <!---->
        
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ajax/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("divers/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("divers/jquery.confirm.js"), "html", null, true);
        echo "\"></script>

\t";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"row-fluid\">
            ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "                Bonjour <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " (Role : <span class=\"text-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), "html", null, true);
            echo " </span>, Depôt : <span class=\"text-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "depot", array()), "html", null, true);
            echo " </span>  </strong>|
                <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>


            ";
        } else {
            // line 39
            echo "                <div class=\"row-fluid\">
                    <div class=\"span12 text-right\">

                        <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                            <button class=\"btn btn-default\">
                                Se connecter 
                            </button>
                        </a>

                    </div>
                </div>
            ";
        }
        // line 51
        echo "            </div>
            <hr/>

       ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 55
            echo "            <div class=\"row-fluid\">
                <div class=\"nav navbar navbar-default\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <img id=\"inputButtonAfficher\" title=\"CTM MESSAGERIE\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/ctm.png"), "html", null, true);
            echo "\" />

                    </div>
                    ";
            // line 61
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
            // line 62
            echo "                    <ul class=\"nav navbar-nav\">
                        <li  class=\"\"><a id=\"accueil\" href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("home_user");
            echo "\" class=\"";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") === "home_user")) {
                echo "menuActif";
            }
            echo "\">Accueil</a></li>
                        ";
            // line 64
            if ((array_key_exists("role", $context) &&  !(null === (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role"))))) {
                // line 65
                echo "                        ";
                if ((((((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delFDR", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFDR", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDR", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editCompteur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()))) {
                    // line 66
                    echo "                        <li id=\"feuilledderoute\" class=\"dropdown\">

                            <a class=\"";
                    // line 68
                    if (twig_in_filter("feuillederoute", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                        echo "menuActif";
                    }
                    echo "\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("feuillederoute");
                    echo "\">Feuile De Route</a>
                        </li>
                        ";
                }
                // line 71
                echo "                        ";
                if (((((((((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientCompeFDL", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientCompeFDL", array())) || $this->getAttribute(                // line 72
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClientNnCompeFDL", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClientNnCompeFDL", array())) || $this->getAttribute(                // line 73
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "confRecDocCtm", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "confRecDocClient", array()))) {
                    // line 74
                    echo "                        <li class=\"\">

                            <a class=\"";
                    // line 76
                    if (twig_in_filter("missionaffretement", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                        echo "menuActif";
                    }
                    echo "\"
                               id=\"feuilledemission\" href=\"";
                    // line 77
                    echo $this->env->getExtension('routing')->getPath("missionaffretement");
                    echo "\" >Feuille D'Affretement</a>
                        </li>
                        ";
                }
                // line 80
                echo "                        ";
                if (((((((((((((((((((((((((((((((((((((((((((((((((((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affDepot", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFiliale", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFiliale", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delFiliale", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFiliale", array())) || $this->getAttribute(                // line 81
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affSecteur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upSecteur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delSecteur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crSecteur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypePrestation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upTypePrestation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delTypePrestation", array())) || $this->getAttribute(                // line 82
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crTypePrestation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affChauffeur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upChauffeur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delChauffeur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crChauffeur", array())) || $this->getAttribute(                // line 83
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypeConsommation", array())) || $this->getAttribute(                // line 84
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upTypeConsommation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delTypeConsommation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crTypeConsommation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affBonCarburantHuile", array())) || $this->getAttribute(                // line 85
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affDepot", array())) || $this->getAttribute(                // line 86
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affUtilisateur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upUtilisateur", array())) || $this->getAttribute(                // line 87
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delUtilisateur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crUtilisateur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClient", array())) || $this->getAttribute(                // line 88
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVille", array()))) {
                    // line 89
                    echo "
                        <li class=\"dropdown\">

                            <a class=\"";
                    // line 92
                    if (((((((((((((((((twig_in_filter("depot", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))) || twig_in_filter("filiale", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("typeprestation",                     // line 93
(isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("secteur", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("peage", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("client", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("manutentionnaire", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("role",                     // line 94
(isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("chauffeur", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("vehicule", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("ville",                     // line 95
(isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("typeconsommation", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || twig_in_filter("boncarburanthuile", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) || ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user")) || (                    // line 96
(isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user_edit")) || ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user_show")) || ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user_recherche"))) {
                        echo "menuActif";
                    }
                    echo "\"
                               href=\"#\" id=\"autreGestion\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Autre Gestion <strong><b class=\"caret\"></b></strong></a>
                            <ul class=\"dropdown-menu\">
                                ";
                    // line 99
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affDepot", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delDepot", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crDepot", array()))) {
                        // line 100
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("depot");
                        echo "\" 
                                       class=\"";
                        // line 101
                        if (twig_in_filter("depot", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Depôts</a></li>
                                ";
                    }
                    // line 102
                    echo " 
                                ";
                    // line 103
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFiliale", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upFiliale", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delFiliale", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFiliale", array()))) {
                        // line 104
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("filiale");
                        echo "\" 
                                       class=\"";
                        // line 105
                        if (twig_in_filter("filiale", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Filiales</a></li>
                                ";
                    }
                    // line 106
                    echo " 
                                ";
                    // line 107
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affSecteur", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upSecteur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delSecteur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crSecteur", array()))) {
                        // line 108
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("secteur");
                        echo "\" 
                                       class=\"";
                        // line 109
                        if (twig_in_filter("secteur", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Secteurs/Itin&eacute;raires</a></li>
                                ";
                    }
                    // line 110
                    echo " 
                                ";
                    // line 111
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypePrestation", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upTypePrestation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delTypePrestation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crTypePrestation", array()))) {
                        // line 112
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("typeprestation");
                        echo "\" 
                                       class=\"";
                        // line 113
                        if (twig_in_filter("typeprestation", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Types de prestation</a></li>
                                ";
                    }
                    // line 114
                    echo " 
                                ";
                    // line 115
                    if (((((((((((((((((((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypeConsommation", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upTypeConsommation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delTypeConsommation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crTypeConsommation", array())) || $this->getAttribute(                    // line 116
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crBonCarburantHuile", array())) || $this->getAttribute(                    // line 117
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affPeage", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upPeage", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delPeage", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crPeage", array())) || $this->getAttribute(                    // line 118
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVille", array())) || $this->getAttribute(                    // line 119
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVehicule", array()))) {
                        // line 120
                        echo "                                <li class=\"divider\"></li>
                                ";
                    }
                    // line 122
                    echo "                                
                                ";
                    // line 123
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affTypeConsommation", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upTypeConsommation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delTypeConsommation", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crTypeConsommation", array()))) {
                        // line 124
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("typeconsommation");
                        echo "\" 
                                       class=\"";
                        // line 125
                        if (twig_in_filter("typeconsommation", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Types de Consommation</a></li>
                                ";
                    }
                    // line 127
                    echo "                                ";
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affBonCarburantHuile", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delBonCarburantHuile", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crBonCarburantHuile", array()))) {
                        // line 128
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("boncarburanthuile");
                        echo "\" 
                                       class=\"";
                        // line 129
                        if (twig_in_filter("boncarburanthuile", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Bons de carburant</a></li>
                                ";
                    }
                    // line 130
                    echo " 
                                ";
                    // line 131
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affPeage", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upPeage", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delPeage", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crPeage", array()))) {
                        // line 132
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("peage");
                        echo "\" 
                                       class=\"";
                        // line 133
                        if (twig_in_filter("peage", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Peage</a></li>
                                ";
                    }
                    // line 135
                    echo "                                ";
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVille", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVille", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVille", array()))) {
                        // line 136
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("ville");
                        echo "\" 
                                       class=\"";
                        // line 137
                        if (twig_in_filter("ville", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Villes</a></li>
                                ";
                    }
                    // line 138
                    echo " 
                                       ";
                    // line 139
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affVehicule", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delVehicule", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crVehicule", array()))) {
                        // line 140
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("vehicule");
                        echo "\" 
                                       class=\"";
                        // line 141
                        if (twig_in_filter("vehicule", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion V&eacute;hicules</a></li>
                                ";
                    }
                    // line 143
                    echo "                                 ";
                    if (((((((((((((((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affUtilisateur", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upUtilisateur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delUtilisateur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crUtilisateur", array())) || $this->getAttribute(                    // line 144
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affManutentionnaire", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upManutentionnaire", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delManutentionnaire", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crManutentionnaire", array())) || $this->getAttribute(                    // line 145
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClient", array())) || $this->getAttribute(                    // line 146
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crRole", array()))) {
                        // line 147
                        echo "                                <li class=\"divider\"></li>
                                ";
                    }
                    // line 149
                    echo "                                
                                ";
                    // line 150
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affChauffeur", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upChauffeur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delChauffeur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crChauffeur", array()))) {
                        // line 151
                        echo "
                                <li><a href=\"";
                        // line 152
                        echo $this->env->getExtension('routing')->getPath("chauffeur");
                        echo "\" 
                                       class=\"";
                        // line 153
                        if (twig_in_filter("chauffeur", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Chauffeurs</a></li>
                                ";
                    }
                    // line 154
                    echo " 

                                ";
                    // line 156
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affManutentionnaire", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upManutentionnaire", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delManutentionnaire", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crManutentionnaire", array()))) {
                        // line 157
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("manutentionnaire");
                        echo "\" 
                                       class=\"";
                        // line 158
                        if (twig_in_filter("manutentionnaire", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion manutentionnaires</a></li>
                                ";
                    }
                    // line 159
                    echo " 
                                       ";
                    // line 160
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affUtilisateur", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upUtilisateur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delUtilisateur", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crUtilisateur", array()))) {
                        // line 161
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("user");
                        echo "\" 
                                       class=\"";
                        // line 162
                        if ((((((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user") || (                        // line 163
(isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user_edit")) || (                        // line 164
(isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user_recherche")) || (                        // line 165
(isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "user_show"))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Utilisateurs</a></li>
                                ";
                    }
                    // line 166
                    echo " 
                                ";
                    // line 167
                    echo " 
                                ";
                    // line 168
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affClient", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delClient", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crClient", array()))) {
                        // line 169
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("client");
                        echo "\" 
                                       class=\"";
                        // line 170
                        if (twig_in_filter("client", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Clients</a></li>
                               ";
                    }
                    // line 171
                    echo " 
                                ";
                    // line 172
                    if (((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affRole", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "upRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delRole", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crRole", array()))) {
                        // line 173
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("role");
                        echo "\" 
                                       class=\"";
                        // line 174
                        if (twig_in_filter("role", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                            echo "ssmenuActif";
                        }
                        echo "\">Gestion Roles</a></li>
                                ";
                    }
                    // line 175
                    echo " 

                            </ul>
                        </li>
                        ";
                }
                // line 180
                echo "                         ";
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affModification", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "delModification", array()))) {
                    // line 181
                    echo "                        <li>

                            <a class=\"";
                    // line 183
                    if (twig_in_filter("modification", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                        echo "menuActif";
                    }
                    echo "\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("modification");
                    echo "\">Modifications</a>
                        </li>
                        ";
                }
                // line 186
                echo "
                        ";
                // line 187
                if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPercentAssurParam", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editerPlageHoraireParam", array()))) {
                    // line 188
                    echo "                        <li>

                            <a class=\"";
                    // line 190
                    if (twig_in_filter("parametrage", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                        echo "menuActif";
                    }
                    echo "\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("parametrage");
                    echo "\">Parametrage</a>
                        </li>
                        ";
                }
                // line 193
                echo "                        ";
                if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "reporting", array())) {
                    // line 194
                    echo "                        <li>

                            <a class=\"";
                    // line 196
                    if ((((((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "reporting") || ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "etatExcel")) || ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "groupeVehicule")) || ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) === "groupeMateriel"))) {
                        echo "menuActif";
                    }
                    echo "\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("reporting");
                    echo "\">Reporting</a>
                        </li>
                        ";
                }
                // line 199
                echo "                        <li class=\"dropdown\">
                            <a href=\"#\" id=\"profil\" class=\"dropdown-toggle  ";
                // line 200
                if ((twig_in_filter("profile", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))) || twig_in_filter("fos_user_change_password", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))))) {
                    echo "menuActif";
                }
                echo "\" data-toggle=\"dropdown\">Profil <strong><b class=\"caret\"></b></strong></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
                // line 202
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\" class=\"";
                if (twig_in_filter("fos_user_profile_show", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                    echo "ssmenuActif";
                }
                echo "\">Afficher</a></li>
                                <li><a href=\"";
                // line 203
                echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
                echo "\" class=\"";
                if (twig_in_filter("fos_user_change_password", (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")))) {
                    echo "ssmenuActif";
                }
                echo "\">Changer le mot de passe</a></li>                            
                            </ul>
                        </li>

                        ";
            }
            // line 208
            echo "                    </ul>
                </div>
            </div>
       ";
        }
        // line 212
        echo "            <hr/>
            ";
        // line 213
        if ((true || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ADMIN"))) {
            // line 214
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 215
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 216
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 217
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "           ";
        }
        // line 222
        echo "
            ";
        // line 223
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 226
        echo "            <input type=\"hidden\" id=\"varUrlAccueil\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "BASE"), "method"), "html", null, true);
        echo "\">
            ";
        // line 227
        $this->displayBlock('javascripts', $context, $blocks);
        // line 235
        echo "
    ";
        // line 236
        $this->displayBlock('footer', $context, $blocks);
        // line 249
        echo "        </div>
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ef1cb38_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_0") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_bootstrap-multiselect_1.css");
            // line 23
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ef1cb38_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_1") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_bootstrap-responsive.min_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ef1cb38_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_2") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_bootstrap.min_3.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ef1cb38_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_3") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_css1_4.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ef1cb38_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_4") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_jquery-ui_5.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ef1cb38_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_5") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_jquery.datetimepicker_6.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ef1cb38_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_6") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_justified-nav_7.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ef1cb38_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38_7") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_part_1_navbar_8.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "ef1cb38"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef1cb38") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "        ";
    }

    // line 223
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 224
        echo "
            ";
    }

    // line 227
    public function block_javascripts($context, array $blocks = array())
    {
        // line 228
        echo "         ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02197b4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_0") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_ajaxFeuillederoute_1.js");
            // line 229
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_1") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_ajaxMissionaffretement_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_2") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_bootstrap_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_3") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_bootstrap.min_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_4") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_combobox_5.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_5") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_dialoger_6.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_6") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_feuillederoute_7.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_7") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_jquery-2.1.3.min_8.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_8") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_jquery-ui_9.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_9") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_jquery.datetimepicker_10.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_10") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_jquery.scrollTo_11.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_11") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_jquery1_12.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_12") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_npm_13.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_13") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_role_14.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "02197b4_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4_14") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main_part_1_timedate_15.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
        } else {
            // asset "02197b4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02197b4") : $this->env->getExtension('assets')->getAssetUrl("js/compiled/main.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
        }
        unset($context["asset_url"]);
        // line 231
        echo "
            <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("divers/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("divers/run_prettify.js"), "html", null, true);
        echo "\"></script>
         ";
    }

    // line 236
    public function block_footer($context, array $blocks = array())
    {
        // line 237
        echo "            <footer>
                <div class=\"row-fluid\">
                    <div class=\"span12\">  
                        <div class=\"pull-left\">    
                            &copy; Copyright ";
        // line 241
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " / <a href=\"http://www.ctm-messagerie.ma/\" title=\"Komay\">CTM Messagerie</a>.        
                        </div>
                    </div>
                </div>
               
                </div>
            </footer>
         ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  848 => 241,  842 => 237,  839 => 236,  833 => 233,  829 => 232,  826 => 231,  728 => 229,  723 => 228,  720 => 227,  715 => 224,  712 => 223,  708 => 25,  652 => 23,  647 => 22,  644 => 21,  638 => 9,  632 => 249,  630 => 236,  627 => 235,  625 => 227,  619 => 226,  617 => 223,  614 => 222,  611 => 221,  605 => 220,  596 => 217,  591 => 216,  586 => 215,  581 => 214,  579 => 213,  576 => 212,  570 => 208,  558 => 203,  550 => 202,  543 => 200,  540 => 199,  530 => 196,  526 => 194,  523 => 193,  513 => 190,  509 => 188,  507 => 187,  504 => 186,  494 => 183,  490 => 181,  487 => 180,  480 => 175,  473 => 174,  468 => 173,  466 => 172,  463 => 171,  456 => 170,  451 => 169,  449 => 168,  446 => 167,  443 => 166,  436 => 165,  435 => 164,  434 => 163,  433 => 162,  428 => 161,  426 => 160,  423 => 159,  416 => 158,  411 => 157,  409 => 156,  405 => 154,  398 => 153,  394 => 152,  391 => 151,  389 => 150,  386 => 149,  382 => 147,  380 => 146,  379 => 145,  378 => 144,  376 => 143,  369 => 141,  364 => 140,  362 => 139,  359 => 138,  352 => 137,  347 => 136,  344 => 135,  337 => 133,  332 => 132,  330 => 131,  327 => 130,  320 => 129,  315 => 128,  312 => 127,  305 => 125,  300 => 124,  298 => 123,  295 => 122,  291 => 120,  289 => 119,  288 => 118,  287 => 117,  286 => 116,  285 => 115,  282 => 114,  275 => 113,  270 => 112,  268 => 111,  265 => 110,  258 => 109,  253 => 108,  251 => 107,  248 => 106,  241 => 105,  236 => 104,  234 => 103,  231 => 102,  224 => 101,  219 => 100,  217 => 99,  209 => 96,  208 => 95,  207 => 94,  206 => 93,  205 => 92,  200 => 89,  198 => 88,  197 => 87,  196 => 86,  195 => 85,  194 => 84,  193 => 83,  192 => 82,  191 => 81,  189 => 80,  183 => 77,  177 => 76,  173 => 74,  171 => 73,  170 => 72,  168 => 71,  158 => 68,  154 => 66,  151 => 65,  149 => 64,  141 => 63,  138 => 62,  136 => 61,  130 => 58,  125 => 55,  123 => 54,  118 => 51,  106 => 42,  101 => 39,  93 => 34,  89 => 33,  80 => 32,  78 => 31,  69 => 26,  67 => 21,  62 => 19,  58 => 18,  54 => 17,  48 => 14,  44 => 13,  38 => 10,  34 => 9,  24 => 1,);
    }
}
