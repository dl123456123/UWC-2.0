<?php
    require_once('../../Models/model.php');
    session_start();
    echo "in there";
    var_dump($_SESSION['task-list']);
    echo $_POST['deleteTaskId'];
    if(isset($_POST['deleteTaskId'])){
        echo "in there";

        $id = $_POST['deleteTaskId'];
        $index = 0;
        while($_SESSION['task-list'][$index]->taskID != $id){
            $index++;
        }
        
        unset($_SESSION['task-list'][$index]);
        echo"complete delete";
    }
?>
