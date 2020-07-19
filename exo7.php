<?php 

//$image1=$_POST['fichier'];

   
  // <img src="" alt="student">
 // echo "<img src='' alt='student'>";
 
   

 // readfile($image);


   
if(isset($_FILES['fichier']) and !empty($_FILES['fichier']['name']) ){
$maxSize =1000000;
$validExtension=array('.zip');
 //echo("good"); 
if($_FILES['fichier']['size'] <= $maxSize ){
    // echo("good"); 
    $extensionUpload=strtolower(substr(strrchr($_FILES['fichier']['name'],'.'),1));
    if(in_array($extensionUpload,$validExtension)){
        $way="/home/gabriel/".$administrationnumber.".".$extensionUpload;
        $result=move_uploaded_file($_FILES['fichier']['tmp_name'],$way);
        // echo("good"); 
        if($result)
        {
             $imagess= "/home/gabriel/".$administrationnumber.".".$extensionUpload;
             //echo($imagess);
           //echo("good"); 
           
          
        }
        else{
            $msg="something gone wrong during this importation";
            echo($msg);
        }
        
    }
    else{
        $msg="your profile image should  be at .zip file format";
        echo($msg);
    }
    
}
else{
    $msg="your  file should be  size should be less than 1Mo";
    echo($msg);
}
//echo($repeatpasswd);strrchr()
//echo($image);



}





?>
<!DOCTYPE html>
<html>
<head>

</head>

</head>
<body>
	<form  method="post"  name="exos" enctype="multipart/form-data">
	 	
			<legend class="lila">upload fichier zip </legend>
			<div class="custom-file">
				<input type="hidden" name="TailleMAX" value="1000000">
			    <input type="file" class="custom-file-input" id="customFile" name="fichier" accept=".zip">
			    <label class="custom-file-label" for="customFile">Choisir un fichier </label>
			</div>
		</fieldset>

		
		<button type="submit" class="btn btn-primary" style="text-align: right;"> Envoyer </button>
 
</form>


</body>
</html>
