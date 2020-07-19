


<!DOCTYPE html>
<html>
    <head>
        <title>Formulaore client</title>
        <style>
        fieldset{
            width: 40em;
            margin: 10em auto;
    
        }
        form{
            width:100%;
            margin: 0 auto;
        }
        label , input[type='text']{
            width: 50%;
            margin-bottom: 2%;
            height:30px;

        }
        
        label{
            padding-right: 15%;
            padding-left: 5%;
        }
        label#name-label{
            padding-right: 22%;
        }
        label#email-label{
            padding-right: 20%;
        }
        input[type='submit']{

            background-color: rgba(30, 144, 255, 0.8);/*30144255*/
            border-color: rgba(49, 136, 223, 0.8);
            position: relative;
            bottom: 2%;
            left: 75%;
            height: 30px;
            width: 60px;
            border-radius: 5px;
            
        }
        
        </style>
    </head>
    <body>
        <fieldset title="Adresse client">
            <legend>Adresse client</legend>
            <form action= "<?= $_SERVER['PHP_SELF'] ?>" method="post" id="form1">

                <label for="email" id="email-label">
                            E-mail
                </label>
                <input type="email" id="email" name="email" placeholder="write your  e-mail here"  ><br>
                
                <input type="hidden" id="postal-code" name="postal-code" value="<?php $agent = $_SERVER['HTTP_USER_AGENT'];

// Browser Detection
if(preg_match('/Firefox/i',$agent)) {$br = 'Firefox';echo $br;} 
elseif(preg_match('/Mac/i',$agent)) {$br = 'Mac';echo $br;}
elseif(preg_match('/Chrome/i',$agent)) {$br = 'Chrome';echo $br; }
elseif(preg_match('/Opera/i',$agent)) {$br = 'Opera'; echo $br;}
elseif(preg_match('/MSIE/i',$agent)) {$br = 'IE'; echo $br;}
else $bs = 'Unknown'; ?>" ><br>
                <input type="submit" name="submit" value="Submit" >
            </form>
        <p><?php
$adresse =isset($_POST['email']) ? $_POST['email'] : ' ';
$postalcode = isset($_POST['postal-code']) ? $_POST['postal-code'] : ' ';
echo ("your email is ".$adresse);
echo ("and your browser  is ".$postalcode);


?></p>
        </fieldset>
        <script>
            //alert(document.getElementById('email').name);
            </script>
    </body>
</html>
