var btc=document.getElementById("bitcoin");
var eth=document.getElementById("ethereum");
var doge=document.getElementById("dog");
var settings = {
    "async":true,
    "scrossDomain":true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Ctether%2Cbinancecoin%2Csolana%2Cdogecoin%2Cripple%2Ccardano&vs_currencies=inr&include_market_cap=true&include_24hr_change=true&precision=4",
    "method":"GET",
    "headers":{}
}
$.ajax(settings).done(function(response){
    btc.innerHTML = response.bitcoin.inr;
    eth.innerHTML = response.ethereum.inr;
    doge.innerHTML = response.dogecoin.inr;
})