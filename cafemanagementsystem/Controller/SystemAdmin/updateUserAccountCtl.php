<?php
include_once("../../Entity/SystemAdmin/UserAccountEntity.php");

class updateUserAccountCtl
{

    public function updateUserAccount($user_id, $user_fullname, $username, $password, $user_profile)
    {
        $suc = new UserAccount();
        $results = $suc->updateUserAccount($user_id, $user_fullname, $username, $password, $user_profile);
        return $results;
    }
}
