<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $setor = $_POST["setor"];
   $nome = (int)$_POST["nome"];
   $tarefas = $_POST["tarefas"];
   $atraso = $_POST["atraso"];

if(!empty($setor)){
    echo "Seu setor é:$setor";
}
if(!empty($nome)){
    echo "Funcionario:$nome";
}

if($tarefas >= 20 && $atraso <= 1){
    echo "Desempenho Excelente";
}elseif($tarefas >= 10 && $tarefas <=19 && $atraso <=3){
    echo "Desempenho Regular";
}else{
    echo "desempenho Insatisfatório";
}

}
?>