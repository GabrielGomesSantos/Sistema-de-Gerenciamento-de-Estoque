<?php
    session_start();
    $_SESSION['perm'] = null;
    header("location: ../../index.php");
?>