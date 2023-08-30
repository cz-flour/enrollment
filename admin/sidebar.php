<!-- Sidebar -->

<style>
    h5{
        color:antiquewhite;
        font-size: larger;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>

<div class="sidebar" id="mySidebar">
<div class="side-header">
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>

<hr style="border:1px solid; background-color:#2c2b2b; border-color:#3B3131;">
<button class="sidebar-toggle" onclick="toggleSidebar()">
    Toggle Sidebar
</button>
    <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="allstudents.php"><i class="fa fa-users"></i>All Students</a>
    <a href="#contact"><i class="fa fa-user-plus"></i>Add Student</a>
    
  <!---->
</div>
 

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");
    }
</script>

