<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="app.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- include google map js source -->
    <!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDgPJSyO3GGZuY0pdNYY9SoB1Usht4CdHQ&sensor=false"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3EdhMXW7f43yXRvS9tT0wNEX0Bk3JznM&callback=initMap" async defer></script>
    <script src="./map.js"></script>
    <script src="createtask.js"></script>
    <link rel="stylesheet" href="../../Component/style.css">
    <!-- <script src="../../Component/app.js"></script> -->
    <title>Create task</title>

</head>
<body>
<?php include '../../Component/component.php' ?>

<div class="wrapper">
    <div class="main-container">
         <!-- Code here -->
        <div class="container">
                <form action="">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="staff-type">Staff type <span style="color:red;"> * </span></label>
                        <select class="form-select form-select-sm" id="staff-type" name="staff-type">
                            <option selected value="none">Open this select menu</option>
                            <option value="collector">Collector</option>
                            <option value="janitor">Janitor</option>
                        </select>

                        <label for="staff-type">MCPs <span style="color:red;"> * </span></label>
                        <input type="text" class="form-control form-control-sm" id="MCPs" name="MCPs">

                        <label for="vehicle">Vehicle <span style="color:red;"> * </span></label>
                        <select class="form-select form-select-sm" id="vehicle" name="vehicle">
                            <!-- <option selected>Open this select menu</option>
                            <option value="VC-1">Collecting - 1</option>
                            <option value="VC-2">Collecting - 2</option>
                            <option value="VC-3">Collecting - 3</option>
                            <option value="VC-4">Collecting - 4</option>
                            <option value="VT-1">Troller - 1</option>
                            <option value="VT-2">Troller - 2</option>
                            <option value="VT-3">Troller - 3</option>
                            <option value="VT-4">Troller - 4</option> -->
                        </select>

                        
                        <label for="staff">Date<span style="color:red;"> * </span></label>
                        <div class="input-group-sm date" id="datepicker">
                                        <input type="text" class="form-control" name="date">
                                        <span class="input-group-append">
                                        </span>
                        </div>

                        <label for="staff">Staff</label>
                        <select class="form-select form-select-sm" id="staff" name="staff">
                            <!-- <option selected>Open this select menu</option>
                            <option value="EC-1">Nguyễn Văn A - Collector 1</option>
                            <option value="EJ-1">Nhân sensor - Janitor 1</option>
                            <option value="EC-2">Nam máy bơm - Collector 2</option>
                            <option value="EJ-2">Đạt led - Janitor 2</option> -->
                        </select>

                        <label for="notice">Notice</label>
                        <textarea class="form-control" id="notice" name="notice" rows="3"></textarea>
                    </div>
                        <!-- <div id="googleMap" class="col-sm-6"style="width:100%,height:100%"></div>
                        </div> -->
                    
                    <div id="map" class="col-sm-6" style="height: 500px;"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 text-right">
                        <input class="btn btn-secondary" id="reset-a" type="reset" value="Reset">
                    </div>
                    
                    <div class="col-sm-6 text-left" id="map">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </div>
                </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
</body>
</html>