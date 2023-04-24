<?php 
    require_once('../../../Models/model.php');
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>UWC</title>
    <link rel="stylesheet" href="list_task.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9bOg4fOaQ4+4BLHJvL+FhImaVpOGkgKGARhNDG3oH9k4YCh7g4OW4wrl1AsRvHgZU1+Stu6FZk6x2v6Jz36nag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../../Component/app.js"></script>
</head>

<body>
    <?php include ('../../Component/component.php'); ?>
    <div class="wrapper">
        <div class="main-container">
            <!-- Task list -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="create-task-list">
                    <a href="" style="color: black"><i class="fa fa-plus-circle"></i>Create Task</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <form class="form-inline">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <table class="task-view">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Staff Name</th>
                            <th>Type</th>
                            <th>Vehicle</th>
                            <th>Date Assigned</th>
                            <th>Status</th> 
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['task-list'])) {
                            foreach ($_SESSION['task-list'] as $task_str) {
                                $task = unserialize($task_str);
                                echo '<tr>
                                        <td><span>'.($task->taskID).'</span></td> 
                                        <td class="staff"><span>'.$task->employee->employeeName.'</span></td>
                                        <td class="staff-type"><span>'.$task->employee->employeeType.'</span></td>
                                        <td class="vehicle">'.$task->vehicle->vehicleID.'</span></td>
                                        <td class="date"><span>'.$task->date.'</span></td>
                                        <td class="state">'.$task->state.'</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn" onclick="showPopup("1")">...</button>
                                            </div>
                                        </td>
                                    </tr>'; 
                            }
                        }
                        ?>
                    </tbody>
                </table>
            <!-- Task list -->
            <!-- Task staff -->
<?php
            if (isset($_SESSION['task-list'])) {
                foreach ($_SESSION['task-list'] as $task_str) {
                    $task = unserialize($task_str);
                    echo '
            
            <div class="popup" id="1" >
                <div id="popup-header" style="display: flex; justify-content: space-between;">
                    <h2 style="margin: 0 auto;">Task Detail <i class="fas fa-tasks"></i></h2>
                    <button id="closeTab-btn" onclick="hidePopup('."detail".$task->taskID.')">
                        <span class="circle-icon">
                            <i class="fas fa-times"></i>
                        </span>
                    </button>
                </div>
                <div class="popup-body">
                    <div class="vehicle">
                        <div class="card">
                            <div class="card-header">
                                <h3>Staff info <i class="fas fa-info-circle"></i></h3>
                            </div>
                            <div class="task-view">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Staff name</td>
                                            <td>Type</td>
                                            <td>Phone</td>
                                            <td>Email</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>'.$task->employee->employeeID.'</td>
                                            <td>'.$task->employee->employeeName.'</td>
                                            <td>'.$task->employee->employeeType.'</td>
                                            <td>0909090909</td>
                                            <td>datvilla@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="other">
                        <div class="card">
                            <div class="card-header">
                                <h3>MCP info <i class="fas fa-info-circle"></i></h3>
                            </div>
                            <div class="task-view">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                        <td>ID</td>
                                        <td>MCP name</td>
                                        <td>Capacity</td>
                                        <td>%Capacity</td>
                                        <td>Location</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>004</td>
                                            <td>MCP4</td>
                                            <td>500kg</td>
                                            <td>80%</td>
                                            <td>01:02:169:128</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                    <div class="vehicle">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Vehicle info <i class="fas fa-info-circle"></i></h3>
                                </div>
                                <div class="task-view">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>ID</td>
                                                <td>Vehicle numer</td>
                                                <td>Status</td>
                                                <td>Capacity</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                                        <tr>
                                                                <td><span>'.('Xe-' . $task->vehicle->vehicleID).'</span></td>
                                                                <td><span>'.('51H-10010').'</span></td>
                                                                <td><span>'.$task->vehicle->status.'</span></td>
                                                                <td><span>'.('1000Kg').'</span></td>
                                                            </tr>
                                                    }
                                                }
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="other">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Other info <i class="fas fa-info-circle"></i></h3>
                                </div>
                                <div class="task-view">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                            <td>Date Assigned</td>
                                            <td>Status</td>
                                            <td>Dealine</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="date"><span>'.$task->date.'</span></td>
                                                <td class="state">'.$task->state.'</td>
                                                <td><span>'.($task->starTime).'-'.($task->endTime).'</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                </div>
                <div class="popup-footer" id="popup-footer" style="text-align: center;">
                    <button id="edit-btn" class="button-edit-btn" style="margin-right: 10px;" onclick="showEdit()">Edit <i class="fas fa-edit" style="color: #000000;"></i></button>
                    <button id="delete-btn" class="button delete-btn" onclick="deleteRow()">Delete <i class="fas fa-trash" style="color: #000000;"></i></button>
                </div>
            </div>
            <!-- Task staff -->
            <!-- Task Edit -->
            <div class="popup_edit" id="popup_edit">

                    <div id="popup-header">
                        <input value="" >
                        <div id="frame-task-detail-header" style="display: flex; justify-content: space-between;">
                            <h2 style="margin: 0 auto;">Edit Task <i class="fas fa-edit"></i></h2>
                            <button id="closeTab-btn" onclick="hideEdit()">
                                <span class="circle-icon">
                                    <i class="fas fa-times"></i>
                                </span>
                            </button>
                        </div>
                    </div>    
                    <div class="popup-body">
                        <div class="editStaff">
                            <div class="edit-card">
                                <div class="edit-card-header">
                                    <h3>Edit staff</h3>
                                </div>
                                <div class="select-staff-type">
                                    <label for="staff-type">Staff type <span style="color:red;"> * </span></label>
                                        <select class="form-select form-select-sm" id="staff-type" name="staff-type">
                                            <option selected>Open this select menu</option>
                                            <option value="collector">Collector</option>
                                            <option value="janitor">Janitor</option>
                                        </select>
                                </div>
                                <div class="select-staff">
                                    <label for="staff">Staff name <span style="color:red;"> * </span></label>
                                    <select class="form-select form-select-sm" id="staff" name="staff">
                                    </select>
                                </div>
                            </div>
                            <div class="editVehicle">
                                <div class="edit-card">
                                    <div class="edit-card-header">
                                        <h3>Edit vehicle</h3>
                                    </div>
                                    <div class="select-vehicle">
                                        <label for="vehicle">Vehicle <span style="color:red;"> * </span></label>
                                        <select class="form-select form-select-sm" id="vehicle" name="vehicle">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="btn btn-primary" name ="create-task" type="submit" value="Confirm">
                        </div>
                        
                        <div class="col-sm-6" id="map">
                            <input class="btn btn-secondary" id="reset-a" type="reset" value="Clear">
                        </div>
                    </div>
            </div>

        ';}
            
    }
?>
            <!-- Task Edit -->

          
        </div>
        <script src="list_task.js"></script>
        <script src="../../Component/app.js"></script>
    </div>
</body>

</html>