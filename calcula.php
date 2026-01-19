<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $nome = $_POST["nome"];
   $tarefas = (int)$_POST["tarefas"];
   $atraso = (int)$_POST["atraso"];

if(!empty($nome)){
    echo "Funcionario:$nome<br>";
}

if($tarefas >=25 && $atraso == 0){
    echo "Funcionario elegivel para bonus";
}

elseif($tarefas == 20 && $atraso == 0){
    echo "Desempenho Excelente";
}

elseif($tarefas >= 10 && $tarefas <=19 && $atraso <=3){
    echo "Desempenho Regular";
}

else{
    echo "desempenho Insatisfatório";
}

}
?>