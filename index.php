<?php
require_once './Views/includes/header.php';
require_once  './autoload.php';
require_once './controllers/HomeControllers.php';
require_once './Views/includes/alert.php';



$home=new HomeController();

$pages=['index/index','index/vols','index/ecole','index/travail','index/maison','index/academie','index/club','inscription/inscription','login/login','code/code','categorie/categorie','titrequiz/titrequiz','quizma/quizma','code/nom','code/question','code/questions','logout/logout','code/score','titrequiz/questionbanck','titrequiz/code','titrequiz/scoreinviter'];

//Indique si une valeur appartient à un tableau



// if (isset($_SESSION['logged']) && ($_SESSION['logged'])=== true ){

if(isset($_GET['url'])){

    $url = rtrim($_GET['url'], '/');//Supprime les espaces (ou d'autres caractères) de fin de chaîne
    $url = filter_var($url, FILTER_SANITIZE_URL); //filtre une variable avec le filtre spécifié. && Supprime tous les caractères sauf les lettres, chiffres et $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    $url = explode('/', $url); // divise une chaîne en un tableau.
    $redirect = $url[0];
    if($url[1]){
        $redirect = $url[0]. '/' .$url[1];
    }
    if(in_array($redirect,$pages))
    {
        $page=$redirect;
        $home->index($page);

    }
    else{
        include('views/includes/404.php');
    }
}
else
{
    $home->index('index/index');
    require_once './Views/includes/footer.php';
}
 
















?>