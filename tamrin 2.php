<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    $nameErr = $numErr = $genderErr = $websiteErr = "";
    $name = $num = $gender  = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["num"])) {
            $emailErr = "Email is required";
        } else {
            $num = test_input($_POST["num"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        return $data;
    }
    ?>
        <div class="container">
            <form method="post" action="tamrin23.php">
                <div class="row-cols-1">
                    <label for="name">First & Last Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter first name" id="name">
    <!--                <span class="error">* --><?php //echo $nameErr;?><!--</span>-->
                </div>
                <div class="row-cols-1">
                    <label for="email">Website:</label>
                    <input type="text" name="website" class="form-control" placeholder="Enter Website" id="email">
    <!--                <span class="error">--><?php //echo $websiteErr;?><!--</span>-->
                </div>
                <div class="row-cols-1">
                    <label for="num">Number:</label>
                    <input type="text" name="num" class="form-control" placeholder="Enter number" id="num">
    <!--                <span class="error">* --><?php //echo $numErr;?><!--</span>-->
                </div>
                <div class="row-cols-1">
                    <label for="Gender">Gender:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input"  <?php if (isset ($gender) && $gender=="female") echo "checked";?> value="female">Fmale
                        </label>
                    </div>
                    <div class="form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input"  <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
                        </label>
                    </div>
                </div><br />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </body>
</html>




commit -m "initial"