<?php include('includes/header2.php'); ?>




<form method="post" action="books_submit.php">

  <?php
    $isEditing = false;
    if (isset($_GET['id'])){
      $isEditing = true;

      $sql = "SELECT * FROM `exp` WHERE id =".$_GET['id']." LIMIT 1;";

      $result = $conn->query($sql);

      $row = $result->fetch_assoc();

      print "<input type=\"hidden\" name=\"id\" value=\"". $_GET['id']. "\"/>";

    }
  ?>



  <input name="title" placeholder="title"<?php if ($isEditing) { ?>  value="<?php print $row['name']?>" <?php } ?>/>
  <input name="author" placeholder="author" <?php if ($isEditing) { ?>  value="<?php print $row['author']?>" <?php } ?>/>
  <input name="date_published" date_published="date_published" <?php if ($isEditing) { ?> value="<?php print $row['date_published']?>"<?php } ?> />
  <input name="experimental" placeholder="experimental" <?php if ($isEditing) { ?> value="<?php print $row['experimental']?>"<?php } ?> />

  <input type = "submit" value="GO!" />
</form>


<?php include('includes/footer.php'); ?>
