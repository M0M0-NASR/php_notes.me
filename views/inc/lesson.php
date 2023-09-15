<?php Core\View::load("inc/header"); ?>
<?php Core\View::load("user/navbar"); ?>

<div class="holder container">
    <div class="directoy mt-3 mb-3 p-2 text-primary d-flex justify-content-between align-items-center">
        <h5>first section
            <span class="fw-bold text-light">/ <?php echo $row['title'] ?></span>
        </h5>
        <div>
            <a href="<?php url("admin/update/" . $row['id']); ?>" class="btn btn-primary">update</a>
            <a href="<?php url("admin/delete/" . $row['id']); ?>" class=" btn btn-danger">delete</a>
        </div>
    </div>
    <h2 class="title mt-3 mb-3 text-light"> <?php echo $row['title'] ?></h2>
    <div class="content text-white-50 mt-5 mb-4">
        <?php echo $row['content'] ?>
    </div>
    <div class="buttons">
        <?php if (isset($prev)) : ?>
        <a href="<?php url("home/getLesson/" . $prev) ?>"
            class="btn btn-primary me-2  rounded-1 ps-2 pe-2">&LessLess;previous
            lesson</a>
        <?php endif; ?>
        <?php if (isset($next)) : ?>
        <a href="<?php url("home/getLesson/" . $next) ?>" class="btn btn-primary me-2  rounded-1 ps-2 pe-2"
            value="">next
            lesson &GreaterGreater;</a>
        <?php endif; ?>
    </div>
</div>

<?php Core\View::load("inc/footer"); ?>
