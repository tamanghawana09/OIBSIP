<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Register
        </div>
        <div class="card-body">
          <form action="{{route('signup')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name">
              @error('fullname')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
              @error('email')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
              @error('username')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
              @error('password')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </form>
        </div>
        <div class="card-footer">
          <p class="text-center">Already have an account? <a href="{{route('login')}}">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
