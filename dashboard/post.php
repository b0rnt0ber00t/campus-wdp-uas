<?php
    require_once('../layouts/header.php');
    require_once('../layouts/topbar.php');
    require_once('../controller/post.php');

    // get request delete
    isset(request_get()->delete_post_id)
    ? delete_post() : null;

    // get my post
    $posts = isset(request_get()->search)
    ? search_post(request_get()->search)
    : my_post();
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
        <img src="..." class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title"><?= $post['title']; ?></h5>
          <p class="card-text"><?= $post['message']; ?></p>
          <a href="<?= base_url() . '/dashboard/postupdate.php?post_id=' . $post['id']; ?>" class="badge badge-primary px-2 py-1">update post</a>
          <a href="<?= base_url() . '/dashboard/post.php?delete_post_id=' . $post['id']; ?>" class="badge badge-danger px-2 py-1">delete post</a>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>

</div>

<?php
  require_once('../layouts/footer.php');
?>