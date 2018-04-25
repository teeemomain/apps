<h2><?php echo $post['title']; ?></h2>
<small class="badge badge-primary post-date">Posted on: <?php echo $post['created at']; ?></small><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<div class="view-button">
<a href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-success pull-left">Edit</a>
</div>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

