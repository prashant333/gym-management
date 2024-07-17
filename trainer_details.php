<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	
</head>
<body><div style="background: url('images/2.jpg') no-repeat; background-size: cover; height: 300px;"></div>

<div style="margin: 0 auto; max-width: 1200px;">
    <div style="border: 1px solid #ccc; border-radius: 5px;">
        <div style="background-color: #3498DB; color: #ffffff; padding: 10px; display: flex;">
            <div style="flex: 1;">
                <a href="admin-panel.php" style="background-color: #ffffff; color: #3498DB; padding: 10px; text-decoration: none; display: inline-block;">Go Back</a>
            </div>
            <div style="flex: 3; text-align: center;"><h3>Members Details</h3></div>
            <div style="flex: 4;">
                <form action="trainer_search.php" method="post" style="display: flex;">
                    <div style="flex: 8;"><input type="text" name="search" style="width: 100%; box-sizing: border-box; padding: 10px;" placeholder="Enter Member Id"></div>
                    <div style="flex: 2;"><input type="submit" name="patient_search_submit" style="background-color: #ffffff; color: #3498DB; padding: 10px; border: 1px solid #3498DB; border-radius: 5px; cursor: pointer;" value="Search"></div>
                </form>
            </div>
        </div>

        <div style="background-color: #3498DB; color: #ffffff; padding: 10px;">
            <div style="padding: 10px;">
                <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #ffffff; padding: 10px;">First Name</th>
                            <th style="border: 1px solid #ffffff; padding: 10px;">Last Name</th>
                            <th style="border: 1px solid #ffffff; padding: 10px;">Email id</th>
                            <th style="border: 1px solid #ffffff; padding: 10px;">Member ID</th>
                            <th style="border: 1px solid #ffffff; padding: 10px;">Trainer ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php get_patient_details(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </body>
</html>