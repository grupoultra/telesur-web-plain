<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css" />

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/ajustes-plain.css">
</head>
<body ng-app="telesurApp">
<!--[if lte IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">

<?php
    include_once 'partials/header-advertisement.html';
    include_once 'partials/header.php';
    include_once 'partials/busqueda.php';

    $footer_id = "footer";
    $subfooter_id = "subfooter";
    include_once 'partials/subfooter.php';
    include_once 'partials/footer.php';
?>
</div>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
<script>
    !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
            (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
        r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
    }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>

<script src="js/main.js"></script>

</body>
</html>
