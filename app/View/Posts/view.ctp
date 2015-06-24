
<h2><?php echo $post['Post']['title'] ?></h2>

<p><?php echo $post['Post']['body'] ?></p>

<p><small>Created on: <?php echo $post['Post']['created'] ?></small></p>

<p><small>Modified on: <?php echo $post['Post']['modified'] ?></small></p>
<br />

<p><?php echo $this->HTML->link('back to Posts', array('action' => 'index')); ?></p>


 