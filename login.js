var email = document.getElementById("email");
var password = document.getElementById("password")
$.ajax({
    type: "POST",
    url: "loginchk.php",
    data: {
      email: "$email",
      password: "$password"
    },
    success: function(response) {
      console.log("Login successful!");
      console.log(response);
    },
    error: function(error) {
      console.log("Login failed: " + error);
    }
  });
  