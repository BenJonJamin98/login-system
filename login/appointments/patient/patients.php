<?php
    require_once "../../model/model.php";
    $patientId = $_GET['id']; 
    $patient = getPatientById($patientId);
    require "patients-view.php";
?>

<!--working-->