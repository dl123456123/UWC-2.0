<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>UWC</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../../Component/style.css">
        <script src="../../Component/app.js"></script>

		<!-- add lib Chart.js -->
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
    <?php include '../../Component/component.php' ?>

    <div class="wrapper">
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
							<p>staff idle</p>
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

    <script src="app.js"></script>
    <script src="../../Component/app.js"></script>
    </body>
</html>