<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
<h1>Tu pedido se ha confirmado</h1>
<p>
  Tu pedido ha sido guardado con exito, una vez que realices la transferencia bancaria 792020390 con el
  coste del pedido, será procesado y enviado.
</p>
<br>
<?php if(isset($pedido)): ?>
  <h3>Datos del pedido:</h3>

    Número de pedido: <?=$pedido->id?> <br>
    Total a pagar: <?=$pedido->coste?> <br>
    Productos:                          <br>

    <table>
      <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
      </tr>
    <?php while ($producto = $productos->fetch_object()): ?>
      <tr>
        <th>
          <?php if($producto->imagen != null): ?>
          <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img_carrito">
        <?php else: ?>
          <img src="<?=base_url?>assets/img/camiseta.png" class="img_carrito">
        <?php endif; ?>
        </th>
        <th>
          <a href="<?=base_url?>producto/ver&id=<?=$producto->id ?>"><?=$producto->nombre ?></a>
        </th>
        <th>
          <?=$producto->precio ?>
        </th>
        <th>
          <?=$producto->unidades ?>
        </th>
      </tr>

    <?php endwhile; ?>
    </table>
<?php endif; ?>

<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
  <h1>Tu pedido No se ha podido confirmar </h1>
<?php endif; ?>
