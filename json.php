<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $number = $_POST['number'];

    $fp = fopen('logged.html', 'w');
    fwrite($fp, "<p>(".date("g:i A").")  name=".$name." surname=".$surname." email=".$email." number=".$number."</p>");
    fclose($fp);

    $file = "js/rsvp/guests.json";
    $json = json_decode(file_get_contents($file), true);
    $json[] = array("name" => $name, "surname" => $surname, "email" => $email, "number" => $number );
    file_put_contents($file, json_encode($json), true);
}
    
?>