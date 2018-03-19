<?php
$companyName = 'Mike Douglas Traves';
include('arrays.php');
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="assets/styles/styles.css"/>

</head>
<body id="final-example">
<div class="wrapper">
    <div class="banner">
        <a href="http://localhost/26_Final/Student/" title="Rteurn to Home">
            <img src="img/banner.png" alt="site banner"/>
        </a>
    </div><!-- banner -->
    <nav>
        <?php include('nav.php'); ?>
    </nav>
    <div class="content">