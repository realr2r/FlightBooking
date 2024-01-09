
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    
</head> 
<body>


    <section id="menu">
        <div class="logo">
            <img src="img/logo.png" alt="">
            <h2>Dashboard</h2>
        </div>


        <div class="items">
            <li><i class="fa-solid fa-users"></i><a href="#">Users</a></li>
            <li><i class="fa-solid fa-list"></i><a href="adminshit\admin1.html">List of Bookings</a></li>
            <li><i class="fa-solid fa-calendar-days"></i><a href="adminshit\admin2.html">Flight Schedule</a></li>
            <li><i class="fa-regular fa-credit-card"></i><a href="#">Transactions</a></li>
            <li><i class="fa-sharp fa-solid fa-right-from-bracket"></i><a href="#">Logout</a></li>

        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class ="n1">
                <div class="search">
                <i class = "fas fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>

        <div class="profile">
            <i class="fas fa-bell"></i>
            <img src="img/admin.png" alt="">
        </div>
    </div>
    <h3 class="i-name"> User Accounts </h3> 
    <div class="values">
        <div class="val-box">
            <i class ="fas fa-users"></i>
            <div>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "bookflight";

                $connection = new mysqli($servername, $username, $password, $database);
                $dash_user_query = "SELECT * from user_signup";
                $dash_user_query_run = mysqli_query($connection,$dash_user_query);

                if($user_total = mysqli_num_rows($dash_user_query_run))
                {
                    echo '<h3>'.$user_total. '</h3>';
                }
                else
                {
                    echo '<h3> No data </h3>';
                }
                ?>
                
                <span>Number of Users</span>
            </div>
        </div>
         <div class="val-box">
            <i class ="fa-solid fa-xmark"></i>
            <div>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "bookflight";

                $connection = new mysqli($servername, $username, $password, $database);
                $dash_inactive_query = "SELECT * from user_signup WHERE status=''";
                $dash_inactive_query_run = mysqli_query($connection,$dash_inactive_query);

                if($inactive_total = mysqli_num_rows($dash_inactive_query_run))
                {
                    echo '<h3>'.$inactive_total. '</h3>';
                }
                else
                {
                    echo '<h3>0</h3>';
                }
                ?>
                <span>Inactive</span>
            </div>
        </div>
         <div class="val-box">
            <i class ="fa-solid fa-check"></i>
            <div>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "bookflight";

                $connection = new mysqli($servername, $username, $password, $database);
                $dash_active_query = "SELECT * from user_signup WHERE status='1'";
                $dash_active_query_run = mysqli_query($connection,$dash_active_query);

                if($active_total = mysqli_num_rows($dash_active_query_run))
                {
                    echo '<h3>'.$active_total. '</h3>';
                }
                else
                {
                    echo '<h3> No data </h3>';
                }
                ?>
                <span>Active</span>
            </div>
        </div>
         <div class="val-box">
            <i class ="fa-solid fa-list"></i>
            <div>
                <h3>1</h3>
                <span>Total Schedules</span>
            </div>
        </div>
        
    </div>

    <dir class = "board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>User ID</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "bookflight";

                $connection = new mysqli($servername, $username, $password, $database);
                if ($connection->connect_error)
                {
                    die ("Conncetion failed: ".$connection->error);
                }

                $sql = "SELECT * FROM user_signup";
                $result = $connection->query($sql);

                if(!$result)
                {
                    die("Invalid query: ". $connection->error);
                }

                while ($row = $result->fetch_assoc())
                {
                    echo " <tr>
                    <td class='people'>
                        <img src='img/user.png' alt=''>
                        <div class='people-de'>
                            <h5>$row[email]</h5>
                            <p>$row[role]</p>
                        </div>
                    </td>

                    <td class ='people-des'>
            
                        <p>$row[id]</p>
                    </td>

                    
                    "; 
                    if ($row['status'] == 1) 
                    {
                        echo "<td class='active'><p>Active</p>  </td> ";
                    }
                    else
                    {
                        echo "<td class='inactive'><p>Inactive</p>  </td>";

                    }

            
                 echo "
             
                   
                    <td class='edit'><a href='edit.php?id=$row[id]'>Edit</a></td>
                    <td class='delete'><a href='delete.php?id=$row[id]'>Delete</a></td>
                    
                    ";

                    if ($row['status'] == 1) 
                    {
                        echo "<td class='disable'><a href='status.php?id=$row[id]'>Disable</a></td> ";
                    }
                    else
                    {
                        echo "<td class='disable'><a href='enable.php?id=$row[id]'>Enable</a></td> ";

                    }
               
                }
                ?>

                
            </tbody>
    </dir>
    </section>

</body>

</html>