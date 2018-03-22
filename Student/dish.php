<?php
$pageTitle = "Dish";
include('wtf.php');

if(isset($_GET['item'])){
    $item = $_GET['item'];
    $dish = $menuItems[$item];

}
// suggested tip //

    function suggested($price, $tip){
    $totalTip = $price * $tip ;
    echo $totalTip;
    }

?>
<div class="dish-div">
<h1 class="dish"><?php echo $dish['title']. " <sup>$</sup>" .$dish['price']; ?></h1>
<img src="img/<?php echo $dish['img'] ; ?>" alt="dish pic" class="text-center dish-pic"/>
    <p>Description:<br></p>
<p class="blurb"><?php echo $dish['blurb'] ; ?></p>
<p class="drink">This meal goes well with: <?php echo $dish['drink'] ; ?></p>
<p><em>Tip recommendation: <sup>$</sup><?php suggested($dish['price'], 0.05) ?></em></p>
    <br><a href="menu.php">&laquo  Back To Menu</a>
</div>
<br><br>


<?php
include('footer.php');

?>
