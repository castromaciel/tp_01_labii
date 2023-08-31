<?php
  /** Importación del encabezado */
  require_once('./html/encabezado.html');

  /**
   * Inicialización de constantes y variables
   */
  const APORTE_JUBILATORIO = 13;
  const OBRA_SOCIAL = 3.5;

  $nombreDelEmpleado = 'Maciel Castro';
  $sueldoBasico = mt_rand(170000 * 100, 290000 * 100) / 100;
  $dtoAporteJubilatorio = $sueldoBasico * APORTE_JUBILATORIO / 100;
  $dtoObraSocial = $sueldoBasico * OBRA_SOCIAL / 100;
  $sueldoNeto = $sueldoBasico - $dtoAporteJubilatorio - $dtoObraSocial;

  /**
   * Formatear campos a un estándar, con 2 decimales
   * separados con coma y divisor de miles con punto.
   */
  $printSueldoBasico = number_format($sueldoBasico, 2, '.', ',');
  $printDtoAporteJubilatorio = number_format($dtoAporteJubilatorio, 2, '.', ',');
  $printDtoObraSocial = number_format($dtoObraSocial, 2, '.', ',');
  $printSueldoNeto = number_format($sueldoNeto, 2, '.', ',');

?>
<article>
  <table>
    <thead>
      <tr>
        <td colspan="3">
          Empleado: <?php echo $nombreDelEmpleado; ?></td>
        </td>
      </tr>
      <tr>
        <td>Concepto</td>
        <td>Ingresos</td>
        <td>Descuentos</td>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Sueldo básico</td>
        <td>
          $<?php echo $printSueldoBasico; ?>
        </td>
        <td></td>
      </tr>
      <tr>
        <td>Aporte jubilatorio</td>
        <td></td>
        <td>
          $<?php echo $printDtoAporteJubilatorio; ?>
        </td>
      </tr>
      <tr>
        <td>Obra social</td>
        <td></td>
        <td>
          $<?php echo $printDtoObraSocial; ?>
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td colspan="3">
          Sueldo neto: $<?php echo $printSueldoNeto; ?>
        </td>
      </tr>
    </tfoot>
  </table>
</article>
<?php
  /** Importación del pie de página*/
  require_once('./html/pie.html');
?>
