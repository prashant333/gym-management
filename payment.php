<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	
<div style="background-color: #3498DB; color: #ffffff; padding: 10px 100px;">
    <div style="display: flex; align-items: center;">
        <div style="flex: 0 0 10%;">
            <a href="admin-panel.php" style="background-color: #ffffff; color: #3498DB; padding: 10px; text-decoration: none; display: inline-block;">Go Back</a>
    </div>
        <div style="flex: 0 0 80%; text-align: center;">
            <h3 style="margin: 0;">Payment Details</h3>
        </div>
    </div>
</div>

    <div style="background-color:#3498DB; color:#ffffff; padding: 20px; width: 100%; box-sizing: border-box;">
        <div style="background-color:#3498DB; color:#ffffff;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="padding: 8px; border-bottom: 1px solid #ddd;">Payment ID</th>
                        <th style="padding: 8px; border-bottom: 1px solid #ddd;">Amount</th>
                        <th style="padding: 8px; border-bottom: 1px solid #ddd;">Payment Type</th>
                        <th style="padding: 8px; border-bottom: 1px solid #ddd;">Customer ID</th>
                        <th style="padding: 8px; border-bottom: 1px solid #ddd;">Customer Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php get_payment(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div style="background-color: #3498DB; color: #FFFFFF; padding: 20px;">
    <h3 style="margin-bottom: 20px;">Make new Payment</h3>
    <form action="func.php" method="post" style="margin-bottom: 20px;">
        <label style="margin-bottom: 5px;">Payment ID</label><br>
        <input type="text" name="Payment_id" style="width: 100%; padding: 8px; margin-bottom: 10px;" required><br>

        <label style="margin-bottom: 5px;">Amount</label><br>
        <input type="text" name="Amount" style="width: 100%; padding: 8px; margin-bottom: 10px;" required><br>

        <label style="margin-bottom: 5px;">Customer ID</label><br>
        <input type="text" name="customer_id" style="width: 100%; padding: 8px; margin-bottom: 10px;" required><br>

        <label style="margin-bottom: 5px;">Customer Name</label><br>
        <input type="text" name="customer_name" style="width: 100%; padding: 8px; margin-bottom: 10px;" required><br>

        <label style="margin-bottom: 5px;">Payment Type</label><br>
        <input type="text" name="payment_type" style="width: 100%; padding: 8px; margin-bottom: 10px;" required><br> 

        <input type="submit" name="pay_submit" value="PAY" style="background-color: #007BFF; color: #FFFFFF; padding: 10px 20px; border: none; cursor: pointer;">
    </form>
</div>

</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>