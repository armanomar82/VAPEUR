<?php

    if(isset($_GET['aliment']) && !empty($_GET['aliment'])){
            $id = htmlspecialchars($_GET['aliment']);
            $id = ucfirst($id); 
            $id = str_replace(' ', '+', $id);
            $url = "https://api.hmz.tf/?id=$id"; 
            $api = file_get_contents($url); 
            $json = json_decode($api,true);
            $array = $json['message']; 
        
        }

    if(isset($_GET['items'])){

        $all = htmlspecialchars($_GET['items']);
        $url = "https://api.hmz.tf/?id=$all"; 
        $api = file_get_contents($url) ;     
        $json = json_decode($api,true);
        $array = $json['message'];
    
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"           content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png" />
    <title>VAPEUR DOUCE</title>
    <meta name="description"        content="Cette application est une aide-mémoire. Elle vous permet d'accéder rapidement à des informations pratiques liées à cet étonnant mode de cuisson">
    <meta property="og:title"       content="Aide-mémoire : Vapeur douce">
    <meta property="og:site_name"   content="Aide-mémoire : Vapeur douce">
    <meta property="og:url"         content="https://salindres-rugby.000webhostapp.com/">
    <meta property="og:description" content="Cette application est une aide-mémoire. Elle vous permet d'accéder rapidement à des informations pratiques liées à cet étonnant mode de cuisson.">
    <meta property="og:type"        content="siteweb">
    <meta property="og:image"       content="https://salindres-rugby.000webhostapp.com/images/légumes.jpg">
    <meta name="twitter:card"       content="summary">
    <meta name="twitter:site"       content="https://salindres-rugby.000webhostapp.com/">
    <meta name="twitter:title"      content="Aide-mémoire : Vapeur douce">
    <meta name="twitter:description"content="Cette application est une aide-mémoire. Elle vous permet d'accéder rapidement à des informations pratiques liées à cet étonnant mode de cuisson">
    <meta name=”twitter:image”      content=”https://where-your-image-is-hosted/name.jpg” />
    <script src="https://kit.fontawesome.com/b3bd20c615.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header> 
        <nav id="navbar">
            <div class="navbar-container">
                <h1 class="avbar-container__logo"><a href="index.php">VAPEUR DOUCE</a></h1>
            </div>
        </nav>
    </header>