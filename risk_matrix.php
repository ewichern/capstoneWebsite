<!DOCTYPE html>
<html lang="en">
	<head>
		<title>cs410green Risk Matrix</title>
		<?php require 'head.php'; ?>
	</head>
	<body>
		<?php require 'navbar.php'; ?>

		<div class="container">
			<div class="default-formatting">
				<div class="panel panel-primary">
					<div class="panel-heading" id="CustomerRisksHeading">
						<h3 class="panel-title">Risk Matrix</h3>
					</div>
					<div>
						<h4>Probability</h4>
					</div>
					<div class="table-responsive">
						<table width="98%">
							<tr>
								<td width="10%">
									<div class="vertical-text">
										<h4>Impact</h4>
									</div>
								</td>
								<td width="90%">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="15%"></th>
													<th width="17%" style="text-align: center">1</th>
													<th width="17%" style="text-align: center">2</th>
													<th width="17%" style="text-align: center">3</th>
													<th width="17%" style="text-align: center">4</th>
													<th width="17%" style="text-align: center">5</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td align="center">5</td>
													<td align="center" bgcolor="yellow"></td>
													<td align="center" bgcolor="yellow">C1,T1</td>
													<td align="center" bgcolor="orange"></td>
													<td align="center" bgcolor="red"></td>
													<td align="center" bgcolor="red"></td>
												</tr>
												<tr>
													<td align="center">4</td>
													<td align="center" bgcolor="yellow">T5</td>
													<td align="center" bgcolor="yellow">C2,C3</td>
													<td align="center" bgcolor="yellow"></td>
													<td align="center" bgcolor="orange"></td>
													<td align="center" bgcolor="red"></td>
												</tr>
												<tr>
													<td align="center">3</td>
													<td align="center" bgcolor="greenyellow">T6</td>
													<td align="center" bgcolor="yellow"></td>
													<td align="center" bgcolor="yellow">C4,T3,T4</td>
													<td align="center" bgcolor="yellow"></td>
													<td align="center" bgcolor="orange"></td>
												</tr>
												<tr>
													<td align="center">2</td>
													<td align="center" bgcolor="green"></td>
													<td align="center" bgcolor="greenyellow"></td>
													<td align="center" bgcolor="yellow"></td>
													<td align="center" bgcolor="yellow"></td>
													<td align="center" bgcolor="yellow">T2</td>
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
								</td>
							</tr>
						</table>
					</div>

				</div>

				<div class="panel panel-primary">
					<div class="panel-heading" id="CustomerRisksHeading">
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
											C1: Customer does not adopt the delivered solution
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body" align="left">
										<h4>Impact: 5</h4>
										<h4>Probability: 2</h4>
										<h4>Description</h4>
										<p class="text">If the intended customers do not use our delivered solution then this entire project has been a waste of time.</p>
										<h4>Mitigation Strategy</h4>
										<p>By using the Mace and Crown as a case study we should be able to ensure that the delivered product will be user friendly and approachable for new users.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											C2: Skill set and knowledge level of intended user is not sophisticated enough for the delivered solution
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body" align="left">
										<h4>Impact: 4</h4>
										<h4>Probability: 2</h4>
										<h4>Description</h4>
										<p>New users might be intimidated by the delivered solution.</p>
										<h4>Mitigation Strategy</h4>
										<p>Consult design experts on user interface questions in order to maintain a high-quality UX.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingNine">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											C3: Templates and articles made and used by the delivered product are not attractive enough for readers
										</a>
									</h4>
								</div>
								<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
									<div class="panel-body" align="left">
										<h4>Impact: 4</h4>
										<h4>Probability: 2</h4>
										<h4>Description</h4>
										<p>Readers do not find articles created using the delivered product attractive.</p>
										<h4>Mitigation Strategy</h4>
										<p>Become aware and use best practices by learning from available UI and UX experts. In addition, by keeping the public involved by providing cupons for delivered feedback.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTen">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											C4: Readers do not come back to revisit stories that are being reported on
										</a>
									</h4>
								</div>
								<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
									<div class="panel-body" align="left">
										<h4>Impact: 3</h4>
										<h4>Probability: 3</h4>
										<h4>Description</h4>
										<p>Readers visit an article once but do not follow up on how the story has evolved since then.</p>
										<h4>Mitigation Strategy</h4>
										<p>Promise evolving stories and product and giving the opportunity to sign up for news alerts and notifications on articles that readers find interesting.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading" id="TechnicalRisksHeading">
						<h3 class="panel-title">
							Technical Risks
						</h3>
					</div>

					<div class="panel-body">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<!-- <a href="" class="btn btn-link" role="button"></a> -->

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											T1: Limitations of WordPress API
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body" align="left">
										<h4>Impact: 5</h4>
										<h4>Probability: 2</h4>
										<h4>Description</h4>
										<p>The WordPress API may limit what the delivered product can do and how it does it.</p>
										<h4>Mitigation Strategy</h4>
										<p>Research WordPress API to anticipate areas where it may limit our solution. Research other WordPress plugin implementations to understand how other developers have solved similar problems.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											T2: Lack of Expertise in WordPress, PHP, HTML, CSS, and Javascript
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body" align="left">
										<h4>Impact: 2</h4>
										<h4>Probability: 5</h4>
										<h4>Description</h4>
										<p>The delivered product is written in languages that not everybody knows and this can lead to difficulties implementing and using it.</p>
										<h4>Mitigation Strategy</h4>
										<p>Utilize excellent WordPress API documentation, other documentation and discussion on the internet, and printed materials as references. Also, learn WordPress over the Summer.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											T3: Incompatibility with Existing Plugins
										</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body" align="left">
										<h4>Impact: 3</h4>
										<h4>Probability: 3</h4>
										<h4>Description</h4>
										<p>The delivered product does not interact desireably with existing plugins.</p>
										<h4>Mitigation Strategy</h4>
										<p>Follow best practices for WordPress and PHP development, including unique variable and method naming, use of unique class names to group methods, etc.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingSix">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											T4: Difficulty Integrating Interactive and Visualization Elements
										</a>
									</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
									<div class="panel-body" align="left">
										<h4>Impact: 3</h4>
										<h4>Probability: 3</h4>
										<h4>Description</h4>
										<p>It may be difficult to add visualization elements into the already existing architecture.</p>
										<h4>Mitigation Strategy</h4>
										<p>Research WordPress API to anticipate areas where it may limit our solution. Research other WordPress plugin implementations to understand how other developers have solved similar problems.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingSeven">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											T5: Security Issues with Additional Editing and Publishing Interfaces
										</a>
									</h4>
								</div>
								<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
									<div class="panel-body" align="left">
										<h4>Impact: 3</h4>
										<h4>Probability: 1</h4>
										<h4>Description</h4>
										<p>There may be security issues with how the delivered product interacts with other interfaces.</p>
										<h4>Mitigation Strategy</h4>
										<p>Follow WordPress API and development guidelines and utilize WordPress authentication and security features in order to minimize potential points of vulnerability to attack.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingEight">
									<h4 class="panel-title" align="left">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
											<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
											T6: Performance Concerns with Additional Plugin Overhead
										</a>
									</h4>
								</div>
								<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
									<div class="panel-body" align="left">
										<h4>Impact: 3</h4>
										<h4>Probability: 1</h4>
										<h4>Description</h4>
										<p>The delivered product might not function at a desireable speed.</p>
										<h4>Mitigation Strategy</h4>
										<p>Optimize and streamline current deployment. Utilize caching, compression, minified javascript/css resources, etc., to speed up page load times.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div><!-- /.container -->

				<?php include 'foot.php'; ?>
		<?php require 'scripts.php'; ?>

	</body>
</html>
