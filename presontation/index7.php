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
     
     <form  id="form_id" method="post" name="myform">
        <div class="large">
            <div>
            <h1>login</h1>
            </div>
            <div>
                <input type="button"  value="Login" id="submit" onclick="validate()" >
            </div>
            <div class="long">
                <div>
                    <h4>Enter Username</h4>
                <i class="fas fa-user-tie"></i>
                    <input type="text" name="username" id="username"  required placeholder="Enter Username" >
                </div>
                <div>
                    <H4>Enter Password</H4>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password"  required placeholder="Enter password">
                </div>
                
            </div>
        
        </div>
                
      </form>
    </main>


<script>
     var attempt = 3;
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "admin" && password == "user"){
alert ("Login successfully");
window.location = "admina.php";
return false;
}
else{
attempt --;
alert("You have left "+attempt+" attempt;");
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
    </script>
</body>
</html>