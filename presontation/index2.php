
<?php 
 include "../dao/clietns.inc";
 require_once("../dao/connexion.php") ;
   if($_POST){
require('fpdf/fpdf.php');
$dateDub=$_POST['dateDub'];
$dateFin=$_POST['dateFin'];
$trifa=$_POST['trifa'];

$nbr_Chmbere=$_POST['nbr_Chmbere'];
reservationphp($dateDub,$dateFin,$trifa,$nbr_Chmbere);
$title='Hotel Fes';
$titl='Reservation';

$pdf=new FPDF();

$pdf->AddPage();
$pdf->SetTitle($title);
$pdf->SetTitle($titl);

$pdf->SetFont('Arial','B',15);

$w=$pdf->GetStringWidth($title)+180;
$b=$pdf->GetStringWidth($titl);
$pdf->SetX((1));
$pdf->SetDrawColor(85, 107, 106);
$pdf->SetFillColor(11, 16, 22, 0.85);
$pdf->SetTextColor(17, 17, 223);
$pdf->SetLineWidth(1);

$pdf->Cell($w,9,$title,1,1,'C',true);
$pdf->Ln(5);
$pdf->SetFillColor(107, 114, 100, 0.884);
$pdf->SetTextColor(108, 187, 18);
$pdf->Cell($b,9,$titl,1,1,'C',true);

$pdf->Ln(15);
$pdf->SetTextColor(0,0,0,1);
$w=$pdf->GetStringWidth($dateDub)+6;

function affi1(){
    global $conn ;
    $sql="select prenomCl  from clients where id_Cl=
    (select max(id_Cl)  from clients) ";
    $resultat=$conn->query($sql);
    $donnee=$resultat->fetchAll();
    return $donnee;
}
    $donnee =  affi1();
    if (!is_null($donnee)){
    foreach($donnee as $ligne){
    $pdf->SetX((170-$w)/2);
    $pdf->SetTextColor(14, 11, 194, 0.589);
    $pdf ->Cell(90,10,'Pernom du clinet:',1,0,'C');
    $pdf->SetTextColor(7, 6, 8);
    $pdf ->Cell(40,10, $ligne['prenomCl'],1,1,'C');
   
}}
 function affi2(){
    global $conn ;
    $sql="select nomCl  from clients where id_Cl=(select max(id_Cl)  from clients) ";
    $resultat=$conn->query($sql);
    $donnee2=$resultat->fetchAll();
    return $donnee2;
}
    $donnee2 =  affi2();
    if (!is_null($donnee2)){
    foreach($donnee2 as $ligne){
    $pdf->SetX((170-$w)/2);
    $pdf->SetTextColor(14, 11, 194, 0.589);
    $pdf ->Cell(90,10,'Nom du client :',1,0,'C');
    $pdf->SetTextColor(7, 6, 8);
    $pdf ->Cell(40,10, $ligne['nomCl'],1,1,'C');
}}
 function affi3(){
    global $conn ;
    $sql="select teleCl  from clients where id_Cl=(select max(id_Cl)  from clients) ";
    $resultat=$conn->query($sql);
    $donnee3=$resultat->fetchAll();
    return $donnee3;
 }
    $donnee3 =  affi3();
    if (!is_null($donnee3)){
    foreach($donnee3 as $ligne){
    $pdf->SetX((170-$w)/2);
    $pdf->SetTextColor(14, 11, 194, 0.589);
    $pdf ->Cell(90,10,'Le numero de Telephone du client:',1,0,'C');
    $pdf->SetTextColor(7, 6, 8);
    $pdf ->Cell(40,10, $ligne['teleCl'],1,1,'C');
}}



$pdf->SetX((170-$w)/2);
$pdf->SetTextColor(14, 11, 194, 0.589);
$pdf ->Cell(90,10,'Date debut :',1,0,'C');
$pdf->SetTextColor(7, 6, 8);
$pdf ->Cell(40,10,$dateDub,1,1,'C');

$pdf->SetX((170-$w)/2);
$pdf->SetTextColor(14, 11, 194, 0.589);
$pdf ->Cell(90,10,'Date fin:',1,0,'C');
$pdf->SetTextColor(7, 6, 8);
$pdf ->Cell(40,10,$dateFin,1,1,'C');

$pdf->SetX((170-$w)/2);
$pdf->SetTextColor(14, 11, 194, 0.589);
$pdf ->Cell(90,10,'Tarif :',1,0,'C');
$pdf->SetTextColor(7, 6, 8);
$pdf ->Cell(40,10,$trifa,1,1,'C');

$pdf->SetX((170-$w)/2);
$pdf->SetTextColor(14, 11, 194, 0.589);
$pdf ->Cell(90,10,'number de chambres :',1,0,'C');
$pdf->SetTextColor(7, 6, 8);
$pdf ->Cell(40,10,$nbr_Chmbere,1,1,'C');


function affi(){
    global $conn ;
    $sql="select MAX(id_Res) from reservation  ";
    $resultat=$conn->query($sql);
    $donnees=$resultat->fetchAll();
    return $donnees;
}
    $donnees =  affi();
    if (!is_null($donnees)){
    foreach($donnees as $ligne){
    $pdf->SetX((170-$w)/2);
    $pdf->SetTextColor(14, 11, 194, 0.589);
    $pdf ->Cell(90,10,'Numero de Reservation:',1,0,'C');
    $pdf->SetTextColor(209, 26, 26);
    $pdf ->Cell(40,10, $ligne['MAX(id_Res)'],1,1,'C');
}}
    $pdf->Image('img/scan.png');
    $pdf->Output();
}

?>
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
     
     <form  method="POST">
        <div class="large">
            <div>
            <h1>Reservation</h1>
            </div>
            <div>
                <input type="submit" value="Valider" id="boutton" onclick="NouveauCompte()">
            </div>
            <div class="long">
                <div>
                    <H4>Date debut</H4>
                    <i class="fas fa-hourglass-start"></i>
                    <input type="date" required placeholder="  date debut " name="dateDub">
                </div>
                <div>
                    <H4>Date fin</H4>
                <i class="fas fa-hourglass-end"></i>
                    <input type="date" required placeholder=" date fin " name="dateFin">
                </div>
                <div>
                    <H4>Tarif</H4>
                    <i class="fas fa-hand-holding-usd"></i>
                    <input type="number" required placeholder="trifa" name="trifa">
                </div>
                <div>
                    <H4>Nombre de Chmbere </H4>
                <i class="fas fa-sort-numeric-up-alt"></i>
                    <input type="number" required placeholder=" nombre de Chmbere " name="nbr_Chmbere">
                </div>
            </div>
        
                </div>
                
      </form>
    </main>
 
</body>
</html>