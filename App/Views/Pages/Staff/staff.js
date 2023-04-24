$(document).ready(function(){
  $(".sidebar-btn").click(function(){
      console.log("sdvnsdivsijvnsdfsjkjsnkdsnvkjdsnjvsd")
      $(".wrapper").toggleClass("Mycollapse");
  });
});



function hideAllDivs() {
  const divs = document.querySelectorAll('.task');
  divs.forEach((div) => {
    div.style.display = 'none';
  });
}

function updateDiv() {
  const p = document.getElementById('day-select');
  const text = p.textContent;
  const id = 'ID' + text.replaceAll('-', '');
  hideAllDivs();
  showDiv(id);
}

function showDiv(divId) {
  const div = document.getElementById(divId);
  div.style.display = 'block';
}

const dateElement = document.querySelector('#day-select');
dateElement.addEventListener('DOMSubtreeModified', updateDiv);





const calendarTable = document.querySelector('.calendar-table');
const monthYear = document.querySelector('.month-year');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

function buildCalendar() {
  const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
  const lastDateOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

  let day = 1;
  let calendarHTML = '';

  for (let i = 0; i < 6; i++) {
    calendarHTML += '<tr>';

    for (let j = 0; j < 7; j++) {
      if (i === 0 && j < firstDayOfMonth) {
        calendarHTML += '<td></td>';
      } else if (day > lastDateOfMonth) {
        calendarHTML += '<td></td>';
      } else {
        const date = new Date(currentYear, currentMonth, day);
        const className = date.toDateString() === currentDate.toDateString() ? 'current-day' : '';
        calendarHTML += `<td class="${className}" data-date="${date.toISOString()}">${day}</td>`;
        day++;
      }
    }

    calendarHTML += '</tr>';
  }

  const tbody = calendarTable.querySelector('tbody');
  tbody.innerHTML = calendarHTML;

  monthYear.textContent = `${getMonthName(currentMonth)} ${currentYear}`;
}

function getMonthName(monthIndex) {
  const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  return monthNames[monthIndex];
}

buildCalendar();

prevButton.addEventListener('click', () => {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  buildCalendar();
});

nextButton.addEventListener('click', () => {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  buildCalendar();
});


function toggleCalendar() {
  const calendarContainer = document.getElementById('calendar-container');
  const body = document.getElementsByTagName('body')[0];
  calendarContainer.style.display = calendarContainer.style.display === 'none' ? 'block' : 'none';
  body.classList.toggle('show-calendar');
}

const cells = document.querySelectorAll('.calendar-table td');

cells.forEach((cell) => {
  cell.addEventListener('click', () => {
    const selectedDate = new Date(cell.dataset.date);
    const today = new Date();
    const todayCell = document.querySelector('.calendar-table td.current-day');
    if (todayCell) {
      todayCell.classList.remove('current-day');
    }
    cell.classList.add('current-day');
    const dateText = selectedDate.toISOString().substring(0, 10); // lấy 10 ký tự đầu tiên
    const todayText = today.toDateString();
    const dateElement = document.querySelector('#day-select');
    if (dateText === todayText) {
      dateElement.textContent = 'Hôm nay';
    } else {
      dateElement.textContent = dateText;
    }
  });
});

  
  