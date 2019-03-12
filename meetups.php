<!DOCTYPE html>
<html>
<head>
    <title>Campus Event Software</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 20px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        
      </style>
</head>
<body>
        <ul>
                <li><a href="me.php">Events for me</a></li>
                <li><a href="organizations.php">Organizations</a></li>
                <li><a href="meetups.php" class="active">Meetups</a></li>
                <li><a href="socialEvents.php">Social Events</a></li>
                <li><a href="foodieFriends.php">Foodie Friends</a></li>
                <li><a href="test.php">Logout</a></li>
        </ul>
        <table>
                <thead>
                        <tr>
                                <th>
                                        Date
                                </th>
                                <th>
                                        Time
                                </th>
                                <th>
                                        Event Name
                                </th>
                                <th>
                                        Event Description
                                </th>
                                <th>
                                        Event Host
                                </th>
                                <th>
                                        Event Type
                                </th>
                                <th>
                                        Location
                                </th>
                        </tr>
                </thead>
                <?php

                    $user = 'root';
                    $pass = '';
                    $db = 'test_1';
                    $con = mysqli_connect("localhost","root","","test_1");


                    if($con-> connect_error) {
                        die("Connection failed:". $con-> connect_error);
                    }
                    $sql = "SELECT * FROM pref WHERE eventtype = 'meetup'";
                    $result = $con -> query($sql) or die($con->error);

                    while($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["date"] ."</td><td>". $row["time"] ."</td><td>". $row["eventname"] . "</td><td>". $row["eventdesc"]."</td><td>". $row["eventhost"]."</td><td>". $row["eventtype"]."</td><td>". $row["location"]."</td></tr>";
                        }
                        echo "</table>";

                    $con-> close();
                    ?>
        </table>
</body>
</html>