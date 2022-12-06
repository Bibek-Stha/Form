<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Student Record</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>All Student Record</h1>
    <table class="table">
        <tr>
            <th>SN</th>
            <th>Student Name</th>
            <th>Student Roll No.</th>
            <th>Faculty</th>
            <th>Batch No.</th>
            <th>Contact</th>
            <th>Father's Name</th>
            <th>Email</th>
            <th>District</th>
            <th>Action</th>
        </tr>

        @foreach ($students as $index=>$student)
        <tr>
            <td>{{++$index}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->roll}}</td>
            <td>{{$student->faculty}}</td>
            <td>{{$student->batch}}</td>
            <td>{{$student->contact}}</td>
            <td>{{$student->father}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->districts}}</td>
            <td><a href="/student/{{ $student->id }}">Edit</a></td>
        </tr>

        @endforeach
    </table>
    <a href="/" class="btn btn-primary btn-sm mt-2">New Student</a>
</body>
</html>

