<?php
$conn = mysqli_connect('localhost','root','','letx');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    </head>
    <style type="text/css">
    	body{
    		background: #fff;
    		width: 100%;
    		height: 100%;
    		margin: 0;
    	}
    	.container{
    		background: #eee;
    	}
    	footer{
    		background: #000;
    		width: 100%;
    		margin: 0;
    	}
    	footer p {
    		margin: 0;
    		padding: 8px;
    	}
    	p{
    		color: #fff;
    		line-height: 150%;
    	}
    </style>
    <body>

    	<nav class="navbar navbar-inverse navbar-fixed-top">
    		<div class="container-fluid">
    			<div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
			      </button>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			    	<ul class="nav navbar-nav">
			    		<li><a href="https://www.letreach.com/">LET REACH</a></li>
			    		<li><a href="www.google.com">LINK</a></li>
			    		<li><a href="www.google.com">LINK</a></li>
			    		<li><a href="www.google.com">LINK</a></li>
			    		<li><a href="www.google.com">LINK</a></li>
			    		<li><a href="www.google.com">LINK</a></li>
			    	</ul>
			    </div>
    		</div>
    	</nav>
    	<br><br><br><br>
        <div class="container" theme-showcase" role="main"> 
        <h2 style="background: #000;color: #fff"><center><a href="https://www.letreach.com/"><img class="img-fluid" alt="Responsive image" src="logo.png" ></a> WELCOMES YOU ! </center></h2> 
        	<div class="row">
        		<div class="col-md-9">
		        	<?php
		        	//app keys
					$consumer_key="9wh0W1npj6RXIJr63VTIpP8KB";
					$consumer_secret="Rkr7IKcU2X0Z8c29mdXLj1D3sYpJwy1nBmMz1kTyf2TQq2aP2t";
					$access_token="752884087942033408-794NtlfzQo8iCP389OQu85AbAqe5zYm";
					$access_token_secret="ImVggNMGbzmcF5PlTIxrVgwP4bKHcCqTceAq2Qz0kpVCt";

					require "twitteroauth/autoload.php";
					use Abraham\TwitterOAuth\TwitterOAuth;
					//connection to app
					$connection = new TwitterOauth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
					$content=$connection->get("account/verify_credentials");
					//gets top 10 tweets
					$statuses= $connection->get("statuses/user_timeline",["user_id" => 25073877,"count" => 15,"exclude_replies" => true]);
					echo "HEY THERE , these are latest 10 tweets<br><br><br>";
					for ($i=0; $i < 10; $i++) {

						$text=$statuses[$i]->text;
						$created_at=$statuses[$i]->created_at;
						$tweet_id=$statuses[$i]->id;
						$sql="INSERT INTO tweets(text,created_at,tweet_id) values('$text','$created_at','$tweet_id')";
						$result=mysqli_query($conn,$sql);

						$j=$i+1; 
						echo "<b>$j</b>. ";
						echo "$text";
						echo "<br><br>";
					}
					?>
					<br><br><br>
					<center>
						<button class="btn btn-lg btn-default" name="btn" id="refresh" >REFRESH</button>
					</center>        
        		</div><!--col-md-9-->
        		<div class="col-md-3" style="border: 1px solid black;background: grey">
        			<p>letX is a company aimed at making cutting edge softwares to help brand & internet based marketers be able to revolutionize their marketing techniques and drive more ROI on their efforts. It’s literally set up the goal to be the WINGMAN to YOUR MARKETING JOURNEY.</p>
        			<div class="page-header"></div>
        			<a href="https://www.letreach.com/"><img class="img-fluid" alt="Responsive image" src="logo.png" width="100%" height="100%"></a>
        			
        			<div class="page-header"></div>
        			<p>
        				Name of DB-'letx'<br><br>
        				Name of table - 'tweets'<br><br>
        				Twitter API is used<br><br>
        				Latest 10 tweets from donald trump's official handle are displayed on this page.<br><br>
        				Refresh button makes a jquery request when it is clicked to refresh the page<br><br>
        				Image logo redirect to official page<br><br>
        				I have practised on 'localhost' . <br><br>
        				Website is responsive using bootstrap. Minimal focus laid for UI/UX <br>

        			</p>
        		</div><!--col-md-3-->
        	</div><!--row-->
        </div> <!--container-->

        <script type="text/javascript">
        	$("#refresh").click(function(){
        		location.reload();
        	});
        </script>

        <footer>
        	<center><p >CREATED BY- NITIN GUPTA (B.Tech 3rd Year)<br>9999915487 & 7678659777<br>Nitinofficial27@gmail.com<br>2017</p></center>
        </footer>
    </body>
</html>

