<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<div>
				<li class="sig" style="margin-right:60px">Welcome : <?php echo htmlentities($_SESSION['login']);?></li> 
				<li class="sigi" ><a href="logout.php" >Logout</a></li>
			</div>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
				<li style="margin-left:80px"><a href="index.php">Home</a></li>
					<li style="margin-left:30px"><a href="package-list.php">View Packages</a></li>
					<?php if($_SESSION['login'])
{?>
					<?php } ?>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >User Register</a></li> 
			<li class="sigi" style="margin-left:50px"><a href="#" data-toggle="modal" data-target="#myModal4" >User Login</a></li>
        </ul>
		<ul class="nav navbar-nav">
						</ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
