<!DOCTYPE html>
<head>
<style>
.alx_input, .alx_select {
  padding: 8px;
  margin: 5px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.alx_input:focus, .alx_select:focus {
  outline: none;
  border-color: #4A90E2;
  box-shadow: 0 0 8px 0 rgba(74,144,226,0.5);
}

.alx_button {
  padding: 10px 20px;
  margin-top: 10px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: white;
  text-transform: uppercase;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.alx_button:hover {
  background-color: #0056b3;
}

</style>
</head>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["alx_number1"];
    $num2 = $_POST["alx_number2"];
    $operation = $_POST["alx_operation"];
    $result = 0;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Divisão por zero não é permitida ☺ .";
            }
            break;
    }
    echo "Resultado: $result";
}
?>
<form method="post">
    Número 1: <input type="number" name="alx_number1" class="alx_input" required><br>
    Número 2: <input type="number" name="alx_number2" class="alx_input" required><br>
    Operação: 
    <select name="alx_operation" class="alx_select">
        <option value="add">Adição</option>
        <option value="subtract">Subtração</option>
        <option value="multiply">Multiplicação</option>
        <option value="divide">Divisão</option>
    </select>
    <br>
    <input type="submit" value="Calcular" class="alx_button">
</form>
