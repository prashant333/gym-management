<html>
<head>
	<title>Patient details</title>
</head>
<body>
    <?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
     $query="select * from doctorapp where contact='$contact'";
    $result=mysqli_query($con,$query);
    echo "<div class='container-fluid' style='margin-top:50px;'>
    <div class'card'>
        <div style='margin-top:50px;'>
            <div style='display:inline-block;'>
                <div style='padding:10px;'>
                     <a href='trainer_details.php' style='text-decoration:none; padding:8px 15px; background-color:#f0f0f0; border:1px solid #ccc; border-radius:5px;'>Go Back</a>
                </div>
            </div>
        </div>
    <img src='images/1.jpg' width='100%' height='80%'>
    <table style='border-collapse: collapse; width: 100%;'>
        <thead style='background-color::#ffffff;'>
            <tr>
                <th style='border: 1px solid #000; padding: 8px;'>First name</th>
                <th style='border: 1px solid #000; padding: 8px;'>Last name</th>
                <th style='border: 1px solid #000; padding: 8px;'>Email ID</th>
                <th style='border: 1px solid #000; padding: 8px;'>Member ID</th>
                <th style='border: 1px solid #000; padding: 8px;'>Trainer ID</th>
            </tr>   
        </thead>
        <tbody>
        </div></div>";
    while ($row=mysqli_fetch_array($result)){
        $fname=$row ['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row ['docapp'];
        echo " <tr>
                <td>$fname</td>
                <td>$lname</td>
                <td>$email</td>
                <td>$contact</td>
                <td>$docapp</td>
             </tr>";
        }
        echo "</tbody></table></div></div></div>";
}
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
    </body>
        </html> 