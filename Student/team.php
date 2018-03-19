<?php
    $pageTitle = 'Team';
    include('wtf.php');
?>

<div id="team-members" class="cf">
    <hr>
    <h1>Our Team!</h1>
    <p>We have a team usually...</p>
    <hr>
</div>
<div class="teamBox">
<?php

    foreach ($teamMembers as $staff){
        echo "<div class='column three'><img src='img/$staff[img].png' alt='piccy'/>NAME: $staff[name]<br>POSITION: $staff[position]<br>BIO: $staff[bio]<br></div>";
    }

?>
</div>
<?php
    include('footer.php');

?>


