<?php
    $database = mysqli_connect('localhost', 'root', '12345', 'simple');
    
    if ($database -> connection_error)
    {
        echo "Failed to Connect!" . $database -> connect_error;
        exit();
    }
?>