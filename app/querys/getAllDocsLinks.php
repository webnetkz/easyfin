<?php

    require_once '../dataBase/connectDB.php';

    $sql = 'SELECT id FROM invoice';
    $result = $pdo->query($sql);
    $result = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $key => $value) {
        echo $value['id'].',';
    }