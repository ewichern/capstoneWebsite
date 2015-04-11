<!DOCTYPE html>
<html lang="en">
    <head>
        <title>cs410green Solution Characteristics</title>
		<?php require 'head.php'; ?>
    </head>
    <body>
		<?php require 'navbar.php'; ?>

        <div class="container">

            <div class="default-formatting">
                <div class="text-left">

					<h3>Solution Description</h3>
					<br>

					<!-- SOLUTION CHARACTERISITICS -->
					<div class="panel panel-primary">
						<div class="panel-heading" id="characteristicsHeading">
							<h3 class="panel-title">
								Solution Characteristics
							</h3>
						</div>

						<div class="panel-body greenLists">
							<ol>
								<li>Create open source content management system or framework to help expand digital presence <br>
									<ul><li>Tools could be publishing digital files/content such as videos, photos, tweets, emails, and written content(blog posts, articles, long-form content) </li>
										<li>Interactive maps/graphs</li></ul></li>
								<li>The content management system developed will feature data and information visualization assets that can be used to accommodate the stories being written.</li>
								<li>The content management system will allow journalist to edit any article that is currently published and posted to be edited and continue to dynamically grow.</li>
								<li>Algorithm to provide content aggregation that pull in syndicated news feeds so that writers can focus reporting on local issues and putting larger issues into context.</li>
								<li>The content management system will provide different tools for a journalist to communicate with the different members of the university. <br>
									<ul><li>Whitelisted twitter accounts that can be displayed on the article or website.</li>
										<li>Allow for different members of the community that would like information published to submit it through their website.</li></ul></li>
								<li>The content management system with allow for the community reading the article to be interactive with the material <br>
									<ul><li>The readers can leave comments or reply to other comments </li>
										<li>Upvote and downvote system to push more interesting ideas up and less down</li></ul></li>
							</ol>
						</div>

					</div>

					<!-- Competition Matrix -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Competition Matrix
							</h3>
						</div>

						<div class="panel-body text-center">
							<div class="table-responsive">
								<table class="table table-striped">
									<!-- <caption>Short Description</caption> -->
									<thead>
										<tr>
											<th>Features</th>
											<th>Drupal</th>
											<th>Pangea</th>
											<th>Django</th>
											<th>Joomla</th>
											<th>Armstrong</th>
											<th>Newscoop</th>
											<th>MonarchPress</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Is an open source product</td>
											<td><i class="fa fa-check"></i></td><!-- Drupal -->
											<td><i class="fa fa-times"></i></td><!-- Pangea -->
											<td><i class="fa fa-check"></i></td><!-- Django -->
											<td><i class="fa fa-check"></i></td><!-- Joomla -->
											<td><i class="fa fa-check"></i></td><!-- Armstrong -->
											<td><i class="fa fa-check"></i></td><!-- Newscoop -->
											<td><i class="fa fa-check"></i></td><!-- MCWordPress -->
										</tr>
										<tr>
											<td>Designed for news organizations</td>
											<td><i class="fa fa-times"></i></td><!-- Drupal -->
											<td><i class="fa fa-check"></i></td><!-- Pangea -->
											<td><i class="fa fa-times"></i></td><!-- Django -->
											<td><i class="fa fa-times"></i></td><!-- Joomla -->
											<td><i class="fa fa-check"></i></td><!-- Armstrong -->
											<td><i class="fa fa-check"></i></td><!-- Newscoop -->
											<td><i class="fa fa-check"></i></td><!-- MCWordPress -->
										</tr>
										<tr>
											<td>Ability to moderate and filter images, <br>videos and comments from social media</td>
											<td><i class="fa fa-check"></i></td><!-- Drupal -->
											<td><i class="fa fa-check"></i></td><!-- Pangea -->
											<td><i class="fa fa-check"></i></td><!-- Django -->
											<td><i class="fa fa-check"></i></td><!-- Joomla -->
											<td><i class="fa fa-check"></i></td><!-- Armstrong -->
											<td><i class="fa fa-check"></i></td><!-- Newscoop -->
											<td><i class="fa fa-check"></i></td><!-- MCWordPress -->
										</tr>
										<tr>
											<td>Fully customizable</td>
											<td><i class="fa fa-times"></i></td><!-- Drupal -->
											<td><i class="fa fa-times"></i></td><!-- Pangea -->
											<td><i class="fa fa-check"></i></td><!-- Django -->
											<td><i class="fa fa-check"></i></td><!-- Joomla -->
											<td><i class="fa fa-check"></i></td><!-- Armstrong -->
											<td><i class="fa fa-times"></i></td><!-- Newscoop -->
											<td><i class="fa fa-check"></i></td><!-- MCWordPress -->
										</tr>
										<tr>
											<td>ODU's Mace &#38; Crown receives free support! </td>
											<td><i class="fa fa-times"></i></td><!-- Drupal -->
											<td><i class="fa fa-times"></i></td><!-- Pangea -->
											<td><i class="fa fa-times"></i></td><!-- Django -->
											<td><i class="fa fa-times"></i></td><!-- Joomla -->
											<td><i class="fa fa-times"></i></td><!-- Armstrong -->
											<td><i class="fa fa-times"></i></td><!-- Newscoop -->
											<td><i class="fa fa-check"></i></td><!-- MCWordPress -->
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<!-- New Process Flow Diagram -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Process Flow Diagram with MonarchPress
							</h3>
						</div>

						<div class="panel-body" align="center">
							<style>
								th {text-align: center;}
							</style>
							<div>
								<img src="./images/new_process_dia2.png" class="img-responsive">
							</div>
						</div>
					</div>
					<!--
													<div class="panel panel-primary">
															<div class="panel-heading">
																	<h3 class="panel-title">
																			Process Flow Diagram
																	</h3>
															</div>
															<div class="panel-body" align="center">
																	<img src="./images/process_diagram_1.png" class="img-responsive"/><br/>
	
																	<p class="text-left">The current process flow diagram needs software to intervene at two separate stages. The first is when content is being aggregated for a story. University newspapers could stand to have better social media integration for the stories uploaded to their websites. This would mean utilizing guest columnists, whitelisted twitter feeds, and reputation based forums for users to engage in discussion. Lastly, software intervention is needed before stories are pushed to university newspaper websites. Due to the lacking technological skillset of undergraduate journalists, content uploaded isn’t captivating enough to preserve the attention of readers. Adjustments to the aesthetic of these stories as well as data visualization to accompany those changes is needed.</p>
															</div>
													</div>
					-->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Functional Components Diagram
							</h3>
						</div>
						<div class="panel-body" align="center">
							<img src="./images/functionalcomponents.png" class="img-responsive"/>
						</div>
					</div>

					<?php include 'foot.php'; ?>
				</div>
            </div>

        </div><!-- /.container -->

		<?php require 'scripts.php'; ?>
    </body>
</html>
