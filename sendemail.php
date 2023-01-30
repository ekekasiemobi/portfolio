<?php
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ema = "from . $email";
    $mes = "from . $message";
    $subject = $_POST['subject'];
    $message = $_POST['message'];

        $receiver = "kasiemobijanfrancis@gmail.com" ;
        $subject = $subj;
        $message = $name . '<br>' . $mes ;
        $header = $ema;
        $header .= "MIME-Version:1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        

    $test =  mail($receiver, $subject, $message, $header);
    if($test== true){
            header("Location:index.php");
    }else{
        echo 'incorrect email address';
    };
    
 };
 
    
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>