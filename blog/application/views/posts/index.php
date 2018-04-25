<h2><?= $title?></h2>

<a href="posts/create" class="btn btn-success create">Create Post</a>

<?php foreach($posts as $post): ?>

<div class="card text-white bg-light mb-3" style="max-width: 100rem;">
  <div class="card-header"><?php echo $post['title']; ?></div>
  <div class="card-body">
    <p class="card-text"><?php echo $post['body']; ?></p>
    <a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="card-link">Read More</a>
  </div> 
  <div class="card-footer text-muted">
  Posted on: <?php echo $post['created at']; ?>
  </div>
</div>

<?php endforeach; ?>