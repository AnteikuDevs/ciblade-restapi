<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function app_url($url = '')
{
	return env('APP_URL').$url;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
	<title><?= $status_code; ?> <?= $heading; ?></title>
	<link rel="shortcut icon" href="<?= app_url(); ?>favicon.png">
	<link rel="stylesheet" href="<?= app_url('assets/css/vendor.css'); ?>">
</head>
<body>
	
<div class="container">
	
	<div class="error--page" style="min-height: 100vh;">

		<div class="error--page-content">
			<h4 class="error--heading"><span class="text-danger"><?= $status_code; ?></span> Error</h4>
			<h5 class="error--message"><?= $message; ?></h5>
			<a href="<?= app_url(); ?>" class="btn btn-sm btn--default"><i class="fal fa-home"></i> Beranda</a>
		</div>

	</div>

</div>

</body>
</html>