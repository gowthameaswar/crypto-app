var btc=document.getElementById("bitcoin");
var eth=document.getElementById("ethereum");
var doge=document.getElementById("dog");
var settings = {
    "async":true,
    "scrossDomain":true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Ctether%2Cbinancecoin%2Csolana%2Cripple%2Ccardano%2Cdogecoin&vs_currencies=usd&include_market_cap=true&precision=4",
    "method":"GET",
    "headers":{}
}
$.ajax(settings).done(function(response){
    btc.innerHTML = response.bitcoin.usd;
    eth.innerHTML = response.ethereum.usd;
    doge.innerHTML = response.dogecoin.usd;
})