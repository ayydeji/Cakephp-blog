<main role="main" class="container">

<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-arrow-circle-left fa-2x')), array('controller' => 'posts', 'action' => 'index'), array('escape'=>false)) ?>
<br><br><br><h1><?php echo $post['Post']['title'] ?></h1>
<p><?php echo $post['Post']['body'] ?></p>
<p class="text-muted"><small><?php echo $post['Post']['created'] ?>- <?php echo $post['User']['username'] ?></small></p>
</main>
