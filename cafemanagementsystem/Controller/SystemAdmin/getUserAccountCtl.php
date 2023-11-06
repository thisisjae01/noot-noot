<?php
include_once("../../Entity/SystemAdmin/UserAccountEntity.php");

class getUserAccountCtl
{
    public function getUserAccount()
    {
        $gua = new UserAccount();
        $results = $gua->getUserAccount();
        return $results;
    }
}