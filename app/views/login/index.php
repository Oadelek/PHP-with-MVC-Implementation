<?php require_once 'app/views/templates/headerPublic.php'
?>
<main role="main" class="container">
	<div class="login-container">
			<h1>Login</h1>
			<?php if (!empty($error)) echo "<p class='error-message'>$error</p>"; ?>
			<?php if (!empty($success)) echo "<p class='success-message'>$success</p>"; ?>
			<form action="/login/verify" method="post">
					<input type="text" name="username" placeholder="Username" required>
					<input type="password" name="password" placeholder="Password" required>
					<input type="submit" value="Login">
			</form>
			<p>Don't have an account? <a href="/register">Register</a></p>
	</div>
	
    <?php require_once 'app/views/templates/footer.php' ?>
