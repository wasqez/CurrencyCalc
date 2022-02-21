<?php
?>


<form style = "padding: 80px"; action = 'logic.php' method='POST'>
    Iznos u stranoj valuti:<br><input  type = 'text' name = 'iznos'/>
    <select name ='valuta'>
        <option value ='117'>Evro</option>
        <option value = '107'>Dolar</option>
    </select>
    <input type = 'submit' value = 'Konvertuj' name = 'submit'/>
</form>
