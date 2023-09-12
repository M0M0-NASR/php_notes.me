<?php Core\View::load("inc/header"); ?>
<?php Core\View::load("user/navbar"); ?>
<?php Core\View::load("user/intro"); ?>
<?php Core\View::load("inc/chapters", ["lessons" => $lessons]); ?>
<?php Core\View::load("inc/footer"); ?>
