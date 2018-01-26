<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => array('user.update', $user->id), 'method' => 'put']); ?>


	<formcaption>formulaire de modification d'un utilisateur</formcaption><br />
    last_name : <input type="text" name="last_name" value="<?php echo e($user->last_name); ?>" /><br />
    first_name : <input type="text" name="first_name" value="<?php echo e($user->first_name); ?>" /><br />
    email : <input type="mail" name="email" value="<?php echo e($user->email); ?>" /><br />
    password : <input type="password" name="password" value="<?php echo e($user->password); ?>" /><br />
    user_type_id : <input type="number" name="user_type_id" value="<?php echo e($user->user_type_id); ?>" /><br />
    remember_token : <input type="text" name="remember_token" value="<?php echo e($user->remember_token); ?>" /><br />
    <input type="submit" value="valider" />

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>