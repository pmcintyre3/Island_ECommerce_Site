<?php 
    require("common.php"); 
     
    if(!empty($_SESSION['user'])) 
    { 
        header("Location: index.php"); 
        die("Redirecting to index.php"); 
    } 

    $incorrect = false;

    if(!empty($_POST)) 
    { 
        $query = " 
            SELECT 
                id,
                name,
                username,
                password,
                email,
                name,
                salt
            FROM user_info 
            WHERE 
                username = :username 
        "; 
         
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try 
        { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            die("An error occured, please try again"); 
        } 
 
        $login_ok = false; 

        $row = $stmt->fetch(); 
        if($row) 
        {  
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $check_password = hash('sha256', $check_password . $row['salt']); 
            } 
            if($check_password === $row['password']) 
            { 
                $login_ok = true; 
            } 
        } 

        if($login_ok) 
        { 
            unset($row['salt']); 
            unset($row['password']); 
            
            $_SESSION['user'] = $row; 

            header("Location: index.php"); 
            die("Redirecting to: index.php"); 
        } 
        else 
        { 
        	$incorrect = true;
        } 
    } 
     
?>

<?php	
	$pageTitle = "Login";
	$login_info = "";
	$item_count = 0;
	
    include( 'header.php' );
?>

<!-- start main -->
<div class="main_bg">
	<div class="wrap">	
		<div class="main">
		<!-- start service -->
			
			<div class="login-div">				
				  <div class="login-form">
						<div class="col">
							<div class="login-text-div">
								<h2>Login</h2>
							</div>
							<br/>
							<form method="post" action="login.php">
								<div>
									<!-- <span><label>Username</label></span> -->
									<span><input name="userName" type="text" class="textbox" placeholder="Username"></span>
								</div>
								<div>
									<span><label>Password</label></span>
									<span><input name="userPassword" type="password" class="textbox" placeholder="Password"></span>
								</div>
								<div>
									<span><input type="submit" class="" value="Login"></span>
							  </div>
							</form>
						</div>
						<div class="col">
							<div class="login-text-div">
								<h2>Don't have an account?</h2>
							</div>
							<br/>
							<p class="para">Sign up to participate! Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
							<br/>
							
							<form method="post" action="register.php">
								<div>
									<span><input type="submit" class="" value="Register"></span>
								</div>
							</form>
							
							<!--
							<form method="post" action="login.php">
								<div>
									<span><label>Username</label></span>
									<span><input name="userName" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>Password</label></span>
									<span><input name="userPassword" type="text" class="textbox"></span>
								</div>
								<div>
									<span><input type="submit" class="" value="Login"></span>
							  </div>
							</form>
							-->
						</div>
					</div>
				<div class="clear"></div>		
			</div>
			
			
			<!--
			<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
			<div class="ser-grid">
				<div class="ser-grid-list">
					<a href="details.html"><img src="images/icon1.png" alt=""></a>
					<h5><a href="details.html">24/7 customer support</a></h5>
					<p class="para">It is a long established fact that a reader will be distracted by the page when looking at its layout.</p>
				</div>
				<div class="ser-grid-list">
					<a href="details.html"><img src="images/icon2.png" alt=""></a>
					<h5><a href="details.html">hygienic branded</a></h5>
					<p class="para"> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
				</div>
				<div class="ser-grid-list">
					<a href="details.html"><img src="images/icon3.png" alt=""></a>
					<h5><a href="details.html">safely dispatch</a></h5>
					<p class="para">It is a long established fact that a reader will be distracted by the page when looking at its layout.</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="ser-grid">
				<div class="ser-grid-list">
					<a href="details.html"><img src="images/icon4.png" alt=""></a>
					<h5><a href="details.html">100% look book</a></h5>
					<p class="para">It is a long established fact that a reader will be distracted by the page when looking at its layout.</p>
				</div>
				<div class="ser-grid-list">
					<a href="details.html"><img src="images/icon5.png" alt=""></a>
					<h5><a href="details.html">authentic products</a></h5>
					<p class="para"> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
				</div>
				<div class="ser-grid-list">
					<a href="details.html"><img src="images/icon6.png" alt=""></a>
					<h5><a href="details.html">100% guarantee</a></h5>
					<p class="para">It is a long established fact that a reader will be distracted by the page when looking at its layout.</p>
				</div>
				<div class="clear"></div>
			</div>
			-->
			
			</div>
		<!--
		<div class="left_sidebar">
					<div class="sellers">
						<h4>Best Sellers</h4>
						<div class="single-nav">
			                <ul>
			                   <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>
			                    <li><a href="#">Always free from repetition</a></li>			                    
			                </ul>
			              </div>
					</div>
				</div>
				-->
			<div class="clear"></div>
		</div>
	</div>		