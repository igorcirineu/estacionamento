$("#FormCadastro").on("submit", function (event) {
  event.preventDefault();
  var QtdEst = 2;
  var Valor = 0;
  var Stats = "Aberto";
  var Dados = $(this).serialize();

  var timestamp = new Date();

  Dados = Dados + "&QtdEst=" + QtdEst + "&HrEnt=" + timestamp + "&HrSai=" + timestamp + "&Valor=" + Valor + "&Stats=" + Stats;
  console.log(Dados);

  $.ajax({
    url: "Controllers/ControllerCadastro.php",
    type: "post",
    dataType: "html",
    data: Dados,
    success: function (Dados) {
      alert(Dados);
      //$('.Resultado').show().html(Dados);
    },
  });
});

$(".buscCPF").on("change", function (event) {
  event.preventDefault();
  var Dados = $(this).serialize();

  console.log(Dados);

  $.ajax({
    url: "Controllers/ControllerCadastroBusc.php",
    type: "get",
    dataType: "html",
    data: Dados,
    success: function (Dados) {
      alert(Dados);
      //$('.Resultado').show().html(Dados);
    },
  });
});
