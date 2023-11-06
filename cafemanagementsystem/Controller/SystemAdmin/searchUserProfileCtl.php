<?php
include_once("../../Entity/SystemAdmin/UserProfileEntity.php");

class searchProfileCtl
{

    public function searchProfile($search)
    {
        $s = new UserProfile();
        $results = $s->searchProfile($search);
        return $results;
    }
}