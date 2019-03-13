<?php
 if($_POST)
 {
 $to_Email = "loja@floragemgarden.com.br"; 
 $subject = 'WHATSAPP'; 


 $user_Phone = filter_var($_POST["polz_tel"], FILTER_SANITIZE_STRING);

 $message = "Telephone number: ".$user_Phone;

    if(!mail($to_Email, $subject, $message, "WHATSAPP \r\n"))
    {
    $otvet_serv = json_encode(array('text' => 'Не могу отправить почту! Пожалуйста, проверьте ваши настройки PHP почты.'));
    die($otvet_serv);
    }
 }
 ?>