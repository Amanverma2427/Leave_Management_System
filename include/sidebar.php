<?php
//session already started

$role = $_SESSION['role'];//assign session value

?>
    <!-- Sidebar -->
      <div class="sidebar sidebar-style-2" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img
                src="assets/img/kaiadmin/dps-logo.png"
                alt="navbar brand"
                class="navbar-brand"
                height="40"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
			
				<?php
				  if($role == 'admin'){
					  
				echo  	"<li class='nav-item'>
							<a href='index.php'>
							  <i class='fas fa-home'></i>
							  <p>Dashboard</p>
							  
							</a>
						</li>";
				  
									  
				echo	"<li class='nav-item' id='tables'>
							<a href='tables.php'>
							  <i class='fas fa-table'></i>
							  <span>View</span>
							</a>
						</li>";	
					  
					  
				echo	"<li class='nav-item' id='tables'>
							<a href='leave_application.php'>
							  <i class='fas fa-table'></i>
							  <span>Leave Application</span>
							</a>
						</li>";
						
				echo	"<li class='nav-item' id='tables'>
							<a href='student_leave_request.php'>
							  <i class='fas fa-table'></i>
							  <span>Student's Leave Request</span>
							</a>
						</li>";	
					  
				echo	"<li class='nav-item' id='tables'>
							<a href='assign_role.php'>
							  <i class='fas fa-table'></i>
							  <span>Assign Role</span>
							</a>
						</li>";
			
					  
				echo	"<li class='nav-item' id='forms'>
							<a href='logout.php'>
							  <i class='fas fa-pen-square'></i>
							  <span>Logout</span>
							</a>
						</li>";
				  }
				  
				elseif($role == 'teacher'){
					
				echo  	"<li class='nav-item'>
							<a href='index.php'>
							  <i class='fas fa-home'></i>
							  <p>Dashboard</p>
							  
							</a>
						</li>";
						
				echo	"<li class='nav-item' id='tables'>
							<a href='tables.php'>
							  <i class='fas fa-table'></i>
							  <span>View</span>
							</a>
						</li>";	
				
				echo	"<li class='nav-item' id='tables'>
							<a href='student_leave_request.php'>
							  <i class='fas fa-table'></i>
							  <span>Student's Leave Request</span>
							</a>
						</li>";	
				  
					  
				echo	"<li class='nav-item' id='forms'>
							<a href='logout.php'>
							  <i class='fas fa-pen-square'></i>
							  <span class=''>Logout</span>
							</a>
						</li>";

				  }
				elseif($role == 'student'){
				  
				echo  	"<li class='nav-item'>
							<a href='index.php'>
							  <i class='fas fa-home'></i>
							  <p>Dashboard</p>
							  
							</a>
						</li>";
				  
				 echo	"<li class='nav-item' id='forms'>
							<a href='pending_leave.php'>
							  <i class='fas fa-pen-square'></i>
							  <span class=''>Pending leave</span>
							</a>
						</li>";
						
				echo	"<li class='nav-item' id='forms'>
							<a href='approved_leave.php'>
							  <i class='fas fa-pen-square'></i>
							  <span class=''>Approved leave</span>
							</a>
						</li>";
					 
				echo	"<li class='nav-item' id='forms'>
							<a href='rejected_leave.php'>
							  <i class='fas fa-pen-square'></i>
							  <span class=''>Rejected leave</span>
							</a>
						</li>";
									  
				echo	"<li class='nav-item' id='tables'>
							<a href='leave_application.php'>
							  <i class='fas fa-table'></i>
							  <span class=''>Leave Application</span>
							</a>
						</li>";
				
				echo	"<li class='nav-item' id='forms'>
							<a href='logout.php'>
							  <i class='fas fa-pen-square'></i>
							  <span class=''>Logout</span>
							</a>
						</li>";
				  }
				?>
			</ul>
          </div>
        </div>
      </div>
    <!-- End Sidebar -->
