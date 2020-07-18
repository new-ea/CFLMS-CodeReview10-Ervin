<?php
// FILE FOR DB CONNECTION
require_once "config/db_connect.php";
// HEADER TEMPLATE 
require_once "temp/header.php";

if (count($_POST) > 0) {
    $title = $_POST["title"];
    $isbn = $_POST["isbn"];
    $desc = $_POST["description"];
    $author = $_POST["author"];
    $pub_date = $_POST["pub_date"];
    $publisher = $_POST["publisher"];
    $type = $_POST["type"];

    //IMAGE UPLOAD HANDLING
    $image = $_FILES['image']['name'];
    $target = "/Applications/XAMPP/xamppfiles/htdocs/CodeFactory/CodeReviews/CR10new/img/".basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
    
    $sql = $conn->query("INSERT INTO media(
                                            title, 
                                            image, 
                                            isbn, 
                                            description,
                                            author, 
                                            pub_date,
                                            publisher,
                                            fk_type) 
                        VALUES ('$title',
                                '$image', 
                                 $isbn,
                                '$desc',
                                '$author',
                                '$pub_date',
                                $publisher,
                                 '$type')");
}

?>

<!-- Form for adding book  -->
<div class="container">
    <form class = "main_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="form_header">
                <h1>Add new Media</h1>
            </div>
            <!-- Formular -->
            <div class = "form_fields">
            <div class="row">
                <div class="col-12">
                    <label for="cars">Choose a media type:</label>

                    <select name="type" id="type">
                        <option value="">----</option>
                        <option value="1">Book</option>
                        <option value="2">Audio Book</option>
                        <option value="3">Blue Ray</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="title">Title:</label><br>
                    <input type="text" class="form-control"  name="title">
                </div>
                <div class="col-12">
                    <label for="isbn">ISBN/ASIN:</label><br>
                    <input type="number" class="form-control" name="isbn">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="pub_date">Publishing Date:</label><br>
                    <input type="date" class="form-control" name="pub_date">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="author">Author/Producer:</label><br>
                    <input type="text" class="form-control" name="author">
                </div>
                <div class="col-12 mt-3">
                    <label for="cars">Choose a publisher:</label>

                    <select name="publisher" id="type">
                        <option value="">----</option>
                        <option value="1">FBV Publisher</option>
                        <option value="2">For Kids</option>
                        <option value="3">Everything Publisher</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="description">Description:</label><br>
                    <textarea name="description" id="description" rows="10" style="width:100%"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                <input type="hidden" name="size" value="1000000">
                    <div>
                        <input type="file" name="image">
                    </div>
                </div>
            </div>
            
            <button class="btn btn-primary mt-3 mb-5" type="submit" name="add" class="registerbtn" style="width:200px">Add</button>
    </form>
    </div>

<?php
// FOOTER TEMPLATE
include "temp/footer.php";
?>