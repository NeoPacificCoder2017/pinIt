<?php $__env->startSection('content'); ?><table>
        <caption>Liste des liens</caption>
        <a href="<?php echo e(action('LinkController@new')); ?>"><button type="button" class="btn btn-primary btn-sm">New</button></a>
        <thead>
            <tr>
                <th>id</th>
                <th>url</th>
                <th>title</th>
                <th>user_id</th>
                <th>picture</th>
                <th>category_id</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
            <tr>
                <td><?php echo e($link->id); ?></td>
                <td><?php echo e($link->url); ?></td>
                <td><?php echo e($link->title); ?></td>
                <td><?php echo e($link->user_id); ?></td>
                <td><?php echo e($link->picture); ?></td>
                <td><?php echo e($link->category_id); ?></td>
                <td><?php echo e($link->created_at); ?></td>
                <td><?php echo e($link->updated_at); ?></td>
                <td><a href="<?php echo e(action('LinkController@edit', $link->id)); ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="<?php echo e(action('LinkController@show', $link->id)); ?>"><button type="button" class="btn btn-primary btn-sm">show</button></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
     </table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>