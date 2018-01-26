<?php echo Form::open(['route' => array('userType.update', $userType->id), 'method' => 'put']); ?>


	<formcaption>formulaire de modification d'un type d'utilisateur</formcaption><br />
    
    <?php echo Form::label('title', 'Titre'); ?>

    
    <?php echo Form::text('title', $userType->title); ?>

    
    
    <input type="submit" value="valider" />

<?php echo Form::close(); ?>