<?php

class Note {
    public function get_all_notes_by_user($username) {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM notes WHERE username = :username AND deleted = 0");
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_note_by_id($id) {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM notes WHERE id = :id AND deleted = 0");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create_note($username, $subject) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO notes (username, subject, created_at) VALUES (:username, :subject, NOW())");
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
        return $statement->execute();
    }

    public function update_note($id, $subject) {
        $db = db_connect();
        $statement = $db->prepare("UPDATE notes SET subject = :subject WHERE id = :id AND deleted = 0");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
        return $statement->execute();
    }

    public function delete_note($id) {
        $db = db_connect();
        $statement = $db->prepare("UPDATE notes SET deleted = 1 WHERE id = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }
}

?>