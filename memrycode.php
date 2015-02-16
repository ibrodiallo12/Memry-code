<?php // BEGIN THE PHP 
if(isset($_GET['lang'])){
	// FUNCTION FOR CREATE A COOKIE
	function createCookie($cookie){
		setcookie('lang', $cookie, time() + 365*24*3600, null, null, false, true);
	}
	// THE GET FOR MAKE CHOICE LANGUAGE
	if($_GET['lang'] == 'HTML'){$lang = 'HTML'; createCookie('HTML');}
	elseif($_GET['lang'] == 'CSS'){$lang = 'CSS'; createCookie('CSS');}
	elseif($_GET['lang'] == 'PHP'){$lang = 'PHP'; createCookie('PHP');}
	elseif($_GET['lang'] == 'JavaScript'){$lang = 'JavaScript'; createCookie('JavaScript');}
	elseif($_GET['lang'] == 'Python'){$lang = 'Python'; createCookie('Python');}
	else{$lang = 'HTML';}
}else{
	if(isset($_COOKIE['lang'])){$lang = $_COOKIE['lang'];}
}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MemryCode{BETA}: | Tap to the beat of your thinking |</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	<script src="assets/codemirror/lib/codemirror.js"></script>
	<link rel="stylesheet" href="assets/codemirror/lib/codemirror.css">
	<link rel="stylesheet" href="assets/codemirror/theme/ambiance.css">
	<script src="assets/codemirror/mode/xml/xml.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/code/<?php if (!empty($lang)){ echo $lang.".js";} else { echo 'HTML.js';}?>"></script>
	<script src="assets/js/main.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<!-- NAVBAR
================================================== -->
  <body style="width: 90%; margin: auto;">
   <div class="container">
        <div id="main_area">
        
		    <div class="navbar-wrapper">
			   <div class="container">
				   <div class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
							</button>
							<a class="navbar-brand" href="index.php">&lt;{&gt; MeMRyCoDe &lt;}&gt;</a>
						</div>
						 <div  class="pull-left" style="margin-top: 5px; margin-left: 50px;"">
							 <h4 class="hidden-xs hidden-sm" style="display: inline-block;">As fast, Memorize code... </h4>
						 	 <h4 class="hidden-xs text-muted"  style="display: inline-block;"> &lt;{&gt; HTML/CSS/JavaScript/PHP/Python &lt;}&gt;</h4>
						 </div>
					    <div class="col-sm-2 col-md-2 language" style="position: absolute; right: 0px; top: -10px;">
					    <form class="pull-right" action="memrycode.php" method="post" id="formChoiceLang" style="margin-top: 10px;">
						  <select name="choiceLang" class="btn btn-primary" id="language">
						  	<span class="caret"></span>
						  	<!-- for print the choice language -->
						  	<option><?php if (!empty($lang)){ echo $lang;} else { echo "HTML";}?></option>
							<option>HTML</option>
							<option>CSS</option>
							<option>JavaScript</option>
							<option>PHP</option>
							<option>Python</option>
						  </select>
						</form>
					   </div>
					 </div>
		           </div>
		     </div>
    	</div>
	
	<div class="container" style="margin-top: 60px;">
		<!-- MAX SECOND -->
		<div class="hidden-xs col-lg-2 btn-success" style="position: absolute; left: 10px; top: 200px; width: 80px; padding: 5px;">
			<em>:::Min:::</em><br /><strong id="maxSecond" style="font-size: 35px;">0</strong><br /><em>seconds</em>
		</div>
		<!-- jumbotron MORE KNOW -->
		<div class="jumbotron hidden-md hidden-sm hidden-xs col-lg-4" style="position: absolute; right: 20px; top: 60px;">
			<h1>...KNOW...</h1>
			<p id="knowPrinter"></p>
			<a href="" id="details" target="_blank"><p><button type="button" class="btn btn-lg btn-info">View details &raquo;</button></p></a>
		</div>
		<div class="row col-lg-8">
			  <h4 style="font-size: 20px;"><strong id="introWord"></strong></h4>
			  <pre style="text-align: left;"><textarea id="code" contentEditable="true"></textarea></pre>
		</div>
		<div class="alert alert-default row col-lg-8" style="margin-top: -20px; text-align: left;">
		
				<pre class="errorCoding"><textarea id="codingTextarea"></textarea></pre>
				
				<div class="btn-primary col-md-5 col-sm-5 col-xs-5 col-lg-5" style="margin-left: 40px; margin-right: 20px;">
					<h5><span class="glyphicon glyphicon-pencil"></span>COUNTER: <strong id="TsecLine">0</strong> seconds</h5>
				</div>
				<div class="btn-danger col-md-4 col-sm-4 col-xs-4 col-lg-4">
					<h5><span class="glyphicon glyphicon-tags"></span> ERROR: <strong id="error">0</strong></h5>
				</div>
				<div class="btn-info col-md-1 col-sm-1 col-xs-1 col-lg-1" style="margin-left: 10px;"  id="next">
					<h5><span class="glyphicon glyphicon-fast-forward"></span></h5>
				</div>
				<div id="lang" style="display: none;"></div>
				<div id="separator" style="display: none;"></div>
				<div id="know" style="display: none;"></div>
				<div id="choiceLang" style="display: none;"></div>
		 </div>
	</div>
		 
      <!-- FOOTER -->
      <footer class="col-lg-12">
        <p style="position: absolute; bottom: -80px;">&copy; 2014 Memry code, Inc. &middot; <a href="#">Help</a> &middot; <a href="#">Terms</a></p>
			<script>
				
				 var editorCode = CodeMirror.fromTextArea(document.getElementById("code"), {
					lineNumbers: true,
					mode: "xml",
					theme: "ambiance",
					indentWithTabs: false,
					tabSize: 4,
					smartIndent: false,
					indentWithTabs: false,
					indentUnit: 0,
					autofocus: false,
					dragDrop: false,
					extraKeys: {"Enter": false},
					readOnly: "nocursor"
				  });
				  
				var editorCoding = CodeMirror.fromTextArea(document.getElementById("codingTextarea"), {
					lineNumbers: true,
					mode: "xml",
					theme: "ambiance",
					indentWithTabs: false,
					tabSize: 4,
					smartIndent: false,
					indentWithTabs: false,
					indentUnit: 0,
					autofocus: true,
					dragDrop: false,
					extraKeys: {"Enter": false}
				});
			</script>
      </footer>
	</div>
    </div><!-- /.container -->
  </body>
</html>
