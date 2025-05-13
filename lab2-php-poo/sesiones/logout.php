<?php
session_start();
session_destroy();
header("Location: ../public/login_form.php?logout=1");
exit;
?>
