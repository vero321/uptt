<?php
require_once './inicializacion.php';

session_start();
unset ($SESSION['u']);
session_destroy();

ir('index.php');