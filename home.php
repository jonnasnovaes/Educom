<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style/home.css">
    </head>
    <body>
        <header>
            <nav>
                <img src="img/logo.png">
                <div class="divnav">
                    <form class="formnav" method="post" action="action_php/action_home.php">
                        <input type="submit" value="Sair" name="sair">
                    </form>
                </div>
            </nav>
        </header>
        <section>
            <form method="post" action="action_php/action_home.php">
                <button type="submit" name="novo" value="1">Novo Cadastro</button>
                <button type="submit" name="consultar" value="2">Consultar</button>
            </form>
        </section>
        <footer>
            <p>Create by Jhonnata Novaes</p>
        </footer>
    </body>
</html>