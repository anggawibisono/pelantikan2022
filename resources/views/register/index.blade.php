<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    
<link rel="stylesheet" href="/css/login.css"> 
   
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">

  <form action="/register" method="post">
    @csrf
    <img class="mb-4" src="https://poltekssn.ac.id/wp-content/uploads/2022/06/cropped-LAMBANG-ORIGINAL-rev-300x300-1.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Daftar</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="name" name="name" autofocus required>
      <label for="name">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="email@example.com" name="email" autofocus required>
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" autofocus required>
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
  </form>
  <small >Not Registered? <a href="/login">Login</a></small>

</main>


    
  </body>
</html>
