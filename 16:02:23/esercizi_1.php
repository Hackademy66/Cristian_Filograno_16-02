
<?php 
// ESERCIZIO 1
// $arr =[1,2,3,4,5,6,7,8,9];
// $counter=0;
// $sum=0;

// foreach ($arr as $number){

//     if($number % 2 == 0){
//         $counter++;
//         $sum += $number;

//     }
// }
// $media = $sum / $counter;
// echo $media;

// ESERCIZIO 2
//  Dato un array di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” a seconda del genere


// $utenti = [
//     [
//         'name' => 'Davide',
//         'surname' => 'Cariola',
//         'genere' => 'maschio',
//     ],
//     [
//         'name' => 'Carla',
//         'surname' => 'Cariola',
//         'genere' => 'femmina',
//     ],
// ];
// foreach($utenti as $utente){
//         if ($utente['genere'] == 'maschio'){
//                 echo "Buongiorno Signor " . $utente['name'] . "\n";       
//         } else{
//                 echo 'Buongiorno Signora ' . $utente['name'] . "\n"; 
//         }
// }


// ESERCIZIO 3
for($i = 1; $i <= 100; $i++){


        switch($i){
            case $i % 15 == 0:
                echo "hackademy-66\n";
                break;
            case $i % 3 == 0:
                echo "css\n";
                break;
    
            case $i % 5 == 0:
                echo "javascript\n";
                break;
    
            default:
                echo "$i\n";
        }
    }


?>