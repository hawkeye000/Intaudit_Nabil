<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Jose Purba"/>
		<meta name="creator" content="Jose Purba"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title><?php echo $title; ?></title>

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(STYLESHEET.'sweetalert.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(STYLESHEET.'main.css'); ?>">

	</head>
		<body>

		<div class="container-fluid">
			<div class="row" style="text-align: center;margin-top: 15px;">
				<h1>CodeChallenge Intelligent Audit  </h1>
						<div id="input-panel">
						<form name="todo-form" id="todo-from" method="POST" action="<?php echo base_url(); ?>">
				From
				<input type="date" class="date_s" id="start" name="dt-from" value="2014-01-01" min="2013-01-01" max="2015-12-31">
				TO 
               <input type="date" class="date_s" id="start" name="dt-to" value="2014-02-01"  min="2013-01-01" max="2015-12-31">
               <br>
                <input type="submit" name="report" value="Report-1">
                <input type="submit" name="report" value="Report-2">
                <input type="submit" name="report" value="Report-3">
						</form>
					</div>
				
					<hr/>