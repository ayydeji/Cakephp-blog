<main role="main" class="container">
  <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-arrow-circle-left fa-2x')), array('controller' => 'posts', 'action' => 'index'), array('escape'=>false)) ?>
  <br><br><br>
  <?php

  echo $this->Form->create('Post');
  echo '<div class="form-group">';
  echo $this->Form->input('title', array('class'=>'form-control'));
  echo '</div>';
  echo '<div class="form-group">';
  echo $this->Form->input('body', array('rows' => '3', 'class' => 'form-control'));
  echo '</div>';
  echo $this->Form->input('id', array('type' => 'hidden'));

  echo $this->Form->button('Save Post', array('type'=>'submit', 'class'=>'btn btn-success' ));
   ?>
</main>
