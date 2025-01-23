//variables
let numberInput = document.querySelector("#valueReal");
let selectedCurrency = document.getElementsByName("foreignCurrency");
let warning = document.querySelector("#warning");

//buttons
let convert = document.querySelector("#btnConvert");
let clear = document.querySelector("#btnClear");

// price quote 08/17/2024
let dolarValue = 5.47;
let poundsValue = 7.08;
let euroValue = 6.04;
let realValue = 0;

let foreignCurrency = "";
let currencyConverted = "";

//message
function message(currencyConverted) {
    isNaN(realValue) ? realValue = 0 : "";
    console.log("Currency " + currencyConverted);
    warning.textContent = "The value of " + (realValue).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }) + " converted in " + foreignCurrency + " is " + currencyConverted;
}

function block() {
    if (numberInput.value == 0 || numberInput == "" || numberInput == null || numberInput == NaN)
    {
        convert.setAttribute('disabled', 'disabled');
        convert.style.cursor = 'not-allowed';
    }
}

function activate() {
    if (numberInput.value > 0) {
        convert.removeAttribute('disabled');
        convert.style.cursor = 'pointer';
    }
    else
    {
        console.log('Not activated');
    }
}

convert.addEventListener('click', function () {
    realValue = parseFloat(numberInput.value);

    console.log('Choice a foreign currency');
    for (let i = 0; i < selectedCurrency.length; i++)
        {
            if(selectedCurrency[i].checked)
            {
                foreignCurrency = selectedCurrency[i].value;
                console.log(foreignCurrency + "moeda estrangeira");
            }
        }

    switch(foreignCurrency) {
        
        case 'Dolar':
            currencyConverted = realValue / dolarValue
            message(currencyConverted.toLocaleString('en-US', { style: 'currency', currency: 'USD' }))
        break;

        case 'Euro':
            currencyConverted = realValue / euroValue
            message(currencyConverted.toLocaleString('de-DE', { style: 'currency', currency: 'EUR' }))
        break;

        case 'Pounds':
            currencyConverted = realValue / poundsValue
            message(currencyConverted.toLocaleString('en-GB', { style: 'currency', currency: 'GBP' }))
        break;

        default:
            warning.textContent = 'Choice the currency';
    }   
    isNaN(currencyConverted) ? currencyConverted = 0 : '';
});

clear.addEventListener("click", function () {
    numberInput.focus();
    numberInput.value = "";
    warning.textContent = 'Digit a value, choice the currency then click to convert';
    selectedCurrency[0].checked = false;
    selectedCurrency[1].checked = false;
    selectedCurrency[2].checked = false;
    selectedCurrency[3].checked = false;
});
