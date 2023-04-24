<?php
    require_once('../../Models/model.php');
    session_start();
    if(isset($_GET['deleteTaskId'])){

        for ($i = 0; $i < count($_SESSION['task-list']); $i++) {
            $task = unserialize($_SESSION['task-list'][$i]);
            if($task->taskID == $_GET['deleteTaskId']){
                unset($_SESSION['task-list'][$i]);
                break;
            }
        }
        $_SESSION['task-list'] = array_values($_SESSION['task-list']);
        echo json_encode("complete delete");
    }
    
    if(isset($_POST['edit-task'])){
        $type_employee = $_POST['staff-type'];
        $temp_employee = explode(";",$_POST['staff']);
        $employee = new Employee($temp_employee[0],$temp_employee[1],$type_employee);
        $temp = explode("-",$_POST['vehicle']);
        if($temp[0] == "C"){
            $vehicle = new Collecting(0,$_POST['vehicle']);
        }else{
            $vehicle = new Troller(0, $_POST['vehicle']);
        }
        for ($i = 0; $i < count($_SESSION['task-list']); $i++) {
            $task = unserialize($_SESSION['task-list'][$i]);
            if($task->taskID == $_POST['task-id']){
                $task->employee = $employee;
                $task->vehicle = $vehicle;
                $task -> state = "notyet";
                $_SESSION['task-list'][$i] = serialize($task);
            }
        }
        header('Location: ../../Views/Pages/TaskList/Listtask.php');
    }
?>
