<?
if (isset($_POST['text'])) {
    $name = $_POST['text'];
    $number = $_POST['guestNumber'];

    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("m/d/y g:i A").") <b style='color: #0000ff'>".$_POST['text']."</b>:<br> number of guests: ".stripcslashes(htmlspecialchars($number))."<br></div>");
    fclose($fp);
}
?>
