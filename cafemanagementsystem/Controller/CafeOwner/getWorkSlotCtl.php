<?php
include_once("../../Entity/CafeOwner/WorkSlotEntity.php");

class getWorkSlotCtl
{

    public function getWorkSlot()
    {
        $vuc = new WorkSlot();
        $results = $vuc->getWorkSlot();
        return $results;
    }
}