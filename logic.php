<?php

    if(isset($_POST['submit'])) {
        $iznos = $_POST['iznos'];
        $valuta = $_POST['valuta'];

        echo '<div style = "padding: 80px";>Iznos u dinarima:' .$iznos * $valuta;"</div>";
    }
    if(empty('iznos')) {
        echo'Ukucaj iznos';
    }
?>
<div style = "padding-left: 110px"><a href="index.php">Nazad</a></div>