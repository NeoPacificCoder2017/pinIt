<?php $__env->startSection('content'); ?><table>
    <caption>Liste des utilisateurs</caption>
    <a href="<?php echo e(action('UserTypeController@new')); ?>"><button type="button" class="btn btn-primary btn-sm">New</button></a>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
        <tr>
            <td><?php echo e($userType->id); ?></td>
            <td><?php echo e($userType->title); ?></td>
            <td><?php echo e($userType->created_at); ?></td>
            <td><?php echo e($userType->updated_at); ?></td>
            <td><a href="<?php echo e(action('UserTypeController@edit', $userType->id)); ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                <a href="<?php echo e(action('UserTypeController@show', $userType->id)); ?>"><button type="button" class="btn btn-primary btn-sm">show</button></a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>