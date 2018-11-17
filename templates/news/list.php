<?php

foreach ($news as $item) {
    ?>
        <article>
            <h2><?= $item["title"]?></h2>
            <p><?= $item["content"]?></p>
            <a href="news/1">Подробнее...</a>
            <hr>
        </article>
    <?php
}