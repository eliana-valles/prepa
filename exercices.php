<?php include("dBconnection.php");
?> 

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Exercices</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script> 
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <!--Barre de navigation-->
            <?php include('navbar.php'); ?>

            <div class="row">
            <!--Aside-->
                <div class="col-xs-3" style="margin-top:40px;">
                    <div class="bs-component">
                      <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <span class="glyphicon glyphicon-plus"></span>&nbsp;Créer</a>
                        <a href="#" class="list-group-item">
                            <span class="glyphicon glyphicon-pencil"></span>&nbsp;Modifier</a>
                        <a href="#" class="list-group-item">
                            <span class="glyphicon glyphicon-trash"></span>&nbsp;Supprimer</a>
                      </div>
                    </div>
                </div>
            <!--fin de l'aside-->
            <!--formulaire-->
                <div class="col-xs-9">
                    <div class="bs-docs-section">
                      <div>
                        <div class="page-header">
                          <h1 id="forms">Créer un nouvel exercice</h1>
                        </div>
                      </div>
                    
                      <div>
                        <div class="well bs-component">
                          <form id="creationExercice" action="" method="post" class="form-horizontal">
                            <fieldset>
                                <!--nom exo-->
                                  <div class="form-group">
                                    <label for="libelleExercice" class="col-lg-2 control-label">Nom</label>
                                    <div class="col-lg-10">
                                      <input type="text" class="form-control" id="libelleExercice" name="libelleExercice" placeholder="Libellé">
                                    </div>
                                  </div>
                                <!--groupe1-->
                                  <div class="form-group">
                                    <label for="groupe1" class="col-lg-2 control-label">Groupe 1</label>
                                    <div class="col-lg-10">
                                      <select id="groupe1" name="groupe1" class="form-control">
                                        <?php
                                            $sql = "SELECT idgroupe,lib_groupe FROM groupe_musculaire";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) { 
                                                // output data of each row
                                                while($donnees = $result->fetch_assoc()) { ?>
                                                    <option value="<?php echo $donnees['idgroupe'] ?>"><?php echo $donnees['lib_groupe'] ?></option><br>
                                            <?php 
                                                } 
                                        }?>
                                      </select>
                                    </div>
                                  </div>
                                <!--groupe2-->
                                  <div class="form-group">
                                    <label for="groupe2" class="col-lg-2 control-label">Groupe 2</label>
                                    <div class="col-lg-10">
                                      <select id="groupe2" name="groupe2" class="form-control" >
                                        <option value="0" selected="selected">- Aucun -</option>

                                        <?php
                                            $sql = "SELECT idgroupe,lib_groupe FROM groupe_musculaire";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) { 
                                                // output data of each row
                                                while($donnees = $result->fetch_assoc()) { ?>
                                                    <option value="<?php echo $donnees['idgroupe'] ?>"><?php echo $donnees['lib_groupe'] ?></option>
                                            <?php 
                                                } 
                                        }?>
                                        </select>
                                    </div>
                                  </div>
                                  <!--type d'effort-->
                                  <div class="form-group">
                                    <label for="typeEffort" class="col-lg-2 control-label">Type d'effort</label>
                                    <div class="col-lg-10">
                                      <select id="typeEffort" name="typeEffort" class="form-control" >
                                        <option value="0" selected="selected">- Choisir -</option>
                                        <?php
                                            $sql = "SELECT idtype,lib_type_effort FROM type_effort";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) { 
                                                // output data of each row
                                                while($donnees = $result->fetch_assoc()) { ?>
                                                    <option value="<?php echo $donnees['idtype'] ?>"><?php echo $donnees['lib_type_effort'] ?></option>
                                            <?php 
                                                } 
                                        }?>
                                        </select>
                                    </div>
                                  </div>
                                  <!--textArea-->
                                  <div class="form-group">
                                    <label for="description" class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                      <textarea id="description" name="description" class="form-control" rows="3" ></textarea>
                                      <span class="help-block">Il est possible d'agrandir ce bloc de texte.</span>
                                    </div>
                                  </div>
                                  <!--upload img--> 
                                  <!--<div class="form-group">
                                    <input type='file' class='input-ghost' style='visibility:hidden; height:0'>
                                    <div class="col-lg-10">
                                        <div class="input-group input-file" name="Fichier_1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Image</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Choisissez un fichier...' />
                                        <span class="input-group-btn">
                                             <button class="btn btn-reset btn-warning" type="button">Effacer</button>
                                        </span>
                                    </div>
                                </div>
                                    </div>-->
                                    <div style=" margin: 0;text-align: center; padding-top: 20px;">
                                        <input type="submit" id="submit" name="submit" value="Envoyer" class="btn btn-info"></button>
                                        <button id="effacer" type="reset" class="btn btn-danger">Effacer</button>
                                    </div>
                                  </div>
                                  <!--fin upload-->
                                 </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin formulaire-->
            </div> 
        </div>
       
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>

    <!--traitement-->
    <?php


    if(isset($_POST['submit']) && !empty($_POST['submit'])) {
        $lib_exercise=$_POST['libelleExercice'];
        $idgroupe_primaire=$_POST['groupe1'];
        $idgroupe_secondaire=$_POST['groupe2'];
        $idtype=$_POST['typeEffort'];
        $description=$_POST['description'];

        //Insert data
        $query = "INSERT INTO exercise
        (lib_exercise,idgroupe_primaire,idgroupe_secondaire,idtype,description)
        VALUES
        ('$lib_exercise','$idgroupe_primaire','$idgroupe_secondaire','$idtype','$description')";

        mysqli_query($conn,$query);

        $conn->close();
    } else {
        echo "Erreur";
    }
    ?>
    <!--fin traitement-->
    <script>
    $(".effacer").click(function(){
        element.val(null);
        $(this).find('input').val('');
    });
    function bs_input_file() {
        $(".input-file").before(
            function() {
                if ( ! $(this).prev().hasClass('input-ghost') ) {
                    var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                    element.attr("name",$(this).attr("name"));
                    element.change(function(){
                        element.next().find('input').val((element.val()).split('\\').pop());
                    });
                    $(this).find("button.btn-choose").click(function(){
                        element.click();
                    });
                    $(this).find("button.btn-reset").click(function(){
                        element.val(null);
                        $(this).parents(".input-file").find('input').val('');
                    });
                    $(this).find('input').css("cursor","pointer");
                    $(this).find('input').mousedown(function() {
                        $(this).parents('.input-file').prev().click();
                        return false;
                    });
                    return element;
                }
            }
        );
    }
    function bs_input_file() {
        $(".input-file").before(
            function() {
                if ( ! $(this).prev().hasClass('input-ghost') ) {
                    var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                    element.attr("name",$(this).attr("name"));
                    element.change(function(){
                        element.next().find('input').val((element.val()).split('\\').pop());
                    });
                    $(this).find("button.btn-choose").click(function(){
                        element.click();
                    });
                    $(this).find("button.btn-reset").click(function(){
                        element.val(null);
                        $(this).parents(".input-file").find('input').val('');
                    });
                    $(this).find('input').css("cursor","pointer");
                    $(this).find('input').mousedown(function() {
                        $(this).parents('.input-file').prev().click();
                        return false;
                    });
                    return element;
                }
            }
        );
    }
    $(function() {
        bs_input_file();
    });
    </script>
</html>
<? $conn->close(); ?>
