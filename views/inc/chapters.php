<!-- start chapters section  -->
<section class="chapters container mt-3 mb-3">
    <h1 class="text-white">Outline :</h1>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

        <?php foreach ($lessons as $value) : ?>
        <li class="nav-item mt-2">
            <a href=<?php url("admin/getlesson/" . $value['id']); ?> class="underline-none" href="#">
                <?php echo $value["title"] ?> </a>

        </li>
        <?php endforeach; ?>
</section>
<!-- end chapters section  -->
