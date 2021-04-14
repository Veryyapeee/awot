<?php


    if(isset($_POST['wyslij'])){
        $imie = $_POST['imie'];
        $telefon = $_POST['telefon'];
        $mail = $_POST['mail'];
        $msg = $_POST['msg'];
        
        $to = 'veryyapeee@gmail.com';
        $subject = 'Wiadomość z awot.pl';
        if(isset($_POST['firmachk'])){
            $message = '
            Frima: '.$_POST['firma'].'<br>
            Imię i nazwisko: '.$imie.'<br>
            Email: '.$mail.'<br>
            Telefon: '.$telefon.'<br><br>
            Treść wiadomości: <br>'.$msg;
        }else{
            $message = '
            Imię i nazwisko: '.$imie.'<br>
            Email: '.$mail.'<br>
            Telefon: '.$telefon.'<br><br>
            Treść wiadomości: <br>'.$msg;
        }
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        mail($to, $subject, $message, $headers));
        header("Location:https://awot.pl");
    }




?> 