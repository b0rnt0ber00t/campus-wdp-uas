<?php
    require_once('../layouts/header.php');
    require_once('../layouts/topbar.php');
    require_once('../controller/post.php');

    // get my post
    $posts = isset(request_get()->search)
    ? search_post(request_get()->search, false)
    : all_post();
?>

<div class="container">

  <div class="mb-3">
    <form class="form-inline my-2 my-lg-0" action="" method="GET">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

  <div class="row row-cols-1 row-cols-md-3">
    <?php foreach ($posts as $post) : ?>
      <div class="col mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $post['title']; ?></h5>
            <p class="card-text"><?= $post['message']; ?></p>
            <p class="card-text">attatch: <?= $post['file'] ? $post['file'] : 'none'; ?></p>
            <?php if ($post['file'] != null) : ?>
              <a href="<?= base_url() . '/assets/files/' . $post['file']; ?>" class="badge badge-success px-2 py-1" download="">download file</a>
            <?php endif ?>
            <span class="badge badge-info px-2 py-1"><?= get_username($post['user_id']); ?></span>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</div>

<?php
  require_once('../layouts/footer.php');
?>