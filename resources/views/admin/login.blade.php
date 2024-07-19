<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/loginadmin.css">
    <title>Document</title>
    <style>
        .btn-color{
    background-color: #0e1c36;
    color: #fff;
    
  }
  
  .profile-image-pic{
    height: 200px;
    width: 200px;
    object-fit: cover;
  }
  
  
  
  .cardbody-color{
    background-color: #ebf2fa;
  }
  
  a{
    text-decoration: none;
  }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5" >Login Admin Form</h2>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" id="admin-login" method="POST" action="/admin/login">
            @csrf

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" name="email"   class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>