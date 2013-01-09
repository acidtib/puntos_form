<?
##    session_start();
##    if(!isset ($_SESSION['username'])) {
##        header("location:index.php");
##    }
?>
 
<html>
<head>
    <title>Añadir Puntos Votación</title>
    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/bootstrap-modalmanager.js" type="text/javascript"></script>
    <script src="js/bootstrap-modal.js" type="text/javascript"></script>
    
    <script>
        $(window).load(function(){
            $('.puntos_aki').on('click', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="no" allowtransparency="true" src="'+url+'"></iframe>');
            });
        });
    </script>
</head>
<body>

<form name="form1" method="post" action="" class="puntoform">
  <fieldset>
    <legend>Añadir Puntos Vocatión</legend>
    
    
    <div class="field">
        <label>Usuario</label>
        <input name="username" type="text" id="username">
    </div>
    
    <div class="field">
        <label>Puntos</label>
        <input name="points" type="number" id="points" min="10" step="10">
    </div>
    
    <div class="action">
        <button type="submit" name="Submit1" class="btn" onclick=this.form.action="checkaddpoints.php">Añadir Puntos</button>
        <button class="btn puntos_aki" data-toggle="modal" href="http://bing.com" data-target="#puntos_modal" style="float: right;">Compr. Puntos</button>
    </div>
    
  </fieldset>
</form>


<div id="puntos_modal" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-body">
    
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Close</button>
  </div>
</div>
 
</body>
</html>