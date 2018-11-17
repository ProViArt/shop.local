<?php
$n = 1;
foreach ($news as $item) {
    ?>
        <article>
            <h2><?= $item["title"]?></h2>
            <p><?= $item["content"]?></p>
            <a href="news/<? echo $n;?>">Подробнее...</a>
            <hr>
        </article>
    <?php
    $n++;
}