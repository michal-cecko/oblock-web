<?php
require_once("../include/functions.php");
require_once("../classes/Database.php");

session_start();

$db = new Database();

$lastID = validation($_POST['lastid']); 
$typ = validation($_POST['typ']); 

if($typ == "novinky" || $typ == "podujatia") {
    $output = "";
    if($typ == "novinky") {
        $typClanku = "novinka";
        $clanky = new IteratorList($db, "Novinka", "novinky");
    } else {
        $typClanku = "podujatie";
        $clanky = new IteratorList($db, "Podujatie", "podujatia");
    }
    $clanky->load(" WHERE id < $lastID ORDER BY id DESC LIMIT 4");
    
    if($clanky->getCount() > 0){
    
        while($clanok = $clanky->getNext()){   
            $textRaw = cutstring(strip_tags($clanok->getObsah()), 70);
            $output .= ' <div class="col-md-3 p-4">
                <a href="'.BASE_URL.$typClanku."/".$clanok->getUrl().'">
                    <div class="clanok-container">
                    <div class="img-container">
                    <img src="'.BASE_URL.'assets/img/'.$typ.'/'.$clanok->getUrl().'/main-image.jpg">
                        <p class="datum"><i class="far fa-calendar-alt"></i>'.$clanok->getDatum("j.n.Y").'</p>
                    </div>
                    <div class="popis">
                        <h3 class="nadpis">'.$clanok->getNadpis().'</h3>
                        <p class="text">'.$textRaw.'</p>
                    </div>
                    </div>
                </a> 
            </div> ';
    
            $lastID = $clanok->getId();
        }
        $zostatok = $db->query("SELECT id FROM $typ WHERE id < $lastID ORDER BY id DESC");
        if($zostatok){
            $output .= '
            <div class="remove button-container">
                <button type="button" class="show-more-btn" id="show-more-btn" data-lastid="'.$lastID.'">Zobraz viac</button>
            </div>
            ';
        }
        echo $output;
    }
}
?>