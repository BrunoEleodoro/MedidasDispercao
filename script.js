function gerarCampo(campoPai)
{
  if (document.getElementById('div-detalhes')) {
    limparDetalhes();
  }
  var tipoSelecionado = (campoPai.value || campoPai.options[campoPai.selectedIndex].value);
  if (tipoSelecionado == 1)
  {
    var newdiv = document.createElement('div');
    newdiv.setAttribute("id", "div-detalhes");
    newdiv.innerHTML = "<br>Insira o número de elementos <br><input type='number' name='numCampos' min='3' max='100'>"+
                        "<br><input type='button' value='Gerar Espaços'>";
    document.getElementById("insercaoDados").appendChild(newdiv);
  }

  else if (tipoSelecionado == 2 || tipoSelecionado == 3)
  {
    var newdiv = document.createElement('div');
    newdiv.setAttribute("id", "div-detalhes");
    newdiv.innerHTML = "<br>Insira o número de linhas<br><input type='number' name='numLinhas' min='3' max='30'>"+
                        "<br><input type='button' value='Gerar Linhas'>";;
    document.getElementById("insercaoDados").appendChild(newdiv);
  }
}

function limparDetalhes()
{
  var parent = document.getElementById("insercaoDados");
  var child = document.getElementById("div-detalhes");
  parent.removeChild(child);
}
