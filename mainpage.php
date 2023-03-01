<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "crypto");

// Check the number of rows in the temporary table
$result = mysqli_query($conn, "SELECT COUNT(*) FROM current");
$count = mysqli_fetch_array($result)[0];

if ($count > 0) {
    // Render the main page
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cryptex</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="images/cryptologo.png"/>
        <script>
            // Check if the user has already accepted the use of cookies
        if (!localStorage.getItem("cookieConsent")) {
            // Create a popup or banner to ask the user for consent
            // This could be done using HTML and CSS, or a library like Bootstrap or jQuery
            var consent = confirm("This website uses cookies to improve your experience. Click OK to accept or Cancel to decline.");
            if (consent) {
                // If the user accepts, set a local storage item to remember their choice
                localStorage.setItem("cookieConsent", true);
            } else {
                // If the user declines, redirect them to a page that explains the use of cookies and how to disable them
                window.location.href = "cookies_disabled.html";
            }
        }
        </script>

        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
         <div class="container">
            
            <nav>
                <a href="mainpage.php"><img src="images/cryptologo.png" class="logo"></a>
                <ul>
                    <li><a href="market.html">Market Updates</a></li>
                    <li><a href="trending.html">Trending Coins</a></li>
                    <li><a href="converter.html">Converter</a></li>
                    <li><a href="markettrend.html">Market Trend</a></li>
                    <li><a href="game.html">Games</a></li>
                    <li><a href="search.html">Search</a></li>
                    <li><a href="aboutus.html">About us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                
                
                <a class="btn"><i style='font-size:15px' class='fas'>&#xf3c5;</i>&nbsp;<span id="loc"></span></a>
                &nbsp;
                <a href="dollarmain.html" class="btn">$</a>
                
                <a href="profile.php" class="btn1"><i style='font-size:25px; color:#ffcc32' class='fas'>&#xf2bd;</i></a>

            </nav>
            <div class="content">
                <h1>Cryptocurrencies <br> Live <span>Updates </span></h1>
                <a href="learn.html" class="btn">Learn more about Crypto</a>
                
    
            </div>

            <div class="coin-list">
                <div class="coin">
                    <img src="images/bitcoin.png" alt="btc">
                    <div>
                        <h3>&#8377;<span id="bitcoin"></span></h3>
                        <p>Bitcoin</p>
                    </div>
                </div>
                <div class="coin">
                    <img src="images/ethereum.png" alt="eth">
                    <div>
                        <h3>&#8377;<span id="ethereum"></span></h3>
                        <p>Ethereum</p>
                    </div>
                </div>
                <div class="coin">
                    <img src="images/dogecoin.png" alt="doge">
                    <div>
                        <h3>&#8377;<span id="dog"></span></h3>
                        <p>Dogecoin</p>
                    </div>
                </div>

            </div>
         </div>
         <script src="rupee1.js"> </script>
         <script src="location.js"> </script>
    </body>
</html>
<?php
} else {
    // Redirect to the login page
    echo "<script>alert('Please Login!');window.location.href='login.php';</script>";
    exit;
}

// Close the database connection
mysqli_close($conn);
?>