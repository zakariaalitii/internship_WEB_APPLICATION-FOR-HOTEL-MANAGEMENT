<?php
 
 if($_POST){
   require('smtp/src/PHPMailer.php');
     $mail=new  PHPMailer();
     $mail->isSMTP();
     $mail->Host='smtp.gmail.com';
     $mail->Port=587;
     $mail->SMTPSecure="tls";
     $mail->SMTPAuth=true;
     $mail->Username="zakariaaliti76@gmail.com";
     $mail->Password="Zakaria123";
     $mail->setFrom("zakariaaliti76@gmail.com");
     $mail->addAddress("zakariaaliti76@gmail.com");
     $mail->isHTML(true);
     $mail->Subjet="Certificate Generated";
     $mail->Body="Certificate Generated";
     $mail->addAttachment("Certificate/1588786846.pdf");
     $mail->SMTPOptions=array("ssl"->array(
           "verify_peer"->false,
           "verify_peer_name"->false,
           "allow_self_signed"->false,
     ));

 
 if($mail->send()){
    echo "send";
 }else{
    echo $mail->ErrorInfo() ;
 }
}
 
?>
<!--
    $pdf->Image('img/scan.png');
    $file=time();
    $file_path_pdf="presontation".$file.".pdf";
    $pdf->Output( $file_path_pdf,"F");

  include('smtp/src/PHPMailer.php');
    $mail=new  PHPMailer();
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPSecure="tls";
    $mail->SMTPAuth=true;
    $mail->Username="zakariaaliti76@gmail.com";
    $mail->Password="Zakaria123";
    $mail->setFrom("zakariaaliti76@gmail.com");
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subjet="Certificate Generated";
    $mail->Body="Certificate Generated";
    $mail->addAttachment( $file_path_pdf);
    $mail->SMTPOptions=array("ssl"->array(
          "verify_peer"->false,
          "verify_peer_name"->false,
          "allow_self_signed"->false,
    ));


if($mail->send()){
   echo "send";
}else{
   echo $mail->ErrorInfo() ;
}

-->