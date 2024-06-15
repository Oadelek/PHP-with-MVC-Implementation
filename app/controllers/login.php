<?php

class Login extends Controller {
	private $log;

	public function __construct() {
			$this->log = $this->model('Log');
	}

	public function index() {
			$data = [
					'error' => isset($_GET['error']) ? urldecode($_GET['error']) : '',
					'success' => isset($_GET['success']) ? urldecode($_GET['success']) : ''
			];
			$this->view('login/index', $data);
	}

		public function verify() {
				$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
				$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;

				if ($username === null || $password === null) {
						$error = "Username and password are required.";
						header('Location: /login?error=' . urlencode($error));
						exit();
				}

				// Check if the user is locked out before attempting to log in
				if ($this->log->is_user_locked_out($username)) {
						$error = "Too many failed login attempts. Please wait for 60 seconds before trying again.";
						header('Location: /login?error=' . urlencode($error));
						exit();
				}

				$user = $this->model('User');
				$user_data = $user->get_user_by_username($username);

				$attempt_result = ($user_data && password_verify($password, $user_data['password'])) ? 'good' : 'bad';
				$this->log->log_attempt($username, $attempt_result);

				if ($attempt_result === 'good') {
						$_SESSION['auth'] = 1;
						$_SESSION['username'] = ucwords($username);
						header('Location: /home');
						exit();
				} else {
						$this->handle_failed_attempt($username);
						$error = "Incorrect username or password. Please try again.";
						header('Location: /login?error=' . urlencode($error));
						exit();
				}
		}

		private function handle_failed_attempt() {
			error_log("Failed login attempt for user: $username");	
		}
}
