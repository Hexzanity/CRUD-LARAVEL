<style>
    /* Sidebar styles */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 200px;
      background-color: #42424a;
      color: #fff;
      padding: 20px 0;
    }

    .sidebar .sidebar-brand {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
      text-transform: uppercase;
    }

    .sidebar nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar nav ul li {
      padding: 10px;
    }

    .sidebar nav ul li:last-child {
      border-bottom: none;
    }

    .sidebar nav ul li a {
      display: block;
      color: #fff;
      font-family: Arial, sans-serif;
      font-weight: bold;
      text-decoration: none;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .sidebar nav ul li a:hover,
    .sidebar nav ul li.active a {
      background-color: #3b68b9;
    }

    /* Main content styles */
    .content {
      margin-left: 200px; /* Set the same width as the sidebar */
      padding: 20px;
      text-align: center;
      background-color: #f9f9f9;
    }
    .logout-link {
        position: fixed;
        bottom: 10px;
        left: 10px;
        padding: 5px;
        display: inline-flex;
        align-items: center;
        border-radius: 5px;
    }

    .logout-link i {
        margin-right: 5px;
    }

    .table-container {
        border: solid;
        padding: 10px;
        margin-bottom: 10px;
    }

    .table-container table {
        width: 100%;
    }

    .chart-container {
        width: 1000px;
        height: 400px;
        margin: 0 auto;
        border: solid;
        margin-bottom: 20px;
        padding: 10px;
    }

    .maxwell {
        border: solid;
        border-radius: 25px;
        margin-right: 100px;
        margin-left: 150px;
    }

    .maxwells {
        border: solid;
        border-radius: 25px;
    }

</style>
