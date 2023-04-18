<?php
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
                                <option selected>Open this select menu</option>
                                <option value="VC-1">Collecting - 1</option>
                                <option value="VC-2">Collecting - 2</option>
                                <option value="VC-3">Collecting - 3</option>
                                <option value="VC-4">Collecting - 4</option>';
        $response['staff'] = '
                                <option selected>Open this select menu</option>
                                <option value="EC-1">Nguyễn Văn A - Collector 1</option>
                                <option value="EC-2">Nam máy bơm - Collector 2</option>';
    } else if ($selectedValue == 'janitor') {
        $response['vehicle'] = '
                                <option selected>Open this select menu</option>
                                <option value="VT-1">Troller - 1</option>
                                <option value="VT-2">Troller - 2</option>
                                <option value="VT-3">Troller - 3</option>
                                <option value="VT-4">Troller - 4</option>';
        $response['staff'] = ' <option selected>Open this select menu</option>
                                <option value="EJ-1">Nhân sensor - Janitor 1</option>
                                <option value="EJ-2">Đạt led - Janitor 2</option> -->';
    }

    echo json_encode($response);
}

?>