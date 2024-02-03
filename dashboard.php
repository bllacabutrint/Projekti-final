
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Shoes Dashboard</title> 
	<link rel="stylesheet"
		href="css/dashboard.css"> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
		<a href="#" class="logo"> <i class="fas fa-shoe-prints"></i> shoes Dashboard </a>
				
		</div> 

		
			
			</div> 
		</div> 

		

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1"> 
				
						<h3> Dashboard</h3> 
					</div> 
					<div class="nav-option option5"> 
	
						<h3> Profile</h3> 
					</div> 

					<div class="nav-option option6"> 
			
						<h3> Settings</h3> 
					</div> 

					<div class="nav-option logout"> 
	
						<h3>Logout</h3> 
					</div> 

				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
		
				</div> 
			</div> 

		

			<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">Recent Articles</h1> 
					<button class="view">View All</button> 
				</div> 

				<div class="report-body"> 
					<div class="report-topic-heading"> 
					<table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '..userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $users){
                echo 
                "
                <tr>
                     <td>$users[Id]</td>
                     <td>$users[Name]</td>
                     <td>$users[Surname] </td>

                     <td>$users[Email] </td>
                     <td>$users[Username] </td>
                     <td>$users[Password] </td>
                     <td><a href='edit.php?id=$users[Id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$users[Id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
				</div> 
			</div> 
		</div> 
	</div> 

	<script src="dashboard.js"></script> 
</body> 
</html>
