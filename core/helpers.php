<?php
    function dd($data){
        echo "<pre>";
        die(var_dump(($data)));
        echo "</pre>";
    }

    function redirect($url){
        header("Location:{$url}");
    }

    function view($view, $data = []){
        extract($data);

        return require "../app/view/{$view}.view.php";
    }
?>