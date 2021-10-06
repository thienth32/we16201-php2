
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->id); ?></td>
            <td><?php echo e($p->name); ?></td>
            <td><?php echo e($p->cate_id); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /Library/WebServer/Documents/we16201-php2/mvc2/app/views/admin/product/index.blade.php ENDPATH**/ ?>