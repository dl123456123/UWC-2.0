$(document).ready(function() {
    $('#staff-type').change(function() {
      // your code here
      var selectedValue = $('#staff-type').val();
      $.ajax({
        url: '../../../Controllers/CreatetaskController/CreatetaskController.php',
        data: {selectedValue: selectedValue},
        dataType: 'json',
        success: function(data) {
            var vehicle = data.vehicle;
            var staff = data.staff;
            $('#vehicle').html(vehicle);
            $('#staff').html(staff);
        },
        error: function() {
          // handle any errors
          alert('Error fetching options.');
        }
      });
    });

    $("#reset-a").on('click',function(){
      var selectedValue = "none";
      $.ajax({
        url: '../../../Controllers/CreatetaskController/CreatetaskController.php',
        data: {selectedValue: selectedValue},
        dataType: 'json',
        success: function(data) {
            var vehicle = data.vehicle;
            var staff = data.staff;
            $('#vehicle').html(vehicle);
            $('#staff').html(staff);
        },
        error: function() {
          // handle any errors
          alert('Error fetching options.');
        }
      });
    });
  });