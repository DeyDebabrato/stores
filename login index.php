<!DOCTYPE html>
<html>
  <head>
    <title>Login Screen</title>
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
      }
      form {
        width: 350px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      h2 {
        text-align: center;
        margin-top: 0;
      }
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }
      input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      }
      input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      .error {
        color: red;
        font-weight: bold;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <form onsubmit="return validate()">
      <h2>Login to Department Store System</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <input type="submit" value="Login">
      <div id="error"></div>
    </form>
    <script>
      function validate() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username == "" || password == "") {
          document.getElementById("error").innerHTML = "Please enter a username and password.";
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>
