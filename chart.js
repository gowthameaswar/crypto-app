const cryptoSelect = document.getElementById("cryptoSelect");
const currencySelect = document.getElementById("currencySelect");
const daysSelect = document.getElementById("daysSelect");



function updateChart() {
const selectedCrypto = cryptoSelect.value;
const selectedCurrency = currencySelect.value;
const selectedDays = daysSelect.value;


const API_URL = `https://api.coingecko.com/api/v3/coins/${selectedCrypto}/market_chart?vs_currency=${selectedCurrency}&days=${selectedDays}`;

fetch(API_URL)
    .then(response => response.json())
    .then(data => {
    const labels = data.prices.map(price => price[0]);
    const values = data.prices.map(price => price[1]);
    

    Plotly.newPlot("myChart", [{
        type: "line",
        x: labels,
        y: values,
        name: `${selectedCrypto} price in ${selectedCurrency.toUpperCase()}`
    }], {
        xaxis: {
        title: "UNIX Timestamp"
        },
        yaxis: {
        title: "Value of Coin"
        }
    });
    });
}

cryptoSelect.addEventListener("change", updateChart);
currencySelect.addEventListener("change", updateChart);
daysSelect.addEventListener("change", updateChart);


updateChart();
