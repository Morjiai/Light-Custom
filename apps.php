<!DOCTYPE html>
<html class="pixel-ratio-1 ios ios-9 ios-9-2-1 ios-gt-8 ios-gt-7 ios-gt-6 watch-active-state"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Light</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="apps_files/framework7_002.css">
    <link rel="stylesheet" href="apps_files/framework7.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="apps_files/my-app.css">
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div data-page="index" class="view view-main">
        <!-- Top Navbar-->
<div class="navbar">
    <div class="navbar-inner">
        <div class="left">
           <a href="http://pcode.altervista.org/light/index.php" class="back link"><i class="icon icon-back"></i><span>Back</span></a>
        </div>
        <div style="left: -312.5px;" class="center">Light</div>
    </div>
</div> 
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <div class="content-block-title">Manage Applications</div>
              <div class="list-block">
                <ul>
                  <li><a href="repositories/sources.php" class="item-link">
                      <div class="item-content">
					    <div class="item-media"><img src="apps_files/repos.png" height="30" width="30"></div>	
                        <div class="item-inner">					
                          <div class="item-title">Repos</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="apps_files/framework7.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="apps_files/my-app.js"></script>
  <script src="repositories/functions.js"></script>
  <style>
  img.a{
      border: 0 solid;
	  border-radius: 3px;
  }
  </style>
</body></html>
