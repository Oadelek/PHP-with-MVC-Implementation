<?php

class Reminder extends Controller {
    private $noteModel;
    private $username;

    public function __construct() {
        $this->noteModel = $this->model('Note');
        $this->username = $_SESSION['username'];
    }

    public function index() {       
        $notes = $this->noteModel->get_all_notes_by_user($this->username);
        $this->view('reminder/index', ['notes' => $notes]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $subject = $_POST['subject'];
            $this->noteModel->create_note($this->username, $subject);
            header('Location: /reminder');
            exit();
        }
        $this->view('reminder/create');
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $subject = $_POST['subject'];
            $this->noteModel->update_note($id, $subject);
            header('Location: /reminder');
            exit();
        }
        $note = $this->noteModel->get_note_by_id($id);
        $this->view('reminder/edit', ['note' => $note]);
    }

    public function delete($id) {
        $this->noteModel->delete_note($id);
        header('Location: /reminder');
        exit();
    }
}
?>