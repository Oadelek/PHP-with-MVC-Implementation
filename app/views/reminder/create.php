<?php require_once 'app/views/templates/header.php' ?>

<div class="container">
    <h1>Create Reminder</h1>
    <form action="/reminder/create" method="post">
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<?php require_once 'app/views/templates/footer.php' ?>