<!DOCTYPE html>
<html>
<head>
  <title>GoodWill - Sign Up</title>
  <link rel="stylesheet" href="css/style.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}

  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=password], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  </style>


</head>
<body style="background-color: cornflowerblue">

  <div class="menu_bar">
              <ul>
                  <li> <a href="index.php">Home</a></li>
                  <li> <a href="gallery.php">Gallery</a></li>
                   <li> <a href="">Donate</a></li>
                  <li> <a href="form.php">Contact Us</a></li>
                  <li> <a href="login.php">LogIn</a></li>
                   <li> <a href="">About </a></li>
                  <li> <a href="terms.php">More info</a></li>
                  <li> <a href="joinn.php">Join Us</a></li>
              </ul>
  </div>

  <h2>Sign Up</br>Feel free to Join Us</h2>


  <form action="joindb.php" method="post" >

    <label for="name">Name:  </label><br>
    <input type="text" name="name" id="name" placeholder="Enter Your Full Name" required> <br>

    <label for="email">Email: </label><br>
    <input type="text" name="email" id="email" placeholder="Enter Your Email" required> <br>


    <label for="password">Password  </label><br>
    <input type="password" name="password" id="password" placeholder="Enter Your Password" required> <br>

    <label for="retypePassword">Retype Password  </label><br>
    <input type="password" name="retypePassword" id="retypePassword" placeholder="Retype Your Password" required> <br>

    <label for="contact">Contact No: </label><br>
    <input type="text" name="contact" id="contact" placeholder="Enter Your Contact Number" required> <br>



    <button type="submit" name="submit" style="background-color: #4CAF50; color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25vw;
    opacity: 0.9;
    border-radius: 4px
    " >Submit </button>


    <button type="reset" name="cancel" style="background-color: #ff4d4d; color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25vw;
    opacity: 0.9;
    border-radius: 4px
    ">Cancel</button>

  </form>
</body>
</html>
