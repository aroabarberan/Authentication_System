<?php
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "authentication_system";

function conectionDataBase()
{
    return mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
}

function getAllUsersDataBase($link)
{
    $result = mysqli_query($link, "SELECT * FROM users");
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }
    return $users;
}