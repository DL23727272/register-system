<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        #results-box {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div id="results-box">
        <form action="index.html" method="post">
            <button type="submit">LOG OUT</button>
        </form>
        <hr>
        <table>
            <caption>WELCOME</caption>
            <form action="registration.html" method="post">
            <button>REGISTER</button>
            </form>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th colspan="3">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = 'SELECT * FROM `user`';
                $results = mysqli_query($connection, $query);
                if (mysqli_num_rows($results) >= 1) {
                    while ($result = mysqli_fetch_array($results)) {
                ?>
                <tr>
                    <td><?php echo $result['fname']; ?></td>
                    <td><?php echo $result['mname']; ?></td>
                    <td><?php echo $result['lname']; ?></td>
                    <td><?php echo $result['age']; ?></td>
                    <td><?php echo $result['sex']; ?></td>
                    <td><?php echo $result['address']; ?></td>
                    <td><?php echo $result['username']; ?></td>
                    <td><?php echo $result['password']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><a href="edit.php?id=<?php echo $result['userid']; ?>">Edit</a></td>
                    <td><a href="view.php?id=<?php echo $result['userid']; ?>">View</a></td>
                    <td><a href="delete.php?id=<?php echo $result['userid']; ?>" onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE?')">Delete</a></td>
                </tr>
                <?php
                    }
                } else {
                ?>
                <tr>
                    <td colspan="10" style="text-align: center;">No Data Found!</td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
