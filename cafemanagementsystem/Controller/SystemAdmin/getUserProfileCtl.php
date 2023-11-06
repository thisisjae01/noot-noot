<?php
include_once("../../Entity/SystemAdmin/UserProfileEntity.php");

class getUserProfilesCtl
{

    public function getUserProfiles()
    {
        $vuc = new UserProfile();
        $results = $vuc->getUserProfiles();
        return $results;
    }
}