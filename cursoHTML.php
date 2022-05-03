<?php
session_start();
//inicio de verificação do email e senha
if ((!isset($_SESSION['email']) == true) and
    (!isset($_SESSION['senha']) == true)
) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Us Coders | Cursos</title>

    <style>
        .container-aba {
            background-image: linear-gradient(to right, rgb(65, 7, 100), rgb(9, 9, 150));
            width: 100vw;
            height: 10vh;
        }

        .container-aba2 {
            background-color: black;
            width: 100vw;
            height: 1vh;
        }

        h2 {
            text-align: center;
            color: rgb(65, 7, 100);
            font-weight: bolder;
        }

        h3 {
            text-align: center;
            color: black;
            font-weight: bolder;
        }

        h6 {
            text-align: center;
            color: white;
        }

        .card {
            align-items: center;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
            width: 95%;
        }

        .titulo {
            text-align: left;
            color: white;
        }

        .card-1 {
            background-image: linear-gradient(to right, rgb(65, 7, 100),
                    rgb(9, 9, 150));
            border-radius: 10px;
        }

        .rodape {
            background-image: linear-gradient(to right, rgb(65, 7, 100),
                    rgb(9, 9, 150));
            width: 100vw;
            height: 5vh;
            align-content: flex-end;
        }

        .p {
            font-weight: bolder;
        }

        .botaoNav,
        .botaoNav2,
        .botaoNav3,
        .botaoNav4,
        .botaoNav5,
        .botaoNav6 {
            display: flex;
            flex-direction: column;
        }

        .list,
        .list2,
        .list3,
        .list4,
        .list5,
        .list6 {
            width: 90%;
            text-align: center;
            margin-left: 75px;
        }

        .capUmVideo {
            display: flex;
            align-content: flex-end;
            padding: 10px;
            margin-right: 15px;
        }

        .capUmTexto {
            align-content: flex-end;
            padding: 10px;
            margin-left: 5px;
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
            border-radius: 5px;
            color: white;
        }

        .container-quest {
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
            border-radius: 5px;
            color: white;
            margin-right: 5%;
            margin-left: 2%;
        }

        .atividades {
            margin-left: 5%;
        }

        .atividadeTxt {
            text-align: center;
            color: white;
            margin: 20px;
        }

        p {
            font-size: 20px;
            text-align: justify;
        }

        #btn,
        #btn2,
        #btn3,
        #btn4,
        #btn5,
        #btn6 {
            width: 75%;
            position: relative;
            left: 150px;
            right: 50px;
            font-size: 20px;
            background: linear-gradient(68.15deg, rgb(61, 3, 150), rgb(9, 9, 126));
            color: white;
            border: none;
            border-radius: 10px;
            height: 65px;
            margin: 10px;
            font-weight: bolder;
            box-shadow: 3px 3px 3px gray;
        }

        #btn:hover,
        #btn2:hover,
        #btn3:hover,
        #btn4:hover,
        #btn5:hover,
        #btn6:hover {
            opacity: 90%;
        }

        .btnEnviar {
            margin-bottom: 20px;
            box-shadow: 1px 1px 1px black;
            font-size: 20px;
            background-color: whitesmoke;
            border-radius: 5px;
            border: none;
            color: black;
        }

        .btnEnviar:hover {
            opacity: 80%;
        }
    </style>
</head>

<div class="conteudo">
    <header class="topo">
        <!-- LOGO -->
        <img src="img/UsCodeLogo__1_-removebg-preview.png" style="left: 2%;
