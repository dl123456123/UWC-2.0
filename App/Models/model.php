<?php
class Employee{
    public $employeeName;
    public $employeeID;
    public $employeeType;

    public function __construct($employeeID, $employeeName , $employeeType){
        $this-> employeeID = $employeeID;
        $this-> employeeName = $employeeName;
        $this-> employeeType = $employeeType;
    }
    // public function __construct(){
    //     $this->employeeID = null;
    //     $this->employeeName = null;
    // }
    public function __constructCopy(Employee $another){
        $this->employeeID = $another -> employeeID;
        $this->employeeName = $another -> employeeName;
    }
}

// class Janitor extends Employee{
//     public $employeeType = "janitor";
// }

// class Collector extends Employee{
//     public $employeeType = "collector";
// }

class Collecting{
    public $status;  // bool value, 1 is can use, 0 is can not
    public $fuelConsumtion;
    public $capacity;
    public $weight;   // current weight of vihecle
    public $collectingID;

    public function __construct($status, $collectingID){
        $this->status = $status;
        $this->fuelConsumtion = 1000;
        $this->capacity = 10000;
        $this->collectingID = $collectingID;
        $this->weight = 0;
    }

    public function __construct_2($fuelConsumtion, $capacity, $collectingID){
        $this->status = false;
        $this->fuelConsumtion = $fuelConsumtion;
        $this->capacity = $capacity;
        $this->collectingID = $collectingID;
        $this->weight = 0;
    }
}

class Troller{
    public $status; // bool value, 1 is can use, 0 is can not
    public $trollerID;

    public function __construct($status, $trollerID){
        $this->trollerID = $trollerID;
        $this->status = $status;
    }
}

class Task{
    public $taskID;
    public $state;
    public $date;
    public $starTime;
    public $endTime;
    public $employee ;
    public $vehicle;
    public $notice;
    public $MCPs;

    public function __construct($taskID, $state, $date,$starTime,$endTime,$employee ,$vehicle,$notice , $MCPs){
        $this->taskID = $taskID;
        $this->state = $state;
        $this->date = $date;
        $this->starTime = $starTime ;
        $this->endTime = $endTime;
        $this->employee = $employee;
        $this->vehicle = $vehicle;
        $this->notice = $notice;
        $this -> MCPs = $MCPs;
    }

    public function view(){
        echo $this->taskID ."-". $this->state ."-". $this->date ."-". $this->starTime ."-". $this->endTime ."-".  $this->employee->employeeID
        ."-". $this->vehicle->status ."-". $this->notice;
    }
}

?>