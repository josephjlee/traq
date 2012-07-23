<!DOCTYPE html>
<html>
	<head>
		<title><?php echo implode(' - ', array_reverse($traq->title)); ?></title>
		<meta charset="UTF-8" />
		<?php echo HTML::css_link(Request::base() . 'css.php?css=screen,master'); ?>
		<?php echo HTML::css_link(Request::base() . 'css.php?css=print', 'print'); ?>
		<!--[if lt IE 8]>
		<?php echo HTML::css_link(Request::base() . 'css.php?css=ie'); ?>
		<![endif]-->
		<?php echo HTML::js_inc('//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'); ?>
		<?php echo HTML::js_inc(Request::base() . 'js.php?js=all'); ?>
		<?php echo HTML::js_inc(Request::base('_js.js')); ?>
	</head>
	<body>
		<div id="overlay_blackout"></div>
		<div id="overlay"></div>
		<div id="popover"></div>
		<div id="wrapper" class="container">
			<?php echo View::render('layouts/_meta_nav'); ?>
			<header id="header">
				<h1><?php echo HTML::link(settings('title'), null); ?> / <?php echo HTML::link(l('admincp'), '/admin'); ?></h1>
			</header>
			<nav id="nav">
				<ul id="main_nav">
					<li<?php echo iif(active_nav('/admin/settings?'), ' class="active"')?>><?php echo HTML::link(l('settings'), "/admin/settings"); ?></li>
					<li<?php echo iif(active_nav('/admin(?:/projects(.*))?'), ' class="active"')?>><?php echo HTML::link(l('projects'), "/admin"); ?></li>
					<li<?php echo iif(active_nav('/admin/roles(.*)'), ' class="active"')?>><?php echo HTML::link(l('project_roles'), "/admin/roles"); ?></li>
					<li<?php echo iif(active_nav('/admin/users(.*)'), ' class="active"')?>><?php echo HTML::link(l('users'), "/admin/users"); ?></li>
					<li<?php echo iif(active_nav('/admin/groups(.*)'), ' class="active"')?>><?php echo HTML::link(l('groups'), "/admin/groups"); ?></li>
					<li<?php echo iif(active_nav('/admin/plugins(.*)'), ' class="active"')?>><?php echo HTML::link(l('plugins'), "/admin/plugins"); ?></li>
					<li<?php echo iif(active_nav('/admin/tickets/types(.*)'), ' class="active"')?>><?php echo HTML::link(l('ticket_types'), "/admin/tickets/types"); ?></li>
					<li<?php echo iif(active_nav('/admin/tickets/statuses(.*)'), ' class="active"')?>><?php echo HTML::link(l('ticket_statuses'), "/admin/tickets/statuses"); ?></li>
				</ul>
			</nav>
			<div id="page">
<?php echo $output; ?>
			</div>
			<footer id="footer">
				<?php echo l('copyright'); ?>
			</footer>
			<!-- <?php echo round((microtime(true) - START_TIME), 2); ?>s, <?php echo round((memory_get_peak_usage() - START_MEM) / pow(1024, 2), 3); ?>mb -->
		</div>
	</body>
</html>