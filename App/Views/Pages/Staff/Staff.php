<?php
require_once('../../../Models/model.php');
session_start();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>UWC</title>
        <link rel="stylesheet" href="staff.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>

        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <div class="header">
                <div class="header-menu">
                    <div class="title">UWC <span>2.0</span></div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fas fa-search"></i></a></li>
                        <li><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li><a href="#"><i class="fas fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <div class="profile" style="text-align: center;">
                        <img src="./img/images.png" alt="">
                        <p>HEHEHE</p>
                      </div>
                    <li class="item" id="profile">
                        <a href="#" class="menu-btn">
                        <i class="fas fa-list"></i><span>Task list</span>
                        </a>
                    </li>
                    <li class="item" id="messages">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-envelope"></i><span>Messages</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                        <i class="fas fa-cog"></i><span>Settings</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
                <div class="calendar">
                    <i class="fas fa-calendar-alt fa-2x" id="calendar-icon" onclick="toggleCalendar()"></i>
                    <p id="day-select">Hôm nay</p>
                </div>


                <div id="calendar-container" style="display: none;">
                    <div class="calendar-header">
                        <button class="prev-button">&lt;</button>
                        <h2 class="month-year"></h2>
                        <button class="next-button">&gt;</button>
                      </div>
                      <table class="calendar-table">
                        <thead>
                          <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                </div>
            

                  <?php
                  if (isset($_SESSION['task-list'])) {
                    foreach ($_SESSION['task-list'] as $task_str) {
                        $task = unserialize($task_str);
                        echo '
                        
                        <div class="task">
                        <p>Thu gom rác </p>
                        <div class="info">
                        <i class="fas fa-map-marker-alt fa-2x"></i><p>Địa điểm:  <span> '.$task->MCPs.' </span></p>
                        </div>
                        <div class="info">
                        <i class="fas fa-truck fa-2x"></i><p>Phương tiện:  <span>'.$task->vehicle->vehicleID.'</span></p>
                        </div>
                        <div class="info">
                        <i class="fas fa-clock fa-2x"></i><p>Thời gian:  <span>'.$task->date.'</span></p>
                        </div>
                        <div class="info">
                        <i class="fas fa-check-circle fa-2x"></i><p>Check-in:  <span>7H-11H 2/2/22222</span></p>
                        </div>
                        <div class="info">
                        <i class="fas fa-sign-out-alt fa-2x"></i><p>Check-out:  <span>7H-11H 2/2/2222</span></p>
                        </div>
                        <div class="info">
                        <i class="fas fa-exclamation-circle fa-2x"></i><p>Lưu ý:  <span>Đạt 2cm</span></p>
                        </div>
                    </div>
                        
                        ';

                    }
                } else {
                    echo 'No Task.';
                }

                  ?>

            </div>
        </div>

        <script src="staff.js"></script>
    </body>
</html>