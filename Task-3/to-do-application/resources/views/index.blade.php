<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <section class="nav-container">
        <nav>Todo Application</nav>
    </section>
    <div class="container">
        <div class="form">
            <form action="{{ route('submit') }}" method="POST">
              @csrf
                <input type="text" id="title" name="title" placeholder="Title">
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="table">
          
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($users as  $value)
                  <tr>
                    <td scope="row">{{$value['id']}}</td>
                    <td>{{ $value['title'] }}</td>
                    <td>{{ $value['description'] }}</td>
                    <td>
                      <form action="/delete/{{$value['id']}}" method="post">
                        @csrf
                        <button class="delete-button">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
        </div>
    </div>
</body>
</html>
