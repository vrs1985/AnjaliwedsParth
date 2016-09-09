<?
if((isset($_POST['guest'])&&$_POST['guest']!="")&&(isset($_POST['select-choice'])&&$_POST['select-choice']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'parth@parthkapadia.com';
        $subject = 'Number of Guests'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p><b> On a Weddings site you have one message from: </b></p>
                        <p>Name: '.$_POST['guest'].'</p>
                        <p>Choose: '.$_POST['select-choice'].'</p>                        
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: <AnjaliwedsParth.us>\r\n"; 
        mail($to, $subject, $message, $headers); 
}
?>
