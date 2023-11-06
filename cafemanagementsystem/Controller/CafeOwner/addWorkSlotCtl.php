<?php
include_once("../../Entity/CafeOwner/WorkSlotEntity.php");

class addWorkSlotCtl
{

    public function addWorkSlot($date)
    {
        $rc = new WorkSlot();
        $results = $rc->addWorkSlot($date);
        return $results;
    }
}