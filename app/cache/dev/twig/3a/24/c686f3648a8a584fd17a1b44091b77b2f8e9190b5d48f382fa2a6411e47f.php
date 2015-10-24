<?php

/* FdrAdminBundle:FeuilleDeRoute:new.html.twig */
class __TwigTemplate_3a24c686f3648a8a584fd17a1b44091b77b2f8e9190b5d48f382fa2a6411e47f extends Twig_Template
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
        echo "Feuille de route|New";
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
        echo "<div class=\"page-header\">  <h2> Une nouvelle feuille de route</h2> </div>  

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"row\">
    <span class=\"alert-danger \">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</span>
</div>
<div class=\"row\">
    <div class=\"span7\">
        <div class=\"row\">
            <div class=\"span4\">
                <fieldset>
                    <legend>Début de mission  </legend>
                    <div class=\"row-fluid\">
                        <div class=\"span5\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'label', array("label" => " En Instance"));
        echo "</div>
                        <span class=\"\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'widget');
        echo "</span><span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fdrInstance", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebutMission", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid ";
        // line 25
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array())) ? ("") : ("cacher"));
        echo "\">
                        <div class=\"span1\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiale", array()), 'errors');
        echo "</span>
                    </div>


                    <div class=\"row-fluid ";
        // line 31
        echo (($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "crFDRAutrAgence", array())) ? ("") : ("cacher"));
        echo "\">
                        <div class=\"span1\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'label', array("label" => " "));
        echo "</div>
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'widget');
        echo "
                        <span class=\"alert-danger \">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depot", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'label', array("label" => " "));
        echo "</div>
                        <span class=\"\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'widget');
        echo "</span><span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicule", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compteurReel", array()), 'errors');
        echo "</span>
                    </div>

                </fieldset>
            </div>

            <div class=\"span3\">
                <fieldset> 
                    <legend>Prestation/Clients/Secteurs  </legend>

                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typePrestation", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span11\"><label>Prestation : </label></div>
";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typePrestation", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typePrestation", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span1\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secteurs", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span11\"><label>Secteurs : </label></div>
";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secteurs", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secteurs", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"row-fluid\">
                        <div class=\"span12\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clients", array()), 'label', array("label" => " "));
        echo "</div>
                        <div class=\"span12\"><label>Clients : </label></div>
";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clients", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clients", array()), 'errors');
        echo "</span>
                    </div>

                </fieldset>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"span6\">
                <fieldset>
                    <legend> Manutentions Externes </legend>
                    <div class=\"span3\">
                        <fieldset>
                            <legend class=\"subfieldset\" style=\"text-align: center\"> 1 </legend>
                            <div class=\"row-fluid\">
                                <span class=\"span1\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'label', array("label" => " "));
        echo "</span>
";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne1", array()), 'errors');
        echo "</span>
                            </div>
                            <div class=\"row-fluid\">
                                <span class=\"span1\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'label', array("label" => " "));
        echo "</span>
";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne1", array()), 'errors');
        echo "</span>
                            </div>
                        </fieldset>
                    </div>
                    <div class=\"span3\">
                        <fieldset>
                            <legend class=\"subfieldset\" style=\"text-align: center\"> 2 </legend>
                            <div class=\"row-fluid\">
                                <span class=\"span1\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'label', array("label" => " "));
        echo "</span>
";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomManExterne2", array()), 'errors');
        echo "</span>
                            </div>
                            <div class=\"row-fluid\">
                                <span class=\"span1\">";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'label', array("label" => " "));
        echo "</span>
";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinManExterne2", array()), 'errors');
        echo "</span>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class=\"span4\">
        <fieldset>
            <legend> Manutention/Chauffeur </legend>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutention", array()), 'label', array("label" => " "));
        echo "</div>
";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutention", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutention", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span1\">";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'label', array("label" => " "));
        echo "</div>
                <div class=\"span5\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'widget');
        echo "<span class=\"alert-danger \">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manutentions", array()), 'errors');
        echo "</span></div>
            </div>
        </fieldset>
    </div>
</div>

<div class=\"row-fluid\">
    <div class=\"span5 offset5\">";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "</div>
</div>
</div>

