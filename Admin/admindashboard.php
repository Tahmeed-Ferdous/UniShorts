<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- bootstrap -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="admininclude/headerstyle.css">

    <style>

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


/* ----------------- Table Section ----------------- */
.table-section {
  margin: 0px 100px 200px 0px; /* Adjust left margin if needed */
}

.table-title {
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: var(--primary-color);
  font-weight: 600;
}

.table-responsive {
  width: 100%;
  overflow-x: auto;
}

.orders-table {
  width: 100%;
  border-collapse: collapse;
  background: #fff;
  border-radius: 0.5rem;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.orders-table thead {
  background: var(--primary-color);
  color: #fff;
}

.orders-table th,
.orders-table td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.orders-table tbody tr:hover {
  background: var(--primary-color-light);
}

.delete-btn {
  background: #ff4d4d;
  color: #fff;
  border: none;
  padding: 6px 12px;
  border-radius: 0.3rem;
  cursor: pointer;
  transition: background 0.3s ease;
}

.delete-btn:hover {
  background: #e60000;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .orders-table th,
  .orders-table td {
    padding: 8px 10px;
    font-size: 0.9rem;
  }
}




    </style>
  </head>
  <body class="">

  <?php include("admininclude/header.php") ?>

 

 <!-- Dashboard Summary Cards -->
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

<!-- Table Section -->
<div class="table-section">
  <h2 class="table-title">Courses Ordered</h2>
  <div class="table-responsive">
    <table class="orders-table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Course ID</th>
          <th>Student Email</th>
          <th>Order Date</th>
          <th>Amount</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#001</td>
          <td>C-101</td>
          <td>student1@example.com</td>
          <td>2023-04-01</td>
          <td>$100</td>
          <td><button class="delete-btn">Delete</button></td>
        </tr>
        <tr>
          <td>#002</td>
          <td>C-102</td>
          <td>student2@example.com</td>
          <td>2023-04-02</td>
          <td>$150</td>
          <td><button class="delete-btn">Delete</button></td>
        </tr>
        <tr>
          <td>#003</td>
          <td>C-103</td>
          <td>student3@example.com</td>
          <td>2023-04-03</td>
          <td>$120</td>
          <td><button class="delete-btn">Delete</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



     <script src="../js/adminscript.js"></script>
     <script src="../js/adminajaxrequest.js"></script>


    </body>
    </html>