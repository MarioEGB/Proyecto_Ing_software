<body id="p"> 
<tr>
    <div align = "center">
        <h1>CompuMax</h1>
        <h2>Generar Reporte de Ventas</h2>
        <br><br><br><br>
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
</body>
</html>