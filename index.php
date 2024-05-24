<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:DIVISION ANALISIS DE PATRONES DELLICTUALES:.</title>

    <link rel="icon" type="image/png" href="image/subjefatura-sinfondo.jpg">


    <link rel="stylesheet" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.min.css">  
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">    
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css"> 
    <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="container-fluid">
     <div class="text-center fs-1 fw-bold">  
      <p>División Apoyo y Seguimiento</p> 
     </div> 
    </div>
    
    <div class="container">
    <div class="texto">
        <span class="h5">En esta web usted podrá visualizar todos aquellos hechos delictivos por <mark>ROBO</mark> y <mark>HURTO</mark> que hubieran sido ESCLARECIDOS, producto de tareas investigativas, diligencias judiciales, allanamientos o cualquier otra modalidad que NO sea “Hecho Flagrante” durante el periodo comprendido <u>desde el 01 de enero al 31 de marzo</u> del corriente año de la Superintendencia de Seguridad Comunal, la Superintendencia de Investigaciones y la Superintendencia de Lucha contra el Cibercrimen.</span><br><br>
    </div>
    <div>
        <span class="h5">Asimismo, podrá consultar sobre los detenidos que han tenido las Divisiones subordinadas de estas Superintendencias.</span>
    </div>
    </div>
    <br>
    <hr class="border border-primary border-3 opacity-75">


    <!-- INICIO DEL MODULO DE LA SUPERINTENDENCIA DE SEGURIDAD COMUNITARIA -->
<div class="padding_ssc">       
    <p class="h4 text-center"><u>Superintendencia de Seguridad Comunal</u></p>
</div>
<br>
<div>     
    <div class="padding_ssc">
        <div class="borde_ssc">  
            
            <div class="row">
                <div class="col">
                    <div class="">
                        <form action="resultadossc.php" method="POST" class="mb-3" target="_blank">
                            <br><br>
                            <div>
                                <button type="submit" style="width: 200px;" class="btn btn-secondary" name="consulta_ssc" value="hechos_esclarecidos_ssc">Hechos Esclarecidos</button>
                                <button type="submit" style="width: 200px;" class="btn btn-primary" name="consulta_ssc" value="detenidos_ssc">Detenidos</button>    
                            </div>
                        </form>
                        <br>

                        <form action="resultado_busqueda_ssc.php" method="POST" target="_blank" id="searchForm">
                            <label for="tipo_busqueda" class="h5">Tipo de Búsqueda:</label>
                                <select name="tipo_busqueda" id="tipo_busqueda" class="h5" style="width: 233px;">
                                <option value="" class="h5">Seleccione...</option>
                                <option value="hechos_esclarecidos" class="h5">Hechos Esclarecidos</option>
                                <option value="detenidos" class="h5">Detenidos</option>
                                </select>

                                <div id="hechos_esclarecidos_select" style="display: none;">
                                    <label for="hechos_busqueda" class="h5">Buscar por:</label>
                                    <select name="hechos_busqueda" id="hechos_busqueda" class="h5" style="width: 298px;">
                                    <option value="n_sumario" class="h5">Número de Sumario</option>
                                    <option value="dep_instructora" class="h5">Dependencia Instructora</option>
                                    <option value="magis_interventor" class="h5">Magistrado Interventor</option>
                                    </select>
                                </div>

                                <div id="detenidos_select" style="display: none;">
                                    <label for="detenidos_busqueda" class="h5">Buscar por:</label>
                                    <select name="detenidos_busqueda" id="detenidos_busqueda" class="h5" style="width: 298px;">
                                    <option value="n_sumario" class="h5">Número de Sumario</option>
                                    <option value="dni"class="h5">DNI</option>
                                    <option value="apellido" class="h5">Apellido</option>
                                    <option value="nombre"class="h5">Nombre</option>
                                    </select>
                                </div>
                                <br>

                            <label for="termino_busqueda" class="h5">Búsqueda:</label>
                            <input type="text" name="termino_busqueda" id="termino_busqueda" class="h5" placeholder="Ingrese su búsqueda" style="width: 307px"><br>

                        <button type="submit" class="h5">Buscar</button>
                        </form>
                </div>
            </div>

            <div class="col">
                <div class="texto" style="padding-top: 10px;">
                        <p>Al oprimir los botones <u>“Mostrar todos los Hechos Esclarecidos”</u> o <u>“Mostrar Todos los Detenidos”</u> esta información se abrirá en una pestaña nueva, para no impedir la navegación.</p> 
                        <p>También se pueden utilizar los Filtros Automáticos, los cuales reaccionan dependiendo de lo que se quiera consultar en “Tipo de Búsqueda”.</p>
                        <p>Si selecciona Hechos Esclarecidos, las opciones de búsqueda que se desplegarán serán: Número de Sumario o Dependencia Instructora.</p>
                        <p>Si selecciona Detenidos, las opciones de búsqueda que se desplegarán serán: Número Sumario, Apellido y Nombre, y estos resultados se mostrarán en una nueva pestaña, para continuar con las búsquedas que crea necesarias.</p>
                    </div>
                </div>
            </div>

