<ul>
	<?php
    foreach ($navItems as $item) {

        $linkSlug = $item['slug'];
        $linkTitle = $item['title'];

        echo "<li>$linkTitle</li>";

    }
	?>
</ul>