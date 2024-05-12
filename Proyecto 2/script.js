let currentNumber = '';
let currentOperator = '';
let result = '';

function appendNumber(number) {
    currentNumber += number;
    document.getElementById('result').value = currentNumber;
}

function appendOperator(operator) {
    if (currentNumber !== '') {
        currentOperator = operator;
        result += currentNumber + ' ' + currentOperator + ' ';
        currentNumber = '';
        document.getElementById('result').value = '';
    }
}

function clearResult() {
    currentNumber = '';
    currentOperator = '';
    result = '';
    document.getElementById('result').value = '';
}

function calculateResult() {
    if (currentNumber !== '') {
        result += currentNumber;
        document.getElementById('result').value = eval(result);
        currentNumber = eval(result);
        result = '';
    }
}
