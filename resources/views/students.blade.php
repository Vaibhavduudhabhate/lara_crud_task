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
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->division }}</td>
                    <td>{{ $student->roll_number }}</td>
                    <td>
                    <a href="{{ route('edit-student', ['id' => $student->id]) }}">Edit</a>
                    <a href="{{ route('delete-student', ['id' => $student->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
