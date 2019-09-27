<?php 
require_once './config.php';
if(session_status() == PHP_SESSION_NONE)
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Core</title>

    <!-- Bulma Minified CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" rel="stylesheet" type="text/css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="./assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/owl.theme.default.min.css">
    <!-- Custom Stylesheet -->
    <link href="./assets/style.css" rel="stylesheet" type="text/css">
    <!-- jQuery Script -->
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
</head>
<body>
<?php include 'navigation.php' ?>