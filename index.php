<?php
include ('include/header.php');
?>
<body>
	<div id="live-chat">
		<div class="clearfix gray chat-header">
			<a href="#" class="chat-close">-</a>
			<h4>John Doe</h4>
			<span class="chat-message-counter">3</span>
		</div>
		<div class="chat" style="display:none;">
			<div class="chat-history">
				<div class="chat-message clearfix">
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32" />
					<div class="chat-message-content clearfix">
						<span class="chat-time">13:35</span>
						<h5>John Doe</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>
					</div> <!-- end chat-message-content -->
				</div> <!-- end chat-message -->
				<hr>
				<div class="chat-message clearfix">
					<img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">
					<div class="chat-message-content clearfix">
						<span class="chat-time">13:37</span>
						<h5>Marco Biedermann</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>
					</div> <!-- end chat-message-content -->
				</div> <!-- end chat-message -->
				<hr>
				<div class="chat-message clearfix">
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">
					<div class="chat-message-content clearfix">
						<span class="chat-time">13:38</span>
						<h5>John Doe</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
					</div> <!-- end chat-message-content -->
				</div> <!-- end chat-message -->
				<hr>
			</div> <!-- end chat-history -->
			<p class="chat-feedback">Your partner is typing…</p><img src="images/typing-loading.gif" alt="" />
			<form action="#" method="post">
				<fieldset>
					<input type="text" placeholder="Type your message…" autofocus>
					<input type="hidden">
				</fieldset>
			</form>
		</div> <!-- end chat -->
	</div> <!-- end live-chat -->

<div id="container" class="ui-notify">
<div class="ui-notify-message ui-notify-message-style green" style="">
	<a class="ui-notify-close ui-notify-cross">x</a>
	<h1>Sticky Notification</h1>
	<p>Example of a "sticky" notification.  Click on the X above to close me.</p>
</div>

<div class="ui-notify-message ui-notify-message-style green" style="">
	<a class="ui-notify-close ui-notify-cross">x</a>
		<div><img src="images/user.jpg" alt="" /></div>
	<h1>Another Sticky Notification</h1>
	<p>Example of a "sticky" notification.  Click on the X above to close me.</p>
</div>

<div class="ui-notify-message ui-notify-message-style green" style="">
	<a class="ui-notify-close ui-notify-cross">x</a>
	<h1><i class="icon-cogs"></i>Sticky Notification With Icon</h1>
	<p>Example of a "sticky" notification.  Click on the X above to close me.</p>
