<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main-theme.css">
    <script type="text/javascript" src="scripts/scripts.js"></script>
    <script src="scripts/sweetalert2.all.min.js"></script>
    <link rel="shortcut icon" type="image-x/icon" href="images/icon10.png">

    <title>Executive Lounge</title>
</head>

<body id="loadNewDoc">
    <?php
       include 'connectDB.php';
      $sql = mysqli_query($conn,"SELECT * FROM `state_executives`");
      while($row = mysqli_fetch_array($sql)){
        $name[] = $row['Name'];
        $office[] = $row['Office'];
        $adminType = $row['Administration Type'];
      }
    ?>

        <div class="banner">
            <img id="nccf-logo" src="images/nccf-logo.png" alt="nccf-logo">
            <hr />
        </div>
    
        <div class="main-grid-container">
                <div class="left-pan">
                        <p>
                            Logged in as:<br />#admin name
                        </p>
                        <div id="avartar">
                            <img src="profileImg/Img.jpg" alt="admin img">
                        </div>
                        <ul>
                            <a href="index.html" ><li>Home</li></a>
                            <a href="editprofile.php"><li>View/Edit Profile</li></a>
                            <a href=""><li>Log out</li></a>
                        </ul>
                    </div>
    
                    <div class="rite-pan">
                        <div class="executive-louge-container">
                            <h3>Welcome to Executive NCCF Lounge</h3>
                                <p>
                                    <b>Current Administration:</b> <?php echo $adminType."."; ?>
                                </p>
                                <nav class="left"> 
                                    <p>
                                        Name: <?php echo $name[0];?><br />
                                        Office: <?php echo $office[0];?>
                                    </p>   
                                </nav>
                                    <nav class="right"> 
                                        <p>
                                        Name: <?php echo $name[1];?><br />
                                        Office: <?php echo $office[1];?>
                                        </p>   
                                    </nav>
                                <nav class="left"> 
                                    <p>
                                        Name: <?php echo $name[2];?><br />
                                        Office: <?php echo $office[2];?>
                                    </p>   
                                </nav>
                                    <nav class="right"> 
                                        <p>
                                            Name: <?php echo $name[3];?><br />
                                            Office: <?php echo $office[3];?>
                                        </p>   
                                    </nav>
                                <nav class="left"> 
                                    <p>
                                        Name: <?php echo $name[4];?><br />
                                        Office: <?php echo $office[4];?>
                                    </p>   
                                </nav>
                                    <nav class="right"> 
                                        <p>
                                            Name: <?php echo $name[5];?><br />
                                            Office: <?php echo $office[5];?>
                                        </p>   
                                    </nav>
                                <nav class="left"> 
                                    <p>
                                        Name: <?php echo $name[6];?><br />
                                        Office: <?php echo $office[6];?>
                                    </p>   
                                </nav>
                                    <nav class="right"> 
                                        <p>
                                            Name: <?php echo $name[7];?><br />
                                            Office: <?php echo $office[7];?>
                                        </p>   
                                    </nav>
                                <nav class="left"> 
                                    <p>
                                        Name: <?php echo $name[8];?><br />
                                        Office: <?php echo $office[8];?>
                                    </p>   
                                </nav>
                                    <nav class="right"> 
                                        <p>
                                            Name: <?php echo $name[9];?><br />
                                            Office: <?php echo $office[9];?>
                                        </p>   
                                    </nav>
                                <nav class="left"> 
                                    <p>
                                        Name: <?php echo $name[10];?><br />
                                        Office: <?php echo $office[10];?>
                                    </p>   
                                </nav>
                                    <nav class="right"> 
                                        <p>
                                            Name: <?php echo $name[11];?><br />
                                            Office: <?php echo $office[11];?>
                                        </p>   
                                    </nav>
                                <nav class="left"> 
                                    <p>
                                        Name: <?php echo $name[12];?><br />
                                        Office: <?php echo $office[12];?>
                                    </p>   
                                </nav>
                                <nav class="right"> 
                                    <input type="button" value="EDIT" onclick="confirmEdit()"> 
                                </nav>                    
                                

                        </div>
                    </div>    

        </div>

</body>
</html>