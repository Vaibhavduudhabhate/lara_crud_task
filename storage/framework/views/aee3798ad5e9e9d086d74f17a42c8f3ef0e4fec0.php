<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<style>
    .btn {
        background-color: #008CBA;
        border-radius: 10px;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
<body>

<h2>Edit Student</h2>

<!-- <?php if(session('success')): ?> -->
    <!-- <div><?php echo e(session('success')); ?></div> -->
<!-- <?php endif; ?> -->

<form method="post" action="<?php echo e(route('update-student', ['id' => $student->id])); ?>">
    <?php echo csrf_field(); ?>
    <label for="name">Student Name:</label>
    <input type="text" id="name" name="name" value="<?php echo e($student->name); ?>" required><br><br>

    <label for="class">Class:</label>
    <input type="text" id="class" name="class" value="<?php echo e($student->class); ?>" required><br><br>

    <label for="division">Division:</label>
    <input type="text" id="division" name="division" value="<?php echo e($student->division); ?>" required><br><br>

    <label for="roll_number">Roll Number:</label>
    <input type="text" id="roll_number" name="roll_number" value="<?php echo e($student->roll_number); ?>" required><br><br>

    <input class="btn" type="submit" value="Update">
</form>

</body>
</html>
<?php /**PATH C:\Users\kunal\machinetest\laravel\resources\views/edit-student-form.blade.php ENDPATH**/ ?>