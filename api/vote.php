<?php 
session_start();
include('../api/connect.php');

$votes = $_POST['gvotes'];
$total_vote = $votes + 1;
$gid = $_POST['gid'];
$uid = $_SESSION['userdata']['id'];

$update_votes = mysqli_query($connect, "UPDATE user SET votes='$total_vote' WHERE id='$gid'");
$update_user_status = mysqli_query($connect, "UPDATE user SET status='1' WHERE id='$uid'");

if($update_votes AND $update_user_status){
    $groups = mysqli_query($connect,"SELECT * FROM user WHERE role=2"); 
    $groupdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);

    $_SESSION['userdata']['status'] = 1;
    $_SESSION['groupdata'] = $groupdata;
    echo '<script>
    alert("Vote Successfull");
    window.location.href="../routes/dashboard.php";
    </script>
    ';
}else{
    echo '<script>
    alert("Some Error Occured! Please Try Again.");
    window.location.href="../routes/dashboard.php";
    </script>
    ';
}
?>