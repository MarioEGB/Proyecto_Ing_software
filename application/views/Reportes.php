<body id="p"> 
<tr>
    <div align = "center" class="color-blanco">
        <h1>CompuMax</h1>
        <h2>Generar Reporte de Ventas</h2>
        <hr>
        <br><br><br>
        <table border="1">
        <thead>
            <tr>
                <th>Nombre del producto</th>
                <th>precio</th>
                <th>Cantidad</th>
                <th>Fecha de venta</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($datos1->result() as $opc1) { ?>
            <tr>
                <td><?=$opc1->nombre_articulo; ?></td>
                <td><?=$opc1->precio?></td>
                <td><?=$opc1->cantidadArticulos ?></td>
                <td><?=$opc1->fecha ?></td>
                  
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>   
</tr>  
<br> <br> <br> 
<div align="center">
    <?= form_open(base_url()."CMC/adminPrincipal")?>
    <?= form_submit('','Regresar'); ?>
    <?= form_close() ?>
</div>
</body>
</html>