<?php
include "head.php";
?>

<main class="conteudo">
        <div class="centro">
            <div class="div-lado1">
                <h2><b>MANDE SUA MENSAGEM</b></h2>

                <form action="" method="POST">
                    <div class="form-contro">
                        <label for="endereco">Digite seu nome:</label>
                        <input type="text" name="endereco" placeholder="Nome completo">
                    </div>
                    <div class="form-contro">
                        <label for="nome">Digite seu email:</label>
                        <input type="text" name="nome" placeholder="Endereço completo">
                    </div>
                    <div class="form-contro">
                        <label for="idade">Digite seu telefone:</label>
                        <input type="text" name="idade" placeholder="Número com DDD">
                    </div>
                    <div class="form-contro">
                        <label for="email">Digite sua mensagem:</label>
                        <input type="text" name="email" placeholder="Escreva sua mensagem">
                    </div>
                  
                    <div >
                        <input class="teste" type="submit" value="Enviar">
                    </div>
           
                </form>

            </div>

            <div class="div-lado2">
                <div class="contato">
                    <h2><b>CONTATO</b></h2>
                    <div class="numero">
                    <p>(47) 9999-9999</p>
                    <br>
                    <p>(47) 97777-6666</p>
                </div>
                </div>
            </div>
        </div>

    </main>

<?php
include "footer.php";
?>