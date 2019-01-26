<?php header("Content-type: application/javascript"); ?>

$(function() {
    $( "#progressbar" ).progressbar({
        value: <?php echo $_SESSION['cid'] ?>
    });

    document.getElementById("fuck").onload = function() {forceLogin()};

    function forceLogin() {
      value= <?php echo $_SESSION['cid'] ?>
      alert(value);
    }
