<?php
require '../src/templates/header.php';
?>


<div class ="formulario" >

    <form action="resultado.php" method="get">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Idade</label>
        <input type="number" name="idade" required>

        <label>E-mail</label>
        <input type="email" name="email" required>
        
        <label>Curso</label>
        <input type="text" name="curso" required>

        <label>Período do Curso</label>
        <select name="periodo" required>
            <option value="">Selecione</option>
            <option value="manha">Manhã</option>
            <option value="tarde">Tarde</option>
            <option value="noite">Noite</option>
        </select>

        <br><br>

        <label>Interesses:</label><br>
        <input type="checkbox" name="frontend" value="sim"> Front-end<br>
        <input type="checkbox" name="backend" value="sim"> Back-end<br>
        <input type="checkbox" name="mobile" value="sim"> Mobile<br>
        <input type="checkbox" name="dados" value="sim"> Dados<br>
        <input type="checkbox" name="ia" value="sim"> Inteligência Artificial<br>

        <br>

        <button type="submit">Enviar</button>
    </form>

</div>