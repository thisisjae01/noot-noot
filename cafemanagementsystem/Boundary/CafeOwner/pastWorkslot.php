<?php
include_once("../../Controller/CafeOwner/getPastWorkSlotCtl.php");
include_once("../../Controller/CafeOwner/searchWorkSlotCtl.php");

$pastWorkSlotCtl = new getPastWorkSlotCtl();
$workSlots = $pastWorkSlotCtl->getPastWorkSlot();


error_reporting(E_ALL);
ini_set('display_errors', 1);

$searchCtl = new searchWorkSlotCtl();

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    if (!empty($search)) {
        $workSlots = $searchCtl->searchWorkSlot($search);
    } else {
        // If search field is empty, retrieve all user profiles
        $workSlots = $pastWorkSlotCtl->getPastWorkSlot();
    }
} else {
    // If search field is not set, retrieve all user profiles
    $workSlots = $pastWorkSlotCtl->getPastWorkSlot();
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Cafe Owner - Profile Management</title>
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
<div class="white-box">
    <section>
        <div class="container1">
            <div class="logo">
                    <p>Cafe Owner Page </p>
            </div>
            <div class="topnav">
                <a href="../SystemAdmin/index.php" onclick="logout()">LOG OUT</a>
                <a href="pastWorkslot.php">PAST</a>
                <a href="cafeOwner.php">CURRENT</a>
            </div>
        </div>
    </section>
    <hr>
    <br>
    <br>
    <div class="container1" style="margin-top: -3%; margin-bottom: 3%; ">
        <div class="search">
            <form method="POST">
                <div class="search">
                    <form method="POST">
                        <div class="search-bar">
                            <input type="text" class="searchTerm" name="search" placeholder="Search by YYYY-MM-DD" style="height:100%; width:65%; margin-top: -5%;">
                            <button type="submit" class="searchButton" style="margin-top: -5%;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
        <div class="topnav" style="margin-top: 1%;">
            <a1 onclick="location.href='addWorkSlot.php'" style="margin-left: 5%;">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Work Slot
            </a1>
        </div>
    </div>
    <table id="profileTable" class="CMtable" style="width:100%">
        <tr>
            <th>Work Slot Dates</th>
            <th>Action</th>

        </tr>
        <?php foreach ($workSlots as $workslot) { ?>
            <tr>
                <td contenteditable="true" id="profileTable" class="CMtable"><?php echo is_array($workslot) ? $workslot['workslot_date'] : $workslot; ?></td>
                <td>
                    <a href="updateWorkSlot.php?workslot_id=<?php echo $workslot['workslot_id']; ?>&workslot_date=<?php echo $workslot['workslot_date']; ?>">Update</a> |
                    <a href="deleteWorkSlot.php?workslot_id=<?php echo $workslot['workslot_id']; ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        updateToggleSwitchListeners();

        document.getElementById('search').addEventListener('input', function(e) {
            var searchVal = e.target.value.toLowerCase();
            var table = document.getElementById('profileTable');

            for (var i = 1, row; row = table.rows[i]; i++) {
                var profile = row.cells[0].innerText;

                if (profile.toLowerCase().includes(searchVal)) {
                    row.style.display = "";
                } else {
                    row.style.display = ('none');
                }
            }
        });
    });

    document.getElementById('search').addEventListener('input', function(e) {
        var searchVal = e.target.value.toLowerCase();
        var table = document.getElementById('profileTable');

        for (var i = 1, row; row = table.rows[i]; i++) {
            var profile = row.cells[0].innerText;

            if (profile.toLowerCase().includes(searchVal)) {
                row.style.display = "";
            } else {
                row.style.display = ('none');
            }
        }
    });



    function setRowEditable(row, editable) {
        for (var i = 0; i < row.cells.length; i++) {
            if (i !== row.cells.length - 1) {
                row.cells[i].contentEditable = editable ? "true" : "false";
            }
        }
    }

    function updateProfile() {
        var table = document.getElementById('profileTable');
        for (var i = 1, row; row = table.rows[i]; i++) {
            var profile = row.cells[0].innerText;
            console.log('Work Slot: ' + profile);
        }

        alert("You have successfully updated!");
    }

    function logout() {
        console.log("Logged out");
        window.location.href = '../SystemAdmin/index.php';
    }
</script>
</body>

</html>