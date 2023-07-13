
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <title>Document</title>
</head>

<body>
  <?php include('register.php') ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap');

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
  transition: 0.3s;
}

body {
  height: 100vh;
  background-image: linear-gradient(130deg, #fefefe, #ededed);
  display: flex;
  justify-content: center;
  align-items: center;
}

.container {
  background-color: white;
  display: flex;
  
  border: 1px solid black;
  box-shadow: 8px 8px 0 0 black;
  position: relative;
}

.left {
  width: 400px;
}

.left {
  padding: 40px 60px;
}

form {
  display: flex;
  flex-direction: column;
}

.accept {
  display: flex;
  align-items: center;
  margin-top: 10px;
  font-size: 0.9rem;
}

.accept input {
  width: 15px;
  margin-right: 10px;
}

img {
  height: 500px;
  padding: 40px 60px;
}

.left h1 {
  margin-bottom: 10px;
}

label {
  margin: 15px 0 5px;
  font-size: 0.9rem;
}

.left p {
  margin-bottom: 15px;
}

input {
  height: 35px;
}

.accept label {
  margin: 0;
}

.button {
  width: 100%;
  height: 45px;
  background-color: black;
  color: white;
  font-size:1rem;
  margin-top: 30px;
}
.login{
    text-decoration: none;
}


@media screen and (max-width: 820px) {
  .container {
    width: 350px;
  }
  .left {
    height: 100%;
    width: 100%;
  }
  .right {
    display: none;
  }
}
    </style>

  

<div class="container">
  <div class="left">
    <h1>Sign Up</h1>
    <p>create a new account</p>
    <form action="register.php" method="post">
      <label for="name">Name</label>
      <input type="name" name="name" id="name">
      
      <label for="email">Email</label>
      <input type="email" name="email" id="email">

      <label for="password">Password</label>
      <input type="password" name="password" id="password">
      
      <label for="conf_password">confirm Password</label>
      <input type="password" name="conf_password" id="conf_password">
      
      <p>Already have an account</p>
      <a class="login" href="./login.php">Log In</a>
      <input class="button" type="submit" name="button" value="Sign Up">
    </form>
     
  </div>
  

  
</div>
</body>


</html>