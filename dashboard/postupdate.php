<?php
    require_once('../layouts/header.php');
    require_once('../layouts/topbar.php');
    require_once('../controller/post.php');

    // update post
    isset(request_post()->title) && isset(request_post()->message)
    ? update_post() : null;

    !isset(request_get()->post_id)
    ? die(header('Location: '. base_url() .'/dashboard/post.php')) : null;

    // get post from post id
    $post = get_post(request_get()->post_id);
?>

<div class="cntainer">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                Update Post
            </div>
            <div class="card-body">
                <div class="form-group">
                    <p class="card-title">
                        <label for="title">Title</label>
                    </p>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Post Title" value="<?= $post['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"><?= $post['message']; ?></textarea>
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="customFile" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
        </div>
    </form>
</div>

<?php
  require_once('../layouts/footer.php');
?>