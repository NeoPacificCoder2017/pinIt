<?php $__env->startSection('content'); ?>

<?php echo Form::open(['route' => array('category.update', $category->id), 'method' => 'put']); ?>


	<formcaption>formulaire de modification d'une catégorie</formcaption><br />
    Titre: <input type="text" name="title" value="<?php echo e($category->title); ?>" /><br />
    
    <input type="submit" value="valider" />

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>