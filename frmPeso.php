<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo do Peso Ideal</title>
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
        <h1>Resultado do Cálculo do Peso Ideal</h1>
        <?php
        if (isset($_GET['sexo']) && isset($_GET['altura'])) {
            $sexo = $_GET['sexo'];
            $altura = floatval($_GET['altura']);
            
           
            if ($sexo == "masculino") {
                $peso_ideal = 22 * ($altura * $altura);
            } else {
                $peso_ideal = 21 * ($altura * $altura);
            }
            
           
            echo "<p>Sexo: " . htmlspecialchars($sexo) . "</p>";
            echo "<p>Altura: " . htmlspecialchars($altura) . " metros</p>";
            echo "<p>O peso ideal é: " . htmlspecialchars($peso_ideal) . " kg</p>";
        } else {
            echo "<p>Por favor, forneça o sexo e a altura no formulário.</p>";
        }
        ?>
        
    </div>
</body>
</html>
