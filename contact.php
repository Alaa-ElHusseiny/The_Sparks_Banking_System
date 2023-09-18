<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css?v=<?php echo time(); ?>">
    
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
        </script>
        <script type="text/javascript">
        (function(){
            emailjs.init("OQapHu3k5bn-LKNq0");
        })();
    </script>
    <title>Sparks Bank</title>

</head>
<body>
<script src="js/contact.js"></script>
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
        <div class="contact"></div>
        <form onSubmit={sendMail} class="form">
         <h3>GET IN TOUCH</h3>
         <input type="text" id="name" name="name" placeholder="Your Name" required>
         <input type="email" id="email" name="email" placeholder="Your Email address" required>
         <input type="text" id="phone" name="phone" placeholder="Phone no." required>
         <textarea id="message" class="message" name="message" rows="4" placeholder="How can I help you?"></textarea>
         <button onclick="sendMail()" class="submit" name="submit" type="submit">Send</button>
        </form>

    </main>
    <footer>
        &copy; <em id="date"></em>copyright 2023, ALAA ELHUSSEINY
    </footer>
        
</body>
</html>