<script>
    document.getElementById('tipo_busqueda').addEventListener('change', function() {
        var tipoBusqueda = this.value;
        var hechosSelect = document.getElementById('hechos_esclarecidos_select');
        var detenidosSelect = document.getElementById('detenidos_select');

        // Ocultar ambos selects
        hechosSelect.style.display = 'none';
        detenidosSelect.style.display = 'none';

        // Mostrar el select correspondiente según la opción elegida
        if (tipoBusqueda === 'hechos_esclarecidos') {
            hechosSelect.style.display = 'block';
        } else if (tipoBusqueda === 'detenidos') {
            detenidosSelect.style.display = 'block';
        }
    });
</script>
        </div>
    </div>
</div> <br>

        
<!-- FIN DEL MODULO DE LA SUPERINTENDENCIA DE SEGURIDAD COMUNITARIA-->


<hr class="border border-primary border-3 opacity-75">


<!-- INICIO DEL MODULO DE LA SUPERINTENDENCIA DE INVESTIGACIONES -->

<div class="padding_ssc">       
    <p class="h4 text-center"><u>Superintendencia de Investigaciones</u></p>
</div>
<br>

<div>
    <div class="padding_ssc">
        <div class="borde_ssc">
            <div class="row">
                <div class="col">
                    <form action="resultadosii.php" method="POST" class="mb-3" target="_blank">
                            <br><br>
                            <div>
                                <button type="submit" style="width: 200px;" class="btn btn-secondary" name="consulta_sii" value="hechos_esclarecidos_sii">Hechos Esclarecidos</button>
                                <button type="submit" style="width: 200px;" class="btn btn-primary" name="consulta_sii" value="detenidos_sii">Detenidos</button>    
                            </div>
                        </form>
                        <br>
                    <div>
                        <form action="resultado_busqueda_sii.php" method="post" target="_blank" id="searchForm">
                            <div class="h5" style="width:450px">
                                <label for="tipo_busqueda_sii">Tipo de Búsqueda:</label>
                                    <select name="tipo_busqueda_sii" id="tipo_busqueda_sii" style="width: 233px;">
                                    <option value="">Seleccione...</option>
                                    <option value="hechos_esclarecidos_sii">Hechos Esclarecidos</option>
                                    <option value="detenidos_sii">Detenidos</option>
                                    </select>
                            </div>

                            <div id="hechos_esclarecidos_sii_select" class="h5" style="display: none;">
                                <label for="hechos_busqueda_sii">Buscar por:</label>
                                <select name="hechos_busqueda_sii" id="hechos_busqueda_sii" style="width: 298px;">
                                <option value="n_sumario">Número de Sumario</option>
                                <option value="dep_instructora">Dependencia Instructora</option>
                                <option value="magis_interventor">Magistrado Interventor</option>
                                </select>
                            </div>

                            <div id="detenidos_sii_select" class="h5" style="display: none;">
                                <label for="detenidos_busqueda_sii">Buscar por:</label>
                                <select name="detenidos_busqueda_sii" id="detenidos_busqueda_sii" style="width: 298px;">
                                <option value="n_sumario">Núm. Sumario</option>
                                <option value="dni">DNI</option>
                                <option value="apellido">Apellido</option>
                                <option value="nombre">Nombre</option>
                                </select>
                            </div>
                            
                            <div class="h5">
                                <label for="termino_busqueda_sii">Búsqueda:</label>
                                <input type="text" name="termino_busqueda_sii" id="termino_busqueda_sii" placeholder="Ingrese su búsqueda" style="width: 307px"><br>
                                <button type="submit">Buscar</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col">
                    <div class="texto" style="padding-top: 10px;">
                        <p>Al oprimir los botones <u>“Mostrar todos los Hechos Esclarecidos”</u> o <u>“Mostrar Todos los Detenidos”</u> esta información se abrirá en una pestaña nueva, para no impedir la navegación.</p> 
                        <p>También se pueden utilizar los Filtros Automáticos, los cuales reaccionan dependiendo de lo que se quiera consultar en “Tipo de Búsqueda”.</p>
                        <p>Si selecciona Hechos Esclarecidos, las opciones de búsqueda que se desplegarán serán: Número de Sumario o Dependencia Instructora.</p>
                        <p>Si selecciona Detenidos, las opciones de búsqueda que se desplegarán serán: Número Sumario, Apellido y Nombre, y estos resultados se mostrarán en una nueva pestaña, para continuar con las búsquedas que crea necesarias.</p>
                    </div>
                </div>
            </div>
<script>
    document.getElementById('tipo_busqueda_sii').addEventListener('change', function() {
        var tipoBusqueda = this.value;
        var hechosSelect = document.getElementById('hechos_esclarecidos_sii_select');
        var detenidosSelect = document.getElementById('detenidos_sii_select');

        // Ocultar ambos selects
        hechosSelect.style.display = 'none';
        detenidosSelect.style.display = 'none';

        // Mostrar el select correspondiente según la opción elegida
        if (tipoBusqueda === 'hechos_esclarecidos_sii') {
            hechosSelect.style.display = 'block';
        } else if (tipoBusqueda === 'detenidos_sii') {
            detenidosSelect.style.display = 'block';
        }
    });
