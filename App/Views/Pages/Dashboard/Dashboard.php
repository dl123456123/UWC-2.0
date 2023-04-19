<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>UWC</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./Component/style.css">
    <script src="./Component/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    

    <!-- add lib Chart.js -->
	<link rel="stylesheet" href="../../Component/style.css">
    <script src="../../Component/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>

<body>
    <?php include '../../Component/component.php' ?>

    <div class="wrapper">
        
        <!--main container start-->
        <div class="main-container">
            <!-- Code here -->
            <div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>1254</h2>
							<p>Overload MCP</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">40%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>1254</h2>
							<p>Empty MCP</p>
						</div>
						<i class='bx bx-trending-down icon down' ></i>
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">60%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>465</h2>
							<p>Empty truck</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="30%"></span>
					<span class="label">30%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>235</h2>
							<!-- <p>staff idle</p> -->
                            <a href="staff_list.html">List staff </a>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="80%"></span>
					<span class="label">80%</span>
				</div>
			</div>

            <div class="Charts">
                <div style = "width: 50%;">
                    <canvas id="column-chart"></canvas>
                </div>

                <div style="width: 50%;">
                    <canvas id="line-chart"></canvas>
                </div>
            </div>

            <div class="Map">
                
            </div>


        </div>
    </div>

    <script src="dashboard.js"></script>
    <script src="../../Component/app.js"></script>
</body>

</html>