<?php

/* FdrAdminBundle:FeuilleDeRoute:listeVehicule.html.twig */
class __TwigTemplate_6dbe5b186b5428acfe5587cf5084005763d35c30850ca431f17bfe53df13f0f1 extends Twig_Template
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
        // line 2
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vehicule")) {
            // line 3
            $context["t"] = "Tous les véhicules";
        }
        // line 5
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "typeVehicule")) {
            // line 6
            $context["t"] = "tous les types de véhicule";
        }
        // line 8
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "chauffeur")) {
            // line 9
            $context["t"] = "Tous les chauffeurs";
        }
        // line 11
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "chauffeurX")) {
            // line 12
            $context["t"] = ("chauffeur: " . (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")));
        }
        // line 14
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vehiculeX")) {
            // line 15
            $context["t"] = ("véhicule: " . (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")));
        }
        // line 17
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "toutes")) {
            // line 18
            $context["t"] = "toutes les feuilles";
        }
        // line 20
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == null)) {
            // line 21
            $context["id"] = 0;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        echo "Reporting|Filtre|";
        echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "html", null, true);
    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 25
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 26
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vehiculeX")) {
            // line 27
            echo "<div class=\"row-fluid\">
    <span class=\"text-capitalize header\">Durée de mise en circulation : </span>
    <span class=\"text-success\">
    ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["periode"]) ? $context["periode"] : $this->getContext($context, "periode")));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["valeur"]) {
                // line 31
                echo "   ";
                if (($context["valeur"] != 0)) {
                    echo "   
    ";
                    // line 32
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        echo " et ";
                    }
                    // line 33
                    echo "        <span class=\"text-primary badge\">";
                    echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "
    ";
                }
                // line 35
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 36
                echo "        <span class=\"badge\">Pas mentionné</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['valeur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    </span>
</div>

";
        }
        // line 42
        echo "<h2> <span class=\"text-primary \">Etat par </span>";
        echo twig_escape_filter($this->env, (isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "html", null, true);
        echo "</h2>
<br/>
<span class=\"text-primary \">Periode choisie : </span> ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "d-m-Y"), "html", null, true);
        echo " &#10174; ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateFin"]) ? $context["dateFin"] : $this->getContext($context, "dateFin")), "d-m-Y"), "html", null, true);
        echo "
