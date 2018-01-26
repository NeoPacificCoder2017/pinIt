<?php $__env->startSection('content'); ?>
<?php echo Form::open(['url' => '/categories']); ?>


    <formcaption>formulaire de creation d'une catégorie</formcaption><br />
    
    User Id: <input type="number" name="user_id"/><br />
    Titre: <input type="text" name="title"/><br />
    <input type="submit" value="valider" />
	
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>