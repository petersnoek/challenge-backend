<?php

// list_store('Hardware')
function list_store($db, $list_name) {

    $data = [
        'list_name' => $list_name,
    ];

    $sql = "INSERT INTO lists (list_name) VALUES (:list_name)";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);

}

