<?php require_once 'app/views/templates/headerPublic.php'
?>
<main role="main" class="container">
	<div class="login-container">
			<h1>Login</h1>
		<?php
		// Debugging
		echo "<!--\n";
		echo "error: " . (isset($error) ? $error : "not set") . "\n";
		echo "success: " . (isset($success) ? $success : "not set") . "\n";
		echo "-->\n";
		?>
			<form action="/login/verify" method="post">
					<input type="text" name="username" placeholder="Username" required>
					<input type="password" name="password" placeholder="Password" required>
					<input type="submit" value="Login">
			</form>
			<p>Don't have an account? <a href="/register">Register</a></p>
	</div>
	
    <?php require_once 'app/views/templates/footer.php' ?>
