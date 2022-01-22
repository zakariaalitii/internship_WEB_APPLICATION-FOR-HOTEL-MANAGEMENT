<!DOCTYPE html>
<html>
 <head>
     <title>HOTEL FES</title>
     <link rel="stylesheet" href="css/ajouterchmber.css">
     <link rel="icon" href="img/hLO.jfif">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
 
 </head>
<body>
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
            }onTick()++;	
          </script>
    </div>
</header>
       
      <main >
     
     <form action="../metier/NouveauClient.php" method="POST">
        <div class="large">
            <div>
            <h1>Nouveau Client</h1>
            </div>
            <div>
               
                <input type="submit" value="Valider" id="boutton" onclick="NouveauCompte()">
            </div>
            <div class="long">
                <div>
                <h4>Nom</h4><i class="fas fa-user-edit"></i>
                    <input type="text" required placeholder=" Nom" name="nomCl">
                </div>
                <div>
                    <h4>Prenom</h4>
                <i class="fas fa-user-alt"></i>
                    <input type="text" required placeholder=" Prenom" name="prenomCl">
                </div>
                <div>
                    <h4>Numero de telephone</h4>
                <i class="fas fa-phone-square"></i>
                    <input type="number" required placeholder="Numero de telephone" name="teleCl">
                </div>
              <!-- <div>
                    <input type="number" required placeholder="Id_Client" name="id_Cl">
                </div>--> 
            </div>
        
                </div>
       </form>
    </main>
 
</body>
</html>