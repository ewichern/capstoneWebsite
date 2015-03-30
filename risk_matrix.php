<!DOCTYPE html>
<html lang="en">
	<head>
		<title>cs410green Presentations</title>
		<?php require 'head.php'; ?>
	</head>
	<body>
		<?php require 'navbar.php'; ?>

		<div class="container">
			<div class="row">
				<h1>Risk Matrix</h1>
				<table class="table">
					<tbody>
						<tr>
							<td><h4>Probability</h4><td>
						<tr>
						<tr>
							<td class="vertical-text" style="width: 20px; border: none; transform:rotate(270deg);">
								<h4>Impact</h4>
							</td>
							<td>
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<th class"col-xs-1"></th>
												<th style="text-align: center" class="col-sm-2">1</th>
												<th style="text-align: center" class="col-sm-2">2</th>
												<th style="text-align: center" class="col-sm-2">3</th>
												<th style="text-align: center" class="col-sm-2">4</th>
												<th style="text-align: center" class="col-sm-2">5</th>
											</tr>
											<tr>
												<td align="center">5</td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="orange"></td>
												<td align="center" bgcolor="red"></td>
												<td align="center" bgcolor="red"></td>
											</tr>
											<tr>
												<td align="center">4</td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="orange"></td>
												<td align="center" bgcolor="red"></td>
											</tr>
											<tr>
												<td align="center">3</td>
												<td align="center" bgcolor="greenyellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="orange"></td>
											</tr>
											<tr>
												<td align="center">2</td>
												<td align="center" bgcolor="green"></td>
												<td align="center" bgcolor="greenyellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
											</tr>
											<tr>
												<td align="center">1</td>
												<td align="center" bgcolor="green"></td>
												<td align="center" bgcolor="green"></td>
												<td align="center" bgcolor="greenyellow"></td>
												<td align="center" bgcolor="yellow"></td>
												<td align="center" bgcolor="yellow"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

				<hr class="featurette-divider">
				<h2>Customer Risks</h2>
				<div class="panel-group" id"accordion">
					<!--C1-->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="accordion" href="#c1" class>C1: Unrealistic Expectations Given Schedule Constraints</a>
								<h4>
						</div>
					</div>
					<div id="c1" class="panel-collapse collapse in">
						<div class="panel-body">
							::before
							<h4>Description</h4>
								<p>ldkasjd;lkdjasldkj</p>
							<h4>Mitigation Strategy</h4>
								<p>Present clear and thorough design documents so that expectations are managed and in line with the scope of the project</p>
								::after
						</div>
					</div>
				</div>
			<?php include 'foot.php'; ?>
		</div><!-- /.container -->

		<?php require 'scripts.php'; ?>

	</body>
</html>
