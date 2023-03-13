<?php
class Cache {
  private static $data = null;
  
  public static function getData() {
    if (self::$data === null) {
      // Perform time-consuming calculation or query
      self::$data = "Cached data";
    }
    
    return self::$data;
  }
}

// Retrieve data from cache
echo Cache::getData(); // Output: Cached data

// Retrieve data from cache again
echo Cache::getData(); // Output: Cache