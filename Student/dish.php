<?php
$pageTitle = "Dish";
include('wtf.php');
include('arrays.php');

if(isset($_GET["item"])){
    $item = $_GET["item"];
    $dish = $menuItems[$item];

}
?>

<h1 class="dish text-center"><?php echo $dish[title] ; ?></h1>
<p><?php echo $dish[price] ; ?></p>

<?php
include('footer.php');

?>
