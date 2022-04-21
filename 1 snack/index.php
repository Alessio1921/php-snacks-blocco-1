<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
  $students = [
    [
        'name' => 'Laura',
        'lastname' => 'Bianchi',
        'votes' => [9, 9, 9, 9, 10]
    ],
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8, 3, 4, 5]
    ],
    [
        'name' => 'Roberta',
        'lastname' => 'Danderini',
        'votes' => [2, 8, 9, 5, 4]
    ]
  ];
  $tot=0;
  foreach ($students as $student) {
    foreach ($student as $key => $value) {
      if($key=="votes"){
        $numberVotes=count($value);
        $tot=0;
        foreach ($value as $vote){
          $tot+=$vote ;
        }
        $value=$tot / $numberVotes;
      }
      echo $key . " " . $value ."<br>";
    }
  }
?>