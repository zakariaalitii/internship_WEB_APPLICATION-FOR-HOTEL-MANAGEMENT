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
            };	
          </script>
    </div>
</header>
       
      <main >
     
     <form action="../metier/Employer.php" method="POST">
        <div class="large">
            <div>
            <h1>Employer</h1>
            </div>
            <div>
                <input type="submit" value="Valider" id="boutton" onclick="NouveauCompte()">
            </div>
            <div class="long">
                <div>
                <h4>Nom Employer</h4><i class="fas fa-user-edit"></i>
                    <input type="text" required placeholder="nom Employer" name="nomEmp">
                </div>
                <div>
                <h4>Prenom Employer</h4><i class="fas fa-user-edit"></i>
                    <input type="text" required placeholder="prenom Employer" name="prenomEmp">
                </div>
                <div>
                    <h4>Adresse Employer</h4>
                    <i class="fas fa-address-book"></i>
                    <input type="text" required placeholder="adresse Employer" name="adrEmp">
                </div>
            </div>
        
                </div>
                
      </form>
    </main>
 
</body>
</html>

