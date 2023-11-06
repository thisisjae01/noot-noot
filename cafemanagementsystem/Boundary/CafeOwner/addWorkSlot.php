<?php
include_once("../../Controller/CafeOwner/addWorkSlotCtl.php");

$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";

if (isset($_POST["addWorkSlot"])) {
    $addUserProfileCtl = new addWorkSlotCtl();
    $addUserProfileCtl->addWorkSlot($_POST["workslot_date"]);
}
  
?>

<html>
<head>
    <title>Cafe Owner - Add workslot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background-image: url("../../Images/background.jpg");
        }

    </style>
</head>

<body>
<div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <p>Cafe Management System </p>
                </div>
                <div class="topnav">
                    <a href="../SystemAdmin/index.php">LOG OUT</a>
					<a href="pastWorkslot.php">PAST</a>
                	<a href="cafeOwner.php">CURRENT</a>
                </div>
            </div>
        </section>
        <hr>
		<div class="form-box">
			<h3>Add Workslot:</h3>

			<?php
			?>

			<form method="post" id="addWorkSlot" name="addWorkSlot" class="user-input" onsubmit="return checkForm(this);">
				<input type="text" name="workslot_date" class="input-field" placeholder="YYYY-MM-DD" required>
				<span>
					<?php echo $e1 ?>
				</span>
				<input type="submit" name="addWorkSlot" class="submit-btn" value="Add WorkSlot">
			</form>
		</div>
	</div>

</html>
<script>
	var y = document.getElementById("addWorkSlot");
	var z = document.getElementById("btn");

	function addWorkslot() {
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}
</script>
<script>
	window.onload = function() {
		var alertDiv = document.getElementById('alert-message');
		var alertMessage = alertMessage || '';
		if (alertMessage.length > 0) {
			alertDiv.innerHTML = '<p>' + alertMessage + '</p>';
		}
	};


	function addWorkSlotSuccess() {
		alert("You have successfully added!")
	}

	function clearForm() {
		document.getElementById("addWorkslot").reset();
	}
</script>
</body>