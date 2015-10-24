<?php

$dbhost = "localhost";
$dbuser = "ctm-messagerie";
$dbpass = "myAdmin@ctm-Komay2015";
$dbname = "feuillederoute";
try {
$cnx = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname , $dbuser, $dbpass);
} catch (PDOException $e) {
die( "Erreur ! : " . $e->getMessage() );
}

function raffClientsAffr() {
    $dec = ($_GET['encompte'] == 2) ? (">=0") : (($_GET['encompte'] == 1) ? "=1" : "=0");
    $tbl = "client";
    $cnd = "clientaffret = 1 and encompte" . $dec;
    $query = "SELECT * FROM " . $tbl . " WHERE " . $cnd . " order by id desc";
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    $display_string = '<option value="" selected="selected">Choisir un Client Affretement</option>';
    $i = 0;
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
        if ($i == 0) {
            $display_string .= "<option class='".($row['encompte']==1?'colorerOption':'')."' value='$row[id]' selected='selected'>" . $row['nomentreprise'] . "</option>";
        } else {
            $display_string .= "<option class='".($row['encompte']==1?'colorerOption':'')."' value='$row[id]'>" . $row['nomentreprise'] . "</option>";
        }
        $i++;
    }
    echo $display_string;
}

function secteursDePrestation() {
    
//build query
    $name = $_GET['typeprestation_id'];
    $tbl = "secteur_typeprestation";
    $cnd = "typeprestation_id = $name";
    $display_string = null;
    $query = "SELECT secteur_id FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
//$display_string .= "<option>$row[secteur_id]</option>";
        $tbl2 = "secteur";
        $cnd2 = "id = ".$row['secteur_id'];
        $query2 = "SELECT libelle FROM " . $tbl2 . " WHERE " . $cnd2;
        $qry_result2 = $GLOBALS['cnx']->query($query2) or die(mysql_error());
        while ($row2 = $qry_result2->fetch(PDO::FETCH_ASSOC)) {
            /**/
            $tbl3 = "client_secteur";
            $cnd3 = "secteur_id = " . $row['secteur_id'];
            $exstClient = false;
            $query3 = "SELECT client_id FROM " . $tbl3 . " WHERE " . $cnd3;
            $qry_result3 = $GLOBALS['cnx']->query($query3) or die(mysql_error());
            while ($row3 = $qry_result3->fetch(PDO::FETCH_ASSOC)) {
                $exstClient = true;
            }
            /**/
            if ($exstClient) {
                $display_string .= "<option value='".$row['secteur_id']."'>$row2[libelle]</option>";
            }
        }
    }
    echo $display_string;
}

function compteurVehicule() {
    
//build query
    $name = $_GET['vehicule_id'];
//$name = mysql_real_escape_string($name);
    $tbl = "vehicule";
    $cnd = "id =" . $name;
    $display_string = null;
    $query = "SELECT compteur FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
        $display_string = $row['compteur'];
    }
    echo $display_string;
}

