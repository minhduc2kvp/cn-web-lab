<html>

<head>

</head>

<body>
    <h1 style="color: blue;">Select product we just sold: </h1>
    <form action="5.3.5.sale.php" method="GET">

        <div id="choose" name="choose" style="display: flex;">
            <?php
            $server = 'localhost';
            $user = 'root';
            $pass = '';
            $mydb = 'sale';
            $table_name = 'Products';

            $item_name;
            $cnt = 1;

            $mysqli = new mysqli("localhost", $user, $pass, $mydb);

            $query = "SELECT Product_desc FROM $table_name";
            if ($result = $mysqli->query($query)) {

                /* fetch associative array */
                while ($row = $result->fetch_assoc()) {
                    $item_name = $row["Product_desc"];
                    echo
                    '<div>
                                <input type="radio" name="product" value="' . $item_name . '">
                                <label for="' . $item_name . '">' . $item_name . '</label>
                            </div>';
                    $cnt++;
                }

                $result->free();
            }
            ?>
        </div>

        <table>
            <tr>
                <td align="right"><input type="submit" value="Click to Submit"></td>
                <td align="left"><input type="reset" value="Cancel"></td>
            </tr>
        </table>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>Num </th>
            <th>Item Description </th>
            <th>Weight </th>
            <th>Cost </th>
            <th>Count </th>
        </tr>
        <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $mydb = 'sale';
        $table_name = 'Products';

        $id;
        $item_name;
        $weight;
        $cost;
        $number;
        $cnt = 1;

        $mysqli = new mysqli("localhost", $user, $pass, $mydb);

        $query = "SELECT * FROM $table_name";
        if ($result = $mysqli->query($query)) {

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                $id = $row["ProductID"];
                $item_name = $row["Product_desc"];
                $weight = $row["Weight"];
                $cost = $row["Cost"];
                $number = $row["Numb"];
                echo
                '<tr>
                            <td>' . $cnt . '</td>
                            <td>' . $item_name . '</td> 
                            <td>' . $cost . '</td> 
                            <td>' . $weight . '</td> 
                            <td>' . $number . '</td> 
                        </tr>';
                $cnt++;
            }

            $result->free();
        }
        ?>
    </table>

</body>

</html>