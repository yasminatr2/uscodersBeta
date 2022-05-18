<?php
session_start();
//print_r($_SESSION);
//inicio de verificação do email e senha
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$useLogado = $_SESSION['email']; //email do usuário na sessão
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma Web de cursos">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Us Coders | Sessão Ativa </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarala&display=swap');
 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'sarala';
        }
 
        body {
            font-size: 100%;
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
            color: white;
        }
 
        .btnSair {
            position: absolute;
            left: 10px;
            top: 1px;
            color: black;
            background: whitesmoke;
            border-radius: 10px;
            text-decoration: none;
            padding: 10px;
            font-size: 20px;
            margin: 15px;
        }
 
        .btnSair:hover {
            opacity: 80%;
            color: black;
        }
 
        .txtBemVindo {
            text-align: center;
        }
 
        .btnViewCursos {
            color: dodgerblue;
            font-size: 20px;
            position: relative;
            text-decoration: none;
        }
 
        .btnViewCursos:hover {
            color: dodgerblue;
        }
 
        /*animação de hover no link para os cursos*/
        .btnViewCursos:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: dodgerblue;
            visibility: hidden;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }
 
        .btnViewCursos:hover:before {
            visibility: visible;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
        }
 
        /*fim da animação de hover*/
 
        .btnAcessar {
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
            border: 1px;
            border-radius: 10px;
            padding: 10px;
            color: whitesmoke;
            text-decoration: none;
        }
 
        .btnAcessar:hover {
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
            border: 1px;
            border-radius: 10px;
            padding: 10px;
            color: whitesmoke;
            opacity: 80%;
        }
 
        h5,
        .card-text {
            color: rgb(61, 3, 61);
        }
 
        .mostrardata,
        .mostrarhora {
            position: absolute;
            right: 10px;
            margin: 15px;
            font-size: 20px;
            color: black;
            background: whitesmoke;
            border-radius: 10px;
            text-decoration: none;
            padding: 10px;
        }
 
        .mostrarhora {
            top: 35px;
        }
        .row{
            margin-left:10px;
            margin-right: 10px;
           
        }
    </style>
</head>
 
<body>
 
    <!--botão de logout, data e hora-->
    <div>
        <a href="btnLogout.php" class="btnSair">Sair</a>
    </div>
 
    <div class="mostrardataehora">
        <div class="mostrardata" id="data"><br></div>
        <div class="mostrarhora" id="hora"></div>
    </div>
    <br><br><br><br><br><br>
 
    <!--títulos e link para os cursos-->
    <div class="txtBemVindo">
 
        <?php
        echo "<h1>Bem vindo, $useLogado</h1>";
        ?>
 
        <h3>Cursos atuais:</h3>
        <a href="ViewCursos.php" class="btnViewCursos">Confira outros cursos disponíveis!</a><br>
 
       
        <div class="row">
        <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Curso CSS</h5>
        <img src="img/imghtml.jpg" width="100%">
        <p class="card-text"></p>
        <a href="cursoHTML.php" class="btn btn-success ">Curso disponivel</a>
           
        <hr>
 

      </div>
    </div>
  </div> 
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Curso CSS</h5>
        <img src="img/imgcss.jpg" width="100%">
        <p class="card-text"></p>
        <a href="cursoHTML.php" class="btn btn-secondary disabled">Curso Indisponivel</a>
           
        <hr>
 

      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Curso JavaScript</h5>
        <img src="img/imgjava.jpg" width="100%">
        <p class="card-text"></p>
        <a href="cursoHTML.php" class="btn btn-secondary disabled ">Curso Indisponivel</a>

        <hr>

      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Curso PHP</h5>
        <img src="img/imgphp.jpg" width="100%">
        <p class="card-text"></p>
        <a href="cursoHTML.php" class="btn btn-secondary disabled">Curso Indisponivel</a>
        <hr>
     

      </div>
    </div>
  </div>

</div>

    
    </div>
 
    <!--puxar cards de cursos em que o usuário se matriculou?-->
 
    <script>
        //DATA E HORA
        setInterval(function() {
 
            let novaHora = new Date(); //obtém a hora atual
            let data = new Date(); //obtém a data atual
 
            let dia = data.getDate(); //getDate trará os dias do mês (1-31)
            let mes = data.getMonth(); //getMonth trará os meses de 0-11 (zero = janeiro)
            let ano = data.getFullYear(); //getfullYear trará o ano com 4 dígitos
            let hora = novaHora.getHours(); //getHours trará a hora
            let minuto = novaHora.getMinutes(); //geMinutes trará os minutos
            let segundo = novaHora.getSeconds(); //getSeconds trará os segundos
 
            mes = mes + 1; //acerta o mês corretamente, para se tornar 1-12 e não 0-11
 
            // A function zero concatena a string (número) 0 atrás de números
            // menores que 10. Exemplo: 21:5:1 passa a ser 21:05:01
            function zero(x) {
                if (x < 10) {
                    x = '0' + x;
                }
                return x;
            }
 
            //invocando a function zero onde é necessário
            dia = zero(dia);
            mes = zero(mes);
            hora = zero(hora);
            minuto = zero(minuto);
            segundo = zero(segundo);
 
            //Formatação de data e a hora
            document.getElementById('data').textContent = dia + '/' + mes + '/' + ano;
            document.getElementById('hora').textContent = hora + ':' + minuto + ':' + segundo;
        })
        //FIM DATA E HORA
    </script>
 
</body>
 
</html>
