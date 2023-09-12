<?php Core\View::load("inc/header"); ?>

<div class="holder container">
    <h5 class="directoy mt-3 mb-3 p-2 text-primary">first section
        <span class="fw-bold text-light">/ lesson title</span>
    </h5>
    <h2 class="title mt-3 mb-3 text-light">Lesson Name</h2>
    <div class="content text-white-50 mt-5 mb-4">
        enter Lesson here
    </div>
    <form class="redirect mt-3 mb-3" action="/nextLesson" method="get">
        <input class="btn btn-primary  rounded-1" type="submit" name="prev_lesson" value="&LessLess; previous lesson">
        <input class="btn btn-primary me-2  rounded-1" type="submit" name="next_lesson" value="next lesson &GreaterGreater;">
    </form>
</div>


<?php Core\View::load("inc/footer"); ?>