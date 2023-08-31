<?php
  /** Importación del encabezado */
  require_once('./html/encabezado.html');
  /**
   * Inicialización de constantes y variables
   */
  const IVA = 21;
  $nombreDelProducto = "Cosito";
  $precio = mt_rand(10000 * 100, 50000 * 100) / 100;
  $impuestoDelProducto = $precio * IVA / 100;
  $totalAPagar = $precio + $impuestoDelProducto
?>
<article>
  <table>
    <thead>
      <tr>
        <td>Detalle</td>
        <td>IMPORTE</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php echo $nombreDelProducto; ?>
        </td>
        <td>
          <?php echo $precio; ?>
        </td>
      </tr>
      <tr>
        <td>
          Total sin IVA
        </td>
        <td>
          <?php echo $precio; ?>
        </td>
      </tr>
      <tr>
        <td>
          IVA 21,00%
        </td>
        <td>
          <?php echo $impuestoDelProducto; ?>
        </td>
      </tr>
      <tr>
        <td>
          TOTAL
        </td>
        <td>
          <?php echo $totalAPagar; ?>
        </td>
      </tr>
    </tbody>
  </table>
</article>
<?php
  /** Importación del pie de página*/
  require_once('./html/pie.html')
?>
