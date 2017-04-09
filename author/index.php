<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Informazioni autore</title>
        <link rel="icon" href="/common/image/icon.ico" type="image/x-icon">

        <!--Frameworks-->
        <!--Pace-->
        <link rel="stylesheet" type="text/css" href="/common/framework/pace/pace.min.css"/>
        <script src="/common/framework/pace/pace.min.js" type="text/javascript"></script>
        <!--Jquery-->
        <script src="/common/framework/jquery.min.js" type="text/javascript"></script>
        <!--Semantic-UI-->
        <link rel="stylesheet" type="text/css" href="/common/framework/semantic-UI/semantic.min.css"/>
        <script src="/common/framework/semantic-UI/semantic.min.js" type="text/javascript"></script>
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="/common/framework/bootstrap.min.css"/>
        <!--END Framweworks-->

        <style>
            .ui.raised.card .header {
                font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                border: none;
                box-shadow: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                border-radius: 0;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                background-color: transparent;
                height: auto;
            }
            .ui.raised.card {
                display: block;
                margin: 2vh auto;
            }
            .ui.raised.link.fluid.card {
                max-width: 35vh;
            }
            .ui.raised.link.stackable.fluid.card {
                max-width: 30vh;
            }
            #tab {
                margin-top: 45px;
            }
            #contenitore-4 {
                margin-top: 100px;
                width: 150vh;
                vertical-align: middle;
                max-width: 100%;
                margin: auto;
            }
            #show-hide {
                background-color: #21BA45;
                color: #FFF;
                -webkit-transition-duration: 0.5s;
                transition-duration: 0.5s;
            }
            .link {
                text-decoration: none !important;
            }
            .center {
                display: block;
                margin: 0 2vh 0 2vh;
            }
            #back {
                -webkit-transition-duration: 0.5s;
                transition-duration: 0.5s;
            }
        </style>
    </head>
    <body>
        <script>
            $(document).ready(function() {
                $("#contenitore-4").hide();
                $("#show-hide").one("click", show);
                $("#show-hide").hover(function() {
                    $("#show-hide").css("background-color", "#009924");
                }, function() {
                    $("#show-hide").css("background-color", "#21BA45");
                });
            });
            
            function show() {
                change($(this), "Nascondi video", "#E0E1E2", "#000", "#C7C8C9");
                $(this).one("click", hide);
            }
           
            function hide() {
                change($(this), "Mostra video", "#21BA45", "#FFF", "#009924");
                $(this).one("click", show);
            }
            
            function change(btn, btnTxt, btnColor, btnTxtColor, btnHoverIn) {
                var container = $("#contenitore-4");
                btn.text(btnTxt);
                btn.css("color", btnTxtColor);
                btn.css("background-color", btnColor);
                container.transition("drop");
                btn.hover(function() {
                    btn.css("background-color", btnHoverIn);
                }, function() {
                    btn.css("background-color", btnColor);
                });
            }
        </script>
        <div class="contenuto">
            <!--#include virtual="/common/component/header.html" -->
            <div class="center" id="tab">
                <div class="ui stackable four column grid">
                    <?php
                    require '../common/php/engine.php';
                    $connection = null;
                    connect($connection);
                    $authorID = filter_input(INPUT_GET, "aID");
                    if (!isset($authorID) || $authorID === "") {
                        $txtQuery = "SELECT A.ID, A.Nome, A.Cognome, A.Classe FROM autore A ORDER BY A.Cognome, A.Nome, A.ID";
                        $query = mysqli_query($connection, $txtQuery);
                        while ($row = mysqli_fetch_array($query)) { ?>
                        <div class="column">
                            <a class="ui raised link fluid card" href="/author/index.php?aID=<?php echo $row['ID'] ?>">
                                <div class="content">
                                    <div class="header"><?php echo $row['Nome']." ".$row['Cognome'] ?></div>
                                    <div class="description"><?php echo $row['Classe'] ?></div>
                                    <div class="meta">
                                        <span class="category">Classe</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php 
                        }
                    } else { 
                    ?>
                </div>
            </div>
            <div class="center">
                <a id="back" class="ui labeled icon button inverted blue" href="index.php">
                    <i class="left arrow icon"></i>
                    Torna alla lista
                </a>
                <?php
                    $txtQuery = "SELECT A.ID, A.Nome, A.Cognome, A.Classe, A.AnnoS, A.Sesso, V.Titolo, V.PathMiniatura, M.NomeIndirizzo AS 'Materia', (SELECT COUNT(*) FROM realizza WHERE IDAutore = A.ID) AS 'NumVideo' FROM autore A, realizza R, video V, materia M WHERE ID = '$authorID' AND A.ID = R.IDAutore AND V.Cod = R.CodVideo AND V.CodMateria = M.Cod ORDER BY V.Titolo, V.Cod";
                    $query = mysqli_query($connection, $txtQuery);
                    $row = mysqli_fetch_array($query);
                    if ($row > 0) {
                        ?>
                        <div class="ui raised card">
                            <div class="content">
                                <div class="header"><?php echo $row['Nome']." ".$row['Cognome'] ?></div>
                                <div class="description"><?php echo $row['Classe'] ?></div>
                                <div class="meta">
                                    <span class="category">Classe</span>
                                </div>
                                <div class="description"><?php echo $row['AnnoS'] ?></div>
                                <div class="meta">
                                    <span class="category">Anno Scolastico</span>
                                </div>
                                <div class="description"><?php echo $row['ID'] ?></div>
                                <div class="meta">
                                    <span class="category">ID Autore</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <div class="left floated author">
                                    <i class="film icon"></i>
                                    <?php echo $row['NumVideo']." video" ?>
                                </div>
                                <div class="right floated author">
                                    <?php
                                    switch ($row['Sesso']) {
                                        case "M":
                                            ?> <img class="ui avatar image" src="https://semantic-ui.com/images/avatar2/large/matthew.png"> <?php
                                            break;
                                        case "F":
                                            ?> <img class="ui avatar image" src="https://semantic-ui.com/images/avatar2/large/molly.png"> <?php
                                            break;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui fluid toggle button" id="show-hide">Mostra video</button>
                            </div>
                        </div>
                        <div class="ui stackable four column grid" id="contenitore-4">
                            <?php
                            $authorID = filter_input(INPUT_GET, "aID");
                            $txtQuery = "SELECT A.ID, A.Nome, A.Cognome, A.Classe, A.AnnoS, A.Sesso, V.Titolo, V.PathMiniatura, V.Descrizione, V.VideoID, M.NomeIndirizzo AS 'Materia', (SELECT COUNT(*) FROM realizza WHERE IDAutore = A.ID) AS 'NumVideo' FROM autore A, realizza R, video V, materia M WHERE ID = '$authorID' AND A.ID = R.IDAutore AND V.Cod = R.CodVideo AND V.CodMateria = M.Cod ORDER BY V.Titolo, V.Cod";
                            $query = mysqli_query($connection, $txtQuery);
                            while ($row = mysqli_fetch_array($query)) {
                                switch ($row['Materia']) {
                                    case 'Informatica':
                                        $color='blue';
                                        break;
                                    case 'Meccanica':
                                        $color='green';
                                        break;
                                    case 'Elettrotecnica':
                                        $color='orange';
                                        break;
                                    case 'Costruzioni':
                                        $color='brown';
                                        break;
                                    case 'Chimica':
                                        $color='red';
                                        break;
                                }
                                ?>
                                <div class="column">
                                    <a class="ui raised link stackable fluid card <?php echo $color ?>" href="../<?php echo strtolower($row['Materia']) ?>/index.php?v=<?php echo $row['VideoID'] ?>">
                                        <div class="image">
                                            <div class="ui <?php echo $color?> ribbon label"><?php echo $row['Materia']?></div>
                                            <img src="<?php echo "http://scritti9212.altervista.org/scritti9212guide/wp-content/uploads/2013/07/codice-binario.jpg"/*$row['pathMiniatura']*/ ?>">
                                        </div>
                                        <div class="content">
                                            <div class="header"><?php echo $row['Titolo'] ?></div>
                                            <div class="description"><?php echo $row['Descrizione'] ?></div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php 
                    }
                } 
                ?>
            </div>
        </div>
    </body>
</html>