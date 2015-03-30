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
							<td style="width: 60px"><td>
							<td><h4>Probability</h4><td>
						<tr>
						<tr>
							<td class="vertical-text" style="width: 20px; border: none">
								<h4>Impact</h4>
							</td>
							<td>
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<th class"col-xs-2"></th>
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

			<?php include 'foot.php'; ?>
		</div><!-- /.container -->

		<?php require 'scripts.php'; ?>

	</body>
</html>
