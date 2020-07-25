<?php
    if(!isset($_SESSION)){
        session_start();
    }

    function des_sess(){
        // Start the session
        if(!isset($_SESSION)){
            session_start();
        }

        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        return 1;
    }
    

    function set_sess($id){
        // Start the session
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['id'] = $id;
    }
?>