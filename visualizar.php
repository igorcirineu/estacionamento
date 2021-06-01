<?php include("includes/Header.php"); ?>
<?php include("class/ClassCrud.php"); ?>

<div class="container">
  <div class="visualizar">
    <div class="headerVisualizar">
      <h1>Check-out</h1>
    </div>
    <div class="barra"></div>
    <table class="TabelaCrud">
      <tr>
        <td>Id</td>
        <td>CPF</td>
        <td>Placa</td>
        <td>Entrada</td>
        <td>Status</td>
        <td>Ações</td>
      </tr>

      <!-- Estrutura de loop -->
      <?php
      $Crud = new ClassCrud();
      $BFetch = $Crud->selectDB(
        "*",
        "estadia",
        "",
        array()
      );

      while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
      ?>
        <tr>
          <td><?php echo $Fetch['Id']; ?></td>
          <td><?php echo $Fetch['IdCliente']; ?></td>
          <td><?php echo $Fetch['IdVeiculo']; ?></td>
          <td><?php echo $Fetch['HrEnt']; ?></td>
          <td><?php echo $Fetch['Stats']; ?></td>
          <td class="icones">
            <a href="#"><img src="img/Visualizar.png" alt="Visualizar"></a>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>

</div>


<?php include("includes/Footer.php"); ?>