top:5px; position:absolute" width="10%">
        <div class="container-aba">
            <div class="container-aba">
                <div class="container-aba">
                    <div class="container-aba">
                        <div class="container-aba">
                        </div>
                        <div class="container-aba2"></div>
                        <a href="ViewCursos.php"><img src="img/imgvoltar.jpg" width="3%" style="margin-bottom:70px; margin-left: 20px;"></i></a>
                    </div>
    </header>

    <body>
        <br>
        <div class="botaoNav">
            <button id="btn">Capítulo 1</button>
            <ul id="list" class="list">
                <br>
                <h4>HTML - Capítulo 1</h4>
                <section class="capUmVideo">
                    <video width="520" height="440" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <br>
                    <div class="capUmTexto">
                        <br>
                        <p> O HTML5 é a nova versão do HTML4 e um dos seus
                            principais objetivos é facilitar a manipulação dos elementos,
                            possibilitando o desenvolvedor modificar as
                            características dos objetos de forma não intrusiva, fazendo com
                            que isso fique transparente para o usuário final.
                            Para se ter uma ideia disso, diferente das
                            versões anteriores, o HTML5 fornece ferramentas para o CSS e o
                            Javascript fazerem seu trabalho da melhor possível de
                            forma que um web site ou aplicação continue leve e
                            funcional.
                            Algumas tags foram modificadas, outras criadas e
                            algumas descontinuadas. As versões anteriores do HTML não
                            eram padronizadas para criação de seções comuns e
                            específicas como rodapé, cabeçalho, slidebar,
                            menus etc.</p>
                </section>
                <br>
            </ul>
        </div>

        <div class="botaoNav2">
            <button id="btn2">Capítulo 2</button>
            <ul id="list2" class="list2">
                <br>
                <h4>HTML - Capítulo 2</h4>
                <section class="capUmVideo">
                    <video width="520" height="440" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <br>
                    <div class="capUmTexto">
                        <p>
                        <p> O HTML5 é a nova versão do HTML4 e um dos seus
                            principais objetivos é facilitar a manipulação dos elementos,
                            possibilitando o desenvolvedor modificar as
                            características dos objetos de forma não intrusiva, fazendo com
                            que isso fique transparente para o usuário final.
                            Para se ter uma ideia disso, diferente das
                            versões anteriores, o HTML5 fornece ferramentas para o CSS e o
                            Javascript fazerem seu trabalho da melhor possível de
                            forma que um web site ou aplicação continue leve e
                            funcional.
                            Algumas tags foram modificadas, outras criadas e
                            algumas descontinuadas. As versões anteriores do HTML não
                            eram padronizadas para criação de seções comuns e
                            específicas como rodapé, cabeçalho, slidebar,
                            menus etc.</p>
                </section>
                <br>
            </ul>
        </div>

        <div class="botaoNav3">
            <button id="btn3">Capítulo 3</button>
            <ul id="list3" class="list3">
                <br>
                <h4>HTML - Capítulo 3</h4>
                <section class="capUmVideo">
                    <video width="520" height="440" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <br>
                    <div class="capUmTexto">
                        <p>
                        <p> O HTML5 é a nova versão do HTML4 e um dos seus
                            principais objetivos é facilitar a manipulação dos elementos,
                            possibilitando o desenvolvedor modificar as
                            características dos objetos de forma não intrusiva, fazendo com
                            que isso fique transparente para o usuário final.
                            Para se ter uma ideia disso, diferente das
                            versões anteriores, o HTML5 fornece ferramentas para o CSS e o
                            Javascript fazerem seu trabalho da melhor possível de
                            forma que um web site ou aplicação continue leve e
                            funcional.
                            Algumas tags foram modificadas, outras criadas e
                            algumas descontinuadas. As versões anteriores do HTML não
                            eram padronizadas para criação de seções comuns e
                            específicas como rodapé, cabeçalho, slidebar,
                            menus etc.</p>
                </section>
                <br>
            </ul>
        </div>

        <div class="botaoNav4">
            <button id="btn4">Capítulo 4</button>
            <ul id="list4" class="list4">
                <br>
                <h4>HTML - Capítulo 4</h4>
                <section class="capUmVideo">
                    <video width="520" height="440" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <br>
                    <div class="capUmTexto">
                        <p>
                        <p> O HTML5 é a nova versão do HTML4 e um dos seus
                            principais objetivos é facilitar a manipulação dos elementos,
                            possibilitando o desenvolvedor modificar as
                            características dos objetos de forma não intrusiva, fazendo com
                            que isso fique transparente para o usuário final.
                            Para se ter uma ideia disso, diferente das
                            versões anteriores, o HTML5 fornece ferramentas para o CSS e o
                            Javascript fazerem seu trabalho da melhor possível de
                            forma que um web site ou aplicação continue leve e
                            funcional.
                            Algumas tags foram modificadas, outras criadas e
                            algumas descontinuadas. As versões anteriores do HTML não
                            eram padronizadas para criação de seções comuns e
                            específicas como rodapé, cabeçalho, slidebar,
                            menus etc.</p>
                </section>
                <br>
            </ul>
        </div>

        <div class="botaoNav5">
            <button id="btn5">Capítulo 5</button>
            <ul id="list5" class="list5">
                <br>
                <h4>HTML - Capítulo 5</h4>
                <section class="capUmVideo">
                    <video width="520" height="440" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <br>
                    <div class="capUmTexto">
                        <p>
                        <p> O HTML5 é a nova versão do HTML4 e um dos seus
                            principais objetivos é facilitar a manipulação dos elementos,
                            possibilitando o desenvolvedor modificar as
                            características dos objetos de forma não intrusiva, fazendo com
                            que isso fique transparente para o usuário final.
                            Para se ter uma ideia disso, diferente das
                            versões anteriores, o HTML5 fornece ferramentas para o CSS e o
                            Javascript fazerem seu trabalho da melhor possível de
                            forma que um web site ou aplicação continue leve e
                            funcional.
                            Algumas tags foram modificadas, outras criadas e
                            algumas descontinuadas. As versões anteriores do HTML não
                            eram padronizadas para criação de seções comuns e
                            específicas como rodapé, cabeçalho, slidebar,
                            menus etc.</p>
                    </div>
                </section>
                <br>
            </ul>
        </div>

        <div class="botaoNav6">
            <button id="btn6">Atividades</button>
            <ul id="list6">
                <br>
                <div class="container-quest"><br>
                    <h3 class="atividadeTxt">Questionário</h3>
                    <section class="atividades">
                        <form name="formQuest" method="POST" action="ver_resultado.php">
                            <article>
                                <p> <label> 1-O HTML é uma linguagem de:</label> <br>
                                    <input type="radio" name="perg1" value="opcao1" /> a) Criação <br>
                                    <input type="radio" name="perg1" value="opcao2" /> b) Programação
                                    <br>
                                    <input type="radio" name="perg1" value="opcao3" /> c) Dados <br>
                                    <input type="radio" name="perg1" value="opcao4" /> d) Marcação <br>
                                </p>
                                <p> <label> 2- A codificação do CSS da página fica entre as
                                        tags:</label><br>
                                    <input type="radio" name="perg2" value="opcao1" /> a) body <br>
                                    <input type="radio" name="perg2" value="opcao2" /> b) head <br>
                                    <input type="radio" name="perg2" value="opcao3" /> c) style <br>
                                    <input type="radio" name="perg2" value="opcao4" /> d) title <br>
                                </p>
                                <p> <label>3- O maior nível de cabeçalho do HTML é:</label><br>
                                    <input type="radio" name="perg3" value="opcao1" /> a) h2 <br>
                                    <input type="radio" name="perg3" value="opcao2" /> b) h1 <br>
                                    <input type="radio" name="perg3" value="opcao3" /> c) h5 <br>
                                    <input type="radio" name="perg3" value="opcao4" /> d) h3 <br>
                                </p>
                                <p> <label>4- A tag para inserir imagens é denominada:</label><br>
                                    <input type="radio" name="perg4" value="opcao1" /> a) fig <br>
                                    <input type="radio" name="perg4" value="opcao2" /> b) img <br>
                                    <input type="radio" name="perg4" value="opcao3" /> c) figure <br>
                                    <input type="radio" name="perg4" value="opcao4" /> d) img src <br>
                                </p>
                                <p> <label>5- A tag de fechamento do HTML é:</label><br>
                                    <input type="radio" name="perg5" value="opcao1" /> a) ?html <br>
                                    <input type="radio" name="perg5" value="opcao2" /> b) !html <br>
                                    <input type="radio" name="perg5" value="opcao3" /> c) /html <br>
                                    <input type="radio" name="perg5" value="opcao4" /> d) \html <br>
                                </p>
                                <p> <label>6- Invocamos o JavaScript em nosso código HTML como:
                                    </label><br>
                                    <input type="radio" name="perg6" value="opcao1" /> a) script <br>
                                    <input type="radio" name="perg6" value="opcao2" /> b) java <br>
                                    <input type="radio" name="perg6" value="opcao3" /> c) js <br>
                                    <input type="radio" name="perg6" value="opcao4" /> d) jscript <br>
                                </p>
                                <p> <label>7- Quais linguagens são possíveis de se trabalhar juntamente
                                        com o HTML?:</label><br>
                                    <input type="radio" name="perg7" value="opcao1" /> a) Java e
                                    TypeScript <br>
                                    <input type="radio" name="perg7" value="opcao2" /> b) CSS e C# <br>
                                    <input type="radio" name="perg7" value="opcao3" /> c) CSS e
                                    JavaScript <br>
                                    <input type="radio" name="perg7" value="opcao4" /> d) C# e PHP <br>
                                </p>
                                <p> <label>8- O que significa a sigla HTML?</label><br>
                                    <input type="radio" name="perg8" value="opcao1" /> a) HyperTable Max
                                    Language <br>
                                    <input type="radio" name="perg8" value="opcao2" /> b) HyperText
                                    Markup Language <br>
                                    <input type="radio" name="perg8" value="opcao3" /> c) HyperText Main
                                    Language <br>
                                    <input type="radio" name="perg8" value="opcao4" /> d) HyperText
                                    Master Language <br>
                                <p> <label>9- A tag que dá nome às abas dos sites em HTML é:</label><br>
                                    <input type="radio" name="perg9" value="opcao1" /> a) title<br>
                                    <input type="radio" name="perg9" value="opcao2" /> b) head <br>
                                    <input type="radio" name="perg9" value="opcao3" /> c) style <br>
                                    <input type="radio" name="perg9" value="opcao4" /> d) body <br>
                                </p>
                                </p>
                                <p> <label>10- Qual a primeira tag do HTML?</label><br>
                                    <input type="radio" name="perg10" value="opcao1" /> a)!DOCTYPE HTML
                                    <br>
                                    <input type="radio" name="perg10" value="opcao2" /> b) body <br>
                                    <input type="radio" name="perg10" value="opcao3" /> c) head <br>
                                    <input type="radio" name="perg10" value="opcao4" /> d) title <br>
                                </p>
                            </article>
                            <input class="btnEnviar" type="submit" value="Enviar">
                        </form>
                    </section>
                </div>
            </ul>
        </div>

        <!--<footer class="rodape" id="contato">
