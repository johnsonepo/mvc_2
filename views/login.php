
<?php ob_start(); ?>
    Home | Web application
<?php $title = ob_get_clean(); ?>

<?php ob_start(); ?>
<div class="container login-container">
    <h2 class="text-center mb-4">Login</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input name="username" type="text" class="form-control" placeholder="Enter your username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input name="password" type="password" class="form-control" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <p class="text-center mt-3">Don't have an account? <a href="/register">Register here</a></p>
</div>

<?php $content = ob_get_clean(); ?>

