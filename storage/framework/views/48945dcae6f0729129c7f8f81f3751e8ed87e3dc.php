<?php echo Form::open(['url' => '/userTypes']); ?>


	<formcaption>formulaire de creation d'un type d'utilisateur</formcaption><br />

    <?php echo Form::label('title', 'Titre'); ?>

    
    <?php echo Form::text('title'); ?>


    <?php echo Form::submit('Valider'); ?>

    
<?php echo Form::close(); ?>