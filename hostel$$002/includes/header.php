
<?php
//$id = $_GET['id'];
include('includes/config.php');
include('includes/db.php');

if($_SESSION['id'])
{ ?><div class="brand clearfix" style="background-color: wheat;">
		<a href="#" class="logo" style="font-size:16px;">E-HOSTEL</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
        <?php
								 $aid=$_SESSION['id'];
                                $db = mysqli_connect("localhost", "root", "", "hostel");
                                $sql = "SELECT * FROM userRegistration WHERE id='$aid'";
                                $result = mysqli_query($db,$sql);
                                $row=mysqli_fetch_array($result);
                                 ?> 
                                
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="uploadform.php" title="Change photo"><span><img src="<?php echo $row['photo']; ?>" class="ts-avatar hidden-side" style="width: 40px; height: 40px; border-radius: 40px;"><?php echo $row['firstName']?></span> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
      
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="http://localhost/hostel" class="logo" style="font-size:16px;">E-Hostel</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>