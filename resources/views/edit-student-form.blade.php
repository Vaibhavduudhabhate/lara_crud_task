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

<!-- @if (session('success')) -->
    <!-- <div>{{ session('success') }}</div> -->
<!-- @endif -->

<form method="post" action="{{ route('update-student', ['id' => $student->id]) }}">
    @csrf
    <label for="name">Student Name:</label>
    <input type="text" id="name" name="name" value="{{ $student->name }}" required><br><br>

    <label for="class">Class:</label>
    <input type="text" id="class" name="class" value="{{ $student->class }}" required><br><br>

    <label for="division">Division:</label>
    <input type="text" id="division" name="division" value="{{ $student->division }}" required><br><br>

    <label for="roll_number">Roll Number:</label>
    <input type="text" id="roll_number" name="roll_number" value="{{ $student->roll_number }}" required><br><br>

    <input class="btn" type="submit" value="Update">
</form>

</body>
</html>
