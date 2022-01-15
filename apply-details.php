<?php
session_start();
$seeker_id = $_SESSION['seeker_id'] ?? '';
if(!$seeker_id) {
    header("Location: seeker-login.php");
    die();
}
$conn = mysqli_connect("localhost","root","","job");
$post_id = $_GET['post_id'];
$query = "SELECT description FROM all_jobs WHERE id= '{$post_id}'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/new.css">
</head>

<body>
    <div class="new">
       <a style="color:#fff; padding: 0px 20px;" href="seeker-dash.php">Dashboard</a>
        <a style="color:#fff; padding: 0px 20px;" href="search-jobs.php">Search a job</a>
        <a style="color:#fff; padding: 0px 20px;" href="logout.php">logout</a>
    </div>
    <p>
        <?php echo $data['description'] ?>
    </p>
    <button class="btn-submit"><a href="application-form.php?post_id=<?php echo $post_id;?>">Apply</a></button>
</body>

</html>