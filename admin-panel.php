<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
<body>
      
   
  <div style="border-radius: 0; background: url('images/3.jpg'); background-size: cover; height: 400px;"></div>
<div style="margin: 0 auto; max-width: 1200px;">
    <div style="display: flex;">
        <div style="flex: 1; padding: 15px; box-sizing: border-box;">
            <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px; margin-bottom: 15px;">
                <a href="#" style="display: block; background-color: #3498DB; color: #FFFFFF; padding: 10px; text-decoration: none;">Members</a>
                <a href="trainer_details.php" style="display: block; padding: 10px; text-decoration: none;">Member details</a>
                <a href="package.php" style="display: block; padding: 10px; text-decoration: none;">Package details</a>
                <a href="payment.php" style="display: block; padding: 10px; text-decoration: none;">Payments</a>
            </div>
            <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
                <a href="trainer.php" style="display: block; background-color: #3498DB; color: #FFFFFF; padding: 10px; text-decoration: none;">Trainer</a>
                <a href="trainer.php" style="display: block; padding: 10px; text-decoration: none;">Trainer details</a>
                <a href="trainer.php" style="display: block; padding: 10px; text-decoration: none;">Add new Trainer</a>
            </div>
        </div>
        <div style="flex: 2; padding: 15px; box-sizing: border-box;">
            <div style="background-color: #3498DB; color: #FFFFFF; padding: 15px; border-radius: 5px; margin-bottom: 15px;">
                <h3>Register new members</h3>
            </div>
            <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
                <form style="max-width: 400px; margin: 0 auto;" action="func.php" method="post">
                    <label for="fname">First name:</label>
                    <input type="text" name="fname" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;">
                    <label for="lname">Last name:</label>
                    <input type="text" name="lname" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;">
                    <label for="email">Email:</label>
                    <input type="text" name="email" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;">
                    <label for="contact">Member ID:</label>
                    <input type="text" name="contact" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;">
                    <label for="docapp">Trainer:</label>
                    <select name="docapp" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;">
                        <?php while ($row1 = mysqli_fetch_array($result1)):;?>
                            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                        <?php endwhile;?>
                    </select>
                    <br>
                    <input type="submit" name="pat_submit" value="Register" style="background-color: #3498DB; color: #FFFFFF; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                    <a href="func.php" style="background-color: #FFFFFF; color: #3498DB; padding: 10px; border: 1px solid #3498DB; border-radius: 5px; text-decoration: none; display: inline-block; margin-left: 10px;">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     </body>
    
</html>
   