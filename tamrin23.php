<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include 'tamrin 2.php'?>
        <div class="row">
            <div class="col-md-3" style="background: salmon"><?php echo " Name : " .  $name ;?></div><br/>
            <div class="col-md-3" style="background: cornflowerblue"><?php echo " Website : " .  $website ;?></div><br/>
            <div class="col-md-3" style="background: lightgreen"><?php echo " Gender : " .  $gender;?></div>
        </div>
    </body>
</html>