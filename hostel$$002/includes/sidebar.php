<nav class="ts-sidebar" style="background-color: rgb(0, 177, 230);">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="myfees.php"><i class="fa fa-file-o"></i>My Fees</a></li>
<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="transaction.php"><i class="fa fa-file-o"></i>My Transactions</a></li>
<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="book-hostel.php"><i class="fa fa-file-o"></i>Book Hostel</a></li>
<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li>
<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li>
<?php } else { ?>
				
				<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li style="background-color: rgb(50, 93, 136); border: 5px solid rgb(0, 177, 230);"><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<!-- <li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li> -->
				<?php } ?>

			</ul>
		</nav>