<div class=\"cacher\">";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</div>
    ";
        // line 129
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    \$('#fdr_adminbundle_feuillederoute_secteurs, label[for=\"fdr_adminbundle_feuillederoute_secteurs\"]').hide();
    \$('#fdr_adminbundle_feuillederoute_clients').hide();

    jQuery(document).ready(function() {
        \$(\"select[id\$='_manutentionnaire'],select[id\$='_chauffeur'],input[id\$='_nombreManutentions'],input[id\$='_ayantManutentions']\").hide();
        var \$container = \$('div#fdr_adminbundle_feuillederoute_manutentions');
        var \$addLink = \$('<br/><a href=\"#\" id=\"add_manutention\" class=\"btn btn-default\">Ajouter Chauff/Manu.</a>');
        \$container.append(\$addLink);
        \$container.data('index', \$container.children('div').length);
        boucler('chauffeur');
        boucler('manutentionnaire');

        \$addLink.click(function(e) {
            var global = parseInt(\"0\" + \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val());
            \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val(global);
            var tot = 0;
            for (i = 0; i < \$(\"*[id\$='_nombreManutentions']\").length; i++)
            {
                var elt = parseInt(\"0\" + \$(\"*[id\$='_nombreManutentions']\").get(i).value);
                \$(\"*[id\$='_nombreManutentions']\").get(i).value = elt;
                tot += elt;
            }
            if (tot <= global) {
                addManutention(\$container);
                \$container.data('index', \$container.data('index') + 1);
                if (\$container.children('div').length >= 3)
                {
                    \$('#add_manutention').hide(200);
                    \$('#add_manutention').disabled = true;
                }
            }
            else {
                alert('Le total des manutentions (' + tot + ') est > au nombre total (' + global + '),on va reinitialiser ces champs');
                \$(\"*[id\$='_nombreManutentions']\").val(0);
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'red');
                \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").css('border-color', 'red');
            }
            e.preventDefault();
            return false;
        });
        if (\$container.data('index') === 0) {
            addManutention(\$container);
            \$container.data('index', \$container.data('index') + 1);
        }
        else {
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));

            });
        }
        function addManutention(\$container) {

            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Manutention N°' + (\$container.data('index') + 1))
                    .replace(/__name__/g, (\$container.data('index'))));
            addDeleteLink(\$prototype);
            \$container.append(\$prototype);
            visibilte(\$container.data('index'), false);

        }

        function addDeleteLink(\$prototype) {
            \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger btn-sm\">Supprimer</a>');
            \$prototype.append(\$deleteLink);
            \$deleteLink.click(function(e) {
                if (\$container.children('div').length <= 5 && \$container.children('div').length > 1)
                {
                    \$prototype.remove();
                    \$('#add_manutention').show(200);
                    \$('#add_manutention').disabled = false;
                }
                e.preventDefault();
                return false;
            });
        }
    });

    function boucler(qui) {
        for (i = 0; i < \$(\"select[id\$='_\" + qui + \"']\").length; i++)
        {
            if (\$(\"select[id\$='_\" + qui + \"'] option:selected\").get(i).value)
            {
                selectionnerManOuChauff(\$(\"select[id\$='_\" + qui + \"'] option:selected\").get(i).parentNode.getAttribute('id'), qui);
            }
        }

    }

    function selectionnerManOuChauff(id, qui) {
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
        else if (qui === 'manutentionnaire')
        {
            \$(chaufflst).hide();
            \$(manlst).show();

        }
        else
        {
            \$(chaufflst).hide();
            \$(manlst).hide();
        }
        \$(ayantMan).attr('checked', true);
    }

    function visibilte(id, etat) {
        var manlst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + id + \"_manutentionnaire\";
        var chaufflst = \"#fdr_adminbundle_feuillederoute_manutentions_\" + id + \"_chauffeur\";
        var nbreManu = \"#fdr_adminbundle_feuillederoute_manutentions_\" + id + \"_nombreManutentions\";
        if (etat === false)
        {
            \$(manlst).hide();
            \$(chaufflst).hide();
            \$(nbreManu).hide();
        }
        else
        {
            \$(manlst).show();
            \$(chaufflst).show();
            \$(nbreManu).show();
        }
    }

    function verifMan() {
        
        /*for (j = 0; j < \$(\"*[id\$='_manOuChauff']\").length; j++)
         {
         if(\$(\"*[id\$='_manOuChauff']\").get(j).value!==null && \$(\"*[id\$='_manOuChauff']\").get(j).value!==\"\")
         {
         if(\$(\"*[id\$='_manOuChauff']\").get(j).value===\"chauffeur\"){selChauff = true;return true;}
         else {continue;}
         }
         }*/
        // return selChauff;//au moins un chauffeur doit être selectionne
        for (i = 0; i < \$(\"*[id\$='_chauffeur']\").length; i++)
        {
            for (j = i + 1; j < \$(\"*[id\$='_chauffeur']\").length; j++)
            {
                if (\$(\"*[id\$='_chauffeur']\").get(i).value === \$(\"*[id\$='_chauffeur']\").get(j).value
                        && \$(\"*[id\$='_chauffeur']\").get(i).value !== \"\"
                        && \$(\"*[id\$='_manOuChauff']\").get(i).value === \$(\"*[id\$='_manOuChauff']\").get(j).value)
                {
                    alert(\"Un seul/unique chauffeur pour chaque choix\");
                    return false;
                }
            }
        }
        for (i = 0; i < \$(\"*[id\$='_manutentionnaire']\").length; i++)
        {
            for (j = i + 1; j < \$(\"*[id\$='_manutentionnaire']\").length; j++)
            {
                if (\$(\"*[id\$='_manutentionnaire']\").get(i).value === \$(\"*[id\$='_manutentionnaire']\").get(j).value
                        && \$(\"*[id\$='_manutentionnaire']\").get(i).value !== \"\"
                        && \$(\"*[id\$='_manOuChauff']\").get(i).value === \$(\"*[id\$='_manOuChauff']\").get(j).value)
                {
                    alert(\"Un seul/unique manutentionnaire pour chaque choix\");
                    return false;
                }
            }
        }
        if (true)
        {
            var global = parseInt(\"0\" + \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val());
            \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").val(global);
            var tot = 0;
            for (i = 0; i < \$(\"*[id\$='_nombreManutentions']\").length; i++)
            {
                var elt = parseInt(\"0\" + \$(\"*[id\$='_nombreManutentions']\").get(i).value);
                \$(\"*[id\$='_nombreManutentions']\").get(i).value = elt;
                tot += elt;
            }
            if (tot > global) {
                alert(\"La répartition des manutentions n'est pas correcte(Le total des manutentions doit être <= au nombre voulu des manu.,on va reinitialiser ces champs )\");
                \$(\"*[id\$='_nombreManutentions']\").val(0);
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'red');
                \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").css('border-color', 'red');
                return false;
            }
            else
            {
                \$(\"*[id\$='_nombreManutentions']\").css('border-color', '#515151');
                if (tot === global) {
                    \$(\"*[id='fdr_adminbundle_feuillederoute_nomManExterne1']\").val(\"\");
                    \$(\"*[id='fdr_adminbundle_feuillederoute_nomManExterne2']\").val(\"\");
                    \$(\"*[id='fdr_adminbundle_feuillederoute_cinManExterne1']\").val(\"\");
                    \$(\"*[id='fdr_adminbundle_feuillederoute_cinManExterne2']\").val(\"\");
                }
                if (\$(\"*[id\$='_nombreManutentions']\").css('border-color') === 'rgb(255,0,0)')
                {
                    \$(\"*[id\$='_nombreManutentions']\").css('border-color', 'green');
                    \$(\"#fdr_adminbundle_feuillederoute_nombreManutention\").css('border-color', 'green');
                }
                if(\$(\"*[id\$='_manOuChauff'] option:selected[value='chauffeur']\").length===0 && \$(\"*[id\$='_manOuChauff'] option:selected[value='']\").length===0)
                {
                    alert(\"Un chauffeur au minimum doit etre selectionne\");
                    return false;
                }
                return true;
            }

        }
    }

</script>

";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 129,  314 => 128,  307 => 124,  295 => 117,  291 => 116,  283 => 113,  279 => 112,  262 => 100,  258 => 99,  250 => 96,  246 => 95,  233 => 87,  229 => 86,  221 => 83,  217 => 82,  198 => 68,  193 => 66,  184 => 62,  179 => 60,  170 => 56,  165 => 54,  149 => 43,  145 => 42,  137 => 39,  133 => 38,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  105 => 27,  101 => 26,  97 => 25,  90 => 23,  86 => 22,  78 => 19,  74 => 18,  62 => 9,  57 => 7,  53 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
