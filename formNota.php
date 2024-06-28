<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
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
        <h1>Resultado da Média</h1>
        <?php
        if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])) {
            $nota1 = floatval($_GET['nota1']);
            $nota2 = floatval($_GET['nota2']);
            $nota3 = floatval($_GET['nota3']);
            
           
            $media = ($nota1 + $nota2 + $nota3) / 3;
            
           
            if ($media >= 7) {
                $mensagem = "APROVADO";
            } else {
                $mensagem = "REPROVADO";
            }
            
            
            echo "<p>Média: " . number_format($media, 2) . "</p>";
            echo "<p>Status: " . htmlspecialchars($mensagem) . "</p>";
        } else {
            echo "<p>Por favor, forneça as três notas no formulário.</p>";
        }
        ?>
        
    </div>
</body>
</html>
