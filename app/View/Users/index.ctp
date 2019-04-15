<main role="main" class="container">

<h1>Your Posts</h1><br>
<div class="row">
  <div class="col-2"><b><?php echo substr(AuthComponent::user('username'), 0, strlen(AuthComponent::user('username'))); ?></b><br>
  <p>You have <b><?php echo $count ?></b> post</p><br><br></div>
  <div class="col-10">
    <?php echo $this->Html->link("Add Post", array('controller'=>'posts', 'action' => 'add')); ?><br><br>
    <?php foreach ($posts as $post): ?>
    <div class="card">
        <h5 class="card-header"><?php echo $post['Post']['title'] ?></h5>
        <div class="card-body">
          <p class="card-text"><?php echo $post['Post']['body'] ?></p>
          <?php echo $this->Html->link('View Post',
    array('controller' => 'posts', 'action' => 'view', $post['Post']['id']), array('class'=>'btn btn-primary')); ?>
        <div class="card-footer text-muted">
          <?php echo $post['Post']['created']?> - <?php echo $post['User']['username'] ?>
          <span style="float: right;">
          <? echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'fas fa-trash-alt')), array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?', 'escape'=>false)); ?>
          <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'far fa-edit')), array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']), array('escape'=>false)) ?>
          </span>
        </div>
      </div>
    </div>
    <?php endforeach ?>

  </div>
</div>

</main>
