<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOTEL FES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mainc.css">
    <link rel="icon" href="img/hLO.jfif">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>

<body>
<nav class="row navchamber">
<?php
   include "../dao/clietns.inc";
  $donnees =  affispecials();
    if (!is_null($donnees)){
    foreach($donnees as $ligne){
      ?> 

                        <div class="col-md-4 col-sm-6 col-xl-12">
                            <div><img id="imagef"  src="<?php echo $ligne["PHOTO"];?>">
                            </div>
                            <div>
                                <h2><?php echo $ligne["titre"] ;?></h2>
                                <p><?php echo $ligne["textt"] ;?></p>
                              
                                <section><i>LE PRIX</i>
                                    <span><?php echo $ligne["PRIX_LOC"];?>DH</span>
                                </section>
                            </div>
                            <div><button><a href="index1.php">INSCRIRE</a></button></div>
                        </div>
                        

        
                                                      

       
        <?php }}
 ?>
 </nav>
 
 
</body>

</html>