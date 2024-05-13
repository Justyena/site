


<?php 

require_once('db.php');

$title =  $_POST['title_id'];
$desc =  $_POST['desc'];

if (empty($title) || empty($desc)) {
    echo "Заполните все поля";
} else {
        $sql = "INSERT INTO `workspaces` (title_id, description) VALUES ('$title', '$desc')";
        if($conn -> query($sql) === TRUE) {
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- <div class="main">
        <div class="main-container">
            <div class="main-header">
                <div class="header-text">Select Month</div>
                <div class="icon-container">
                    <div class="header-icon">&#9660;</div>
                </div>
            </div>
            <div class="main-content">
                <div class="content-header">
                    <h3>Token</h3>
                    <div class="header-nav">
                        <p class="nav-item">Price</p>
                    </div>
                </div>
                <div class="content">
                    <h3><?php echo $name?></h3>
                    <div class="header-nav"> -->
                        <!-- <p class="nav-item"><?php echo $price?> &#36;</p>
                    </div>
                </div> -->
                <!-- <div class="main-content-container">
                    <div class="content-text">
                        <div class="content-text-container">
                            <div class="container-1">
                                <h4 class="content-text-header">development token</h4>
                                <p class="price-item">&#36; 0.24</p>
                            </div>
                            
                        </div>
                    </div> -->
                    <!-- <div class="content-price">
                        <div class="content-price-container">
                            <div class="price-content">
                                <div class="price-list">
                                    <p class="price-item">&#36; 0.24</p>
                                </div>
                            </div> 
                            </div>
                        </div>
                    </div> -->
                <!-- </div> <br>
                <div class="main-footer">
                    <div class="footer-text"><b>Total</b></div>
                    <div class="footer-price"><b><?php echo $price?> &#36;</b></div> -->
                <!-- </div>
            </div>
            
        </div>
    </div> -->
</body>
</html>
        <?php
    }
        else {
            echo "Error :" . $conn -> error ;
        }
    };