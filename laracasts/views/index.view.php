<?php require('partials/head.php'); ?>
  
<h1>Learning PHP</h1>
<?php foreach ($tasks as $task) : ?>
  <li>
    <?php if($task->completed) : ?>
      <strike>
    <?php endif; ?>
    <?= $task->description ?>
    <?php if($task->completed) : ?>
      </strike>
    <?php endif; ?>
  </li>
<?php endforeach; ?>


<?php require('partials/footer.php'); ?>