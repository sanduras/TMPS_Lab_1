<?php 

namespace CreationalPatterns\Singleton;

require_once '../vendor/autoload.php';

function clientCode() {
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();

    if ($s1 === $s2) {
        echo "Both variables have the same instance! <br>". get_class($s1) . "<br>" . get_class($s2);
        
    }
    else {
        "It is not Singleton variables have different instances <br>";
        die;
    }
    $query = "SELECT * FROM students";
    $query2 = "SELECT *FROM students WHERE fname = 'Sandu'";
    $res1 = $s1->getDatabaseConnection()->query($query);
    $res2 = $s2->getDatabaseConnection()->query($query2);
    $res = array_merge($res1->fetch_all(), $res2->fetch_all());
    echo "<pre>";
    print_r($res);
}

clientCode();
?>