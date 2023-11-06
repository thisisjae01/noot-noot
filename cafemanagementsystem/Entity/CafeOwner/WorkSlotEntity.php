<?php

include_once("../../config.php");
session_start();

class WorkSlot
{
    private $conn;

    public function __construct()
    {
        $db = new DB;
    }

    public function addWorkSlot($workslot_date)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $checkdate = mysqli_query($conn, "SELECT workslot_date FROM workslot WHERE workslot_date='$workslot_date'");
        $result = mysqli_num_rows($checkdate);
        if ($result == 0) {
            $register = mysqli_query($conn, "INSERT INTO workslot (workslot_date) VALUES ('$workslot_date')") or die(mysqli_error($conn));
            header('Location: cafeOwner.php');
            return $register;
        } else {
            return false;
        }
    }

    public function getWorkSlot()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT workslot_id, workslot_date FROM workslot WHERE workslot_date >= CURDATE() ORDER BY workslot_date ASC";
        $result = mysqli_query($conn, $query);
        $workSlot = array();
        if (!$result) {
            die('Error executing query: ' . mysqli_error($conn));
        }
        $workSlot = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $workSlot[] = $row;
        }
        mysqli_close($conn);
        return $workSlot;
    }

    public function getPastWorkSlot()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT workslot_id, workslot_date FROM workslot WHERE workslot_date < CURDATE() ORDER BY workslot_date DESC";
        $result = mysqli_query($conn, $query);
        $workSlot = array();
        if (!$result) {
            die('Error executing query: ' . mysqli_error($conn));
        }
        $workSlot = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $workSlot[] = $row;
        }
        mysqli_close($conn);
        return $workSlot;
    }


    public function updateWorkSlot($workslot_id, $workslot_date)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);

        $workslotExists = $this->checkWorkSlotExists($workslot_id);

        if ($workslotExists) {
            // Update the Workslot details
            $stmt = $conn->prepare("UPDATE workslot SET workslot_date = ? WHERE workslot_id = ?");
            $stmt->bind_param("si",$workslot_date, $workslot_id);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Workslot updated successfully
                return true;
            } else {
                // Account update failed
                return false;
            }
        } else {
            // User with the given ID does not exist
            return false;
        }
    }

    private function checkWorkSlotExists($workslot_id)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("SELECT * FROM workslot WHERE workslot_id = ?");
        $stmt->bind_param("i", $workslot_id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteWorkSlot($workslot_id): void
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("DELETE FROM workslot WHERE `workslot_id` = ?");
        $stmt->bind_param("i", $workslot_id);
        $stmt->execute();
        $stmt->close();
    }


    function searchWorkSlot($search)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $search = mysqli_real_escape_string($conn, $search);
        $query = "SELECT workslot_id, workslot_date FROM workslot WHERE workslot_date LIKE '%$search%'";
        //$query = "SELECT workslot_id, workslot_date FROM workslot WHERE workslot_date < '$search' ORDER BY workslot_date DESC";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $workSlots = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $workSlots;
    }


    public function logout()
    {
        $_SESSION['login'] = false;
        session_destroy();
    }
}
