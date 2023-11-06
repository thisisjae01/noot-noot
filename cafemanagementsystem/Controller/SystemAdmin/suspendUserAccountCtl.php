<?php
include_once("../../Entity/SystemAdmin/UserAccountEntity.php");

class suspendUserAccountCtl
{

    public function suspendUserAccount($user_id)
    {
        $suc = new UserAccount();
        $suc->suspendUserAccount($user_id);
    }
}
