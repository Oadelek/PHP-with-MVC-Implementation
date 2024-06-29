	<?php require_once 'app/views/templates/headerPublic.php' ?>

	<div class="container">
			<div class="login-container">
					<h1 class="text-center mb-4">Login</h1>
					<?php if (!empty($error)) echo "<div class='error-message'>$error</div>"; ?>
					<?php if (!empty($success)) echo "<div class='success-message'>$success</div>"; ?>
					<form action="/login/verify" method="post">
							<div class="mb-3">
									<input type="text" class="form-control" name="username" placeholder="Username" required>
							</div>
							<div class="mb-3">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Login</button>
					</form>
					<p class="mt-3 text-center">Don't have an account? <a href="/register">Register</a></p>
			</div>
	</div>

	<?php require_once 'app/views/templates/footer.php' ?>