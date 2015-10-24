<?php

/* FdrAdminBundle:FeuilleDeRoute:editcloture.html.twig */
class __TwigTemplate_cdda169631a2a341502882bf6b9f43a12e9ba2a7d25dad54e7a35ba74a72cf50 extends Twig_Template
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
        echo "Feuille de route|Edit-Clôture";
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
        echo "<div class=\"page-header\">  <h2> Modification de feuille de route(Clôture de mission-";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo ")</h2> </div>  

     ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal", "onSubmit" => "return validerFormCloture()")));
        echo "

          ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <fieldset>
            <legend>Extrait debut de mission </legend>
            <table class=\"table-responsive records_list table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Depot</th>
                        <th>Date de debut mission</th>
                        <th>Chauffeur(s)-Manutentionnaire(s)</th>
                        <th>Nbre de manu.</th>
                        <th>Vehicule</th>
                        <th>Compteur reel</th>
                        <th>Type de prestation</th>
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depot", array()), "html", null, true);
        echo "</td>
                        <td id=\"fdr_adminbundle_feuillederoute_dateDebutMission\">";
        // line 33
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array()), "d-m-Y H:i"), "html", null, true);
        }
        echo "</td>
                        <td>
                            <ol>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "manutentions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
            // line 37
            echo "                                <li> ";
            echo twig_escape_filter($this->env, $context["man"], "html", null, true);
            echo " </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                            </ol>
                        </td>
                        <td>";
        // line 41
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutention", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutention", array()), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</td>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vehicule", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compteurReel", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typePrestation", array()), "html", null, true);
        echo "</td>
                        <td><strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo "</strong></td>
                        <td class=\"col-sm-2\">
                            ";
        // line 47
        if (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "imprimerFDR", array()))) {
            // line 48
            echo "                            <div class=\"col-sm-2\">
                                <a class=\"btn-default\" target=\"_blank\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                                    <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
            echo "\" />
                                </a> 
                            </div>
                            ";
        }
        // line 54
        echo "                            ";
        if ((($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "editCompteur", array()) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationChauffManu", array())) || $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affectationVehicule", array()))) {
            // line 55
            echo "                            <div class=\"col-sm-2\">
                                <a class=\"btn-default\" target=\"_blank\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_editdebut", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                                    <img id=\"inputButtonAfficher\" title=\"Editer le debut de mission\" src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
            echo "\" />
                                </a> 
                            </div>
                            ";
        }
        // line 61
        echo "                        </td>
                    </tr>

                </tbody>
            </table>
        </fieldset>
    </div>
</div>
<div class=\"row\">
    <div class=\"span4\">

        <fieldset>

            <legend>Date de fin de mission </legend>

            <div class=\"row-fluid ";
        // line 76
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) ? ("") : ("desactiver-champs"));
        echo "\">
                <div class=\"span4\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateFinMission", array()), 'label', array("label" => " Date fin de mission"));
        echo "</div>
";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateFinMission", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateFinMission", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
    <div class=\"span4\" >

        <fieldset>
            <legend>Compteur final</legend>
            <div class=\"row-fluid ";
        // line 86
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) ? ("") : ("desactiver-champs"));
        echo "\">
                <div class=\"span4\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compteurFinal", array()), 'label', array("label" => "  Compteur final"));
        echo "</div>
";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compteurFinal", array()), 'widget', array("attr" => array("required" => "required")));
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "compteurFinal", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
    <div class=\"span4\">
        <fieldset>
            <legend>Remarques</legend>
            <div class=\"row-fluid ";
        // line 95
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) ? ("") : ("desactiver-champs"));
        echo "\">
                 ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "remarques", array()), 'widget', array("attr" => array("cols" => "50", "rows" => "5", "placeholder" => "Si vous avez des remarques à faire..")));
        echo "
                <span class=\"alert-danger \">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "remarques", array()), 'errors');
        echo "</span>
            </div>
        </fieldset>
    </div>