</div>
</div>
<div class="wrapper">
	<header>
		<div class="logo">
			<img src="images/logo.png" alt="" />
		</div><!-- Logo -->
		<div class="welcome-user">
			<img src="images/user.png" alt=""/>
			<span>LARA SMITH</span>
			<p>Welcome Lara Smith</p>
		</div>
			<div class="side-navigation">
				<ul>
					<li><a href="dashboard.html" title=""><i class="icon-laptop"></i>Dashboard</a></li>
					<li><a href="hosting-dashboard.html" title=""><i class="icon-laptop"></i>Hosting Dashboard</a></li>
					<li><a href="sale-purchase-dashboard.html" title=""><i class="icon-laptop"></i>For Sale & Purchase</a></li>
					<li><a title=""><i class="icon-cogs"></i>Components<span>13</span></a>
						<ul>
							<li><a href="charts.html" title=""><i class="icon-angle-right"></i>Charts</a></li>
							<li><a href="notification.html" title=""><i class="icon-angle-right"></i>Notifications</a></li>
							<li><a href="grids.html" title=""><i class="icon-angle-right"></i>Grids</a></li>
							<li><a href="ribbon-grids.html" title=""><i class="icon-angle-right"></i>Ribbon Grids</a></li>
							<li><a href="buttons.html" title=""><i class="icon-angle-right"></i>Buttons</a></li>
							<li><a href="calendars.html" title=""><i class="icon-angle-right"></i>Calendars</a></li>
							<li><a href="progressbar.html" title=""><i class="icon-angle-right"></i>Progress Bar</a></li>
							<li><a href="file-manager.html" title=""><i class="icon-angle-right"></i>File Manager</a></li>
							<li><a href="gallery.html" title=""><i class="icon-angle-right"></i>Gallery</a></li>
							<li><a href="slider.html" title=""><i class="icon-angle-right"></i>Slider</a></li>
							<li><a href="dashboard.html" title=""><i class="icon-angle-right"></i>Page Tour</a></li>
							<li><a href="collapse.html" title=""><i class="icon-angle-right"></i>Collapse</a></li>
							<li><a href="range-slider.html" title=""><i class="icon-angle-right"></i>Range Slider</a></li>
						</ul>
					</li>
					<li><a href="form.html" title=""><i class="icon-pencil"></i>Form Elements</a></li>
					<li><a href="icon.html" title=""><i class="icon-tint"></i>Icons</a></li>
					<li><a href="tables.html" title=""><i class="icon-list-alt"></i>Tables</a></li>
					<li><a href="typography.html" title=""><i class="icon-font"></i>Typography</a></li>
					<li><a title=""><i class="icon-rocket"></i>Sample Pages<span>4</span></a>
						<ul>
							<li><a href="invoice.html" title=""><i class="icon-angle-right"></i>Invoice</a></li>
							<li><a href="index.html" title=""><i class="icon-angle-right"></i>Log in</a></li>
							<li><a href="404.html" title=""><i class="icon-angle-right"></i>404 Error Page</a></li>
							<li><a href="blank-page.html" title=""><i class="icon-angle-right"></i>Blank Page</a></li>
						</ul>
					</li>
					<li><a title=""><i class="icon-ellipsis-horizontal"></i>Bonus Free<span>5</span></a>
						<ul>
							<li><a href="price-table.html" title=""><i class="icon-angle-right"></i>Pricing Table</a></li>
							<li><a href="search.html" title=""><i class="icon-angle-right"></i>Search Result</a></li>
							<li><a href="inbox.html" title=""><i class="icon-angle-right"></i>Message</a></li>
							<li><a href="profile.html" title=""><i class="icon-angle-right"></i>Profile</a></li>
							<li><a href="faq.html" title=""><i class="icon-angle-right"></i>FAQ</a></li>
						</ul>
					</li>
				</ul>
			</div>
		<div class="social-statistics">
			<h4 class="headings"><i class="icon-twitter"></i>Social Statistics</h4>
				<div class="social-details">
					<img src="images/fb.jpg" alt="" />
					<span>530,893</span>
					<p>Total Facebook Likes</p>
				</div>
				
				<div class="social-details">
					<img src="images/twitter.jpg" alt="" />
					<span>17,812</span>
					<p>Total Twitter Tweets</p>
				</div>
				
				<div class="social-details">
					<img src="images/rss.jpg" alt="" />
					<span>2,159</span>
					<p>Total Rss</p>
				</div>
		</div>
		
		
		<div class="new-files">
			<h4 class="headings"><i class="icon-envelope"></i> Your Emails</h4>
			<ul>
				<li>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<a title="" href="#"><i class="icon-envelope blue"></i>From : David Smith</a>
					<p>Dear Victoria, Congratulations! You work has been uploaded so please....</p>
				</li>
				<li>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<a title="" href="#"><img src="images/email-thumb.png" alt="" />Re : John Doe</a>
					<p>Dear Haxzer, What's Your Plan! You work has been uploaded so please....</p>
				</li>
				<li>
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<a title="" href="#"><i class="icon-envelope green"></i>Re : Parker</a>
					<p>Dear Haxzer, What's Your Plan! You work has been uploaded so please....</p>
				</li>
			
			</ul>
		</div>
		<div class="tag-sec">
			<input id="tags_1" type="text" class="tags" value="Here,you,can,add,tags" />
		</div>
		
		<a class="slide-up-btn"><i class="icon-align-justify"></i></a>
	</header><!-- Header End -->
	

