<?php
// FILE FOR DB CONNECTION
require_once "config/db_connect.php";
// HEADER TEMPLATE 
require_once "temp/header.php";

if (count($_POST) > 0) {
    $media_id = $_POST["media_id"];
    $title = $_POST["title"];
    $isbn = $_POST["isbn"];
    $description = $_POST["description"];
    $author = $_POST["author"];
    $pub_date = $_POST["pub_date"];
    $status = $_POST["status"];

    $update = $conn->query("UPDATE media 
                            SET 
                            media.title = '$title',
                            media.isbn = $isbn,
                            media.description = '$description',
                            media.author = '$author',
                            media.pub_date = '$pub_date',
                            media.fk_status = '$status'
                            WHERE media.media_id = $media_id"
                           );
    echo "  <div class='container'>
                <div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>You have successfully updated the entry</h4>
                    <hr>
                    <a class='btn btn-primary' href='index.php'>Back to Homepage</a>
                </div>
            </div>"; 
} else {
    $id = $_GET["id"];
    $result = $conn->query("SELECT 
                            media.media_id,
                            media.title, 
                            media.image,
                            media.isbn,
                            media.description,
                            media.author,
                            media.pub_date,
                            status.status
                            FROM media
                            INNER JOIN status ON media.fk_status = status.status_id
                            WHERE media.media_id = $id"
                            );
    $row = $result->fetch_assoc();
    $media_id = $row["media_id"];
    $title = $row["title"];
    $isbn = $row["isbn"];
    $description = $row["description"];
    $author = $row["author"];
    $pub_date = $row["pub_date"];
    $status = $row["status"];
}
?>

<!-- Form for adding book  -->
<div class="container">
    <form class = "main_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="form_header">
                <h1>Edit Media</h1>
            </div>
            <!-- Formular -->
            <div class = "form_fields">
            <div class="row">
            <input type="hidden" name="media_id" value="<?= $media_id ?>">
                <div class="col-12">
                    <label for="title">Title:</label><br>
                    <input type="text" class="form-control"  name="title" value="<?= $title ?>">
                </div>
                <div class="col-12">
                    <label for="isbn">ISBN:</label><br>
                    <input type="number" class="form-control" name="isbn" value="<?= $isbn ?>">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="pub_date">Publishing Date:</label><br>
                    <input type="date" class="form-control" name="pub_date" value="<?= $pub_date ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="author">Author:</label><br>
                    <input type="text" class="form-control" name="author" value="<?= $author ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="description">Description:</label><br>
                    <textarea name="description" id="description" rows="10" style="width:100%"><?= $description ?></textarea>
                </div>
            </div>
            <div class="row m-1">
                <label for="cars">Status:</label>

                <select name="status" id="status">
                    <option value="">----</option>
                    <option value="1">Available</option>
                    <option value="2">Not Available</option>
                </select>
            </div>
            
            <button class="btn btn-primary mt-3 mb-5" type="submit" name="add" class="registerbtn" style="width:200px">Edit</button>
            <a href='index.php' class="nav-link text-center m-1">Back to Homepage</a>

    </form>
    </div>

<?php
// FOOTER TEMPLATE
include "temp/footer.php";
?>