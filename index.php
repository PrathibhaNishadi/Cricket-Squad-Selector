



<!DOCTYPE html>
	<head>
		<title>Home</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="styles.css" />
        <style type=text/css>

        
        </style>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Cricket Squad Selector</a></div>
				<a href="#second" class="button">About</a>
                <a href="#first" class="button">Select Squad</a>
                <a href="performances.php" class="button">Overall Performances</a>
				<a href="#third" class="button">See the Lineup</a>
				
			</header>

		<!-- Nav -->


		<!-- Banner -->
			<section id="banner">
                
				<div class="inner">
					<header>
						<h1>CRICKET SQUAD SELECTOR</h1>
						<p>We provide you the best team<br />that will bring our country the dignity </p>
					</header>
					<a href="#main" class="button big scrolly">Get Started</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

                <!-- Section -->
                <div id="first">
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="images/pict02.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Give your needed number of players !</h3>
										<div class="input-form">
                                            <form id="input-form" method="post" action="inserts.php">            
                                                    Batsmen: <br><input type="number" name="Batsmen" class="form-control" placeholder="Enter the number of batsmen needed" required min="1" max="15" ><br>
                                                    Bowlers: <br><input type="number" name="Bowlers" class="form-control" placeholder="Enter the number of bowlers needed" min="1" max="15" required><br>
                                                    All Rounders: <br><input type="number" name="AllRounders" class="form-control" placeholder="Enter the number of all rounders needed" min="1" max="15" required><br>
                                                    <!-- Match Type : <br><select name="match_type" size="3" class="form-control" font-color: "white">
                                                            <option value="ODI">ODI</option>
                                                            <option value="Test">Test</option>
                                                            <option value="T20">T20</option>
                                                            </select><br><br> -->
                                                    <input type="submit" name="submit" class="form-control-submit"  value="Submit" >
                                                    
                                            </form>
                                            <a href="#third" class="button">See the Lineups</a>
                                        </div>

										
									</div>
								</div>
						</div>
					</section>
                </div>
                <!-- Section -->
                <div id="second">
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>This system works based on, </h3>
									<p>The past performances of the Sri Lankan players in the recent matches</p>
                                    <p>The statistics are taken from  ESPN Cricinfo </p>
                                    <p>The Squad is seletced by, <br>
										● Batsmen - Players with the best average runs scored<br>
										● Bowlers - Players with the highest number of wickets taken<br>
										● All Rounders - Players with both best batting and bowling in the last year span <br>
									</p>
									
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="generic.html" class="link"><img src="images/pict01.jpg" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>
                </div>
                <!-- Section -->
                <div id="third">
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Here are your awaited results</h2>
								<p>by Cricket Squad Selector</p>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
                                    <h4> ODI Lineup</h4>
									<div class="player-table">
                                            <a href="odibatting.php" class="button">See</a>
									</div>
									
									
								</div>
								<div class="col align-center">
                                    <h4> Test Lineup</h4>
									<div class="player-table">
                                            <a href="testbatting.php" class="button">See</a>
									</div>
									
								</div>
								<div class="col align-center">
                                    <h4> T 20 Lineup</h4>
									<div class="player-table">
                                            <a href="t20batting.php" class="button">See</a>
									</div>
									
								</div>
							</div>
						</div>
					</section>
                </div>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: PRATHIBHA</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>