<div class=\"row-fluid\" >
    <div class=\"span2 pull-right\">
        <a target=\"_blank\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etatExcel", array("dateDebut" => (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "dateFin" => (isset($context["dateFin"]) ? $context["dateFin"] : $this->getContext($context, "dateFin")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">
            <button class=\"btn btn-default\">
                Exporter 
            </button>
        </a> 
    </div>
</div>
<br/>

    ";
        // line 56
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "typeVehicule")) {
            // line 57
            echo "<table class=\"table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Type du Véhicule</th>
            <th>L/100</th>
            <th>Nombre de Kms</th>
            <th>Litres</th>
            <th>Prises</th>
            <th>Nombre de mission</th>

        </tr>
    </thead>
    <tbody>
        ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 71
                echo "        <tr>
            <td>  <a target=\"_blank\"  href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("groupeVehicule", array("dateDebut" => (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "dateFin" => (isset($context["dateFin"]) ? $context["dateFin"] : $this->getContext($context, "dateFin")), "type" => $this->getAttribute($context["entity"], "type", array()), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo " </a></td>
            <td>";
                // line 73
                if (($this->getAttribute($context["entity"], "cntkm", array()) != 0)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["entity"], "cntQ", array()) * 100) / $this->getAttribute($context["entity"], "cntkm", array())), 5, ".", ","), "html", null, true);
                    echo " ";
                } else {
                    echo " 0";
                }
                echo "</td>
            <td>";
                // line 74
                if (($this->getAttribute($context["entity"], "cntkm", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cntkm", array()), "html", null, true);
                    echo " ";
                } else {
                    echo " 0";
                }
                echo " Km </td>
            <td>";
                // line 75
                if (($this->getAttribute($context["entity"], "cntQ", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cntQ", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo " L</td>
            <td>";
                // line 76
                if (($this->getAttribute($context["entity"], "prises", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prises", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo "</td>
            <td>";
                // line 77
                if (($this->getAttribute($context["entity"], "cnt", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cnt", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "    </tbody>
</table> 
    ";
        }
        // line 83
        echo "
     ";
        // line 84
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vehicule")) {
            // line 85
            echo "<table class=\"table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Num de société </th>
            <th>Matricule</th>
            <th>Type du Véhicule</th>
            <th> Avec Remorque </th>
            <th>L/100</th>
            <th>Compteur</th>
            <th>Litres</th>
            <th>Prises</th>
            <th>Nombre de mission</th>

        </tr>
    </thead>
    <tbody>
        ";
            // line 101
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 102
                echo "        <tr>

                 ";
                // line 104
                if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) != 0)) {
                    // line 105
                    echo "                ";
                    $context["typeEnvoyer"] = ("vehiculeX|" . $this->getAttribute($context["entity"], "idVehicule", array()));
                    echo " ";
                    // line 106
                    echo "            <td > <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("groupeMateriel", array("dateDebut" => (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "dateFin" => (isset($context["dateFin"]) ? $context["dateFin"] : $this->getContext($context, "dateFin")), "type" => (isset($context["typeEnvoyer"]) ? $context["typeEnvoyer"] : $this->getContext($context, "typeEnvoyer")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numSociete", array()), "html", null, true);
                    echo "</a></td>
                ";
                } else {
                    // line 107
                    echo " <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numSociete", array()), "html", null, true);
                    echo "</td>";
                }
                echo "<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matricule", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 109
                if (($this->getAttribute($context["entity"], "remorque", array()) != 0)) {
                    echo " Oui ";
                } else {
                    echo " Non";
                }
                echo "</td>
            <td>";
                // line 110
                if (($this->getAttribute($context["entity"], "cntkm", array()) != 0)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["entity"], "cntQ", array()) * 100) / $this->getAttribute($context["entity"], "cntkm", array())), 5, ".", ","), "html", null, true);
                    echo " ";
                } else {
                    echo " 0";
                }
                echo "</td>
            <td>";
                // line 111
                if (($this->getAttribute($context["entity"], "cntkm", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cntkm", array()), "html", null, true);
                    echo " ";
                } else {
                    echo " 0";
                }
                echo " Km </td>
            <td>";
                // line 112
                if (($this->getAttribute($context["entity"], "cntQ", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cntQ", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo " L</td>
            <td>";
                // line 113
                if (($this->getAttribute($context["entity"], "prises", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prises", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo "</td>
            <td>";
                // line 114
                if (($this->getAttribute($context["entity"], "cnt", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cnt", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo "</td>

        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "    </tbody>
</table> 
    ";
        }
        // line 121
        echo "      ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "vehiculeX")) {
            // line 122
            echo "<table class=\"span12 table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Num de société </th>
            <th>Matricule </th>
            <th>Type du Véhicule</th>
            <th>Avec Remorque </th>
            <th>L/100</th>
            <th>Compteur</th>
            <th>Litres</th>
            <th>Prises</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 136
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 137
                echo "            ";
                if (($this->getAttribute($context["entity"], "kmParcouru", array()) != 0)) {
                    // line 138
                    echo "        <tr>
            <td>";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numSociete", array()), "html", null, true);
                    echo "</td> ";
                    // line 140
                    echo "            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matricule", array()), "html", null, true);
                    echo "</td>
            <td>";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                    echo "</td> 
            <td >";
                    // line 142
                    if (($this->getAttribute($context["entity"], "remorque", array()) != 0)) {
                        echo " Oui ";
                    } else {
                        echo " Non";
                    }
                    echo "</td>
            <td>";
                    // line 143
                    if (($this->getAttribute($context["entity"], "kmParcouru", array()) != 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["entity"], "quantite", array()) * 100) / $this->getAttribute($context["entity"], "kmParcouru", array())), 5, ".", ","), "html", null, true);
                        echo " ";
                    } else {
                        echo " 0";
                    }
                    echo "</td>
            <td>";
                    // line 144
                    if (($this->getAttribute($context["entity"], "kmParcouru", array()) != 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "kmParcouru", array()), "html", null, true);
                        echo " ";
                    } else {
                        echo " 0";
                    }
                    echo " Km </td>
            <td>";
                    // line 145
                    if (($this->getAttribute($context["entity"], "quantite", array()) != 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantite", array()), "html", null, true);
                    } else {
                        echo " 0";
                    }
                    echo " L</td>
            <td>";
                    // line 146
                    if (($this->getAttribute($context["entity"], "nbPrise", array()) != 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbPrise", array()), "html", null, true);
                    } else {
                        echo " 0";
                    }
                    echo "</td>
        </tr>
            ";
                }
                // line 149
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "    </tbody>
</table> 
    ";
        }
        // line 153
        echo "
     ";
        // line 155
        echo "     ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "toutes")) {
            // line 156
            echo "<table class=\"span12 table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Code Fdr </th>
            <th>Periodes</th>
\t\t\t<th>Chauffeurs</th>
            <th>Matricule véhicule </th>
            <th>Num. société véhicule</th>
            <th>Type du Véhicule</th>
            <th>Avec Remorque </th>
            <th>L/100</th>
            <th>Compteur</th>
            <th>Litres</th>
            <th>Prises</th>
\t\t\t<th>etat</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 174
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 175
                echo "            ";
                // line 176
                echo "        <tr>
            <td>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 178
                if ($this->getAttribute($context["entity"], "dateDebutMission", array())) {
                    echo "Du ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebutMission", array()), "d-m-Y H:i"), "html", null, true);
                }
                if ($this->getAttribute($context["entity"], "dateFinMission", array())) {
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFinMission", array()), "d-m-Y H:i"), "html", null, true);
                }
                echo "</td>
            <td>
