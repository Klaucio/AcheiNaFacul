/**
 * Created by claucio on 10/20/16.
 */
// <script type="text/javascript">
    function ShowHideDiv() {

        var labelId = document.getElementById("nrUtente");

        var estudante = document.getElementById("estudante");
        var divEstudante = document.getElementById("divEstudante");
        divEstudante.style.display = estudante.checked ? "block" : "none";
        labelId.textContent = estudante.checked ? "Número de Identificação" : "Número de Estudante";
        // labelId.innerText = estudante.checked ? "Número de Identificação" : "Número de Estudante";

        var funcionario = document.getElementById("funcionario");
        var divFuncionario = document.getElementById("divFuncionario");
        divFuncionario.style.display = funcionario.checked ? "block" : "none";
        labelId.textContent = funcionario.checked ? "Número de Identificação" : "Número de Funcionário";
        // labelId.innerText = funcionario.checked ? "Número de Identificação" : "Número de Funcionário";

    }





    // </script>