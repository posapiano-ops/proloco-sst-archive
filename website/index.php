<?php
include 'template.php';
$p="index";

if (isset($_GET["page"])){
    $p=$_GET["page"];
    if ($p!=basename($p) || $p=="index" || !file_exists($p.".html") || !preg_match("/^[A-Za-z0-9-_]+$/",$p)){
        $p="index"; //dovrebbe essere una pagina di errore ma non è!!!!
    }
    Template::view($p.'.html');
}else{
    Template::view($p.'.html');
}

#Template::view('about.html', [
#    'title' => 'Home Page',
#    'colors' => ['red','blue','green']
#]);

#Template::clearCache();