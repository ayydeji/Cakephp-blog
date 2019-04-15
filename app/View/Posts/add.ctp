<main role="main" class="container">
  <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-arrow-circle-left fa-2x')), array('controller' => 'posts', 'action' => 'index'), array('escape'=>false)) ?>
<br><br><h1>Add a new post</h1>
<?php

echo $this->Form->create('Post');
echo '<div class="form-group">';
echo $this->Form->input('title', array('class'=> 'form-control', "placeholder"=> "What's on your mind?"));
echo '</div>';
echo '<div class="form-group">';
echo $this->Form->input('body', array('class'=> 'form-control', 'rows'=>'5', 'placeholder'=>'Hmm tell me more...'));
echo '</div>';
echo $this->Form->button('Save Post', array('type'=>'submit', 'class'=>'btn btn-success'));
 ?>

</main>
