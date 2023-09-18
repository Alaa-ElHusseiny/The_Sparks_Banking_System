<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/transactions.css?v=<?php echo time(); ?>">
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
    <table class="table">
        <thead class="thesd ">
            <tr>
            <th scope="col" class="id">No</th>
            <th scope="col" class="acc">Sender</th>
            <th scope="col" class="name">Reciever</th>
            <th scope="col" class="email">Amount</th>
            <th scope="col" class="mobile">Date</th>
            </tr>
        </thead>
        <tbody class="table-body">
        <?php
            include('config.php');
            $result=mysqli_query($con, "SELECT * FROM transaction");
            while($row = mysqli_fetch_array($result)){
                echo "
                <tr >
                <th scope='row'>$row[No]</th>
                <td>$row[Sender]</td>
                <td>$row[Receiver]</td>
                <td>$row[Amount]</td>
                <td>$row[Date]</td>
                </tr>
                ";
            }
        ?>
        </tbody>
        </table>
    </main>
</body>
</html>