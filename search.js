function getCoinData() {
    var coin = $("#coin-input").val();
    var currency = $("#currency-select").val();
    $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=" + coin + "&vs_currencies=" + currency + "&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true&include_last_updated_at=true&precision=4", function(data) {
      if (typeof data[coin][currency] !== "undefined") {
  $("#coin_name").html("Coin Name: " + coin.charAt(0).toUpperCase() + coin.slice(1));
  $("#market_cap").html("Market Cap: " + data[coin][currency + "_market_cap"]);
  $("#price").html("Price: " + data[coin][currency]+" "+[currency.toUpperCase()]);
  $("#volume").html("24hr Volume: " + data[coin][currency + "_24h_vol"]);
  $("#change").html("24hr Change: " + data[coin][currency + "_24h_change"] + "%");
  var last_updated = new Date(data[coin].last_updated_at * 1000);
  $("#last_updated").html("Last Updated: " + last_updated.toLocaleString());
} else {
  $("#error").html("Error: Currency not found");
}

    });
    $("#coin-input").val(""); // clear the input field
    return false; // prevent the form from submitting
  }
  
  $(document).ready(function() {
    $("#search-form").submit(getCoinData);
  });