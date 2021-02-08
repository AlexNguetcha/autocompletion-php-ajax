<?php 
header("Content-Type: text/json");
$db = [
    "langage de programmation",
    "langage régulier",
    "langage courant",
    "langage de signes",
];

if (isset($_GET["search"]) && !empty($_GET["search"])) {
    $search = $_GET["search"];
    $result = [];
    for ($i=0; $i < count($db); $i++) { 
        if (strpos($db[$i], $search) !== false) {
            array_push($result, $db[$i]);
        }
    }
    echo json_encode($result);
}else{
    echo json_encode([]);
}