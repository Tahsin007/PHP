const convertBtn = document.getElementById('convert-btn');
convertBtn.addEventListener('click', convertTemperature);

function convertTemperature() {
    console.log("Hello");
    const tempInput = document.getElementById('temp-input').value;
    const resultDiv = document.getElementById('result');

    var celsiusFrom = document.getElementById("celsius1");
    var fahrenheitFrom = document.getElementById("fahrenheit1");
    var kelvinFrom = document.getElementById("kelvin1");

    var celsiusTo = document.getElementById("celsius2");
    var fahrenheitTo = document.getElementById("fahrenheit2");
    var kelvinTo = document.getElementById("kelvin2");
    
    if(celsiusFrom.checked && fahrenheitTo.checked){
        
        var x = (tempInput * (9 / 5)) + 32;
        resultDiv.innerHTML = x;
        console.log(tempInput);
    } else if (celsiusFrom.checked && kelvinTo.checked) {
        var x = parseFloat(tempInput) + 273.15;
        console.log(tempInput);
        resultDiv.innerHTML = x;

    } else if (fahrenheitFrom.checked && celsiusTo.checked) {
        var x = (tempInput - 32) * 5 / 9
        resultDiv.innerHTML = x;

    } else if (fahrenheitFrom.checked && kelvinTo.checked) {
        var x = (tempInput + 459.67) * 5 / 9
        resultDiv.innerHTML = x;

    } else if (kelvinFrom.checked && celsiusTo.checked) {
        var x = tempInput - 273.15
        resultDiv.innerHTML = x;

    }
    else if (kelvinFrom.checked && fahrenheitTo.checked) {
        var x = (tempInput * 9 / 5) - 459.67
        resultDiv.innerHTML = x;

    }


}
