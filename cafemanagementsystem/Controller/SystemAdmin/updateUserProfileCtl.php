<?php
include_once("../../Entity/SystemAdmin/UserProfileEntity.php");


class updateUserProfileCtl
{

    public function updateUserProfile($userprofile_id, $profilename)
    {
        $suc = new UserProfile();
        $results = $suc->updateUserProfile($userprofile_id, $profilename);
        return $results;
    }
}
?>
