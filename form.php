<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333333;
        }
        p {
            font-size: 18px;
            color: #555555;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultado da Conversão</h1>
        <?php
        if (isset($_GET['celsius'])) {
           
            $celsius = floatval($_GET['celsius']);
            
           
            $fahrenheit = ($celsius * 9 / 5) + 32;
            
           
            echo "<p>A temperatura em Celsius é: " . htmlspecialchars($celsius) . "°C</p>";
            echo "<p>A temperatura convertida para Fahrenheit é: " . htmlspecialchars($fahrenheit) . "°F</p>";
        } else {
            echo "<p>Por favor, forneça uma temperatura em Celsius no formulário.</p>";
        }
        ?>
    
    </div>
</body>
</html>
