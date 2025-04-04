<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- bootstrap -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
* {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --body-color: #E4E9F7;
  --sidebar-color: #FFF;
  --primary-color: #5d5c5e;
  --primary-color-light: #F6F5FF;
  --toggle-color: #DDD;
  --text-color: #707070;
  
  --tran-02: all 0.2s ease;
  --tran-03: all 0.3s ease;
  --tran-04: all 0.4s ease;
  --tran-05: all 0.5s ease;
}

body {
  height: 100vh;
  background: var(--body-color);
  transition: var(--tran-02);
  /* Keep padding-left for sidebar space */
  padding-left: 250px;
  overflow-x: hidden;
}

body.dark {
  --body-color: #18191A;
  --sidebar-color: #242526;
  --primary-color: #3A3B3C;
  --primary-color-light: #3A3B3C;
  --toggle-color: #FFF;
  --text-color: #CCC;
}

/* ==================== Sidebar =================== */
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 250px;
  padding: 10px 14px;
  background: var(--sidebar-color);
  transition: var(--tran-05);
  z-index: 100;
  overflow: hidden;
}

.sidebar.close {
  width: 88px;
}

.sidebar .text {
  font-size: 16px;
  font-weight: 500;
  color: var(--text-color);
  transition: var(--tran-03);
  white-space: nowrap;
  opacity: 1;
}

.sidebar.close .text {
  opacity: 0;
}

