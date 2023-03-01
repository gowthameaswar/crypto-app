
var name = document.getElementById("name");
var phone = document.getElementById("phone");
var email = document.getElementById("email");
var password = document.getElementById("password")
$.ajax({
    type: "POST",
    url: "signupchk.php",
    data: {
      name: "$pname",
      phone: "$phone",
      email: "$email",
      password: "$password"
    },
    success: function(response) {
      
      console.log(response);
    },
    error: function(error) {
      console.log("Signup failed: " + error);
    }
  });
  