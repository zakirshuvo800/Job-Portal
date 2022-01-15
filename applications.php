<?php
session_start();
$employer_id = $_SESSION['employer_id'] ?? '';
if(!$employer_id) {
    header("Location: employer-login.php");
    die();
}
$post_id=$_GET['post_id'];
$conn = mysqli_connect("localhost","root","","job");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/new.css">
    <title>Document</title>
</head>
<body>
<table class="tbl-std">
    <tr>
        <th>Applicant full name</th>

        <th>Position applied for:</th>
        <th>Phone Number:</th>

    </tr>
    <?php
    
    $query="SELECT * FROM applied_jobs WHERE post_id = '$post_id' ";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);
    
  ?>  
    <tr>
        <td><?php echo $data['full_name'];?></td>
        <td><?php echo $data['title'];?></td>
        <td><?php echo $data['phone'];?></td>
    </tr>
   
</table>

</body>
</html>
