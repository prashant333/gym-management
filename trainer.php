<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
</head>
<body>
<div style="background: url('images/2.jpg') no-repeat; background-size: cover; height: 300px;"></div>

<div style="margin: 0 auto; max-width: 1200px;">
    <div style="border: 1px solid #ccc; border-radius: 5px;">
    <div style="background-color: #3498DB; color: #ffffff; padding: 10px 100px; display: flex;">
    <div style="flex: 0 0 10%;">
        <a href="admin-panel.php" style="background-color: #ffffff; color: #3498DB; padding: 10px; text-decoration: none; display: inline-block;">Go Back</a>
    </div>
    <div style="flex: 0 0 80%; text-align: center;">
            <h3 style="margin: 0;">Trainer Details</h3>
        </div>
        <form action="patient_search.php" method="post" class="form-group">
            <!-- Your form content goes here -->
        </form>
</div>

<div style="background-color: #3498DB; color: #ffffff; padding: 10px 100px;">
    <div style="padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
            <thead>
                <tr>
                    <th style="border: 1px solid #ffffff; padding: 10px;">Trainer ID</th>
                    <th style="border: 1px solid #ffffff; padding: 10px;">Name</th>
                    <th style="border: 1px solid #ffffff; padding: 10px;">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php get_trainer(); ?>
            </tbody>
        </table>
    </div>
</div>


        <div style="background-color: #3498DB; color: #ffffff; padding: 10px;">
            <div style="padding: 10px;">
                <h3>Register New Trainer</h3>
                <form action="func.php" method="post" class="form-group">
                    <label for="Trainer_id">Trainer ID</label>
                    <input type="text" name="Trainer_id" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;" class="form-control">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;" class="form-control">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" style="width: 100%; box-sizing: border-box; margin-bottom: 10px;" class="form-control">
                    <input type="submit" name="tra_submit" style="background-color: #007BFF; color: #FFFFFF;; padding: 10px; border: none; border-radius: 5px; cursor: pointer;" value="Register">
                </form>
            </div>
        </div>
    </div>
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </div>
    </body>
</html>