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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex - AboutUs</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="images/cryptologo.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <style>
    select {
  padding: 12px 16px;
  font-size: 16px;
  background-color: #fff;
  color: black;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
  </style>
</head>

<body>

  <header class="header" data-header>
    <div class="container">
      <a href="mainpage.php" class="logo">
        <img src="images/cryptologo.png" width="32" height="32" alt="Cryptex logo">
        Cryptex
      </a>
      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="mainpage.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="market.html" class="navbar-link" data-nav-link>Market Updates</a>
          </li>

          <li class="navbar-item">
            <a href="trending.html" class="navbar-link" data-nav-link>Trending Coins</a>
          </li>

          <li class="navbar-item">
            <a href="converter.html" class="navbar-link" data-nav-link>Converter</a>
          </li>
          <li class="navbar-item">
            <a href="markettrend.html" class="navbar-link" data-nav-link>Market Trend</a>
          </li>

          <li class="navbar-item">
            <a href="game.html" class="navbar-link" data-nav-link>Games</a>
          </li>

          <li class="navbar-item">
            <a href="search.html" class="navbar-link" data-nav-link>Search</a>
          </li>

          <li class="navbar-item">
            <a href="aboutus.html" class="navbar-link" data-nav-link>About us</a>
          </li>

          <li class="navbar-item">
            <a href="logout.php" class="navbar-link" data-nav-link>Logout</a>
          </li>
        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>
      <a href="profile.php" class="btn"><i style='font-size:30px; color:#ffcc32' class='fas'>&#xf2bd;</i></a>
    </div>
  </header>

  <main>
    <article>

      <section class="section market" aria-label="market update" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Profile</h2> 
            
          </div>
          
          <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $connect = mysqli_connect($host, $user, $password, "crypto");
            
            // Get the ID of the current user
            $query = "SELECT cid FROM current";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);
            $user_id = $row['cid'];
            
            // Use the ID to fetch the name and email of the user
            $query = "SELECT name, email, phone FROM register WHERE id='$user_id'";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);
            
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            
            mysqli_close($connect);
        ?>
          <div class="market-tab">
            <table class="market-table">
              <thead class="table-head">
              </thead>
                </tr>
                <tr class="table-row">
                  
                  <td class="table-data">
                    <p>Name: <?php echo $name; ?></p>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="table-data">
                  <p>Email: <?php echo $email; ?></p>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="table-data">
                  <p>Mobile number: <?php echo $phone; ?></p>
                  <br>

                  </td>
                  
                </tr>
                <tr class="table-row">
                  
                  <td class="table-data">
                  <button><a href="edit.php" style='color:red'>Edit Information</a></button>
                  <br>
                  <div id="map"></div>
                  
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
                  </td>
                </tr>
                <tr class="table-row">
                  <td class="table-data">
                    
                  </td>
                </tr>
                
                <tr class="table-row">
                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                    </button>
                  </td>
                </tr>
                
              </tbody>
              
            </table>
            
          </div>
        </div>

      </section>
      
      </div>
    </div>
  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
   <script src="map.js"> </script>
   <script>getCoordinates();</script>

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