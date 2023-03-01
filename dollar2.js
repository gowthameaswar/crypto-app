var cryptoData = [
    { id: "btc", name: "bitcoin" },
    { id: "eth", name: "ethereum" },
    { id: "tet", name: "tether" },
    { id: "bnb", name: "binancecoin" },
    { id: "sol", name: "solana" },
    { id: "xrp", name: "ripple" },
    { id: "car", name: "cardano" },
    { id: "doge", name: "dogecoin" }
  ];
  
  var settings = {
    async: true,
    crossDomain: true,
    url: "https://api.coingecko.com/api/v3/simple/price?ids=" +
      cryptoData.map(c => c.name).join("%2C") +
      "&vs_currencies=usd&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true&include_last_updated_at=true&precision=4",
    method: "GET",
    headers: {}
  };
  
  $.ajax(settings).done(function(response) {
    cryptoData.forEach(function(c) {
      document.getElementById(c.id + "p").innerHTML = response[c.name].usd;
      document.getElementById(c.id + "m").innerHTML = response[c.name].usd_market_cap;
      document.getElementById(c.id + "c").innerHTML = response[c.name].usd_24h_change;
      
      var date = new Date(response[c.name].last_updated_at * 1000);
      var formattedDate =
        (date.getMonth() + 1).toString().padStart(2, "0") +
        "/" +
        date.getDate().toString().padStart(2, "0") +
        "/" +
        date.getFullYear() +
        " " +
        date.toLocaleTimeString();
      document.getElementById(c.id + "l").innerHTML = formattedDate;
    });
  });
