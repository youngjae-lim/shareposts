<?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light mt-3"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="card card-body bg-light mt-5">
      <h2>Add Post</h2> 
      <p>Create a new post with this form.</p>
      <form action="<?php echo URLROOT; ?>/posts/add" method="POST">
        <div class="form-group mb-3">
          <label for="title" class="form-label">Title: <sup>*</sup></label> 
          <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
          <span class="invalid-feedback"><?php echo $data["title_err"]; ?></span>
        </div>
        <div class="form-group mb-3">
          <label for="body" class="form-label">Body: <sup>*</sup></label> 
          <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>">
            <?php echo $data['body']; ?>
          </textarea>
          <span class="invalid-feedback"><?php echo $data["body_err"]; ?></span>
        </div>
        <input type="submit" value="Submit" class="btn btn-success"> 
      </input>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
