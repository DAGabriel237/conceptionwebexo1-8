<?php
$name =$_POST['name'];
$firstname=$_POST['first-name'];
$adresse =$_POST['adresse'];
$postalcode =$_POST['postal-code'];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="">
    
    <script src=""></script>
    <style>
        td{
            border:  1px solid black;
            
        }
        tr:hover{
            background-color: rgba(30, 144, 255, 0.8);
        }
        table{
            border-collapse: collapse;
            width:40em;
            margin: 10% auto;
        }
     </style>   
</head>
<body>
<table>
    <thead>
        <tr>
            <td colspan="2">
                Custumer Form
            </td>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>
               First Name
            </td>
            <td>
                <?php 
                echo ($firstname);
               ?>
            </td>
        </tr>
        <tr>
            <td >
               Name
            </td>
            <td>
            <?php 
                echo ($name);
               ?>
            </td>
        </tr>
        <tr>
            <td >
                Adresse
            </td>
            <td>
            <?php 
                echo ($adresse );
               ?>
        </tr>
        <tr>
            <td >
               Postal Code 
            </td>
            <td>
            <?php 
                echo ($postalcode );
               ?>
        </tr>

    </tbody>
</table>
</body>
</html>