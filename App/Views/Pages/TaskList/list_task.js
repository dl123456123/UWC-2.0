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

function showPopup() {
  document.getElementById("popup").style.display = "block";
}

function hidePopup() {
  document.getElementById("popup").style.display = "none";
}

function showPopup_task() {
  document.getElementById("popup_task").style.display = "block";
}

function hidePopup_task() {
  document.getElementById("popup_task").style.display = "none";
}


function showEdit() {
  document.getElementById("popup_edit").style.display = "block";
}

function hideEdit() {
  document.getElementById("popup_edit").style.display = "none";
}
//
