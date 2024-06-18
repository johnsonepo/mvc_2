
<?php ob_start(); ?>
    Home | Web application
<?php $title = ob_get_clean(); ?>

<?php ob_start(); ?>
    <h2 class="text-center mb-4">Sign Up</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input name="fullname" type="text" class="form-control" placeholder="Enter your full name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input name="password" type="password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Password:</label>
            <input name="confirm_password" type="password" class="form-control" placeholder="Enter your password">
        </div>
        <button name="submit" type="submit" class="btn btn-primary btn-block">Sign Up</button>
    </form>
    <p class="text-center mt-3">Already have an account? <a href="/login">Login here</a></p>


<?php $content = ob_get_clean(); ?>