<section class="main-section">
		<div class="responsive-logo">
			<img src="images/logo.png" alt="" />
		</div>
			<div class="responsive-menu">
			<div class="responsive-menu-dropdown">
				<a title="" class="red">MENU <i class="icon-align-justify" ></i></a>
			</div>
			
				<ul>
					<li><a href="dashboard.html" title=""><i class="icon-laptop"></i>Dashboard</a></li>
					<li><a href="hosting-dashboard.html" title=""><i class="icon-laptop"></i>Hosting Dashboard</a></li>
					<li><a href="sale-purchase-dashboard.html" title=""><i class="icon-laptop"></i>For Sale & Purchase</a></li>
					<li><a title=""><i class="icon-cogs"></i>Components<span>13</span></a>
						<ul>
							<li><a href="charts.html" title=""><i class="icon-angle-right"></i>Charts</a></li>
							<li><a href="notification.html" title=""><i class="icon-angle-right"></i>Notifications</a></li>
							<li><a href="grids.html" title=""><i class="icon-angle-right"></i>Grids</a></li>
							<li><a href="ribbon-grids.html" title=""><i class="icon-angle-right"></i>Ribbon Grids</a></li>
							<li><a href="buttons.html" title=""><i class="icon-angle-right"></i>Buttons</a></li>
							<li><a href="calendars.html" title=""><i class="icon-angle-right"></i>Calendars</a></li>
							<li><a href="progressbar.html" title=""><i class="icon-angle-right"></i>Progress Bar</a></li>
							<li><a href="file-manager.html" title=""><i class="icon-angle-right"></i>File Manager</a></li>
							<li><a href="gallery.html" title=""><i class="icon-angle-right"></i>Gallery</a></li>
							<li><a href="slider.html" title=""><i class="icon-angle-right"></i>Slider</a></li>
							<li><a href="dashboard.html" title=""><i class="icon-angle-right"></i>Page Tour</a></li>
							<li><a href="collapse.html" title=""><i class="icon-angle-right"></i>Collapse</a></li>
							<li><a href="range-slider.html" title=""><i class="icon-angle-right"></i>Range Slider</a></li>
						</ul>
					</li>
					<li><a href="form.html" title=""><i class="icon-pencil"></i>Form Elements</a></li>
				</ul>
				<ul>
					<li><a href="icon.html" title=""><i class="icon-tint"></i>Icons</a></li>
					<li><a href="tables.html" title=""><i class="icon-list-alt"></i>Tables</a></li>
					<li><a href="typography.html" title=""><i class="icon-font"></i>Typography</a></li>
					<li><a title=""><i class="icon-rocket"></i>Sample Pages<span>4</span></a>
						<ul>
							<li><a href="invoice.html" title=""><i class="icon-angle-right"></i>Invoice</a></li>
							<li><a href="index.html" title=""><i class="icon-angle-right"></i>Log in</a></li>
							<li><a href="404.html" title=""><i class="icon-angle-right"></i>404 Error Page</a></li>
							<li><a href="blank-page.html" title=""><i class="icon-angle-right"></i>Blank Page</a></li>
						</ul>
					</li>
					<li><a title=""><i class="icon-ellipsis-horizontal"></i>Bonus Free<span>5</span></a>
						<ul>
							<li><a href="price-table.html" title=""><i class="icon-angle-right"></i>Pricing Table</a></li>
							<li><a href="search.html" title=""><i class="icon-angle-right"></i>Search Result</a></li>
							<li><a href="inbox.html" title=""><i class="icon-angle-right"></i>Message</a></li>
							<li><a href="profile.html" title=""><i class="icon-angle-right"></i>Profile</a></li>
							<li><a href="faq.html" title=""><i class="icon-angle-right"></i>FAQ</a></li>
						</ul>
					</li>
				</ul>
			</div>
