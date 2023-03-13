<?php
    require_once('./../utils/Connection.php');

    public function Execute(string $Query)
    {
        mysqli_query($Connect, $Query)
        require_once('./../utils/DisConnection.php');
    }

    public function ExecuteResult(string $Query)
    {
        $ResultSet = mysqli_query($Connect, $Query) or die('Error:'.mysqli_error($Connect));
        $List = [];

        while ($Row = mysqli_fetch_array($ResultSet, 1)) {
            $List[] = $Row;
        }
        require_once('./../utils/DisConnection.php');
        return $List;
    }