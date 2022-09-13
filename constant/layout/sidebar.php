 <?php 
 include('../constant/connect.php');
  

 ?>

 <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                        
                    
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Members</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new_entry.php">Add Member</a></li>
                                <li><a href="view_mem.php">Manage Member</a></li>
                            
                            </ul>
                        </li>
                         <li><a href="payments.php" aria-expanded="false"><i class="fa fa-dollar"></i><span class="hide-menu">Payments</span></a></li>
                        <li id="health_status"><a href="new_health_status.php"><i class="fa fa-heart"></i><span class="hide-menu">Health Status</span></a>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file-text-o"></i><span class="hide-menu">Plan</a>
                            <ul aria-expanded="false" class="collapse">
                                <a href="new_plan.php">New Plan</a></li>
                               <li><a href="view_plan.php">Edit Subsciption Details</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-archive"></i><span class="hide-menu">Overview</span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li>
                <a href="over_members_month.php">Members per Month</a>
            </li>

            <li>
                <a href="over_members_year.php">Members per Year</a>
            </li>

            <li>
                <a href="revenue_month.php">Income per Month</a>
            </li>
                            </ul>
                        </li>

                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-wheelchair"></i><span class="hide-menu">Exercise Routine</span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li>
                <a href="addroutine.php">Add Routine</a>
            </li>

            <li>
                <a href="editroutine.php">Edit Routine</a>
            </li>

            <li>
                <a href="viewroutine.php">View Routine</a>
            </li>
                            </ul>
                        </li>
                        

                         <li><a href="profile.php" aria-expanded="false"><i class="fa fa-folder"></i><span class="hide-menu"> Admin Profile</span></a></li>                   
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->