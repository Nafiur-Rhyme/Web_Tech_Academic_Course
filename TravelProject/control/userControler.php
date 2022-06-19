<?php
    function get_traveler_by_username($userName)
    {
        $usersData = array();
        $jsonData= file_get_contents("../../data/travelerData.json");
        $phpData = (array)json_decode($jsonData);
        $usersData = json_decode(json_encode($phpData), true);
        //print_r($usersData);
        $user = array_column($usersData,$_POST[$userName])[0];
        return $user;
    }
    function get_admin_by_ID($id)
    {
        $usersData = array();
        $jsonData= file_get_contents("../../data/adminData.json");
        $phpData = (array)json_decode($jsonData);
        $usersData = json_decode(json_encode($phpData), true);
        $user = array_column($usersData,$_POST[$id])[0];
        return $user;
    }
    function get_hotel_by_username($userName)
    {
        $usersData = array();
        $jsonData= file_get_contents("../../data/hotelData.json");
        $phpData = (array)json_decode($jsonData);
        $usersData = json_decode(json_encode($phpData), true);
        $user = array_column($usersData,$_POST[$userName])[0];
        return $user;
    }
    function get_transportation_by_username($userName)
    {
        $usersData = array();
        $jsonData= file_get_contents("../../data/transportationData.json");
        $phpData = (array)json_decode($jsonData);
        $usersData = json_decode(json_encode($phpData), true);
        $user = array_column($usersData,$_POST[$userName])[0];
        return $user;
    }
?>