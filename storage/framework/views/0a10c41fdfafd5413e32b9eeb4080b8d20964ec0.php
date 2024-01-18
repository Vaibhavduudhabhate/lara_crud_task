<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h2>Students List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Class</th>
                <th>Division</th>
                <th>Roll Number</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->class); ?></td>
                    <td><?php echo e($student->division); ?></td>
                    <td><?php echo e($student->roll_number); ?></td>
                    <td>
                    <a href="<?php echo e(route('edit-student', ['id' => $student->id])); ?>">Edit</a>
                    <a href="<?php echo e(route('delete-student', ['id' => $student->id])); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\kunal\machinetest\laravel\resources\views/students.blade.php ENDPATH**/ ?>