</div>     
<div class=\"row\">
    <div class=\"span12\">

        <fieldset>
            <legend>Les bons de carburant</legend>
            <div class=\"row ";
        // line 107
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) ? ("") : ("desactiver-champs"));
        echo "\">
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "bonCarburantHuiles", array()), 'label');
        echo "
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "bonCarburantHuiles", array()), 'errors');
        echo "
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "bonCarburantHuiles", array()), 'widget');
        echo "
            </div>
        </fieldset>
    </div>
    <div class=\"span12\">
        <fieldset>
            <legend>Les bons de peage</legend>
            <div class=\"row ";
        // line 117
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "cloturerFDR", array())) ? ("") : ("desactiver-champs"));
        echo "\">
                ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "peages", array()), 'label');
        echo "
                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "peages", array()), 'errors');
        echo "
                ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "peages", array()), 'widget');
        echo "
            </div>
        </fieldset>
    </div>    

</div>
<div class=\"row-fluid\">
        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Enregistrer", array()), 'label', array("label" => "Enregistrer et Clôturer"));
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary span2 offset4")));
        echo "
</div>
<div class=\"\">";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "</div>


        ";
        // line 133
        echo "

        ";
        // line 136
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        // line 137
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "affFDR", array())) {
            // line 138
            echo "<div class=\"row-fluid\">
    <div class=\"span2 offset9\">

        <a href=\"";
            // line 141
            echo $this->env->getExtension('routing')->getPath("feuillederoute");
            echo "\">
            <button class=\"btn btn-default\">
                Revenir à la liste
            </button>
        </a>

    </div>
</div>
";
        }
        // line 150
        echo "<script>
        \$(document).ready(function() {
        boucler('chauffeur');
        boucler('manutentionnaire');
        // On recupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous interesse.
        var \$container = \$('div#fdr_adminbundle_feuillederoute_peages');
        // On ajoute un lien pour ajouter une nouvelle categorie
        var \$addLink = \$('<span class=\"span3 page-header\"><a href=\"#\" id=\"add_bon\" class=\"btn btn-default\">Ajouter un bon de peage</a></span>');
        //\$container.append(\$addLink);
        \$addLink.appendTo(\$container);
        \$container.data('index', \$container.children('div').length);
        for (var i = 0; i < \$container.children('div').length; i++)
        {
            styliserPrototype(i);
        }
        \$addLink.click(function(e) {
            
            addPeage(\$container);
            \$container.data('index', \$container.data('index') + 1);
            e.preventDefault(); // evite qu'un # apparaisse dans l'URL
            return false;
        });
        // On definit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        //var index = \$container.find(':input').length;
        // var index = \$container.children('div').length;
        // On ajoute un premier champ automatiquement s'il n'en existe pas dejà un (cas d'une nouvelle annonce par exemple).
        if (\$container.data('index') === 0) {
           // addPeage(\$container);
           // \$container.data('index', \$container.data('index') + 1);
        } else {
            // Pour chaque categorie dejà existante, on ajoute un lien de suppression
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
        }

        // La fonction qui ajoute un formulaire Categorie
        function addPeage(\$container) {
            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, '<div class=\"span12\" >Peage n°' + (\$container.data('index') + 1) + \" : </div>\")
                    .replace(/__name__/g, (\$container.data('index'))));
            addDeleteLink(\$prototype);
            \$container.append(\$prototype);
            styliserPrototype(\$container.data('index'));
            daterLesBons();

        }

        // La fonction qui ajoute un lien de suppression d'une categorie
        function addDeleteLink(\$prototype) {
            // Creation du lien
            \$deleteLink = \$('<div class=\"span2\"><a href=\"#\" class=\"btn btn-danger\">Supprimer</a></div>');
            // Ajout du lien
            \$prototype.append(\$deleteLink);
            // Ajout du listener sur le clic du lien
            \$deleteLink.click(function(e) {
                if (\$container.children('div').length > 1 || true) {
                    \$prototype.remove();
                }
                e.preventDefault(); // evite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });
    \$(document).ready(function() {
        // On recupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous interesse.
        var \$container = \$('div#fdr_adminbundle_feuillederoute_bonCarburantHuiles');
        // On ajoute un lien pour ajouter une nouvelle categorie
        var \$addLink = \$('<span class=\"span3  page-header\"><a href=\"#\" id=\"add_bon\" class=\"btn btn-default\">Ajouter un bon de caruburant</a></span>');
        //\$container.append(\$addLink);
        \$addLink.appendTo(\$container);
        \$container.data('index', \$container.children('div').length);
        for (var i = 0; i < \$container.children('div').length; i++)
        {
            styliserPrototype(i);
        }
        \$addLink.click(function(e) {
            
            addBon(\$container);
            \$container.data('index', \$container.data('index') + 1);
            e.preventDefault(); // evite qu'un # apparaisse dans l'URL
            return false;
        });
        // On definit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        //var index = \$container.find(':input').length;
        // var index = \$container.children('div').length;
        // On ajoute un premier champ automatiquement s'il n'en existe pas dejà un (cas d'une nouvelle annonce par exemple).
        if (\$container.data('index') === 0) {
            addBon(\$container);
            \$container.data('index', \$container.data('index') + 1);
        } else {
            // Pour chaque categorie dejà existante, on ajoute un lien de suppression
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
        }

        // La fonction qui ajoute un formulaire Categorie
        function addBon(\$container) {
            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, '<div class=\"span12\" >Bon n°' + (\$container.data('index') + 1) + \" : </div>\")
                    .replace(/__name__/g, (\$container.data('index'))));
            addDeleteLink(\$prototype);
            \$container.append(\$prototype);
            styliserPrototype(\$container.data('index'));
             daterLesBons();

        }

        // La fonction qui ajoute un lien de suppression d'une categorie
        function addDeleteLink(\$prototype) {
            // Creation du lien
            \$deleteLink = \$('<div class=\"span2\"><a href=\"#\" class=\"btn btn-danger\">Supprimer</a></div>');
            // Ajout du lien
            \$prototype.append(\$deleteLink);
            // Ajout du listener sur le clic du lien
            \$deleteLink.click(function(e) {
                if (\$container.children('div').length > 1) {
                    \$prototype.remove();
                }
                e.preventDefault(); // evite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });
    
    

    /************komay*************/
    function boucler(qui)
    {
        for (i = 0; i < \$(\"select[id\$='_\" + qui + \"']\").length; i++)
        {
            if (\$(\"select[id\$='_\" + qui + \"'] option:selected\").get(i).value)
            {
                selectionnerManOuChauff(\$(\"select[id\$='_\" + qui + \"'] option:selected\").get(i).parentNode.getAttribute('id'), qui);
            }
        }

    }

    function selectionnerManOuChauff(id, qui)
    {
        var res = id.split(\"_\");
        var manlst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_manutentionnaire\";
        var chaufflst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_chauffeur\";
        var manOuChauff = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_manOuChauff option[value='\" + qui + \"']\";
        var nbreManu = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_nombreManutentions\";
        var ayantMan = \"#fdr_adminbundle_feuillederoute_manutentions_\" + res[res.length - 2] + \"_ayantManutentions\";
        \$(manOuChauff).prop('selected', true);
        if (qui === 'chauffeur')
        {
            \$(manlst).hide();
            \$(chaufflst).show();
        }
        else
        {
            \$(chaufflst).hide();
            \$(manlst).show();
        }
        \$(ayantMan).attr('checked', true);
    }
    function  styliserPrototype(id)
    {
        var parentCarburant = \"div#fdr_adminbundle_feuillederoute_bonCarburantHuiles_\" + id;
        var parentPeage = \"div#fdr_adminbundle_feuillederoute_peages_\" + id;
        
        \$(parentCarburant+\",\"+parentPeage).addClass('span12');
        //\$(parentPeage).addClass('row-fluid span12');
        \$(parentCarburant+\",\"+parentPeage).css({'border':'0px solid #1F79A5'});
        \$(parentCarburant+\",\"+parentPeage).css({'background-color':'#F4F5FF'});
        //\$(parentCarburant + \" div,\"+parentPeage + \" div\").css({'height':'15px'});
        \$(parentCarburant + \" div:has(:input[type!='date']:not([type='time'])),\"+parentPeage + \" div:has(:input[type!='date']:not([type='time']))\").addClass('bons span3 required');
        \$('<div class=\"row-fluid\">').insertBefore(parentCarburant+\",\"+parentPeage);
        \$('</div>').insertAfter(parentCarburant+\",\"+parentPeage);

    }

    function calculGloabalMontant()
    {
        for (i = 0; i < \$(\"* [id\$='_montant']\").length; i++)
        {
           //var montant = document.getElementById(\$(\"select[id\$='_montant']\").get(i).attr('id'));
           var res = (\$(\"* [id \$='_montant']\").get(i).id).split('_');
           if(res[res.length - 3]==='bonCarburantHuiles')
           {
              \$(\"* [id \$='_montant']\").get(i).value =parseFloat(\"0\"+\$(\"* [id \$='_quantite']\").get(i).value.replace(\",\", \".\"))*parseFloat(\"0\"+\$(\"* [id \$='_prixUnitaire']\").get(i).value.replace(\",\", \".\"));
           }
        }
    }
    function verifCompteursDatesCloture() {
        calculGloabalMontant();
        var permutC = null;
        var permutD = null;
        var compteurs = \$(\"*[id\$='_compteur']\");
        var resCompteurs = [];
        var dates = \$(\"*[id\$='_date_date']\");
        var times = \$(\"*[id\$='_date_time']\");
        var datesPeage = \$(\"*[id\$='_datePassage_date']\");
        var timesPeage = \$(\"*[id\$='_datePassage_time']\");
        var resDates = [];
        var resDatesPeages = [];
        var valideDatesCompteurs = true;
        var dateFuture = false;
        var compteurReelAvecLesBons = true;
        var dateFutureAvecLesBons = true;
        var dateFutureAvecPea = true;
        var compteurReel = parseInt(\"0\" + \$(\"#fdr_adminbundle_feuillederoute_compteurReel\").val());
        var tdDateDebutMission = \$(\"#fdr_adminbundle_feuillederoute_dateDebutMission\").text();
        var dateString = tdDateDebutMission.split(\" \", 2);
        var tdtime = dateString[1].split(\":\", 2);
        var dateDebut = new Date(dateString[0]);
        dateDebut.setHours(parseInt(\"0\" + tdtime[0]));
        dateDebut.setMinutes(parseInt(\"0\" + tdtime[1]));
        var compteurFinal = parseInt(\"0\" + \$(\"#fdr_adminbundle_feuillederoute_compteurFinal\").val());
        var datefinMission = \$(\"#fdr_adminbundle_feuillederoute_dateFinMission_date\").val();
        var timefinMission = \$(\"#fdr_adminbundle_feuillederoute_dateFinMission_time\").val().split(\":\", 2);
        var daba = new Date().getTime();
        var dateFin = new Date(datefinMission);
        dateFin.setHours(parseInt(\"0\" + timefinMission[0]));
        dateFin.setMinutes(parseInt(\"0\" + timefinMission[1]));
        dateFuture = (daba < dateFin.getTime()) ? true : false;
        var max = 0;
        var nulle = -1;
        var maxDiff = 2000;
        for (i = 0; i < datesPeage.length; i++)
        {
            var datei = new Date(datesPeage[i].value);
            var hm = timesPeage[i].value.split(\":\", 2);
            datei.setHours(parseInt(\"0\" + hm[0]));
            datei.setMinutes(parseInt(\"0\" + hm[1]));
            resDatesPeages.push(parseInt(\"0\" + datei.getTime()));
            if (resDatesPeages[i] > dateFin.getTime() || resDatesPeages[i] < dateDebut.getTime())
            {
                dateFutureAvecPea = false;
                break;
            }
        }
        for (i = 0; i < compteurs.length; i++)
        {
            resCompteurs.push(parseInt(\"0\" + compteurs[i].value));
            if (resCompteurs[i] === 0) {
                nulle = i;
                break;
            }
            else if (resCompteurs[i] < compteurReel)
            {
                compteurReelAvecLesBons = false;
                break;
            }
            else
            {
                var datei = new Date(dates[i].value);
                var hm = times[i].value.split(\":\", 2);
                datei.setHours(parseInt(\"0\" + hm[0]));
                datei.setMinutes(parseInt(\"0\" + hm[1]));
                resDates.push(parseInt(\"0\" + datei.getTime()));
                if (resDates[i] > dateFin.getTime() || resDates[i] < dateDebut.getTime())
                {
                    dateFutureAvecLesBons = false;
                }
            }
        }

        //tri par compteur
        for (i = 0; i < resDates.length - 1; i++)
        {
            for (j = i + 1; j < resDates.length; j++)
            {
                if (resCompteurs[i] > resCompteurs[j])
                {
                    permutD = resDates[i];
                    resDates[i] = resDates[j];
                    resDates[j] = permutD;
                    permutC = resCompteurs[i];
                    resCompteurs[i] = resCompteurs[j];
                    resCompteurs[j] = permutC;
                }
            }
        }

        for (i = 0; i < resDates.length - 1; i++)
        {
            for (j = i + 1; j < resDates.length; j++)
            {
                if (resDates[i] >= resDates[j])
                {
                    valideDatesCompteurs = false;
                }
            }
        }
        if (dateDebut.getTime() >= dateFin.getTime())
        {
            alert('La date/heure de Fin Mission  doit être superieure à celle de Debut de Mission');
            return false;
        }
        else if (dateFuture)
        {
            alert('La date/heure de Fin Mission  depasse La date/heure actuelle');
            return false;
        }
        else if (compteurReel < compteurFinal) {
            \$(\"#fdr_adminbundle_feuillederoute_compteurFinal\").css('border-color', 'green');
            max = resCompteurs[resCompteurs.length - 1];
            if (nulle !== -1)
            {
                alert('Nous avons detecte un compteur dans les bons de carburant ayant une valeur nulle, veuillez corriger ce compteur');
                return false;
            }
            else if (!valideDatesCompteurs)
            {
                alert('Les Dates de prises avec les compteurs ne sont pas logiques veuillez les verifier');
                return false;
            }
            else if (!dateFutureAvecLesBons)
            {
                alert('Les dates des bons carburant doivent être comprises entre la date de debut et Fin de Mission');
                return false;
            }
            else if (!dateFutureAvecPea)
            {
                alert('Les dates des bons de peage doivent être comprises entre la date de debut et Fin de Mission');
                return false;
            }
            else if (!compteurReelAvecLesBons)
            {
                alert('Les compteurs des bons ne peuvent pas être inferieurs au compteur reel');
                return false;
            }
            else if (max > compteurFinal)
            {
                \$(\"*[id\$='_compteur']\").css('border-color', 'red');
                \$(\"#fdr_adminbundle_feuillederoute_compteurFinal\").css('border-color', 'red');
                alert('compteur Final: ' + compteurFinal + ' est inferieur à celui du dernier bon ' + max);
                return false;
            }
            else
            {
                if (compteurFinal - compteurReel > maxDiff)
                {
                    if (window.confirm('La difference entre le compteur final et le compteur reel depasse ' + maxDiff + ' \\n Vous confirmer ce compteur ?') === true) {
                        return true;
                    } else
                        return false;

                }
                \$(\"*[id\$='_compteur']\").css('border-color', 'green');
                \$(\"#fdr_adminbundle_feuillederoute_compteurFinal\").css('border-color', 'green');
                return true;
            }
        }
        else
        {
            \$(\"#fdr_adminbundle_feuillederoute_compteurFinal\").css('border-color', 'red');
            alert('Le compteur final doit être strictement superieur au compteur reel');
            return false;
        }
    }
    
</script>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:editcloture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 150,  332 => 141,  327 => 138,  325 => 137,  320 => 136,  316 => 133,  310 => 129,  304 => 127,  294 => 120,  290 => 119,  286 => 118,  282 => 117,  272 => 110,  268 => 109,  264 => 108,  260 => 107,  247 => 97,  243 => 96,  239 => 95,  227 => 88,  223 => 87,  219 => 86,  206 => 78,  202 => 77,  198 => 76,  181 => 61,  174 => 57,  170 => 56,  167 => 55,  164 => 54,  157 => 50,  153 => 49,  150 => 48,  148 => 47,  143 => 45,  139 => 44,  135 => 43,  131 => 42,  122 => 41,  118 => 39,  109 => 37,  105 => 36,  97 => 33,  93 => 32,  89 => 31,  64 => 9,  59 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
