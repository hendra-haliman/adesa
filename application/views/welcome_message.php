<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=lang('welcome_title');?></title>

</head>
<body>

<div id="container">
	<?=anchor('welcome/index/en', 'English');?>
	<?=anchor('welcome/index/id', 'Indonesian');?>
	<?=anchor('welcome/index/kr', 'Korean');?>
	<h1><?=lang('welcome');?></h1>

	<div id="body">
		<p><?=lang('para1');?></p>
	</div>

	<p class="footer"><?=lang('rendered');?> <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter ' . lang('version') . ' <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>