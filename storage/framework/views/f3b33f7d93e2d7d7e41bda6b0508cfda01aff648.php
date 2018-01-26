<?php $__env->startSection('content'); ?>
<?php echo Form::open(['url' => '/links']); ?>


	<formcaption>formulaire de creation d'un liens</formcaption><br />

    <?php echo Form::label('url', 'Url'); ?>

    <?php echo Form::text('url'); ?>


    <?php echo Form::label('title', 'Titre'); ?>

    <?php echo Form::text('title'); ?>


    <?php echo Form::label('user_id', 'Utilisateur Id'); ?>

    <?php echo Form::number('user_id'); ?>


    <?php echo Form::label('picture', 'Nom image'); ?>

    <?php echo Form::text('picture'); ?>


    <?php echo Form::label('categroy_id', 'Catégorie Id'); ?>

    <?php echo Form::number('category_id'); ?>


    <?php echo Form::submit('Valider'); ?>

    
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>