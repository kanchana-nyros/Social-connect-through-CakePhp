<?php 

if(!isset($_GET['access_token']) && !isset($_GET['code']))
{

	session_start();
	session_destroy();
	header('Location: index');
}
 
?>
<body>
<div class="navbar navbar-fixed-top">  
<div class="navbar-inner">  
<div class="container">  
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">  
<span class="icon-bar"></span>  
<span class="icon-bar"></span>  
<span class="icon-bar"></span>  
</a>  

<div class="nav-collapse">  
<ul class="nav">  
<li><a class="brand" href="#">Cakephp App.....!!!!!</a></li>  
<li><a></a></li>  
<li><a></a></li>  
</ul>  
<?php  if($myvar['user']) { ?>
<li style="list-style:none;"><a style="float:right;" class="brand" href="<?php echo $myvar['logout_url']; ?>">Logout</a></li>
<?php } else { ?>
<li style="list-style:none;"><a style="float:right;" class="brand" href="<?php echo $myvar['glogout_url']; ?>">Logout</a></li>
<?php } ?>
</div><!--/.nav-collapse -->  
</div>  
</div>  
</div>
<br>
<br>
<div class="container">  
<!-- Main hero unit for a primary marketing message or call to action -->  
<div class="leaderboard" style="margin-top:80px;">  
<h1></h1>  
</div> 

<!-- Example row of columns -->  
<div class="row" style="margin-top:80px;">  

<div class="span4">  
<?php  if($myvar['user']) { ?>
<img src="https://graph.facebook.com/<?php echo $myvar['user']; ?>/picture" style="margin-top: 5px;">
&nbsp; &nbsp;<span style="font-size:20px; text-align:center;font-weight: bold; position:absolute;margin-top: 21px;">Hello <?php echo ucwords($myvar['user_profile']['first_name']).'!'; ?></span>          
<?php  } else {
 ?>
&nbsp; &nbsp;<span style="font-size:20px; text-align:center;font-weight: bold; position:absolute;margin-top: 21px;">Hello <?php echo ucwords($myvar['name']).'!'; ?> &nbsp; &nbsp; &nbsp; You have succesfully connected through Google.....!!</span>  
<?php } ?> 
</div>  
<div class="span4">  
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
</div>  
<div class="span4">  
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

</div>

</div> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>   
<br>
<br>
<br>
<br> <br>
<br>
<br>
<br> 
<br> <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>  
<footer>  
<p></p>  
</footer>  
</div> <!-- /container --> 
</body>
