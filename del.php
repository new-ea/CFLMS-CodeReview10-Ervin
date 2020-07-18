<?php
// FILE FOR DB CONNECTION
require_once "config/db_connect.php";
// HEADER TEMPLATE 
require_once "temp/header.php";

$id = $_GET["id"];
if($id) {
    $result = $conn->query("DELETE FROM `media` WHERE `media`.`media_id` = '$id'");
    // echo "<h2>You have successfully deleted the entry</h2>";
    echo "<div class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>You have successfully deleted the entry</h4>
            <hr>
            <p class='mb-0'>You will be redirected to the homepage</p>
        </div>"; 
    header("Refresh: 2; url=index.php");
    exit;
}


// FOOTER TEMPLATE
include "temp/footer.php";
