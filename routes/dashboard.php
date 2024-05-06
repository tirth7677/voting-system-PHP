<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}
$userdata = $_SESSION['userdata'];
$groupdata = $_SESSION['groupdata'];
if ($_SESSION['userdata']['status'] == 0) {
    $status = '<b style="color:red">Not Voted</b>';
} else {
    $status = '<b style="color:green">Voted</b>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <div id="mainsection">
        <div id="headersection">
            <a href="../"><button id="backbtn">Back</button></a>
            <a href="../api/logout.php"><button id="logoutbtn">Logout</button></a>
            <h1>Online Voting System</h1>
            <hr>
            <div id="Profile">
                <img src="../uploads/<?php echo $userdata['photo'] ?>" height="150" width="150" alt="profile pic"><br><br>
                <b>Name: <?php echo $userdata['name'] ?> </b><br><br>
                <b>Mobile: <?php echo $userdata['mobile'] ?></b><br><br>
                <b>Address: <?php echo $userdata['address'] ?></b><br><br>
                <b>Status: <?php echo $status ?></b><br><br>
            </div>
            <div id="Group">
                <?php
                if ($_SESSION['groupdata']) {
                    for ($i = 0; $i < count($groupdata); $i++) {
                ?>
                        <div>
                            <img style="float: right;" src="../uploads/<?php echo $groupdata[$i]['photo'] ?>" height="150" width="150"><br><br>
                            <b>Group Name:</b> <?php echo $groupdata[$i]['name'] ?><br><br>
                            <b>Votes:</b> <?php echo $groupdata[$i]['votes'] ?><br><br>
                            <form action="../api/vote.php" method="post">
                                <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['id'] ?>">
                                <?php 
                                if($_SESSION['userdata']['status'] == 0){
                                    ?>
                                    <input type="submit" name="votebtn" value="vote" id="votebtn">
                                    <?php
                                }
                                else{
                                    ?>
                                    <button disabled type="button" name="votebtn" value="vote" id="voted">Voted</button>
                                    <?php
                                }
                                ?>
                            </form>
                        </div>
                        <hr>
                <?php
                    }
                } else {
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>