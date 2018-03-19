<?php
$pageTitle = "Menu";
include ('arrays.php');
include('wtf.php');
?>

<h1 class="text-center">Check out this menu!</h1>

<br><br>
<ol>
<?php foreach($menuItems as $key => $item){
  echo "<li><a href='dish.php?item=$key'>$item[title]: $$item[price]</a></li>";
}
?>
</ol>
<?php
include('footer.php');
?>