<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h1><?php echo isset($note) ? 'Edit' : 'Create'; ?> Reminder</h1>
                <form action="<?php echo isset($note) ? "/reminder/edit/{$note['id']}" : '/reminder/create'; ?>" method="post">
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" value="<?php echo isset($note) ? htmlspecialchars($note['subject']) : ''; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo isset($note) ? 'Update' : 'Create'; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once 'app/views/templates/footer.php' ?>