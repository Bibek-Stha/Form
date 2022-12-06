<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Student Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>New Student Form</h1>
    <div class="container">
        <div class="row">
      <form action="/student" method="post">
        @csrf
        <div class="col-md-4">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="roll">Roll no.</label>
            <input id="roll" class="form-control" type="text" name="roll">
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="faculty">Faculty</label>
            <input id="faculty" class="form-control" type="text" name="faculty">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="batch">Batch no.</label>
            <input id="batch" class="form-control" type="text" name="batch">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="contact">Contact</label>
            <input id="contact" class="form-control" type="tel" name="contact">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="father">Father's Name</label>
            <input id="father" class="form-control" type="text" name="father">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="districts">Select District</label>
            <select id="districts" class="form-control" name="districts">
                @foreach ($districts as $districts)
                <option>{{ $districts->title_en}}</option>
                @endforeach

            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="email" name="email">
        </div>
    </div>

    <div class="col-md-12"><button type="submit" class="btn btn-primary btn-small mt-2">Submit</button>
    <a href="/student" class="btn btn-primary btn-small mt-2">Show All Record</a>
    </div></form>
        </div>
    </div>
</body>

</html>

