var pessoas, index;
function cadPessoas(professor, equipamento, id_equipamento, data_agendada, aula_com_equipamento){
    pessoas = document.getElementById("tbPessoas");
    var qtdlinhas = pessoas.rows.length;
    var linha = pessoas.insertRow(qtdlinhas);
    var linhaParam;

    var cellProfessor = linha.insertCell(0);
    var cellEquipamento = linha.insertCell(1);
    var cellId_equipamento = linha.insertCell(2);
    var cellData_agendada = linha.insertCell(3);
    var cellAula_com_equipamento = linha.insertCell(4);

    cellProfessor.innerHTML = professor;
    cellEquipamento.innerHTML = equipamento;
    cellId_equipamento.innerHTML = id_equipamento;
    cellData_agendada.innerHTML = data_agendada;
    cellAula_com_equipamento.innerHTML = aula_com_equipamento;

    preencheCamposForm();
}
function altPessoas(professor, equipamento, id_equipamento, data_agendada, aula_com_equipamento) {
    pessoas.rows[index].cells[0].innerHTML = professor;
    pessoas.rows[index].cells[1].innerHTML = equipamento;
    pessoas.rows[index].cells[2].innerHTML = id_equipamento;
    pessoas.rows[index].cells[3].innerHTML = data_agendada;
    pessoas.rows[index].cells[4].innerHTML = aula_com_equipamento;
}
function preencheCamposForm() {
    for(i = 0; i < pessoas.rows.length; i++){
        pessoas.rows[i].onclick = function(){
            index = this.rowIndex;
            document.getElementById("txtprofessor").value = pessoas.rows[index].cells[0].innerText;
            document.getElementById("txtequipamento").value = pessoas.rows[index].cells[1].innerText;
            document.getElementById("txtid_equipamento").value = pessoas.rows[index].cells[2].innerText;
            document.getElementById("txtdata_agendada").value = pessoas.rows[index].cells[3].innerText;
            document.getElementById("txtaula_com_equipamento").value = pessoas.rows[index].cells[4].innerText;

        }
    }
}
function delRegistro(){
    for(i = 0; i < pessoas.rows.length; i++){
        if (index == i) {
            pessoas.deleteRow(index);
            return;
        }
    }
}