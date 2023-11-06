<?php
include_once("../../Entity/CafeOwner/WorkSlotEntity.php");

class getPastWorkSlotCtl
{

    public function getPastWorkSlot()
    {
        $vuc = new WorkSlot();
        $results = $vuc->getPastWorkSlot();
        return $results;
    }
}