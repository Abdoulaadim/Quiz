<?php

class Redirect{

    static public function to ($page){
        header('Location:'.$page );

    }

    static public function login (){
        header('Location:../login/login' );

    }
}

?>