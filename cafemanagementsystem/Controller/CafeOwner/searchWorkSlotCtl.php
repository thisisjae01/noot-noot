<?php
include_once("../../Entity/CafeOwner/WorkSlotEntity.php");

class searchWorkSlotCtl
{

    public function searchWorkSlot($search)
    {
        $s = new WorkSlot();
        $results = $s->searchWorkSlot($search);
        return $results;
    }
}