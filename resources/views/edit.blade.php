<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Student Details</h1>
      <form action="/update/{{$student->id}}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="email" name="name" class="form-control" id="exampleInputEmail1" value="{{$student->name}}" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{$student->email}}" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Contact</label>
          <input type="text" name="contact" class="form-control" id="exampleInputEmail1" value="{{$student->contact}}" placeholder="Contact">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>