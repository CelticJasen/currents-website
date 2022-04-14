<?php
    if($_POST["message"]) {
        mail("ftthcurrent@gmail.com", "Internet Customer Form",
        $_POST["This is a form that was filled out by someone who visited the high speed landing page"]. "From: currenthighspeed.com");
    }
?>