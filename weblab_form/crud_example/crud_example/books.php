<?php include('includes/header.php'); ?>

<div id="wrap">

  <?php
  if (isset($_GET['message'])){
    if ($_GET['message'] == "add_success"){
      print "<h1>Your BOOK was added successfully</h1>";
    }
    if($_GET['message']== 'delete_success'){
      print "<h1>Book number ".$_GET['id']. " has been deleted</h1>";
    }
  }
  ?>
  <table data-toggle="table" class="table">
    <thead>
      <td>id</td>
      <td>title</td>
      <td>author</td>
      <td>date_published</td>
      <td>experimental</td>
    </thead>

<?php


  $sql = "SELECT * FROM `books` ;";


  $result = $conn->query($sql) or die(mysqli_error($conn));

  while($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <td><?php print $row['id']?></td>
        <td><?php print $row['title']?></td>
        <td><?php print $row['author']?></td>
        <td><?php print $row['date_published']?></td>
        <td><?php print $row['experimental']?></td>

        <td><a href="user_form.php?id=<?php print $row['id']?>">edit</a></td>
        <td><a href="delete_user.php?id=<?php print $row['id']?>">delete</a></td>
      </tr>

    <?php

  }



?>







  </table>



      <a href="books_form.php">Add a book!</a>


</div>
<style>
  #wrap { width: 500px; border: 3px dotted blue}

</style>


<?php include('includes/footer.php'); ?>
