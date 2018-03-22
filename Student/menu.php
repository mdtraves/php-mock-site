<?php
$pageTitle = "Menu";
include ('arrays.php');
include('wtf.php');
?>

<h1 class="text-center">Check out this menu!</h1>

<br><br>
<ul class="text-center">
<?php foreach($menuItems as $key => $item){
  echo "<li><a class='foods' href='dish.php?item=$key'>$item[title]: $$item[price]</a></li>";
}
?>
</ul>
<?php
include('footer.php');
?>