function clientsDeSecteur() {
    
//build query
    $name = $_GET['secteur_id'];
    $tab = explode("|", $name);
    $res = "";
    $res2 = "";
    $row2 = 0;
    $row = 0;
    $i = 0;
    $cnt = 0;
    foreach ($tab as $i) {

        $table = "secteur";
        $condition = "id= $i";
        $q = "SELECT libelle FROM " . $table . " WHERE " . $condition;
        $q_res = $GLOBALS['cnx']->query($q) or die(mysql_error());
        $secteurs = array();
        while ($rowS = $q_res->fetch(PDO::FETCH_ASSOC)) {
            $secteurs[] = $rowS['libelle'];
        }
        //$name = mysql_real_escape_string($name);
        $tbl = "client_secteur";
        $cnd = "secteur_id = $i";

        $query = "SELECT client_id FROM " . $tbl . " WHERE " . $cnd;
        $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());

// Insert a new row in the table for each person returned
        while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
//$display_string .= "<option>$row[secteur_id]</option>";
            $tbl2 = "client";
            $cnd2 = "id = " . $row['client_id'] . " and clientramass = 1 ";
            $query2 = "SELECT * FROM " . $tbl2 . " WHERE " . $cnd2;
            $qry_result2 = $GLOBALS['cnx']->query($query2) or die(mysql_error());
           // $i=0;
            while ($row2 = $qry_result2->fetch(PDO::FETCH_ASSOC)) {
                $color = ($row2['encompte'] == 1) ? 'blue' : 'black';
                $encompte = ($row2['encompte'] == 1) ? ' : En compte' : ' : Non en compte';
                $nom = $row2['nomentreprise'];
                $secteur = $secteurs[0];
                $display = $nom . '|' . $secteur;
                //
                $nomAbreg = ((strlen($row2['nomentreprise'])>3)?(substr($row2['nomentreprise'], 0,3)."<span style='color:#E1E1E1'>..</span>"):($row2['nomentreprise']));
                $secteurAbreg = ((strlen($secteurs[0])>3)?(substr($secteurs[0], 0,3)."<span style='color:#E1E1E1'>..</span>"):($secteurs[0]));
                $displayAbreg = $nomAbreg . '|' . $secteurAbreg;
                //
                //$res = "<option title='" . $row2["numcompte"] . $encompte . "' style='color:$color;' value='" . $row['client_id'] . '-' . $i . "'>" . $display . "</option>";
                // $res = "<option title='$display:$encompte' style='color:$color;' value='".$row['client_id']."'>".$row['client_id']."-".$i."</option>";
                $res2 ='<span class="span3" style="margin:1px;background-color:#F1F1F1;"'.
                        ' title="'.$display.$encompte.'|'.$row2["numcompte"].'">'.
                        '<input checked '.
                       'type="checkbox"  id="fdr_adminbundle_feuillederoute_clients_'.$row["client_id"].
                       '" name="fdr_adminbundle_feuillederoute[clients][]"   value="'.$row['client_id'] . '-' . $i.'" />'.
                       '<label  style="color:'.$color.'" for="fdr_adminbundle_feuillederoute_clients_'.$row["client_id"].'" />'.
                       $displayAbreg.'</label></span>';
                $cnt++;
                echo $res2;
                //echo $res;
            }
        }
    }
    if ($cnt == 0) {
        echo "<font color='red'>Aucun client pour ce secteur.</font>";
    }
}

function hideClient() {
    
    //build query
    $name = $_GET['typeprestation_id'];
    //$name = mysql_real_escape_string($name);
    $tbl = "typeprestation";
    $cnd = "id = $name";
    $display_string = null;
    $query = "SELECT libelle FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    $row = $qry_result->fetch(PDO::FETCH_ASSOC);
    if ($row[libelle] === "Ramassage") {
        echo "Ramassage";
    } else {
        echo "autre";
    }
}

function villeTypeConsommation() {
    
//build query
    $name = $_GET['depot_id'];
//$name = mysql_real_escape_string($name);
    $tbl = "depot";
    $cnd = "id = $name";
    $display_string = null;
    $query = "SELECT ville_id FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
        $tbl2 = "ville";
        $cnd2 = "id = $row[ville_id]";
        $query2 = "SELECT libelle FROM " . $tbl2 . " WHERE " . $cnd2;
        $qry_result2 = $GLOBALS['cnx']->query($query2) or die(mysql_error());
        while ($row2 = $qry_result2->fetch(PDO::FETCH_ASSOC)) {
            $display_string = "<option value='$row[ville_id]'>$row2[libelle]</option>";
        }
    }
    echo $display_string;
}

$ville = " ";

