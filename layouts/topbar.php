
                <!-- Topbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?= base_url(); ?>">
                        <h1 class="font-weight-bold">POST</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="<?= base_url() . '/dashboard/posts.php' ?>">All Post</a>
                        <a class="nav-link" href="<?= base_url() . '/dashboard/post.php' ?>">My Post</a>
                        <a class="nav-link" href="<?= base_url() . '/logout.php'; ?>">
                            <button class="btn btn-primary">Sign Out</button>
                        </a>
                        </div>
                    </div>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid container">

