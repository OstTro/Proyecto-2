<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <input type="text" id="result" disabled>
        <div class="buttons">
            <button onclick="appendNumber(1)">1</button>
            <button onclick="appendNumber(2)">2</button>
            <button onclick="appendNumber(3)">3</button>
            <button onclick="appendNumber(4)">4</button>
            <button onclick="appendNumber(5)">5</button>
            <button onclick="appendNumber(6)">6</button>
            <button onclick="appendNumber(7)">7</button>
            <button onclick="appendNumber(8)">8</button>
            <button onclick="appendNumber(9)">9</button>
            <button onclick="appendNumber(0)">0</button>
            <button onclick="clearResult()">C</button>
            <button onclick="calculateResult()">=</button>
            <button onclick="appendOperator('-')">-</button>
            <button onclick="appendOperator('*')">*</button>
            <button onclick="appendOperator('+')">+</button>
            <button onclick="appendOperator('/')">/</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
