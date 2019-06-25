<?php

class Connection {
  static public function connect() {
    $link = new PDO('myslq:host=localhost;dbname=name',
      'root',
      ''  
    );

    $link->exec('set names utf8');

    return $link;
  }
}

?>