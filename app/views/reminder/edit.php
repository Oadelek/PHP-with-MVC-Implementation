<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
    <h1>Edit Reminder</h1>
    <form action="/reminder/edit/<?php echo $note['id']; ?>" method="post">
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="<?php echo htmlspecialchars($note['subject']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php require_once 'app/views/templates/footer.php' ?>