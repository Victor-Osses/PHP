<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET</title>
</head>
<body>
    <!-- Action: script que receberá os dados -->
    <!-- POST: Os dados serão enviados de forma "invisível" -->
    <h3>POST</h3>
    <form action="dados.php" method="POST">
        <!-- Os dados serão coletados do input por meio do atributo name -->
        Nome: <input type="text" name="nome">
        Email: <input type="email" name="email">
        <!-- <input type="submit" name="Enviar"> -->
        <button type="submit">Enviar</button>
    </form>
    <br>
    <h3>GET</h3>
    <!-- GET: Envia os dados por meio da URL -->
    <!-- dados.php?nome=Victor&email=victor@gmail.com&cidade=Limeira -->
    <form action="dados.php" method="GET">
        <!-- Os dados serão coletados do input por meio do atributo name -->
        Nome: <input type="text" name="nome">
        Email: <input type="email" name="email">
        <!-- <input type="submit" name="Enviar"> -->
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="dados.php?nome=Maria&idade=19&altura=1.65">GET via link: dados.php?nome=Maria&idade=19&altura=1.65</a>
</body>
</html>