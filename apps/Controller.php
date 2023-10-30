<?php

class Controller{
    // menghandle model :
    // 1. cek apakah file modell ada?
    // 2. jika da maka require class modelll
    // 3. intansiasi pada kelas model

    public function loadmodel($model){
        if (file_exists('apps/models/'.$model.'.php')){
            require_once('apps/models/'.$model.'.php');
            $model = new $model;
        }
        return $model;
    }
    public function loadview($view,$data=null){
        if (file_exists('apps/views/'.$view.'.php')){
            require_once('apps/views/'.$view.'.php');
        }
    }
}

?>