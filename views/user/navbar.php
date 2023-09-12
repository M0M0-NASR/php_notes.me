<!-- start Header -->
<header>
    <nav class="navbar navbar-expand-lg text-light">
        <div class="container align-middle">
            <div class="logo d-flex me-3">
                <img src="<?php url("assets/imgs/learn-php.org.ico") ?>" alt="logo">
                <a class="nav-link ms-2 fw-bold fs-5" href="<?php url() ?>">Learn-PHP.org</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link text-light " href="<?php url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="<?php url("home/about") ?>">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white-50" href="<?php url("home/contact") ?>">Contact Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="<?php url("home/contribute") ?>">Contribute</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" method="get" action="<?php url() ?>">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- end Header -->