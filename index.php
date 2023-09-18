<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Sparks Bank</title>
</head>
<body>
    <header>
        <nav>
            <a href="https://www.thesparksfoundationsingapore.org/"><img src="images/logo.png" alt="TSF" class="logo"></a>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About me</a>
                </li>
                <li>
                    <a href="customers.php">view customers</a>
                </li>
                <li>
                    <a href="transactions.php">Transactions</a>
                </li>
                <li>
                    <a href="contact.php">contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <img src="images/background.png" class=" bg"/>
        <img src="images/arrow1.png" data-speedx="0.02" data-speedy="0.05" class="arrow"/>
        <img src="images/cube.png" data-speedx="0.02" data-speedy="0.02" class="parallax cube1"/>
        <img src="images/cube.png" data-speedx="0.02" data-speedy="0.02" class="parallax cube2"/>
        <img src="images/cube3.png" data-speedx="0.02" data-speedy="0.02" class="parallax cube3"/>
        <img src="images/cube3.png" data-speedx="0.02" data-speedy="0.02" class="parallax cube4"/>
        <img src="images/cube5.png" data-speedx="0.08" data-speedy="0.02" class="parallax cube5"/>
        <img src="images/cube5.png" data-speedx="0.03" data-speedy="0.03" class="parallax cube6"/>
        <img src="images/dollar.png" data-speedx="0.03" data-speedy="0.02" class="parallax dollar1"/>
        <img src="images/cube5.png" data-speedx="0.03" data-speedy="0.04" class="parallax cube9"/>
        <img src="images/dollar.png" data-speedx="0.04" data-speedy="0.04" class="parallax dollar"/>
        <h1 class="text">THE SPARKS BANK</h1>
        <h3 class="text2">This banking system supports safe transactions.</h3>
        <h3 class="text3">“Accountability – Privacy – Satisfaction”</h3>
    </main>
    <footer>
        &copy; <em id="date"></em>copyright 2023, ALAA ELHUSSEINY
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
<?php
    include('config.php');
    $update="UPDATE customer SET `S. No` = '9' WHERE `customer`.`S. No` = '17'";
    mysqli_query($con,$update);
    
?>
