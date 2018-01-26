

<?php echo Form::open(['route' => array('link.destroy', $link->id), 'method' => 'delete']); ?>

 {<?php echo dump($link); ?>}
 
 
 <?php echo Form::submit('delete'); ?>

 

<?php echo Form::close(); ?>


