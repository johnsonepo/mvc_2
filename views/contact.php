
<?php ob_start(); ?>
    Contact | Web application
<?php $title = ob_get_clean(); ?>

<?php ob_start(); ?>
<h1>Contact</h1>
<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input name="email" type="text" class="form-control" aria-describedby="emailHelp">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="text" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $content = ob_get_clean(); ?>

