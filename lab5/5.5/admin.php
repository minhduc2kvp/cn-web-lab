<!DOCTYPE html>
<html>

<head>
    <style>

    </style>
</head>

<body>
<h1 style="color: blue;">Category Administration</h1>
    <form action="admin.php" method="POST">
        <table>
            <tr style="background-color: rgb(233,233,233);">
                <th>Cat ID </th>
                <th>Title </th>
                <th>Description </th>
            </tr>
            <?php
            $server = 'localhost';
            $user = 'root';
            $pass = '';
            $mydb = 'business';
            $table_name = 'Categories';

            if(isset($_POST['submit'])) {
                $add_id = isset($_POST['add_id']) ? $_POST['add_id'] : '';
                $add_tit = isset($_POST['add_tit']) ? $_POST['add_tit'] : '';
                $add_des = isset($_POST['add_des']) ? $_POST['add_des'] : '';
                if($add_id != '' && $add_tit != '' && $add_des != '') {
                    $query_insert = "INSERT INTO $table_name
                    VALUES ('$add_id', '$add_tit', '$add_des')";
                    
                    $mysqli = new mysqli("localhost", $user, $pass, $mydb);
                    mysqli_query($mysqli, $query_insert);
                }
            }

            $catid;
            $title;
            $des;

            $mysqli = new mysqli("localhost", $user, $pass, $mydb);

            $query = "SELECT * FROM $table_name";
            if ($result = $mysqli->query($query)) {

                /* fetch associative array */
                while ($row = $result->fetch_assoc()) {
                    $catid = $row["CategoryID"];
                    $title = $row["Title"];
                    $des = $row["CDescription"];
                    echo
                        '<tr>
                            <td>' . $catid . '</td>
                            <td>' . $title . '</td> 
                            <td>' . $des . '</td> 
                        </tr>';
                }

                $result->free();
            }
            ?>
            <tr>
                <td><input type="text" name="add_id" id="add_id" required></td>
                <td><input type="text" name="add_tit" id="add_tit" required></td>
                <td><input type="text" name="add_des" id="add_des" required></td>
            </tr>
            <tr>
            <td align="left"><input type="submit" id="submit" name="submit" value="Click to Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>