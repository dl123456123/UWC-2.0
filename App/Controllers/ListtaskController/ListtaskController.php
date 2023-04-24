<?php
    require_once('../../Models/model.php');
    session_start();

    if(isset($_GET['deleteTaskId'])){
        $id = $_GET['deleteTaskId'];
        $index = 0;
        while($_SESSION['task-list']->taskID != $id){
            $index++;
        }
        
        unset($_SESSION['task-list'][$index]);
    }
?>
