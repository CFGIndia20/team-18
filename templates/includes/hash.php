<?php
    function secret($x){
        $salt = "2020";
        $x.=$salt;
        return hash('whirlpool', $x);
    }
    // print_r(hash_algos());   // Prints all algos available
?>