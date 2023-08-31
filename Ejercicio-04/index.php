<?php
  /** Importación del encabezado */
  require_once('./html/encabezado.html');

  /**
   * Inicialización de constantes y variables
   */
  const IMPUESTO_PAIS = 30;
  const IMPUESTO_GANANCIAS = 45;
  const DOLAR_HOY = 365.50;

  $cantidadAComprar = mt_rand(100 * 100, 200 * 100) / 100;
  $precioSinImpuestos = $cantidadAComprar * DOLAR_HOY;
  $impuestoPais =  ($precioSinImpuestos * IMPUESTO_PAIS / 100);
  $impuestoGanancias =  ($precioSinImpuestos * IMPUESTO_GANANCIAS / 100);
  $totalAPagar = $precioSinImpuestos + $impuestoGanancias + $impuestoPais;

  /**
   * Formatear campos a un estándar, con 2 decimales
   * separados con coma y divisor de miles con punto.
   */
  $printDolarHoy = number_format(DOLAR_HOY, 2, '.', ',');
  $printCantidadAComprar = number_format($cantidadAComprar, 2, '.', ',');
  $printPrecioSinImpuestos = number_format($precioSinImpuestos, 2, '.', ',');
  $printImpuestoPais = number_format($impuestoPais, 2, '.', ',');
  $printImpuestoGanancias = number_format($impuestoGanancias, 2, '.', ',');
  $printTotalAPagar = number_format($totalAPagar, 2, '.', ',');

?>
<article>
  <header>
    <h2>Compra dolares</h2>
    <h3>
      Cotización
      <?php echo '$' . $printDolarHoy ?>
    </h3>
  </header>
  <hr>
  <main>
    <p>Estas comprando:
      <strong class="mark-text">
        <?php echo '$' . $printCantidadAComprar ?>
      </strong>
    </p>
    <p>
      Precio sin impuestos:
      <strong>
        <?php echo '$' . $printPrecioSinImpuestos ?>
      </strong>
    </p>
    <p>Impuesto pais:
      <strong>
        <?php echo '$' . $printImpuestoPais ?>
      </strong>
    </p>
    <p>Impuesto a la ganacias:
      <strong>
        <?php echo '$' . $printImpuestoGanancias ?>
      </strong>
    </p>
    <p>Total a pagar:
      <strong class="mark-text">
        <?php echo '$' . $printTotalAPagar ?>
      </strong>
    </p>
  </main>
</article>

<?php
  /** Importación del pie de página */
  require_once('./html/pie.html');
?>
