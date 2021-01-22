<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new Student</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>

<div class="container">
  <div class="row" style="margin-top:45px">
     <div class="col-md-4 col-md-offset-4">
     <h4>Add new student</h4><hr>
        <form action="{{ route('student.save') }}" method="post" id="main_form">
        @csrf
            <div class="form-group">
                 <label>Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Enter your name">
                 <span class="text-danger error-text name_error"></span>
            </div>
            <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter your email">
                 <span class="text-danger error-text email_error"></span>
            </div>
            <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger error-text password_error"></span>
            </div>
            <br>
            <button type="submit" class="btn btn-block btn-primary">Save</button>
        </form>
     </div>
  </div>
</div>
    

    <script src="{{ asset('jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('main.js') }}"></script>
</body>
</html>