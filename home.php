<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma Web de cursos">
    <title>Us Coders | home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarala&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        color:  rgb(61, 3, 61);
        font-family: 'sarala';

    }

    body{
        font-size: 100%;
        background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
    }

    .cabecalho{
        background-color: whitesmoke;
        align-items: center;
        display: flex;
        justify-content: space-around;
        flex-direction: row;
        padding:15px;
        position: center;
    }

    .cabecalho-imagem{
        height: 60px;
        border-radius: 9px;
    }

    .cabecalho-navegacao{
        display: flex;
        gap: 100px;
        font-weight: 75;
        font-size: 20px;
    }

    .conteudo-box{        
        background-color: whitesmoke;
        border-radius: 20px;
        position: absolute;
        padding: 10px;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
    }

    .rodape{
        background-color: whitesmoke;
        align-items: center;
        display: flex;
        justify-content: space-around;
        position: absolute;
        flex-direction: row;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        padding: 30px;
    }
    </style>
</head>
<body>
    <!--cabecalho do site-->
    <header class="cabecalho">
        <img class ="cabecalho-imagem" src="img/UsCodeLogo.png" alt="Logo da plataforma">
            <nav class="cabecalho-navegacao">
                <a class="navegacao-item" href="#cursos">Cursos</a>
                <a class="navegacao-item" href="#sobre">Sobre</a>
                <a class="navegacao-item" href="#contato">Contato</a>
                <!-- optei por fazer assim, foi mais fácil-->    
                <a class="navegacao-item" href="login.php">Login</a>
                <a class="navegacao-item" href="formCadastro.php">Cadastre-se</a>
            </nav>
    </header>
    <!-- conteudo principal do site (cursos e sobre)-->
    <main class="conteudo">
        <div class="conteudo-box">
            <!--cursos-->
            <section class="conteudo-cursos" id="cursos">
                <h2>Nossos Cursos</h2>
                Aqui ficará os "cursos" com slides do js (podemos usar o bootstap)
                Aqui ficará os "cursos" com slides do js (podemos usar o bootstap)
                Aqui ficará os "cursos" com slides do js (podemos usar o bootstap)
            </section>
            <br>
            <hr>
            <br>
            <!--sobre-->
            <section class="conteudo-sobre" id="sobre">
                <h2>Sobre nós</h2>
                Aqui vamos colocar o texto "sobre" a Us Coders  ex:
                A Us Coders foi fundada em 2022 com objtivo de... 
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objtivo de... 
                tipo isso aí kkk
            </section>
        </div>
    </main>
    <!--rodapé do site (parte do contato)-->
    <footer class="rodape" id="contato">
        <h2>Contate-nos</h2>
        <h3>Acrescentar depois (apena estética mesmo pro rodapé)</h3>
    </footer>
</body>
</html>