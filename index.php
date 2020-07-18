<?php
// FILE FOR DB CONNECTION
require_once "config/db_connect.php";
// HEADER TEMPLATE 
require_once "temp/header.php";

$result = $conn->query("SELECT 
                        media.media_id,
                        media.title, 
                        media.image,
                        media.publisher,
                        publisher.name,
                        publisher.publisher_id,
                        type.type,
                        status.status
                        FROM media
                        INNER JOIN publisher ON media.publisher = publisher.publisher_id
                        INNER JOIN type ON media.fk_type = type.type_id
                        INNER JOIN status ON media.fk_status = status.status_id");
?>

<h1 class="text-center">Our offer:</h1>
<div class="container-fluid">
    <div class="row">

<?php

while ($row = $result->fetch_assoc()) {
        $id = $row["media_id"];
        $title = $row["title"];
        $image = $row["image"];
        $publisher = $row["name"];
        $publisher_id = $row["publisher_id"];
        $type = $row["type"];
        $available = $row["status"]


?>
        <div class="card_box card col-sm-6 col-md-4 col-lg-3 p-3">
            <img src="img/<?= $image ?>" class="card-img-top" alt="..." height="400px">
            <div class="card-body">
                <h5 class="card-title"><?= $title ?></h5>
                <p style="font-size:0.8em"><b><?= $type ?></b></p>
                <p style="font-size:0.8em">View books by:</p>
                <a href='sort.php?publisher_id=<?= $publisher_id ?>' class="card-text"><?= "<b>Publisher:</b> " . $publisher ?></a><br><hr>
                <p class="card-text"><?php 
                        if ($available == "Not Available") {
                            echo "<b>Availability:</b> " . "<h5 style='color:red'>" . $available . "</h5>";
                        } else {
                            echo "<b>Availability:</b> " . "<h5 style='color:green'>" . $available . "</h5>";
                        } 
                        ?></p>
                <a href='info.php?id=<?= $id ?>' class="btn btn-primary text-white">View More Info</a>
            </div>
        </div>
 <?php } ?> <!-- SCHLEIFEN ENDE  -->
    </div>
 </div>

<?php
// FOOTER TEMPLATE
require_once "temp/footer.php";
?>