<?php
const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "authentication_system";

function dataBaseConection()
{
    return mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
}