.sidebar .image {
  min-width: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sidebar header {
  position: relative;
}

.sidebar .image-text img {
  width: 40px;
  border-radius: 6px;
}

.sidebar header .image-text {
  display: flex;
  align-items: center;
}

header .image-text .header-text {
  display: flex;
  flex-direction: column;
}

.header-text .name {
  font-weight: 600;
}

.header-text .profession {
  margin-top: -2px;
}

.sidebar .menu {
  margin-top: 35px;
}

.sidebar header .toggle {
  position: absolute;
  top: 50%;
  right: -25px;
  transform: translateY(-50%) rotate(180deg);
  height: 25px;
  width: 25px;
  background: var(--toggle-color);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  font-size: 22px;
  transition: var(--tran-03);
  color: #545556;
}

.sidebar.close header .toggle {
  transform: translateY(-50%);
}

body.dark .sidebar header .toggle {
  color: var(--text-color);
}

.sidebar li {
  height: 50px;
  margin-top: 10px;
  list-style: none;
  display: flex;
  align-items: center;
}

.sidebar li .icon,
.sidebar li .text {
  color: var(--text-color);
  transition: var(--tran-02);
}

.sidebar li .icon {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 60px;
  font-size: 20px;
}

.sidebar li a {
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  border-radius: 6px;
  font-weight: 500;
  transition: var(--tran-04);
}

.sidebar li a:hover {
  background: var(--primary-color);
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text {
  color: var(--sidebar-color);
}

body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text {
  color: var(--text-color);
}

/* ==================== Menu Bar =================== */
.sidebar .menu-bar {
  height: calc(100% - 50px);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.menu-bar .mode {
  position: relative;
  border-radius: 60px;
  background: var(--primary-color-light);
}

.menu-bar .mode .moon-sun {
  height: 50px;
  width: 60px;
  display: flex;
  align-items: center;
}

.menu-bar .mode i {
  position: absolute;
  transition: var(--tran-03);
}

.menu-bar .menu .menu-links {
  padding: 0;
}

.menu-bar .mode i.sun {
  opacity: 0;
}

body.dark .menu-bar .mode i.sun {
  opacity: 1;
}

body.dark .menu-bar .mode i.moon {
  opacity: 0;
}

.menu-bar .mode .toggle-switch {
  position: absolute;
  right: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  min-width: 60px;
  cursor: pointer;
  border-radius: 6px;
  background: var(--primary-color-light);
}

.toggle-switch .switch {
  position: relative;
  height: 22px;
  width: 44px;
  border-radius: 25px;
  background: var(--toggle-color);
  transition: var(--tran-05);
}

.switch::before {
  content: '';
  position: absolute;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  background: var(--sidebar-color);
  transition: var(--tran-03);
}

body.dark .switch::before {
  left: 24px;
}

/* ==================== Main Content: Dashboard Cards =================== */
/* The dashboard cards container is placed to the right of the sidebar */
/* Changed margin-left value from 20px to 10px to reduce gap */
.dashboard-summary-cards {
  position: relative;
  margin: 20px 20px 20px 10px; /* left margin is now 10px */
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
  transition: margin-left 0.5s ease;
}

/* When the sidebar is closed, reduce left margin */
/* Changed margin-left value from 48px to 10px */
.sidebar.close ~ .dashboard-summary-cards {
  margin-left: -100px;
  margin-right: 40px; 
}

.dashboard-card {
  background: linear-gradient(135deg, #4b6cb7, #182848);
  color: #fff;
  border-radius: 1rem;
  padding: 1.2rem 1.5rem;
  flex: 1 1 calc(33.33% - 1rem);
  min-width: 100px;
  text-align: center;
  transition: transform 0.2s ease;
}

.dashboard-card:hover {
  transform: translateY(-5px);
}

.dashboard-card-title {
  font-size: 1.1rem;
  margin-bottom: 0.5rem;
  font-weight: 600;
}

.dashboard-card-count {
  font-size: 2rem;
  font-weight: bold;
}

.dashboard-card-view {
  display: block;
  margin-top: 0.8rem;
  padding: 0.4rem 0.8rem;
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
  border-radius: 0.5rem;
  text-decoration: none;
  font-size: 0.9rem;
  transition: background-color 0.3s ease;
}

.dashboard-card-view:hover {
  background-color: rgba(255, 255, 255, 0.3);
}

/* Responsive adjustments for smaller screens */
@media (max-width: 768px) {
  body {
    padding-left: 88px;
  }
  .dashboard-summary-cards {
    margin-left: 10px; /* consistent with reduced gap */
    flex-direction: column;
    align-items: center;
  }
  .dashboard-card {
    flex: 1 1 100%;
    max-width: 90%;
  }
}



    </style>
  </head>
  <body class="">
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\Side Bar Starts From Here/////////////////// -->
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <a href="url 'index'"><img src="static 'img/logo.png'"></a>
          </span>
          <div class="text header-text">
            <span class="name">UNISHORTS</span>
            <span class="profession">Collaborate Freely</span>
          </div>
        </div>
        <div class="toggle">
          <i class='bx bxs-chevron-right'></i>
        </div>
      </header>
      <div class="menu-bar">
        <div class="menu">
          <ul class="menu-links">
            <li class="dropdown-btn">
              <a href="javascript:void(0)">
                <i class='bx bxs-dashboard icon'></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            
            <li class="nav-link">
              <a href="url 'show-notifications'">
                <i class='bx bx-bell icon'></i>
                <span class="text nav-text">Reminders</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="url 'explore:explore_page'">
                <i class='bx bx-objects-horizontal-left icon'></i>
                <span class="text nav-text">Explore</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="url 'directs' request.user">
                <i class='bx bx-chat icon'></i>
                <span class="text nav-text">Messages</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="url 'profile' request.user">
                <i class='bx bx-user icon'></i>
                <span class="text nav-text">Profile</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="url 'newpost'">
                <i class='bx bx-upload icon'></i>
                <span class="text nav-text">New Upload</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="bottom-content">
          <li class="nav-link">
            <a href="url 'setting:settings_page'">
              <i class='bx bxs-cog icon'></i>
              <span class="text nav-text">Settings</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="../pages/logout.php">
              <i class='bx bx-log-out icon'></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>
          <li class="mode">
            <div class="moon-sun">
              <i class='bx bxs-moon icon'></i>
              <i class='bx bxs-sun icon'></i>
            </div>
            <span class="mode-text text">Dark Mode</span>

            <div class="toggle-switch">
              <span class="switch"></span>
            </div>
          </li>
        </div>
      </div>
    </nav>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\Side Bar Ends From Here/////////////////// -->


    <div class="dashboard-summary-cards">
  <div class="dashboard-card">
    <h3 class="dashboard-card-title">Courses</h3>
    <p class="dashboard-card-count">3</p>
    <a href="#" class="dashboard-card-view">View</a>
  </div>
  <div class="dashboard-card">
    <h3 class="dashboard-card-title">Students</h3>
    <p class="dashboard-card-count">25</p>
    <a href="#" class="dashboard-card-view">View</a>
  </div>
  <div class="dashboard-card">
    <h3 class="dashboard-card-title">Sold</h3>
    <p class="dashboard-card-count">3</p>
    <a href="#" class="dashboard-card-view">View</a>
  </div>
</div>

     <script src="../js/adminscript.js"></script>

    </body>
    </html>