\t\t\t <ol>
                ";
                // line 181
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "manutentions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
                    // line 182
                    echo "                        <li><input type=\"text\" value=\"";
                    echo twig_escape_filter($this->env, $context["man"], "html", null, true);
                    echo "\" size=\"35\" readonly/></li>                     
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "                    </ol>
\t\t\t</td>
\t\t\t<td>";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vehicule", array()), "matricule", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vehicule", array()), "numSociete", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "vehicule", array()), "type", array()), "html", null, true);
                echo "</td> 
            <td >";
                // line 189
                if (($this->getAttribute($this->getAttribute($context["entity"], "vehicule", array()), "remorque", array()) != 0)) {
                    echo " Oui ";
                } else {
                    echo " Non";
                }
                echo "</td>
            <td>";
                // line 190
                if (($this->getAttribute($context["entity"], "calcKmParcourus", array()) != 0)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["entity"], "calcQuantite", array()) * 100) / $this->getAttribute($context["entity"], "calcKmParcourus", array())), 5, ".", ","), "html", null, true);
                    echo " ";
                } else {
                    echo " 0";
                }
                echo "</td>
            <td>";
                // line 191
                if (($this->getAttribute($context["entity"], "calcKmParcourus", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calcKmParcourus", array()), "html", null, true);
                    echo " ";
                } else {
                    echo " 0";
                }
                echo " Km </td>
            <td>";
                // line 192
                if (($this->getAttribute($context["entity"], "calcQuantite", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calcQuantite", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo " L</td>
            <td>";
                // line 193
                if (($this->getAttribute($context["entity"], "calcPrise", array()) != 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calcPrise", array()), "html", null, true);
                } else {
                    echo " 0";
                }
                echo "</td>
\t\t\t<td>";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
                echo "</td>
        </tr>
            ";
                // line 197
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "    </tbody>
</table> 
    ";
        }
        // line 201
        echo "     ";
        // line 202
        echo "
    ";
        // line 203
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "chauffeur")) {
            // line 204
            echo "<table class=\"span12 table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom Prénom</th>
              ";
            // line 211
            echo "            <th>Nombre de jours</th>
            <th>Nombre de km parcourus </th>
            <th>Nombre de repas</th>
            <th>Nombre de petit déjeuner </th>
            <th>Nombre de découcher</th>
            <th>Nombre de manutention </th>
            <th>Nombre de prise</th>
            <th>Quantité</th>
            <th>Nombre de conduction de remorque</th>

        </tr>
    </thead>
    <tbody>
        ";
            // line 224
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 225
                echo "        <tr>
                ";
                // line 226
                $context["typeChauffeurEnvoyer"] = ("chauffeurX|" . $this->getAttribute($context["entity"], "chauffId", array()));
                // line 227
                echo "            <td> <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("groupeMateriel", array("dateDebut" => (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "dateFin" => (isset($context["dateFin"]) ? $context["dateFin"] : $this->getContext($context, "dateFin")), "type" => (isset($context["typeChauffeurEnvoyer"]) ? $context["typeChauffeurEnvoyer"] : $this->getContext($context, "typeChauffeurEnvoyer")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "chauffeurMatricule", array()), "html", null, true);
                echo " </a></td>
            <td>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "chauffNom", array()), "html", null, true);
                echo "</td> 
                ";
                // line 230
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbJours", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "kmParcouru", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbRepas", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbPetitDej", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbDecoucher", array()), "html", null, true);
                echo " </td>
            <td>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbManutention", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prise", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantiteLitre", array()), "html", null, true);
                echo " </td>
            <td>";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "remorque", array()), "html", null, true);
                echo " </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "    </tbody>
