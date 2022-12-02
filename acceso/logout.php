<?php
//cierre sesión
session_start();
session_destroy();
header("Location: ../index.php");
