<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>

  <!--Bg changes and login img-->
    <body style="background:url('images/4.jpg'); background-size: cover; margin: 0; padding: 0;">
        <div style="margin-top:60px; margin-bottom:60px; color:#34495E; width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
          <div style="width: 30%; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
            <img src="images/cardback.jpg" style="width: 100%;" alt="Card Image">
            <div class="card-body">

              <div style="text-align: center;">
                <h2 style="margin-bottom: 30px;">ADMIN LOGIN</h2>
                <form style="display: inline-block;" method="POST" action="admin-panel.php">
                    <div style="margin-bottom: 10px;">
                        <label for="username" style="display: inline-block; width: 100px;">Username: </label>
                        <input type="text" name="username" style="width: 200px;" placeholder="Enter username" required><br><br>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label for="password" style="display: inline-block; width: 100px;">Password: </label>
                        <input type="password" name="password" style="width: 200px;" placeholder="Enter password" required><br><br>
                    </div>
                    <input type="submit" name="login_submit" value="Login" style="margin-top: 10px; background-color: #007BFF; color: #FFFFFF; padding: 10px 20px; border: none; cursor: pointer;">
                </form>
              </div>

            </div>
          </div>
        </div>
        <div style="width: 70%;"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </body>
</html>