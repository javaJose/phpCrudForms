<?php

$name = "david!!!";
$time = date('l jS \of F Y h:i:s A');;

?>
<script>
  var jstime = "<?php print $time ?>";

</script>




<div id="header">



  <div>Time: <?= $time ?></div>
  <div>Name: <?= $name ?></div>

</div>

<style>
  #header { height: 100px; background: #ccc; }
</style>
