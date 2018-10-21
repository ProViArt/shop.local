<?php
namespace Libs;

class View
{
    public function render($template, $data)
    {
        extract($data);

        include "./templates/common/header.php";
        include "./templates/" . $template . ".php";
        include "./templates/common/footer.php";
    }
}