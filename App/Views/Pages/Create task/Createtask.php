<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>UWC</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../../Component/style.css">
        <script src="../../Component/app.js"></script>
    </head>
    <body>
    <?php include '../../Component/component.php' ?>

    <div class="wrapper">
        <div class="main-container">

        <div class="container">
        <div class="row">
        <div class="col-sm-6">
        <label for="staff-type">Staff type <span style="color:red;"> * </span></label>
        <select class="form-select form-select-sm" id="staff-type" name="staff-type">
            <option selected>Open this select menu</option>
            <option value="collector">Collector</option>
            <option value="janitor">Janitor</option>
        </select>

        <label for="staff-type">MCPs <span style="color:red;"> * </span></label>
        <input type="text" class="form-control form-control-sm" id="MCPs" name="MCPs">

        <label for="vehicle">Vehicle <span style="color:red;"> * </span></label>
        <select class="form-select form-select-sm" id="vehicle" name="vehicle">
            <option selected>Open this select menu</option>
            <option value="VC-1">Collecting - 1</option>
            <option value="VC-2">Collecting - 2</option>
            <option value="VC-3">Collecting - 3</option>
            <option value="VC-4">Collecting - 4</option>
            <option value="VT-1">Troller - 1</option>
            <option value="VT-2">Troller - 2</option>
            <option value="VT-3">Troller - 3</option>
            <option value="VT-4">Troller - 4</option>
        </select>

        
        <label for="staff">Date<span style="color:red;"> * </span></label>
        <div class="input-group-sm date" id="datepicker">
                        <input type="text" class="form-control" name="date">
                        <span class="input-group-append">
                        </span>
        </div>

        <label for="staff">Staff</label>
        <select class="form-select form-select-sm" id="staff" name="staff">
            <option selected>Open this select menu</option>
            <option value="EC-1">Nguyễn Văn A - Collector 1</option>
            <option value="EJ-1">Nhân sensor - Janitor 1</option>
            <option value="EC-2">Nam máy bơm - Collector 2</option>
            <option value="EJ-2">Đạt led - Janitor 2</option>
        </select>

        <label for="notice">Notice</label>
        <textarea class="form-control" id="notice" name="notice" rows="3"></textarea>
        </div>
        <div class="col-sm-6">col-sm-4</div>

        
  </div>
    </div>

        </div>
    </div>

    <script src="app.js"></script>
    <script src="../../Component/app.js"></script>
    </body>
</html>