function changerVille() {
    
//build query
    $name = $_GET['ville_id'];
    $ville = $name;
//$name = mysql_real_escape_string($name);
    $tbl = "typeconsommation";
    $cnd = "ville_id = ".$name;
    $display_string = '<option value="" selected="selected">Choisir un type de Consommation</option>';
    $query = "SELECT id, depot_id  FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
        if ($row['depot_id'] != null) {
            $tbl2 = "depot";
            $cnd2 = "id = ".$row['depot_id'];
            $query2 = "SELECT libelle FROM " . $tbl2 . " WHERE " . $cnd2;
            $qry_result2 = $GLOBALS['cnx']->query($query2) or die(mysql_error());
            while ($row2 = $qry_result2->fetch(PDO::FETCH_ASSOC)) {
                $display_string .= "<option value='".$row[id]."'>".$row2['libelle']."</option>";
            }
        }else {
            $display_string .= "<option value='".$row[id]."'>Total</option>";
        }
    }
    echo $display_string;
}

function changerTypeIntExt() {
    
//build query
    $name = $_GET['type'];
    $pieces = explode("/", $name);
//$name = mysql_real_escape_string($name);
    $tbl = "typeconsommation";
    $cnd = "type LIKE '$pieces[0]' AND ville_id = $pieces[1]";
//$cnd= "type LIKE 'interne' AND ville_id =2";
    $display_string = null;
    $query = "SELECT id, depot_id  FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
        if ($row[depot_id] != null) {

            $tbl2 = "depot";
            $cnd2 = "id = $row[depot_id]";
            $query2 = "SELECT libelle FROM " . $tbl2 . " WHERE " . $cnd2;
            $qry_result2 = $GLOBALS['cnx']->query($query2) or die(mysql_error());
            while ($row2 = $qry_result2->fetch(PDO::FETCH_ASSOC)) {
                $display_string .= "<option value='$row[id]'>$row2[libelle]</option>";
            }
        } else {
            $display_string .= "<option value='$row[id]'>Total</option>";
        }
    }
    echo $display_string;
}

function calculerMontant() {
    
//build query
    $name = $_GET['depot_id'];
    $pieces = explode("/", $name);
    $tbl = "typeconsommation";
    $cnd = "id = ".$pieces[0];
    $display_string = null;
    $query = "SELECT prixUnitaire  FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
        $montant = floatval($pieces[1]) * floatval($row['prixUnitaire']);
        $display_string = $montant."/".floatval($row['prixUnitaire']);
        // $display_string="<input type='text' id='fdr_adminbundle_feuillederoute_bonCarburantHuiles_0_montant' value='900' name='fdr_adminbundle_feuillederoute[bonCarburantHuiles][0][montant]' required='required' title='Montant de bonCarburant'>";
    }
    echo $display_string;
}

function depotsDeFiliale() {
    
//build query
    $name = $_GET['filiale_id'];
    $tbl = "depot";
    $cnd = "filiale_id = $name";
    $display_string = '<option value="" selected="selected">Choisir un depot</option>';
    $query = "SELECT libelle FROM " . $tbl . " WHERE " . $cnd;
    $qry_result = $GLOBALS['cnx']->query($query) or die(mysql_error());
    while ($row = $qry_result->fetch(PDO::FETCH_ASSOC)) {
        $display_string .= "<option value='$row[id]'>$row[libelle]</option>"; 
        }
    echo $display_string;
}

appliquerMethode($_GET['nomMethode']);

function appliquerMethode($nomMethode) {
    // echo "<option>".$_GET['nomMethode']."</option>";
    switch ($nomMethode) {
        case "secteursDePrestation":
            secteursDePrestation();
            break;
        case "clientsDeSecteur":
            clientsDeSecteur();
            break;
        case "hideClient":
            hideClient();
            break;
        case "compteurVehicule":
            compteurVehicule();
            break;
        case "villeTypeConsommation":
            villeTypeConsommation();
            break;
        case "changerVille":
            changerVille();
            break;
        case "changerTypeIntExt":
            changerTypeIntExt();
            break;
        case "calculerMontant":
            calculerMontant();
            break;
        case "raffClientsAffr":
            raffClientsAffr();
            break;
        case "depotsDeFiliale":
            depotsDeFiliale();
            break;
        default: defaut();
    }
}

function defaut() {
    echo "<option>nn defini</option>";
}
