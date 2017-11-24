<<<<<<< HEAD

=======
>>>>>>> 5668fd02416346ff54fb30cf22d93c13a204c746
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
<<<<<<< HEAD
    newdiv.innerHTML = "<br>Insira o número de elementos <br><input type='number' name='linhas' id='linhas' min='3' max='100'>"+
                        "<br><input type='button' value='Gerar Espaços' onclick='proxima_pagina();'>";
=======
    newdiv.innerHTML = "<br>Insira o número de elementos <br><input type='number' name='numCampos' min='3' max='100'>"+
                        "<br><input type='button' value='Gerar Espaços'>";
>>>>>>> 5668fd02416346ff54fb30cf22d93c13a204c746
    document.getElementById("insercaoDados").appendChild(newdiv);
  }

  else if (tipoSelecionado == 2 || tipoSelecionado == 3)
  {
    var newdiv = document.createElement('div');
    newdiv.setAttribute("id", "div-detalhes");
<<<<<<< HEAD
    newdiv.innerHTML = "<br>Insira o número de linhas<br><input type='number' name='linhas' id='linhas' min='3' max='30'>"+
                        "<br><input type='button' value='Gerar Linhas' onclick='proxima_pagina();'>";;
=======
    newdiv.innerHTML = "<br>Insira o número de linhas<br><input type='number' name='numLinhas' min='3' max='30'>"+
                        "<br><input type='button' value='Gerar Linhas'>";;
>>>>>>> 5668fd02416346ff54fb30cf22d93c13a204c746
    document.getElementById("insercaoDados").appendChild(newdiv);
  }
}

function limparDetalhes()
{
  var parent = document.getElementById("insercaoDados");
  var child = document.getElementById("div-detalhes");
  parent.removeChild(child);
}
<<<<<<< HEAD
function proxima_pagina()
{
  var dropdown1 = document.getElementById("tipoInsercao");
  var tipoSelecionado = dropdown1.options[dropdown1.selectedIndex].value;
  var elementos = document.getElementById("linhas").value;
  if(tipoSelecionado == 1)
  {
      window.location="gerar_rol.php?linhas="+elementos;
  }
  else if(tipoSelecionado == 2)
  {
      window.location="gerar.php?linhas="+elementos;
  }
  else
  {
      window.location="gerar_classe.php?linhas="+elementos;   
  }
}
=======
>>>>>>> 5668fd02416346ff54fb30cf22d93c13a204c746