</script>

        </div>
    </div>                
</div> <br>


<!-- FIN DEL MODULO DE LA SUPERINTENDENCIA DE INVESTIGACIONES-->

<hr class="border border-primary border-3 opacity-75">

<!-- INICIO DEL MODULO DE LA SUPERINTENDENCIA DE LUCHA CONTRA EL CIBERCRIMEN -->

<div class="padding_ssc">       
    <p class="h4 text-center"><u>Superintendencia de Lucha Contra el Cibercrimen</u></p>
</div>
<br>
<div>
    <div class="padding_ssc">
        <div class="borde_ssc">
            <div class="row">
                <div class="col">
                    <form action="resultadosslcc.php" method="POST" class="mb-3" target="_blank">
                            <br><br>
                            <div>
                                <button type="submit" style="width: 200px;" class="btn btn-secondary" name="consulta_slcc" value="hechos_esclarecidos_slcc">Hechos Esclarecidos</button>
                                <button type="submit" style="width: 200px;" class="btn btn-primary" name="consulta_slcc" value="detenidos_slcc">Detenidos</button>    
                            </div>
                        </form>
                        <br>
                    <div>
                        <form action="resultado_busqueda_slcc.php" method="post" target="_blank" id="searchForm">
                            <div class="h5" style="width:450px">
                                <label for="tipo_busqueda_slcc">Tipo de Búsqueda:</label>
                                    <select name="tipo_busqueda_slcc" id="tipo_busqueda_slcc" style="width: 233px;">
                                    <option value="">Seleccione...</option>
                                    <option value="hechos_esclarecidos_slcc">Hechos Esclarecidos</option>
                                    <option value="detenidos_slcc">Detenidos</option>
                                    </select>
                            </div>

                            <div id="hechos_esclarecidos_slcc_select" class="h5" style="display: none;">
                                <label for="hechos_busqueda_slcc">Buscar por:</label>
                                <select name="hechos_busqueda_slcc" id="hechos_busqueda_slcc" style="width: 298px;">
                                <option value="n_sumario">Número de Sumario</option>
                                <option value="dep_instructora">Dependencia Instructora</option>
                                <option value="magis_interventor">Magistrado Interventor</option>
                                </select>
                            </div>

                            <div id="detenidos_slcc_select" class="h5" style="display: none;">
                                <label for="detenidos_busqueda_slcc">Buscar por:</label>
                                <select name="detenidos_busqueda_slcc" id="detenidos_busqueda_slcc" style="width: 298px;">
                                <option value="n_sumario">Núm. Sumario</option>
                                <option value="dni">DNI</option>
                                <option value="apellido">Apellido</option>
                                <option value="nombre">Nombre</option>
                                </select>
                            </div>
                            
                            <div class="h5">
                                <label for="termino_busqueda_slcc">Búsqueda:</label>
                                <input type="text" name="termino_busqueda_slcc" id="termino_busqueda_slcc" placeholder="Ingrese su búsqueda" style="width: 307px"><br>
                                <button type="submit">Buscar</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col">
                    <div class="texto" style="padding-top: 10px;">
                        <p>Al oprimir los botones <u>“Mostrar todos los Hechos Esclarecidos”</u> o <u>“Mostrar Todos los Detenidos”</u> esta información se abrirá en una pestaña nueva, para no impedir la navegación.</p> 
                        <p>También se pueden utilizar los Filtros Automáticos, los cuales reaccionan dependiendo de lo que se quiera consultar en “Tipo de Búsqueda”.</p>
                        <p>Si selecciona Hechos Esclarecidos, las opciones de búsqueda que se desplegarán serán: Número de Sumario o Dependencia Instructora.</p>
                        <p>Si selecciona Detenidos, las opciones de búsqueda que se desplegarán serán: Número Sumario, Apellido y Nombre, y estos resultados se mostrarán en una nueva pestaña, para continuar con las búsquedas que crea necesarias.</p>
                    </div>
                </div>
            </div>
<script>
    document.getElementById('tipo_busqueda_slcc').addEventListener('change', function() {
        var tipoBusqueda = this.value;
        var hechosSelect = document.getElementById('hechos_esclarecidos_slcc_select');
        var detenidosSelect = document.getElementById('detenidos_slcc_select');

        // Ocultar ambos selects
        hechosSelect.style.display = 'none';
        detenidosSelect.style.display = 'none';

        // Mostrar el select correspondiente según la opción elegida
        if (tipoBusqueda === 'hechos_esclarecidos_slcc') {
            hechosSelect.style.display = 'block';
        } else if (tipoBusqueda === 'detenidos_slcc') {
            detenidosSelect.style.display = 'block';
        }
    });
</script>

        </div>
    </div>                
</div>

</div>
</div>
<!-- FIN DEL MODULO DE LA SUPERINTENDENCIA DE LUCHA CONTRA EL CIBERCRIMEN-->
<footer>    
<div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-0">© 2024 Diseñado por la División Apoyo y Seguimiento.</p>
      </div>
    </div>
</footer>

    


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.esm.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>



    


</body>
</html>

