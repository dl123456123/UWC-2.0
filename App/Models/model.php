<?php
abstract class Employee{
    public $employeeName;
    public $employeeID;

    public function __construct($employeeID, $employeeName){
        $this->employeeID = $employeeID;
        $this->employeeName = $employeeName;
    }
    // public function __construct(){
    //     $this->employeeID = "";
    //     $this->employeeName = "";
    // }
    public function __constructCopy(Employee $another){
        $this->employeeID = $another -> employeeID;
        $this->employeeName = $another -> employeeName;
    }
}

class Janitor extends Employee{
    public $employeeType = "janitor";
}

class Collector extends Employee{
    public $employeeType = "collector";
}

class Collecting{
    public $status;  // bool value, 1 is can use, 0 is can not
    public $fuelConsumtion;
    public $capacity;
    public $weight;   // current weight of vihecle
    public $collectingID;

    public function __construct($status, $fuelConsumtion, $capacity, $collectingID){
        $this->status = $status;
        $this->fuelConsumtion = $fuelConsumtion;
        $this->capacity = $capacity;
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

    public function __construct($trollerID){
        $this->trollerID = $trollerID;
        $this->status = false;
    }
}

class Task{
    public $taskID;
    public $state;
    public $starTime = 9;
    public $endTime = 21;
    public $employee ;

}

?>