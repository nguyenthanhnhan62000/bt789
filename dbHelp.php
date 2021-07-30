<?php

    require_once('config.php');

    function execute($sql){

        $conn = new mysqli(HOST, USERNAME, PASSWORD, DB);

        $result = mysqli_query($conn,$sql);

        mysqli_close($conn);

    }

    function executeResult($sql)
    {
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DB);

        $result = mysqli_query($conn,$sql);

        $data = array();
        while ($row = mysqli_fetch_array($result,1)) {
            $data[] = $row;
        }

        mysqli_close($conn);

        return $data;
    }