<footer class="rodape" id="contato"> 
<footer class="rodape" id="contato">
<footer class="rodape" id="contato"> 
<footer class="rodape" id="contato">
<h6>2022®</h6>
</footer> -->

    </body>

    <script>
        const button = document.getElementById("btn");
        const list = document.getElementById("list");
        list.style.display = "none";
        button.addEventListener("click", (event) => {
            if (list.style.display == "none") {
                list.style.display = "block"
            } else {
                list.style.display = "none";
            }
        })

        const button2 = document.getElementById("btn2");
        const list2 = document.getElementById("list2");
        list2.style.display = "none";
        button2.addEventListener("click", (event) => {
            if (list2.style.display == "none") {
                list2.style.display = "block"
            } else {
                list2.style.display = "none";
            }
        })

        const button3 = document.getElementById("btn3");
        const list3 = document.getElementById("list3");
        list3.style.display = "none";
        button3.addEventListener("click", (event) => {
            if (list3.style.display == "none") {
                list3.style.display = "block"
            } else {
                list3.style.display = "none";
            }
        })

        const button4 = document.getElementById("btn4");
        const list4 = document.getElementById("list4");
        list4.style.display = "none";
        button4.addEventListener("click", (event) => {
            if (list4.style.display == "none") {
                list4.style.display = "block"
            } else {
                list4.style.display = "none";
            }
        })

        const button5 = document.getElementById("btn5");
        const list5 = document.getElementById("list5");
        list5.style.display = "none";
        button5.addEventListener("click", (event) => {
            if (list5.style.display == "none") {
                list5.style.display = "block"
            } else {
                list5.style.display = "none";
            }
        })

        const button6 = document.getElementById("btn6");
        const list6 = document.getElementById("list6");
        list6.style.display = "none";
        button6.addEventListener("click", (event) => {
            if (list6.style.display == "none") {
                list6.style.display = "block"
            } else {
                list6.style.display = "none";
            }
        })
    </script>

</html>