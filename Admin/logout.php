<?php
    session_start();
    session_destroy();
    session_unset();

    echo "<script>alert('You have been log-out.');location.href='adminlogin.php'</script>";

?>