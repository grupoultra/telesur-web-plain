<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css" />

    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/ajustes-plain.css">

    <style>
        .news-selector .selector-header {
            margin: 10px;
            font-family: "Bree Serif", serif;
            font-size: 24px; }
        .news-selector ul {
            padding: 0; }
        .news-selector ul li {
            background-color: #fff;
            padding: 8px;
            margin-bottom: 4px;
            font-family: "Bree Serif", serif;
            font-size: 16px;
            line-height: 1;
            border-left: 10px solid #b2b2b2;
            list-style: none; }
        .news-selector ul li a {
            color: #717171;
            text-decoration: none; }
        .news-selector ul li:hover {
            border-left: 10px solid #bb123b;
            background-color: #ecfbff; }
        .news-selector ul li:hover a {
            color: #464646; }
        .news-selector ul li.active {
            border-left: 10px solid #FF4136;
            background-color: #ecfbff; }
        .news-selector ul li.active a {
            color: #464646; }
        
    </style>

</head>
<body>

    <div class="news-selector">
        <div class="selector-header">
            Relacionados:
        </div>
        <ul>

            <?php
            foreach (range(0, 4) as &$valor) {?>
                <li>
                    <a href="#">Lorem ipsum dolor</a>
                </li>
            <?php }?>
        </ul>
    </div>
</body>
</html>
