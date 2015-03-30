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
				<div class="panel panel-success">
						<div class="panel-heading" id="characteristicsHeading">
								<h3 class="panel-title">
										Customer Risks
								</h3>
						</div>

						<div class="panel-body">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<!-- <a href="" class="btn btn-link" role="button"></a> -->

										<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne">
														<h4 class="panel-title" align="left">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
																		<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
																		C1: Unrealistic Expectations Given Schedule Constraints
																</a>
														</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
														<div class="panel-body" align="left">
																<h4>Description</h4>
																<p>INSERT DESCRIPTION</p>
																<h4>Mitigation Strategy</h4>
																<p>Present clear and thorough design documents so that expectations are managed and in line with the scope of the project.</p>
														</div>
												</div>
										</div>

										<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo">
														<h4 class="panel-title" align="left">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																		<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
																		C2: Delivered solution is too difficult to use or requires excessive training
																</a>
														</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
														<div class="panel-body" align="left">
																<h4>Description</h4>
																<p>INSERT DESCRIPTION</p>
																<h4>Mitigation Strategy</h4>
																<p>Consult design experts on user interface questions in order to maintain a high-quality UX.</p>
														</div>
												</div>
										</div>

								</div>
						</div>
				</div>

			<?php include 'foot.php'; ?>
		</div><!-- /.container -->

		<?php require 'scripts.php'; ?>

	</body>
</html>