<div class="container">
	<div class="row">
		<div class="main-bg">
			<div class="top-stats">
				<input type="text" placeholder="Your Search Here" /><i class="icon-search"></i>
				<div class="top-bar-chart">
					<div class="bar-chart-details">
						<p>New User</p>
						<h5>17,561</h5>
					</div>
					<span id="new-orders" class="sparkline">4,5,6,7,6,5,4,3,2,2,4</span>
				</div>
				
				<div class="top-bar-chart">
					<div class="bar-chart-details">
						<p>My Balance</p>
						<h5>$21,561.01</h5>
					</div>
					<span id="my-balance" class="sparkline">4,5,6,7,6,5,4,3,2,2,4</span>
				</div>
				<div class="top-stats-icons">
					<i class="icon-rocket"></i><i class="icon-user"></i><i class="icon-laptop"></i><i class="icon-tasks"></i>
				</div>
			</div>
			
			<div class="breadcrumbs-notify">
				<a href="#" title="">Home / </a> <a href="#" class="current-page" title=""> Blank Page </a>
				<div class="notification-auto">
					<div class="fade-notification">
					<h5><i class="icon-warning-sign"></i> Notification :</h5>
					</div>
					<div class="notification-slideshow">
						<h6 class="notify-fade">Server 3 is Over Loader Please Check. <i>3:45pm</i></h6>
						<h6 class="notify-fade">Server # 10 is Not Responding<i>1:30 Am</i></h6>
						<h6 class="notify-fade">New User Registration Error . <i>Today</i></h6>
						<h6 class="notify-fade">Domain Expiration Error <i>Yesterday</i></h6>
						<h6 class="notify-fade">Database Over loaded 2% Remaining <i>9:59 pm</i></h6>
						<h6 class="notify-fade">Application Erro Delete it Now <i>Last Week</i></h6>
					</div>
				</div>
			</div>
			
			<div class="heading-buttons-sec">
				<h1>Dashboard</h1>
				<p>Good Morning Lara Smith!!</p>
					<div class="heading-buttons">
						<ul>
						<li class="dropdown heading-dropdown">
							<a href="#" data-toggle="dropdown" role="button" id="drop1">Dropdown <b class="caret"></b></a>
							<ul aria-labelledby="drop1" role="menu" class="dropdown-menu" id="menu1">
							<li role="presentation"><a href="#" tabindex="-1" role="menuitem">Action</a></li>
							<li role="presentation"><a href="#" tabindex="-1" role="menuitem">Another action</a></li>
							<li role="presentation"><a href="#" tabindex="-1" role="menuitem">Something else here</a></li>
							<li class="divider" role="presentation"></li>
							<li role="presentation"><a href="#" tabindex="-1" role="menuitem">Separated link</a></li>
							</ul>
						</li>
						</ul>
						<a href="#" title=""><i class="icon-paper-clip"></i></a><a href="#" title=""><i class="icon-calendar"></i></a><a href="#" title=""><i class="icon-envelope"></i></a><a href="#" title=""><i class="icon-refresh"></i></a>
					</div>
			</div>
			
			
		<div class="body-sec">
			<div class="col-md-3" id="intro2">
				<div class="widget-body">
					<div class="widget-heading blue">
						<i class="icon-bolt pull-left"></i><h3 class="pull-left">Online Visitors</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop2"> <b class="caret"></b></a>
							<ul aria-labelledby="drop2" role="menu" class="dropdown-menu" id="menu2">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div class="circle-sta" >
							<div class="visitor chart-bg" data-percent="73">
								<span></span>
							</div>
							<p>Lorem ipsum dolor sit amet, co
							ns ectetuer.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3" id="intro3">
				<div class="widget-body">
					<div class="widget-heading red">
						<i class="icon-time pull-left"></i><h3 class="pull-left">Returning Visitors</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop3"> <b class="caret"></b></a>
							<ul aria-labelledby="drop3" role="menu" class="dropdown-menu" id="menu3">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div class="circle-sta" >
							<div class="returning-visitor chart-bg" data-percent="73">
								<span></span>
							</div>
							<p>Lorem ipsum dolor sit amet, co
							ns ectetuer.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="widget-body">
					<div class="widget-heading purple">
						<i class="icon-signal pull-left"></i><h3 class="pull-left">Live Visitors Statistics</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop4"> <b class="caret"></b></a>
							<ul aria-labelledby="drop4" role="menu" class="dropdown-menu" id="menu4">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec no-padding" >
						<div id="flot-placeholder"></div>
					</div>
				</div>
			</div>
			
			<div class="col-md-7">
				<div class="add-post">
					<textarea placeholder="Your Search Here" class="form-control" ></textarea>
					<div class="choose-post">
						<a href="#" title=""><i class="icon-location-arrow"></i></a><a href="#" title=""><i class="icon-microphone"></i></a><a href="#" title=""><i class="icon-camera"></i></a><a href="#" title=""><i class="icon-cloud-upload"></i></a>
						<input type="submit" class="submit blue" value="Post" />
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-5">
				<div class="current-sales">
					<div class="sales-charts green">
						<span>$5,580</span>
						<p>+1.05(21.9 %)</p>
						<strong>FRIDAY</strong>
						<span id="current-sales" class="sparkline">4,5,6,7,6,5,4,5,6,7,8,9,10,9,8,7,6,5,4,5,6,7,8</span>
					</div>
					<div class="sales-details">
						<p>Sale in June</p>
						<span style="color:#71C633;">$250,582.00</span>
						<p>From Market</p>
						<span style="color:#959595;">$2,505</span>
						<a href="#" title="" class="green">View All</a>
					</div>
				</div>
			</div>
			
			<div class="col-md-5">
				<div class="widget-body">
					<div class="widget-heading gray">
						<i class="icon-tasks pull-left"></i><h3 class="pull-left">Task in Progress</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop5"> <b class="caret"></b></a>
							<ul aria-labelledby="drop5" role="menu" class="dropdown-menu" id="menu5">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div class="tasks">
							<ul>
								<li>
									<a href="" class="gray"><i class="icon-refresh"></i></a><h5>Update Jquery</h5><span class="gray">34%</span>
									<div class="progress">
										<div style="width: 34%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success gray small-progress">
										</div>
									</div>
								</li>
								<li>
									<a href="" class="gray"><i class="icon-refresh"></i></a><h5>Update Awesome Font</h5><span class="gray">66%</span>
									<div class="progress">
										<div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success gray small-progress">
										</div>
									</div>
								</li>
								<li>
									<a href="" class="gray"><i class="icon-refresh"></i></a><h5>Update Jquery</h5><span class="gray">86%</span>
									<div class="progress">
										<div style="width: 86%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success gray small-progress">
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-7">
				<div class="widget-body">
					<div class="widget-heading orange">
						<i class="icon-cog pull-left"></i><h3 class="pull-left">Recent Activity</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop6"> <b class="caret"></b></a>
							<ul aria-labelledby="drop6" role="menu" class="dropdown-menu" id="menu6">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div id="content_1" class="recent-activity content">
							<ul>
								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>
							
								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>

								<li>
									<div class="activity-thumb">
										<img src="images/user2.jpg" alt="" />
									</div>
									<div class="activity-details">
										<h3>Bootstrap 3.0 is coming</h3>
										<span>Lava Smith</span>
										<i class="gray">Circle</i>
										<p>Dnim eiusmod high life accusamus terry richardson ad squid. 3 wolfmoon officia aute, non cupidatat </p>
									</div>
									<div class="time-activity">
										<span>12:18</span>
										<p>pm</p>
									</div>
								</li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-6" id="intro4">
				<div class="widget-body">
					<div class="widget-heading purple">
						<i class="icon-globe pull-left"></i><h3 class="pull-left">Popularity By Map</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop7"> <b class="caret"></b></a>
							<ul aria-labelledby="drop7" role="menu" class="dropdown-menu" id="menu7">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec">
						<div id="chart_div" style="width: 100%; height: 310px;"></div>	
						<div class="map-table">
						<h3>Country</h3><h4>Visits</h4>
							<ul>
								<li><span>United Stats</span><i>23900</i></li>
								<li><span>Brazil</span><i>23900</i></li>
								<li><span>Russia</span><i>15890</i></li>
								<li><span>France</span><i>98001</i></li>						
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="widget-body">
					<div class="widget-heading green">
						<i class="icon-calendar pull-left"></i><h3 class="pull-left">Event Calendar</h3>
						<ul>
						<li class="dropdown panel-function">
							<a href="#" data-toggle="dropdown" role="button" id="drop8"> <b class="caret"></b></a>
							<ul aria-labelledby="drop8" role="menu" class="dropdown-menu" id="menu8">
							<li role="presentation"><a class="hide-btn" title="">-</a></li>
							<li role="presentation"><a class="close-sec" title="">x</a></li>
							</ul>
						</li>
						</ul>
					</div>
					<div class="widget-sec no-padding">
						<div id='calendar'></div>
					</div>
				</div>
			</div>
			

			



			
			
			
		</div><!-- Body Sec -->
		</div><!-- main-bg-->
	</div><!-- Row -->
</div><!-- Container -->
	
</section><!-- Main Section -->
	
</div><!-- Wrapper -->
<script type="text/javascript">
$(function(){
  var introguide = introJs();
  // var startbtn   = $('#startdemotour');
  
  introguide.setOptions({
    steps: [
    {
      element: '.top-stats',
      intro: 'Click Here',
      position: 'bottom'
    },
    {
      element: '#intro2',
      intro: 'With 3D transforms, we can make simple.',
      position: 'bottom'
    },
    {
      element: '#intro3',
      intro: 'Hover over each title to display a longer description.',
      position: 'bottom'
    },
    {
      element: '#intro4',
      intro: 'Click the With 3D transforms, we can make simple.',
      position: 'right'
    },
    {
      element: 'header',
      intro: "Each demo will link to the previous & next entries.",
      position: 'bottom'
    }

    ]
  });

  introguide.start();


});
</script>



</body><!-- Body -->
</html><!-- Html -->
