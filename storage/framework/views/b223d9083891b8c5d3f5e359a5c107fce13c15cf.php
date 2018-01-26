

<?php echo Form::open(['route' => array('user.destroy', $user->id), 'method' => 'delete']); ?>

 {<?php echo dump($user); ?>}
 
 
 <?php echo Form::submit('delete'); ?>

 

<?php echo Form::close(); ?>


