<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tourney:ital,wght@1,100&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="../css/contact.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/352835b727.js" crossorigin="anonymous"></script>
  <style>
    body>script+div[style^="text"] {
      display: none
    }

    html,
    body {
      overflow-x: hidden !important
    }

     *,
*::before,
*::after {
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
}
body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  line-height: 1.5;
  background: lightblue;
  display: flex;
  height: 100vh;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
h2::selection,
label::selection,
button::selection {
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.wrapper {
  width: 90%;
  padding: 2rem;
  background: #fff;
  box-shadow: 0 0px 2.2px rgba(0, 0, 0, 0.028), 0 0px 5.3px rgba(0, 0, 0, 0.04),
    0 0px 10px rgba(0, 0, 0, 0.05), 0 0px 17.9px rgba(0, 0, 0, 0.06),
    0 0px 33.4px rgba(0, 0, 0, 0.072), 0 0px 80px rgba(0, 0, 0, 0.1);
}
h2 {
  background: rgba(173, 216, 230, 0.7);
  letter-spacing: 0.1rem;
  padding: 1rem;
  cursor: default;
}
form,
input,
textarea,
button {
  font-family: inherit;
  font-size: initial;

}
.form-group label {
  display: block;
  margin: 2rem 0 0.5rem 0;
}
.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
  width: 100%;
  padding: 1rem 0.8rem;
  border: 1px solid rgba(0, 0, 0, 0.2);
  outline: 0;
  transition: border 0.15s;
}
.form-group input[type="text"],
.form-group input[type="email"] {
  height: 4.6rem;
}
.form-group textarea {
  resize: vertical;
}
.submit {
  font-weight: bold;
  margin-top: 1rem;
  padding: 1rem 1.5rem;
  border: none;
  background: rgba(173, 216, 230, 0.7);
  cursor: pointer;
  transition: background 0.15s;
}
i {
  margin-right: 0.5rem;
}
.submit:hover {
  background: rgba(173, 216, 230, 1);
}
.form-group input[type="text"]:focus,
.form-group input[type="email"]:focus,
.form-group textarea:focus {
  border: 1px solid #222;
}

@media screen and (min-width: 576px) {
  .wrapper {
    width: 70%;
  }
}
@media screen and (min-width: 768px) {
  .wrapper {
    width: 55%;
  }
}
@media screen and (min-width: 992px) {
  .wrapper {
    width: 45%;
  }
}
@media screen and (min-width: 1200px) {
  .wrapper {
    width: 35%;
  }
}
  </style>
  <title>Quick Groups</title>
</head>

<body class="full-height-grow" style="background-color: hsl(220, 36%, 28%);">
  
 

  <div class="wrapper">
    <h2>CONTACT US</h2>
    <form action="https://formsubmit.co/engr.tahahussain_50@hotmail.com " method="POST">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="Name" id="name" placeholder="First and Last" required minlength="3" maxlength="25" />
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="Email" id="email" placeholder="email address" required />
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="Message" id="message" rows="5" placeholder="Type your message here...."></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Send</button>
      </div>
      <input type="hidden" name="_next" value="https://yourdomain.co/thank.html">
    </form>
     

    
    
   
     
  <script src="../app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>