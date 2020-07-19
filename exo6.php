<!DOCTYPE html>
<html>
<head>	
</head>

<body>
	
    <form method="post"> 
		<fieldset class="lolita">
			<legend class="lila"> Calcul de la TVA </legend>
			 <div class="form-group">
			 	<label> Prix HT </label>
			 	<input type="number" name="htc"  value="<?php 
                   if(isset($_POST['htc'])){
                       echo $_POST['htc'];
                   }
                
                
                ?>"><br>
			 	<label> TVA </label>
			 	<input type="number" name="tva"  value="<?php 
                   if(isset($_POST['tva'])){
                       echo $_POST['tva'];
                   }
                ?>">
                <br>
                <?php 
                   if(isset($_POST['tva']) && isset($_POST['htc'])){
                       $tva=(int)$_POST['tva'];
                       $htc=(int)$_POST['htc'];
                       $tauxtva=($tva * $htc )/100;
                       $prixttc=$tauxtva + $htc;
                       echo " <label> Taux de tva </label> <input type='text' name='tva'  value='$tauxtva' >";
                       echo "<br>";
                       echo " <label> Prix TTC </label> <input type='text' name='tva'  value='$prixttc' >";
                        echo "<br>";
                   }
                
                ?>
			<input type="submit" value="calcul">
		</fieldset>
	</form>
    </body>

</html>