<div class="contenedor reestablecer">
<?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nuevo Password</p>
        <form action="/reestablecer" class="formulario" method="POST">
        <div class="campo">
                        <label for="password">Password</label>
                        <input
                         type="password"
                         id="password"
                         placeholder="Password"
                         name="password"
                         >
                </div>

                <div class="campo">
                        <label for="password2">Repetir Password</label>
                        <input
                         type="password"
                         id="password2"
                         placeholder="Repite tu Password"
                         name="password2"
                         >
                </div>
                <input type="submit" class="boton" value="Guardar Password">
        </form>
        <div class="acciones">
                <a href="/crear">¿Aún no tienes una cuenta? Obtener una.</a>
                <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
    </div>
</div>