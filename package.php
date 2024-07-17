<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
</head>
<body>
<div class="jumbotron" style="background-image: url('images/2.jpg'); background-repeat: no-repeat; background-size: cover; height: 300px;"></div>
<div style="background-color: #3498DB; color: #ffffff; padding: 10px 100px;">
    <div style="display: flex; align-items: center;">
        <div style="flex: 0 0 10%;">
            <a href="admin-panel.php" style="background-color: #ffffff; color: #3498DB; padding: 10px; text-decoration: none; display: inline-block;">Go Back</a>
    </div>
        <div style="flex: 0 0 80%; text-align: center;">
            <h3 style="margin: 0;">Package Details</h3>
        </div>
    </div>
</div>


<div style="background-color: #3498DB; color: #ffffff;">
    <div style="padding: 15px;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="border: 1px solid #fff; padding: 8px;">Package ID</th>
                    <th style="border: 1px solid #fff; padding: 8px;">Package Name</th>
                    <th style="border: 1px solid #fff; padding: 8px;">Amounts</th>
                </tr>
            </thead>
            <tbody>
                <?php get_package(); ?>
            </tbody>
        </table>
    </div>
</div>

        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </div>
    </body>
</html>