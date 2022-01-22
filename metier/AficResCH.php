
<link rel="icon" href="../presontation/img/hLO.jfif">
<link rel="stylesheet" href="../presontation/css/mm.css">
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
<form  method="POST"> 
    <div>
<label for="nom">ID Reservatiion :</label> 
<input type="number" name="id_Res"> 
<button>inscrire</button>
        </form>
</div>
<table width="100%" border="1">
<tr>
    <th>ID Reservatiion</th>
    <th>Date debut</th>
    <th>Date fin</th>
    <th>Trifa</th>
    <th>number de chambres</th>
   
</tr>


<?php
   include "../dao/Employer.inc";
   if($_POST){
   $id_Res=$_POST['id_Res'];
  $donnees =  RechercheRservation($id_Res);
  if (!is_null($donnees)){
  foreach($donnees as $ligne){
     ?> 
      <tr>
      <th><?php echo $ligne["id_Res"] ;?></th>
      <th><?php echo $ligne["dateDub"] ;?></th>
      <th><?php echo $ligne["dateFin"];?></th>
      <th><?php echo $ligne["trifa"];?></th>
      <th><?php echo $ligne["nbr_Chmbere"];?></th>
   
      </tr>
     
      <?php }}}
 ?></table>

</div>
      </main>
    