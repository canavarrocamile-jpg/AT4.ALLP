<form action="" method="post">

<?php 

echo "<p>Digite os textos:</p>";

for ($i = 1; $i <= 5; $i++) {
    print 'Texto ' . $i . ': 
    <input type="text" name="texto' . $i . '"><br>';
}

?>

<input type="submit" value="Enviar">
</form> 

<?php

echo "<p> Exemplos de equipamentos de informatica </p>";

$equipamento = ['Computador', 'Monitor', 'Teclado', 'Mouse', 'Impressora','Roteador', 'Estabilizador', 'Caixa de som' ];

foreach ($equipamento as $equipamento) {
    print 'Equipamentos: ' . $equipamento . '<br>';
}

?>

<?php

echo "<p> Nome dos alunos e suas notas </p>";

$alunos = [
'Milena' => 7,
'Jonas' => 5,
'Ana Paula' => 10,
'Juliano' => 7,
'Samira' => 6,
'Paulo Augusto' => 9,
'Solange' => 3,
'Sarah' => 2
];

foreach ($alunos as $nome => $nota){
print 'Nome: '. $nome . ' - Nota: ' . $nota . '<br>';
}

?>
