<?php include("includes/Header.php"); ?>
<?php include("controllers/ControllerCadastroBusc.php");
?>

<div class="container">
  <section class="cadastro">
    <div class="headerCadastro">
      <h1>Check-in</h1>
    </div>
    <div class="barra"></div>
    <form name="FormCadastroe" id="FormCadastro" method="post" action="">  
      <input type="hidden" id="Id" name="Id" value="0">
      <div class="cliente">
        <h2>Cliente</h2>
        <input type="hidden" id="AcaoCli" name="AcaoCli" value="<?php echo $AcaoCli; ?>">
        <input class="grid-6 buscCPF" type="text" id="CPF" name="CPF" placeholder="CPF" required>
        <input class="grid-6" type="text" id="Nome" name="Nome" placeholder="Nome" Value="<?php echo $Nome; ?>" required>
        <input type="hidden" id="QtdUso" name="QtdUso" value="<?php echo $QtdUso; ?>">
      </div>
      <div class="veiculo">
        <h2>Veiculo</h2>
        <input class="grid-6" type="text" id="Placa" name="Placa" placeholder="Placa" required>
        <input class="grid-6" type="text" id="Modelo" name="Modelo" placeholder="Modelo" required>
      </div>

      <div class="btn-submit">
        <button type="submit" value="Cadastrar">Cadastrar</button>
      </div>

    </form>

  </section>
</div>


<?php include("includes/Footer.php"); ?>