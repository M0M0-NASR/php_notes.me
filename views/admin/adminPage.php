<?php Core\View::load("inc/header"); ?>
<?php Core\View::load("admin/navbar"); ?>
<?php Core\View::load("inc/chapters", ["lessons" => $lessons, "is_admin" => 0]); ?>
<?php Core\View::load("inc/footer"); ?>
