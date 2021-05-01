<?php

$ingredients = [
  'Farinha de Trigo',
  'Ovos',
  'Leite',
  'Açucar',
  'Óleo',
  'Fermento',
  'outro item'
];

echo '<h1> Ingredites de Pão Caseiro </h1>';

foreach($ingredients as $ingredient) {
  echo '<br>' . $ingredient;
}

echo '<br><br> ----Outra Forma de usar o forEach...---- </br></br>';

foreach($ingredients as $key => $value) {
  echo 'Item ' . ($key + 1) . ': ' . $value . '</br>';
}

echo '<br><br> ----Outra Forma de usar o forEach...---- </br></br>';

echo '<ul>';
foreach($ingredients as $ingredient) {
  echo '<li>' . $ingredient . '</li>';
}
echo '</ul>';


echo '<br><br> ----EXERCÍCIOS---- </br></br>';

for ($linha=0; $linha < 10; $linha++) { 
  echo '<ul>';
  for ($coluna=0; $coluna < 10; $coluna++) { 
    echo '-';
  }
  echo '</ul>';
}

for ($linha=0; $linha < 10; $linha++) { 
  echo '<ul>';
  for ($coluna=0; $coluna < 10; $coluna++) { 
    echo "($linha,$coluna) ";
  }
  echo '</ul>';
}

echo '<<<_______________________________________________________________>>>';


for ($linha=0; $linha < 20; $linha++) { 
  echo '<ul>';
  for ($coluna=0; $coluna < $linha; $coluna++) { 
    echo '-';
  }
  echo '</ul>';
}

for ($linha=0; $linha < 20; $linha++) { 
  echo '<ul>';
  for ($coluna=0; $coluna < $linha; $coluna++) { 
    echo "($linha,$coluna) ";
  }
  echo '</ul>';
}

// for ($linha=0; $linha < 10; $linha++) { 
//   echo '<ul>';
//   for ($coluna=0; $coluna < 10; $coluna++) { 
//     echo "($linha,$coluna) ";
//   }
//   echo '</ul>';
// }