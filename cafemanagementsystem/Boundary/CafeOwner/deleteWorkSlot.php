<?php
include_once("../../Controller/CafeOwner/deleteWorkSlotCtl.php");

if (isset($_GET['workslot_id'])) {
    $workslot_id = $_GET['workslot_id'];

    // Set user status to "Suspended"
    $deleteWorkSlotCtl = new deleteWorkSlotCtl();
    $deleteWorkSlotCtl->deleteWorkSlot($workslot_id);

    // Redirect to Cafe Owner page
    header("Location: ./cafeOwner.php");
    exit();
}
?>