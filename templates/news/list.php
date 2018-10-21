<?php

foreach ($news as $item) {
    ?>
        <article>
            <h2><?= $item["title"]?></h2>
            <p><?= $item["content"]?></p>
        </article>
    <?php
}