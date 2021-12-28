<?php
    require_once('../layouts/header.php');
    require_once('../layouts/topbar.php');
    require_once('../controller/profile.php');

    isset(request_post()->old_password)
    ? update_password() : null;
?>

<div class="row">
    <div class="col-md-8 mb-3">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    Update Profile
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" disabled>
                    </div>
                    <div class="form-group">
                        <label for="old_password">Old Password</label>
                        <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label for="conf_password">Confirm Password</label>
                        <input type="password" class="form-control" name="conf_password" id="conf_password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="index.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    require_once('../layouts/footer.php');
?>