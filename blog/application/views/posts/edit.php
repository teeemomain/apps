<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <fieldset>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
    </div>
    
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" name="body" rows="3" placeholder="Add Body" ><?php echo $post['body']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>