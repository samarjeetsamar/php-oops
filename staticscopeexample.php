<?php
function getData($key) {
    static $cache = array();

    // Check if the data is already in the cache
    if (isset($cache[$key])) {
        return $cache[$key];
    }

    // Otherwise, fetch the data from the database or API
    $data = fetchDataFromDatabaseOrApi($key);

    // Store the data in the cache
    $cache[$key] = $data;

    return $data;
}

getData("dfsvxvxgfdsfsdgffs");