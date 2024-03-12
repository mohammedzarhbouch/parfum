
<?php
function dbConnect()
{
    $databaseHost = 'localhost';
    $databaseUser = 'root';
    $databasePassword = '';
    $databaseName = 'odefragrance';

    $conn = mysqli_connect($databaseHost, $databaseUser, $databasePassword, $databaseName);
    if (mysqli_connect_error()) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    } else {
        return $conn;
    }
}

function getData($p_sSql, $p_aData = "")
{
    $conn = dbConnect();

    $stmt = mysqli_prepare($conn, $p_sSql);

    if (is_array($p_aData)) {
        $types = str_repeat('s', count($p_aData));
        mysqli_stmt_bind_param($stmt, $types, ...$p_aData);
    }

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $data;
}

