<?php if(isset($gestion)): ?>
<h1>Gestionar pedidos</h1>
<?php else: ?>
<h1>Mis pedidos</h1>
<?php endif; ?>
<table>
  <tr>
    <th>N° Pedido</th>
    <th>Coste</th>
    <th>Fecha</th>
    <th>Estado</th>
  </tr>
  <?php while($ped = $pedidos->fetch_object()):?>
    <tr>
      <th>
        <a href="<?=base_url?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
      </th>
      <th>
        <?=$ped->coste ?> $
      </th>
      <th>
        <?=$ped->fecha ?>
      </th>
      <th>
        <?=$ped->estado ?>
      </th>
    </tr>
  <?php endwhile; ?>
</table>
