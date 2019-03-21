<h1>Detalles del pedido</h1>

<?php if(isset($pedido)): ?>
  <h3>Dirección de envio</h3>
  Provincia: <?=$pedido->provincia?> <br>
  Ciudad: <?=$pedido->localidad?> <br>
  Dirección: <?=$pedido->direccion?> <br><br>

  <h3>Datos del pedido:</h3>

    Número de pedido: <?=$pedido->id?> <br>
    Total a pagar: <?=$pedido->coste?> $<br>
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
