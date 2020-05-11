<?php
session_start();
session_unset("Pengguna");
session_destroy("Pengguna");
header("Location: index.php");
?>