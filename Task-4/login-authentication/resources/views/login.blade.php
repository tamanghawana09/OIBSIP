<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form action="{{route('signin')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="username">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter username">
              @error('email')
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
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
        <div class="card-footer">
          <p class="text-center">Don't have an account? <a href="{{route('register')}}">Register</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
