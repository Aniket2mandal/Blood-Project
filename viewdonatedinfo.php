
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Management And Distribution System</title>
  <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
  <link rel="stylesheet" href="css/updateblood.css">
 
</head>


<body>
  <nav>
  <div class="images">
            <img src="newlogo.jpeg" alt="logo_of_BDMS" style="height: 64px ; width:64px; border-radius: 50%;
            margin-left: 50px; ">
            </div>
        <h3 style="color:lavender; margin-left: 1%; font-size:20px;" >Blood Distribution and Management System</h3>
    <ul>
        <li class="dropdown">
            <button><a href="admin.php">Home</a></button>
            <div class="dropdown-data"></div>
          </li>
    
      <li class="dropdown">
        <button>Blood Stock Bank</button>
        <div class="dropdown-data">
          <a href="adminbhaktapur.php">Bhaktapur NRCS Blood Bank</a>
          <a href="adminnrcs.php">Central NRCS Blood Bank</a>
         
        </div>
      </li>
      <li class="dropdown">
        <button><a href="admininfo.php" style="text-decoration: none; color:white;">Admin Profile</a></button>
        <div class="dropdown-data">
          
        </div>
      </li>
    </ul>
  </nav>

  <div class="body1">
    <h1> Donated Info</h1>
  </div><br><br>

  <div class="maincontent">
    <!-- SIDENAV BODY -->
<div class ="sidenav">
<h1>Dashboard</h1>
<!-- <div class="sidenavcontent"> -->
<div class="links">
    <a href="addblood.php">ADD BLOOD</a>
  <a href="deletblood.php">DELETE BLOOD</a>
    <a href="updatebloodmain.php">UPDATE BLOOD/BANK</a>
    <a href="viewdonatedinfo.php">VIEW DONATED INFO</a>
    </div>
<!-- </div> -->
</div>

<div class="content2">
  
<table class="table2">
        <!-- <h2>Donated Info</h2> -->
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Blood Bank</th>
          <th>Blood</th>
        </tr>
        <?php
        include "database.php";
        $sql = mysqli_query($conn, "SELECT `email`,`donatedbank`,`donatedblood`FROM `bloodmanage`WHERE `donatedinfo`='donated' ");
        $row = mysqli_num_rows($sql);
        if ($row > 0) {
          $i = 1;
         
          while ($result = mysqli_fetch_assoc($sql)) {

            echo "
                    <tr>
                    <td>" . $i . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['donatedbank'] . "</td>
                    <td>" . $result['donatedblood'] . "</td>   
                    </tr>";
                    $i++;
          }
        }
        ?>
      </table>
      
      </div>
  </div>
</body>
</html>