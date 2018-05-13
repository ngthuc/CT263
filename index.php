<?php session_start(); ?>
<?php
    require "lib/dbCon.php";
    require "lib/dbHomePage.php";
    require "lib/checkAccount.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>YourVegetable</title>
        <link rel="shortcut icon" href="images/sc-lionicon-dribbble-2016.png" type="image/x-icon" />
        
        <link href="css/style.css" type="text/css"  rel="stylesheet"/>
        <link href="css/style-2.css" type="text/css"  rel="stylesheet"/>
        

        <link href="css/fonts.css" type="text/css" rel="stylesheet"/>

        <link href="css/vendors/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
        
        <script type="text/javascript" src="jq/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="jq/jquery.slides.js"></script>
        
    </head>
    
    <body>
    	<div id="wanner">
         	<!--header-->
            <?php require "blocks/header.php" ; ?>
            <!--/header-->
            <!--content-->
            <?php require "blocks/content.php" ; ?>
            <!--/content-->
            <!--footer-->
            <?php require "blocks/footer.php" ; ?>
            <!--/foote-->
        </div>
    </body>
</html>
