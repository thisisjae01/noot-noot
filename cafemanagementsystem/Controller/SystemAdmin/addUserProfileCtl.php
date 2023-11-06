<?php
include_once("../../Entity/SystemAdmin/UserProfileEntity.php");

class addUserProfileCtl
{
    public function addUserProfile($user_profile)
    {
        $aua = new UserProfile();
        $results = $aua-> addUserProfile($user_profile);
        return $results;
    }
}