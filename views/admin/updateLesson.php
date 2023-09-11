<?php Core\View::load("inc/header"); ?>

<!-- start update form -->
<div class="holder container text-white">
    <ul class="nav nav-tabs d-flex flex-row justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Write Lesson</button>
        </li>
    </ul>
    <div class="tab-content  d-flex flex-row justify-content-center" id="myTabContent">
        <div class="tab-pane fade show active w-75 mt-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <form class="d-flex flex-column align-items-center" action="addleson" method="post">
                <div class="mb-3 w-100">
                    <label for="lesson-name" class="form-label">Lesson's Name</label>
                    <input type="text" class="form-control inp-body-bg" id="lesson-name" placeholder="Lesson Name">
                </div>
                <div class="col mb-3 w-100">
                    <label for="lesson-content" class="form-label">Content</label>
                    <textarea class="form-control inp-body-bg" id="lesson-content" rows="20"></textarea>
                </div>
                <div class="row w-100">
                    <div class="col mb-3 ">
                        <input type="input" value="submit" name="update" class="form-control text-center inp-body-bg">
                    </div>
                    <div class="col mb-3">
                        <input type="input" value="delete" name="delete" class="form-control text-center inp-body-bg">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of update form -->

<?php Core\View::load("inc/footer"); ?>