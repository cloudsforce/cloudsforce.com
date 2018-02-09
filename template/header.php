<?php
if(!in_array($_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1'
))){
	// on server
	$file_path = '//' . "{$_SERVER['HTTP_HOST']}" .'/template/';
	$domain_url = '//' . "{$_SERVER['HTTP_HOST']}" . '/';
}else{
	// on localhost development
    $scriptname = explode('/', $_SERVER['SCRIPT_NAME']);
	$file_path = "//" . $_SERVER["HTTP_HOST"] . "/" . $scriptname[1] . "/template/";
	$domain_url = "//" . $_SERVER["HTTP_HOST"] . "/cloudsforce.com/";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CloudsForce.com</title>

    <!-- Styles -->
    <link href="<?php echo $file_path; ?>assets/css/theDocs.all.min.css" rel="stylesheet">
    <link href="<?php echo $file_path; ?>assets/css/skin/skin-dark.css" rel="stylesheet">
    <link href="<?php echo $file_path; ?>assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500%7CLato:300,400' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="<?php echo $file_path; ?>assets/img/favicon.png">
  </head>

  <body>

      <header class="site-header navbar-sm">

        <!-- Top navbar & branding -->
        <nav class="navbar navbar-default">
          <div class="container">

            <!-- Toggle buttons and brand -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                <span class="glyphicon glyphicon-option-vertical"></span>
              </button>

              <button type="button" class="navbar-toggle for-sidebar" data-toggle="offcanvas">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="<?php echo $domain_url; ?>"><img src="<?php echo $file_path; ?>assets/img/logo.png" alt="logo"></a>
            </div>
            <!-- END Toggle buttons and brand -->

            <!-- Top navbar -->
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="true" role="banner">
              <ul class="nav navbar-nav">
                <li class="active"><a href="">The Facts</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Public Clouds <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo $domain_url; ?>public-clouds/aws">AWS</a></li>
                    <li><a href="<?php echo $domain_url; ?>public-clouds/alicloud">Alibaba Cloud</a></li>
                    <li><a href="<?php echo $domain_url; ?>public-clouds/azure">Azure</a></li>
                    <li><span style="padding:8px 20px;display:block;font-weight:100">coming more..</span></li>
                  </ul>
                </li>
                <li><a href="<?php echo $domain_url; ?>solution-architect">Solution Architect</a></li>
                <li><a href="<?php echo $domain_url; ?>cost-calculator">Cost Calculator</a></li>
                <li><a href="#">Case Studies</a></li>
              </ul>
            </div>
            <!-- END Top navbar -->

          </div>
        </nav>
        <!-- END Top navbar & branding -->

      </header>
