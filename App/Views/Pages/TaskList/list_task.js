// function myFunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
//   }
  
//   window.onclick = function(event) {
//     if (!event.target.matches('.dropbtn')) {
//       var dropdowns = document.getElementsByClassName("dropdown-content");
//       var i;
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains('show')) {
//           openDropdown.classList.remove('show');
//         }
//       }
//     }
//   }
$(document).ready(function(){
    $(".sidebar-btn").click(function(){
        console.log("sdvnsdivsijvnsdfsjkjsnkdsnvkjdsnjvsd")
        $(".wrapper").toggleClass("Mycollapse");
    });
});
// Lấy element pagination
const pagination = document.querySelector('.pagination');

// Lấy chiều cao của container và chiều cao của pagination
const containerHeight = document.querySelector('.container').offsetHeight;
const paginationHeight = pagination.offsetHeight;

// Lấy tọa độ của pagination so với document
const paginationPosition = pagination.getBoundingClientRect().top + window.pageYOffset;

// Lắng nghe sự kiện scroll
window.addEventListener('scroll', function() {
  // Lấy vị trí hiện tại của thanh kéo
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // Tính toán vị trí mới của pagination
  const newPaginationPosition = paginationPosition + containerHeight - paginationHeight - scrollTop;

  // Cập nhật vị trí của pagination
  pagination.style.bottom = `${newPaginationPosition}px`;
});
//

function showPopup(taskID) {
  console.log(taskID);
  document.getElementById("detail" + taskID).style.display = "block";
}

function hidePopup(taskID) {
  document.getElementById("detail" + taskID).style.display = "none";
}

function showPopup_task() {
  document.getElementById("popup_task").style.display = "block";
}

function hidePopup_task() {
  document.getElementById("popup_task").style.display = "none";
}


function showEdit(taskID) {
  document.getElementById("edit" + taskID).style.display = "block";
}

function hideEdit(taskID) {
  document.getElementById("edit" + taskID).style.display = "none";
  
}
//
$(document).ready(function() {
  var selectedValue = $('#staff-type').val();
  $.ajax({
    url: '../../../Controllers/ListtaskController/ListtaskController.php',
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

    $('#staff-type').on('change load' , function() {
      // your code here
      var selectedValue = $('#staff-type').val();
      $.ajax({
        url: '../../../Controllers/ListtaskController/ListtaskController.php',
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
      var directions = directionsRenderer.getDirections();

      // Nếu đã có directions, xóa từng directions một
      if (directions) {
        directions.routes = [];
        directionsRenderer.setDirections(directions);
      }
      
      var selectedValue = "none";
      $.ajax({
        url: '../../../Controllers/ListtaskController/ListtaskController.php',
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