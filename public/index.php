<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Variables Globales --------------------------------------------------------
include '../application/config.php';
include '../application/libs/myLib.php';

// ruteando la url -----------------------------------------------------------
if(isset($_GET['ctrll'])) $ctrll=$_GET['ctrll'];
else $ctrll='index';

if(isset($_GET['acti'])) $acti=$_GET['acti'];
else $acti='index';

// Instancia del controlador -------------------------------------------------
$classCtrll = ucfirst($ctrll).'Controller';
include SRC."/application/models/MySql.php";
include SRC."/application/controllers/$classCtrll.php";
$instCtrll = new $classCtrll($acti,$ctrll);

// Obteniendo parametros de la accion para usarlos en la vista ---------------
$params = $instCtrll->$acti();

// Cargando Layout Principal -------------------------------------------------
include SRC_VIEW.'/layout.php';

// ---------------------------------------------------------------------------