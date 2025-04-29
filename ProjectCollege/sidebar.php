<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="sidebar.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">

<div>
<aside class="sidebar collapsed" id="sidebar">
    <button id="sidebarToggle">☰</button>
        <!-- <img src="logo.png" alt="Logo"> -->
    <span>ATTENDANCE</span>
    <ul class="menu">
    <li><div><a href="index.html"><i class="fas fa-home"></i> <span class="text"> Home</span></a></div></li>
    <li><div><a href="about.html"><i class="fas fa-info-circle"></i> <span class="text">About</span></a></div></li>
    <li><div><a href="departments.html"><i class="fas fa-building-columns"></i> <span class="text"> departments</span></a></div></li>
    <li><div><a href="admissions.html"><i class="fas fa-user-graduate"></i> <span class="text">Admission</span></a></div></li>
    <li><div><a href="events.html"><i class="fas fa-calendar-days"></i><span class="text"> Event</span></a></div></li>
    <li><div><a href="contact.html"><i class="fas fa-envelope"></i> <span class="text"> Contact</span></a></div></li>
    <li><div><a href="Gallery.html"><i class="fas fa-image"></i> <span class="text">Gallery</span></a></div></li>
    <li><div><a href="admin_login.html"><i class="fas fa-user-shield"></i> <span class="text">Admin Login</span></a></div></li>
</ul>
    <!-- <div class="profile">
        <img src="user.png" alt="User">
        <span>Attendance</span>
         <p>attendancesystem@gmail.com</p> 
    </div> -->
</aside>
</div> 
<script>
    const sidebar = document.querySelector('.sidebar');
    const toggleBtn = document.getElementById('toggleBtn');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });
</script>
<script>
    document.getElementById("sidebarToggle").addEventListener("click", function() {
        document.querySelector(".sidebar").classList.toggle("collapsed");
       // document.querySelector(".main-content").classList.toggle("expanded");
    });
</script>
</body>
</html>