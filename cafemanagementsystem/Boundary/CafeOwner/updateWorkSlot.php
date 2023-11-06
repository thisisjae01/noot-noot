<?php

if (isset($_POST['workslot_id']) && isset($_POST['workslot_date'])) {
    $id = $_POST['workslot_id'];
    $workslot_date = $_POST['workslot_date'];

    // checking empty fields
    if (empty($workslot_date)) {
        if (empty($workslot_date)) {
            echo "<font color='red'>date field is empty!</font><br/>";
        }
    } else {
        //updating the table
        require_once('../../Controller/CafeOwner/updateWorkSlotCtl.php');
        $workslotCtl = new updateWorkSlotCtl();
        $result = $workslotCtl->updateWorkSlot($id, $workslot_date);

        if ($result) {
            //redirecting to the display page. In our case, it is cafeOwner.php
            header("Location: cafeOwner.php");
        }
    }
}

//getting id from url
$id = isset($_GET['workslot_id']) ? $_GET['workslot_id'] : die('ERROR: Record ID not found.');
?>



<head>
<title>Cafe Owner - Update Work Slot </title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("../../Images/background.jpg");
        }
    </style>
</head>


<body class="index-page sidebar-collapse">
    <div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <p>Cafe Owner Page </p>
                </div>
                <div class="topnav">
                    <a href="../SystemAdmin/index.php">LOG OUT</a>
                    <a href="pastWorkslot.php">PAST</a>
                    <a href="cafeOwner.php">CURRENT</a>
                </div>
            </div>
        </section>
        <hr>
        <!-- End Navbar -->
        
            <br>
            <div class="main">
                <div class="section section-basic">
                    <div class="container">
                        
                        <a href='cafeOwner.php' class='btn btn-warning btn-round button2'>Back</a>
                        <br>
                        <div class="col-md-12">
                            <div class="panel panel-success panel-size-custom">
                                <div class="panel-heading">
                                    <h3>Update Work Slot</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="updateWorkSlot.php" method="post" id="updateWorkSlot">
                                        <div class="form group">
                                            <input type="hidden" class="form-control" id="workslot_id" name="workslot_id" value=<?php echo $_GET['workslot_id']; ?>>
                                            <label for="workslot_date">User Profile:</label>
                                            <input type="text" class="form-control" id="workslot_date" name="workslot_date" value="<?php echo $_GET['workslot_date']; ?>">
                                        </div>
                                        <br>
                                        <input type="submit" class="btn btn-success btn-round" id="submit" value="update">
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
    </div>
</body>



</html>