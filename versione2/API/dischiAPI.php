<?php
    include __DIR__ . '/../database/data.php';

    
    header('Content-Type: application/json');
    echo json_encode($arr_discs);
?>