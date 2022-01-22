<link rel="stylesheet" href="../presontation/css/gmail.css">
<link rel="icon" href="../presontation/img/hLO.jfif">
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
<?php
$VotreAdresseMail="Zakariaaliti76@gmail.com";
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= "From: Nom  <".$_POST['mail'].">\r\n";
                    $Entetes .= "Reply-To: Nom  Prenom   <".$_POST['mail']."> et Adresse Email <".$_POST['name'].">\r\n";
                    $Mail=$_POST['mail']; 
                    $Sujet='=?UTF-8?B?'.base64_encode($_POST['subject']).'?=';
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");
                    if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){
                           echo "Message envoyé. Nous reviendrons vers vous dans les brefs délais.";
                    } else {
                        echo "Un ou plusieurs champs contiennent une erreur. Veuillez vérifier et essayer à nouveau.";
                    }
        
?>
<nav>

<a href="../presontation/index6.php">INSCRIRE</a>
</nav>
</div>
      </main>