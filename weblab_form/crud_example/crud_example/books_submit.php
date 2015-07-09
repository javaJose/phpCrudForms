<?php


include('includes/db.php');
$conn = db_connect();

print_r($_POST);

$author = $_POST['author'];
$title = $_POST['title'];
$date_published = $_POST['date_published'];
$experimental = $_POST['experimental'];


if (isset($_POST['id'])){

  // editing

  //UPDATE table_name SET field1=new-value1, field2=new-value2 [WHERE Clause]
  $sql = "UPDATE books
  SET   title = '".$_POST['title']."',
        author = '".$_POST['author']."',
        date_published = '".$_POST['date_published']."',
        experimental = '".$_POST['experimental']."'
  WHERE id=".$_POST['id'].";";


}
else {

  $sql = "INSERT INTO books (id, title, author, publication_date, experimental)
  VALUES ('".$_POST['id']."', '".$_POST['title']."', '".$_POST['author']."','".$_POST['date_published']."','".$_POST['experimental']."',)";

  // adding

}


print $sql . "<br/>";

$conn->query($sql) or die('there was an error!');


header("Location: index.php?message=add_success");
