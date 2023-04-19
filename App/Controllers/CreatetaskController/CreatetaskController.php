<?php
require_once('../../Models/model.php');
session_start();

if(!isset($_SESSION['task-list'])){
    $_SESSION['task-list'] = array();
}

if(isset($_GET['selectedValue'])){
        // get the selected value from the first select field
    $selectedValue = $_GET['selectedValue'];

    $response = array(
        'vehicle' => '', // chuỗi ký tự
        'staff' => '' // chuỗi ký tự
    );
    // generate the options for the second select field based on the selected value
    if ($selectedValue == 'collector') {
        $response['vehicle'] = '
                                <option value="C-1">Collecting - 1</option>
                                <option value="C-2">Collecting - 2</option>
                                <option value="C-3">Collecting - 3</option>
                                <option value="C-4">Collecting - 4</option>';
        $response['staff'] = '
                                <option value="" selected>Open this select menu</option>
                                <option value="C-1;Nguyễn Văn A">Nguyễn Văn A - Collector 1</option>
                                <option value="C-2;Nam máy bơm">Nam máy bơm - Collector 2</option>';
    } else if ($selectedValue == 'janitor') {
        $response['vehicle'] = '
                                <option value="T-1">Troller - 1</option>
                                <option value="T-2">Troller - 2</option>
                                <option value="T-3">Troller - 3</option>
                                <option value="T-4">Troller - 4</option>';
        $response['staff'] = ' <option value="" selected>Open this select menu</option>
                                <option value="J-1;Nhân sensor">Nhân sensor - Janitor 1</option>
                                <option value="J-2;Đạt led">Đạt led - Janitor 2</option> -->';
    }

    echo json_encode($response);
}


if(isset($_POST['create-task'])){
    $taskID = count($_SESSION['task-list']) + 1;
    $type_employee = $_POST['staff-type'];
    $MCPs = $_POST['MCPs'];
    $date = $_POST['date'];
    $vehicleID = $_POST['vehicle'];
    $notice = $_POST['notice'];
    $employee ="";
    if($type_employee == "collector"){
        if(!empty($_POST['staff'])){
            $temp_employee = explode(";",$_POST['staff']);
            $employee = new Employee($temp_employee[0],$temp_employee[1],"collector");
            $state = "notyet";
        }else{
            $state = "unassigned";
        }
        $vehicle = new Collecting(0,$vehicleID);
    }else if($type_employee == "janitor"){
        if(!empty($_POST['staff'])){
            $temp_employee = explode(";",$_POST['staff']);
            $employee = new Employee($temp_employee[0],$temp_employee[1],"janitor");
            $state = "notyet";
        }else{
            $state = "unassigned";
        }
        $vehicle = new Troller(1, $vehicleID);
    }

    $starTime = 9;
    $endTime = 21;



    $task = new Task($taskID, $state, $date,$starTime, $endTime, $employee, $vehicle, $notice);
    array_push($_SESSION['task-list'] ,serialize($task));

    header('Location: ../../Views/Pages/CreateTask/createtask.php');
}
?>