<?php
include_once("../../Entity/CafeOwner/WorkSlotEntity.php");


class updateWorkSlotCtl
{

    public function updateWorkSlot($workslot_id, $workslot_date)
    {
        $suc = new WorkSlot();
        $results = $suc->updateWorkSlot($workslot_id, $workslot_date);
        return $results;
    }
}
?>
