<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
    <link rel="stylesheet" href="../css/maincss.css">
    <link rel="stylesheet" href="../css/player44.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <div class="menu">
        <div class="item"><a href="../welcome/welcome.php"><i class="fas fa-desktop"></i>Dashboard</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-table"></i>Player<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="../player/player_add.php" class="sub-item">ADD Player</a>
            <a href="../player/player_view.php" class="sub-item">View Player</a>
            <a href="../player/player_update.php" class="sub-item">Update Player</a>
            <a href="../player/player_delete.php" class="sub-item">Delete Player</a>
          </div>
        </div>
        
        <div class="item">
          <a class="sub-btn"><i class="fas fa-table"></i>Fee's<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="../fee/feetable.php" class="sub-item">Fee's Table</a>
            <a href="../fee/fee_add.php" class="sub-item">Add Fee's</a>
            <a href="../fee/viewfee.php" class="sub-item">View Fee's</a>
          </div>
        </div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-book"></i>Attendance<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="../attendance/get_attendance.php" class="sub-item">Add Attendance</a>
            <a href="../attendance/view_all.php" class="sub-item">View Attendance</a>
            <!-- <a href="../attendance/#" class="sub-item">Sub Item 03</a> -->
          </div>
        </div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-cogs"></i>Tour<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="../tour/tour_add.php" class="sub-item"> ADD Tour</a>
            <a href="../tour/tour_view.php" class="sub-item">Tour View</a>
            <a href="../tour/tour_search.php" class="sub-item">Search Tour</a>
            <!-- <a href="../ptour/Tour_player.php" class="sub-item">Tour Player</a> -->
          </div>
        </div>
        <div class="item"><a href="../login/login.php"><i class="fas fa-desktop"></i>LOGOUT</a></div>
        </div>
    </div>
    

    <script type="text/javascript">
    $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
    </script>

  </body>
</html>
