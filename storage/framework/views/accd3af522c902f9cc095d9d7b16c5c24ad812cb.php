
<?php echo Form::open(['route' => array('userType.destroy', $userType->id), 'method' => 'delete']); ?>

 {<?php echo dump($userType); ?>}
 
 
 <?php echo Form::submit('delete'); ?>

 

<?php echo Form::close(); ?>

