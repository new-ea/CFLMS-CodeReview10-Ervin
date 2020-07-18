<?php
// FILE FOR DB CONNECTION
require_once "config/db_connect.php";
// HEADER TEMPLATE 
require_once "temp/header.php";

$id = $_GET["publisher_id"];
$result = $conn->query("SELECT 
                        media.media_id,
                        media.title, 
                        media.image,
                        media.author,
                        media.pub_date,
                        media.publisher,
                        publisher.name,
                        publisher.publisher_id
                        FROM media
                        INNER JOIN publisher ON media.publisher = publisher.publisher_id
                        WHERE media.publisher = $id");

?>
<a href='index.php' class="btn btn-primary text-white mb-2">Back to Homepage</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Published</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php

while ($row = $result->fetch_assoc()) {
    $id = $row["media_id"];
    $title = $row["title"];
    $image = $row["image"];
    $author = $row["author"];
    $pub_date = $row["pub_date"];
    $publisher = $row["name"];
?>

<tr>
    <td><?= $title ?></td>
    <td><?php echo "<img src='img/$image' alt='' width='100px' height='150px'>"; ?> </td>
    <td><?= $author ?></td>
    <td><?= $publisher ?></td>
    <td><?= $pub_date ?></td>
    <td><a href='info.php?id=<?= $id ?>'class="btn btn-primary text-white">View More</a></td>
    
</tr>

<?php } ?> <!-- SCHLEIFEN END  -->

  </tbody>
</table><!-- TABLE END  -->

<?php
// FOOTER TEMPLATE
include "temp/footer.php";
?>