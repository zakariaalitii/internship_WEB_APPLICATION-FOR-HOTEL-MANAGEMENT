
<link rel="icon" href="../presontation/img/hLO.jfif">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

<link rel="stylesheet" href="../presontation/css/Reservation.css">
<header>
    <div id="flexi">
        <i id="i1" class="fas fa-hotel"></i>
        <h1 id="h11a" class="fancy">HOTEL FES</h1>
        <!--f594-->
        <script>
            const text=document.querySelector(".fancy");
            const strText =text.textContent;
            const splitText=strText.split("");
            text.textContent ="";
            for(let i=0;i<splitText.length;i++){
                text.innerHTML +="<h3>"+ splitText[i]+"</h3>";
            }
            let char = 0;
            let timer=setInterval(onTick,50);
            function onTick(){
                const h3=text.querySelectorAll('h3')[char];
                h3.classList.add('fade');
                char++;
                if(char== splitText.length){
                    complete();
                    return;
                }
            }
            function complete(){
                clearInterval(timer);
                timer =null;
            };	
          </script>
    </div>
</header>

<main>
<div class="php">  
    <div class="resevation">
        
    <form  method="POST"> 
        <div class="box4">
<label for="nom">Numero de  Reservatiion </label> 
<input type="number" name="id_Res"> 
<button> <i class="fas fa-search"></i></button></div>
    </form>
   
        <a href="afficheReservation.php"><button>Retour</button></a>
       
</div>
<table width="100%" border="1">
<tr class="clasecolor">
    <th>ID Reservatiion</th>
    <th>Nom  du clinet</th>
    <th>Pernom du client</th>
    <th>Telephone</th>
    <th>Date debut</th>
    <th>Date fin</th>
    <th>Trifa</th>
    <th>number de chambres</th>
   
</tr>


<?php
   include "../dao/Employer.inc";
   if($_POST){
    $id_Res=$_POST['id_Res'];
   $donnee =  RechercheRservation($id_Res);
   if (!is_null($donnee)){
   
   foreach($donnee as $ligne){echo"<h1>Client  trouvé</h1>";
      ?> 
       <tr>
       <th><?php echo $ligne["id_Res"] ;?></th>
       <th><?php echo $ligne["nomCl"] ;?></th>
      <th><?php echo $ligne["prenomCl"] ;?></th>
      <th><?php echo $ligne["teleCl"];?></th>
       <th><?php echo $ligne["dateDub"] ;?></th>
       <th><?php echo $ligne["dateFin"];?></th>
       <th><?php echo $ligne["trifa"];?></th>
       <th><?php echo $ligne["nbr_Chmbere"];?></th>
    
       </tr>
      
       <?php }}}
       else{
  $donnees =  afficheRservation();
  if (!is_null($donnees)){
  foreach($donnees as $ligne){
     ?> 
      <tr>
      <th><?php echo $ligne["id_Res"] ;?></th>
      <th><?php echo $ligne["nomCl"] ;?></th>
      <th><?php echo $ligne["prenomCl"] ;?></th>
      <th><?php echo $ligne["teleCl"];?></th>
      <th><?php echo $ligne["dateDub"] ;?></th>
      <th><?php echo $ligne["dateFin"];?></th>
      <th><?php echo $ligne["trifa"];?></th>
      <th><?php echo $ligne["nbr_Chmbere"];?></th>
   
      </tr>
     
      <?php }}}
 ?></table>

</div>
      </main>
    