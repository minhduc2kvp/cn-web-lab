<html>
    <head>
        <title>2.9 Exercise Receive Input</title>
    </head>
    <body>
        <font size=5>Thank you: Got Your Output</font>
        <?php
            $name = $_POST["name"];
            $class = $_POST["class"];
            $university = $_POST["university"];
            $hobby = $_POST["hobby"];
            $gender = $_POST["gender"];
            $birthday = $_POST["birthday"];
            $hobbies = "";
            foreach($hobby as $value){
                $hobbies .= "<li>$value</li>";
            }
            echo "<p>
                    Hello, $name
                    <br>You are studying at $class, $university
                    <br>You are $gender, You was born in $birthday
                    <br>You are hobby:
                    <ol>$hobbies</ol>
                </p>";
        ?>
    </body>
</html>