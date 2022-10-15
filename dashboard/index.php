<?php
require_once('../layouts/header.php');
require_once('../layouts/topbar.php');
require_once('../controller/dashboard.php');

// create new post
isset(request_post()->title) && isset(request_post()->message)
    ? create_new_post() : null;
?>

<div class="row">
    <div class="col-md-8 mb-3 new_post d-none">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    New Post
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <p class="card-title">
                            <label for="title">Title</label>
                        </p>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="file" id="file">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md">
        <div class="card" style="width: 18rem;">
            <img src="<?= base_url() . '/assets/img/undraw_profile.svg' ?>" class="card-img-top" alt="profile">
            <div class="card-body">
                <h5 class="card-title"><?= get_username(request_session()->data['user_id']); ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="row">
                    <div class="col-6">
                        <span class="btn btn-primary show_post">New Post</span>
                    </div>
                    <div class="d-flex col-6 justify-content-end">
                        <a href="profile.php" class="btn btn-primary">Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.php');
?>