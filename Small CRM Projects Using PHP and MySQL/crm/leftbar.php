<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.fa:hover {
  color: blue;
}
.fa fa-thumbs-up:hover {
  color: blue;
}
</style>

 <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="userimages/admin.ico"  alt="" data-src="userimages/admin.ico" data-src-retina="userimages/admin.ico" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting" style="font-size:14px;">Welcome</div>
          <div class="username" style="font-size:12px;"><?php echo $_SESSION['name'];?></div>
          <div class="status" style="font-size:10px;"><a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
   
    <ul>	
      <li class="start"> <a href="dashboard.php"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span>  </a> 
      </li>

      <li class="active"><a href="change-password.php"><span class="fa fa-file-text-o"></span> Change Password</a></li>
      <li><a href="profile.php"><span class="fa fa-user"></span> Profile</a></li>


      <li ><a href="get-quote.php"> <span class="fa fa-tasks"></span> Request a Quote</a></li>
      <li class="active"><a href="create-ticket.php"><span class="fa fa-ticket"></span> Create Ticket</a></li>
      <li ><a href="view-tickets.php"><span class="fa fa-ticket"></span> View Ticket</a></li>
      <li ><a href="calender.php"><span class="fa fa-ticket"></span> Calender</a></li>

      <li style="margin-left: auto;margin-right: auto;">
        <!-- <p>Click on the icon to toggle between thumbs-up and thumbs-down (like/dislike):</p> -->
        <a href="#">
        <img src="userimages/donation.ico"  alt="donation" data-src="userimages/donation.ico" data-src-retina="userimages/donation.ico" width="95" height="69" />
        <span class="fa fa-thumbs-up" style="font-size: 50px;cursor: pointer;user-select: none;color: white;" onclick="myFunction(this)"></span>
        <br>
        donation</a><br>
      </li>
      
    </ul>
    
  

<script>
    function myFunction(x) {
      x.classList.toggle("fa-thumbs-down");
    }
    function myClick(x) {
      x.classList.toggle("fa-thumbs-down");
    }
</script>
	