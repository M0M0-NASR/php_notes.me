<?php Core\View::load("inc/header"); ?>
<?php Core\View::load("inc/navbar"); ?>
<?php Core\View::load("inc/chapters", ["lessons" => $lessons]); ?>
<?php Core\View::load("inc/footer"); ?>
