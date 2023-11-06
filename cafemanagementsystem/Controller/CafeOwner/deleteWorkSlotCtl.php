<?php
include_once("../../Entity/CafeOwner/WorkSlotEntity.php");

class deleteWorkSlotCtl
{
 
    public function deleteWorkSlot($workslot_id)
    {
        $suc = new WorkSlot();
        $suc->deleteWorkSlot($workslot_id);
    }
}