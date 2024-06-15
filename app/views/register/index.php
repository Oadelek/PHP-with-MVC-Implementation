<?php require_once 'app/views/templates/headerPublic.php' ?>
<div class="register-container">
    <h1>Register</h1>
    <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>
    <form action="/register/create" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="/login">Login</a></p>
</div>

<?php require_once 'app/views/templates/footer.php' ?>