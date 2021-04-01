<html>
    <head>
        <title>Datetime Processing</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <table>
                <tr>Enter your name and select date and time for appoinment</tr>
                <tr>
                    <td>Your name: </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td>
                        <select name="date">
                            <?php
                                for($i=1; $i<=31; $i++){
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                        <select name="month">
                            <?php
                                for($i=1; $i<=12; $i++){
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                        <select name="year">
                            <?php
                                for($i=1700; $i<=2100; $i++){
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td>
                        <select name="hour">
                            <?php
                                for($i=0; $i<=23; $i++){
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                        <select name="minute">
                            <?php
                                for($i=0; $i<=59; $i++){
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                        <select name="second">
                            <?php
                                for($i=0; $i<=59; $i++){
                                    print "<option>$i</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right" ><INPUT TYPE="SUBMIT" VALUE="Submit"></td>
                    <td align="left"><INPUT TYPE="RESET" VALUE="Reset"></td>
                </tr>   
            </table>
            <table>
                <?php
                    if(array_key_exists("name", $_GET)){
                        $name = $_GET['name'];
                        $date = $_GET['date'];
                        $month = $_GET['month'];
                        $year = $_GET['year'];
                        $hour = $_GET['hour'];
                        $minute = $_GET['minute'];
                        $second = $_GET['second'];
                        
                        print "<br>Hi $name!";
                        print "<br>You have choose to have an appointment on $hour:$minute:$second $date/$month/$year";
                        print "<br><br>More information";
                        $hour %= 12;
                        print "<br><br>In 12 hours, the time and date is $hour:$minute:$second $date/$month/$year";
                        $days;
                        if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
                            $days = 31;
                        }elseif ($month != 2) {
                            $days = 30;
                        }else {
                            $days = 28;
                            if($year % 4 == 0){
                                if($year % 100 != 0){
                                    $days = 29;
                                }else {
                                    if($year % 400 == 0){
                                        $days = 29;
                                    }
                                }
                            }
                        }
                        print "<br>This month has $days!";
                    }
                ?>
            </table>        
        </form>
    </body>
</html>