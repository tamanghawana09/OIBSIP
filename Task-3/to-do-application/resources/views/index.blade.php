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
            <form action="" method="POST">
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
                    <th scope="col">Tasks</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><button class="update-button">Update</button></td>
                    <td><button class="delete-button">Delete</button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td><button class="update-button">Update</button></td>
                    <td><button class="delete-button">Delete</button></td>
                  </tr>
    
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>
