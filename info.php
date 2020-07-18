<?php
// FILE FOR DB CONNECTION
require_once "config/db_connect.php";
// HEADER TEMPLATE 
require_once "temp/header.php";

$id = $_GET["id"];
$result = $conn->query("SELECT 
                        media.title, 
                        media.image,
                        media.isbn,
                        media.description,
                        media.author,
                        media.pub_date,
                        media.publisher,
                        publisher.name,
                        publisher.publisher_id
                        FROM media
                        INNER JOIN publisher ON media.publisher = publisher.publisher_id
                        WHERE media.media_id = $id"
                        );
$row = $result->fetch_assoc();
$title = $row["title"];
$image = $row["image"];
$isbn = $row["isbn"];
$description = $row["description"];
$author = $row["author"];
$pub_date = $row["pub_date"];
$publisher = $row["name"];
?>

<div class="info_box container">
    <img src="img/<?= $image ?>" alt="" width="220px" height="300px">
    <h2 class="mb-3 mt-3" style="text-decoration:underline"><?= $title ?></h2>
    <p>Author: <b><?= $author ?></b></p>
    <p>Date Published: <b><?= $pub_date ?></b></p>
    <p>ISBN/ASIN: <b><?= $isbn ?></b></p>
    <p><b><?= $description ?></b></p>
    <p>Publisher: <b><?= $publisher ?></b></p>
    <a href='edit.php?id=<?= $id ?>'class="btn btn-primary text-white" style="width:200px">Edit</a>
    <a href='del.php?id=<?= $id ?>'class="btn btn-primary text-white" style="width:200px">Delete</a>
    <a href='index.php' class="nav-link text-center mt-5">Back to Homepage</a>
</div>

<?php
// FOOTER TEMPLATE
require_once "temp/footer.php";
?>