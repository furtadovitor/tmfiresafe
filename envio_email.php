<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];
  
  ?>
  <meta charset="UTF-8" />
  <title>Mensagem de Contato</title>
  <style>
    body {
      background-color: #121212;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #eee;
      padding: 30px;
    }

    .email-box {
      max-width: 600px;
      margin: auto;
      background: #1e1e1e;
      border-left: 6px solid #ff0000;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(255, 0, 0, 0.2);
    }

    h2 {
      color: #ff0000;
      margin-bottom: 20px;
      font-size: 1.5rem;
      border-bottom: 1px solid #333;
      padding-bottom: 10px;
    }

    p {
      margin: 15px 0;
      line-height: 1.6;
      color: #ccc;
    }

    span.label {
      font-weight: bold;
      color: #fff;
      display: inline-block;
      width: 120px;
    }

    .mensagem {
      background-color: #2c2c2c;
      padding: 15px;
      border-radius: 8px;
      border: 1px solid #444;
      color: #ddd;
      white-space: pre-line;
    }
  </style>
</head>

<body>
  <div class="email-box">
    <h2>Nova Mensagem de Contato - TM FIRESAFE</h2>

    <p><span class="label">Nome:</span> <?= htmlspecialchars($nome) ?></p>
    <p><span class="label">Email:</span> <?= htmlspecialchars($email) ?></p>
    <p><span class="label">Telefone:</span> <?= htmlspecialchars($telefone) ?></p>

    <p><span class="label">Mensagem:</span></p>
    <div class="mensagem"><?= nl2br(htmlspecialchars($mensagem)) ?></div>
  </div>
</body>

</html>