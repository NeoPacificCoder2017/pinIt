<?php $__env->startSection('content'); ?><table>
        <caption>Liste des catégories</caption>
        <a href="<?php echo e(action('CategoryController@new')); ?>"><button type="button" class="btn btn-primary btn-sm">New</button></a>
        <thead>
            <tr>
                <th>id</th>
                <th>user_id</th>
                <th>title</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
            <tr>
                <td><?php echo e($category->id); ?></td>
                <td><?php echo e($category->user_id); ?></td>
                <td><?php echo e($category->title); ?></td>
                <td><?php echo e($category->created_at); ?></td>
                <td><?php echo e($category->updated_at); ?></td>
                <td><a href="<?php echo e(action('CategoryController@edit', $category->id)); ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="<?php echo e(action('CategoryController@destroy', $category->id)); ?>"><button type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>