// Data for column chart
const columnData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
      label: 'Sales',
      data: [120, 180, 200, 160, 250, 210],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
    }]
  };
  
  // Options for column chart
  const columnOptions = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };
  
  // Data for line chart
  const lineData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
      label: 'Website Traffic',
      data: [120, 180, 200, 160, 250, 210],
      fill: false,
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }]
  };
  
  // Options for line chart
  const lineOptions = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };
  
  // Draw the column chart
  var ctx1 = document.getElementById('column-chart').getContext('2d');
  var columnChart = new Chart(ctx1, {
    type: 'bar',
    data: columnData,
    options: columnOptions
  });
  
  // Draw the line chart
  var ctx2 = document.getElementById('line-chart').getContext('2d');
  var lineChart = new Chart(ctx2, {
    type: 'line',
    data: lineData,
    options: lineOptions
  });
  


// -------------------------------
// MENU
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})


window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})


// PROGRESSBAR
const allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})
