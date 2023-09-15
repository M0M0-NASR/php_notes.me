<?php Core\View::load("inc/header"); ?>
<?php Core\View::load("admin/navbar"); ?>

<!-- start of how to add section  -->
<section class="the-way container text-white mt-3 mb-3">
    <p><span class="fw-bold">Note::</span> How to add lesson ? ( important Question)</p>
    <ul>
        <li>write in html tags.</li>
        <li>write every thing as a non numric list.</li>
        <li>you can make inter lists it's ok.</li>
        <li>if have a code section add &lt;<span class="text-primary">code</span>&gt; </li>
    </ul>
</section>
<!-- end of how to add section  -->

<!-- start handle error -->

<?php if (isset($msg)) : ?>
    <div class="container alert alert-primary" role="alert">
        <?php echo $msg ?>
    </div>
<?php endif; ?>

<!-- edn handle error -->


<!-- start add form -->
<section class="holder container text-white">
    <ul class="nav nav-tabs d-flex flex-row justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Write Lesson</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Upload File</button>
        </li>

    </ul>
    <div class="tab-content  d-flex flex-row justify-content-center" id="myTabContent">
        <div class="tab-pane fade show active w-75 mt-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <form class="d-flex flex-column align-items-center" action="<?php url("admin/storeLesson") ?>" method="POST">
                <div class="mb-3 w-100">
                    <label for="lesson-name" class="form-label">Lesson's Name</label>
                    <input name="title" type="text" class="form-control inp-body-bg" id="lesson-name" placeholder="Lesson Name">
                </div>
                <div class="mb-3 w-100">
                    <label for="lesson-content" class="form-label">Content</label>
                    <textarea name="content" class="form-control inp-body-bg" id="lesson-content" rows="20"></textarea>
                </div>
                <div class="mb-3 text-center w-50">
                    <input type="submit" name="submit" value="Subimt" class="form-control inp-body-bg w-100" id="lesson-name">
                </div>
            </form>

        </div>
        <div class="tab-pane fade w-75 mt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <form class="d-flex flex-column align-items-center" action="<?php url("admin/storeLesson") ?>" method="post">
                <div class="mb-3 w-100">
                    <label for="lesson-name" class="form-label">Lesson's Name</label>
                    <input type="text" class="form-control inp-body-bg" id="lesson-name" placeholder="Lesson Name">
                </div>
                <div class="mb-3 w-100">
                    <div>
                        <label for="formFileLg" class="form-label">Large file input example</label>
                        <input class="form-control form-control-lg inp-body-bg" id="formFileLg" type="file">
                    </div>
                </div>
                <div class="mb-3 text-center w-50">
                    <input type="submit" name="submit" value="Subimt" class="form-control inp-body-bg w-100" id="lesson-name">
                </div>
            </form>

        </div>
    </div>
</section>
<!-- end of add form -->




<?php Core\View::load("inc/footer"); ?>