</table>
    ";
        }
        // line 244
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "chauffeurX")) {
            // line 245
            echo "<table class=\"span12 table-responsive records_list table-bordered table-condensed\">
    <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom Prénom</th>
            <th>Dates de mission </th>
            <th>Véhicule</th>
              ";
            // line 253
            echo "            <th>Nombre de jours</th>
            <th>Nombre de km parcourus </th>
            <th>Nombre de repas</th>
            <th>Nombre de petit déjeuner </th>
            <th>Nombre de découcher</th>
            <th>Nombre de manutention </th>
            <th>Nombre de prise</th>
            <th>Quantité</th>
            <th>Nombre de conduction de remorque</th>

        </tr>
    </thead>
    <tbody>
        ";
            // line 266
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 267
                echo "        <tr>
            <td>";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "chauffeurMatricule", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "chauffNom", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vehicule", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbJours", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "kmParcouru", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbRepas", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbPetitDej", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 276
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbDecoucher", array()), "html", null, true);
                echo " </td>
            <td>";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbManutention", array()), "html", null, true);
                echo "</td> 
            <td>";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prise", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "quantiteLitre", array()), "html", null, true);
                echo " </td>
            <td>";
                // line 280
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "remorque", array()), "html", null, true);
                echo " </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "    </tbody>
</table>
    ";
        }
        // line 286
        echo "
<div class=\"span12\" style=\"text-align: center\">    
    <div class=\"row-fluid\">        
        <div class=\"pagination-lg\">";
        // line 289
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>   
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:listeVehicule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  821 => 289,  816 => 286,  811 => 283,  802 => 280,  798 => 279,  794 => 278,  790 => 277,  786 => 276,  782 => 275,  778 => 274,  774 => 273,  770 => 272,  766 => 271,  762 => 270,  758 => 269,  754 => 268,  751 => 267,  747 => 266,  732 => 253,  723 => 245,  720 => 244,  715 => 241,  706 => 238,  702 => 237,  698 => 236,  694 => 235,  690 => 234,  686 => 233,  682 => 232,  678 => 231,  673 => 230,  669 => 228,  662 => 227,  660 => 226,  657 => 225,  653 => 224,  638 => 211,  631 => 204,  629 => 203,  626 => 202,  624 => 201,  619 => 198,  613 => 197,  608 => 194,  600 => 193,  592 => 192,  583 => 191,  573 => 190,  565 => 189,  561 => 188,  557 => 187,  553 => 186,  549 => 184,  540 => 182,  536 => 181,  523 => 178,  519 => 177,  516 => 176,  514 => 175,  510 => 174,  490 => 156,  487 => 155,  484 => 153,  479 => 150,  473 => 149,  463 => 146,  455 => 145,  446 => 144,  436 => 143,  428 => 142,  424 => 141,  419 => 140,  416 => 139,  413 => 138,  410 => 137,  406 => 136,  390 => 122,  387 => 121,  382 => 118,  368 => 114,  360 => 113,  352 => 112,  343 => 111,  333 => 110,  325 => 109,  321 => 108,  312 => 107,  304 => 106,  300 => 105,  298 => 104,  294 => 102,  290 => 101,  272 => 85,  270 => 84,  267 => 83,  262 => 80,  249 => 77,  241 => 76,  233 => 75,  224 => 74,  214 => 73,  208 => 72,  205 => 71,  201 => 70,  186 => 57,  184 => 56,  172 => 47,  164 => 44,  158 => 42,  152 => 38,  145 => 36,  132 => 35,  124 => 33,  120 => 32,  115 => 31,  97 => 30,  92 => 27,  90 => 26,  84 => 25,  81 => 24,  74 => 23,  70 => 1,  67 => 21,  65 => 20,  62 => 18,  60 => 17,  57 => 15,  55 => 14,  52 => 12,  50 => 11,  47 => 9,  45 => 8,  42 => 6,  40 => 5,  37 => 3,  35 => 2,  11 => 1,);
    }
}
