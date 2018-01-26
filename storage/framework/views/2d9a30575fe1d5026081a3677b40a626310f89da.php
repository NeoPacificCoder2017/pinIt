<?php $__env->startSection('content'); ?>
<table>
    <caption>Liste des utilisateurs</caption>
    <a href="<?php echo e(action('UserController@new')); ?>"><button type="button" class="btn btn-primary btn-sm">New</button></a>
    <thead>
        <tr>
            <th>id</th>
            <th>last_name</th>
            <th>first_name</th>
            <th>email</th>
            <th>password</th>
            <th>user_type_id</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->last_name); ?></td>
            <td><?php echo e($user->first_name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><?php echo e($user->user_type_id); ?></td>
            <td><?php echo e($user->remember_token); ?></td>
            <td><?php echo e($user->created_at); ?></td>
            <td><?php echo e($user->updated_at); ?></td>
            <td>
                <?php echo Form::open(['action' => array('UserController@edit', $user->id), 'method' => 'get']); ?>            
                <?php echo Form::submit('Modifier'); ?>                        
                <?php echo Form::close(); ?>


                <?php echo Form::open(['action' => array('UserController@show', $user->id), 'method' => 'get']); ?>            
                <?php echo Form::submit('Voir'); ?>                        
                <?php echo Form::close(); ?>

                
                <?php echo Form::open(['action' => array('UserController@destroy', $user->id), 'method' => 'delete']); ?>

                <?php echo Form::submit('Supprimer'); ?>                            
                <?php echo Form::close(); ?>

                                    </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>