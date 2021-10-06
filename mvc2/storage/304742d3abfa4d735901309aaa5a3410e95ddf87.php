<?php $__env->startSection('content'); ?>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Avatar</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($u['id']); ?></td>
            <td><?php echo e($u['name']); ?></td>
            <td>
                <?php if($u['gender'] == 1): ?>
                Male
                <?php else: ?>
                Female
                <?php endif; ?>
            </td>
            <td><?php echo e($u['age']); ?></td>
            <td>
                <?php if(!empty($u['avatar'])): ?>
                <img src="<?php echo e(PUBLIC_PATH . $u['avatar']); ?>" width="70">
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/we16201-php2/mvc2/app/views/home/index.blade.php ENDPATH**/ ?>