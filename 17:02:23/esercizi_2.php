
<?php
//////////////////////////////////////////////////////Esercizio checkPassword del 16/02/2023
// - Implementare un metodo che faccia reinserire la password qualora le regole non fossero rispettate e che interrompa il programma in caso di password accettata.
// - visualizzare eventualmente quale campo non e’ stato inserito

//Regole:
    // 1 - Almeno 8 caratteri
    // 2 - Almeno 1 maiuscola
    // 3 - Almeno 1 numero
    // 4 - Almeno 1 carattere speciale

$password = readline("Inserisci la tua password: \n");

// Regola 1

function checkLength($pwd){   
    if (strlen($pwd) < 8){
        echo "E' necessario inserire almeno 8 caratteri! \n";
        return false;
    } else {
        return true;
    }
}


// Regola 2

function checkUppercase($pwd){
    if(!preg_match("/[A-Z]/", $pwd)){
        echo "E' necessario inserire almeno 1 lettera MAIUSCOLA! \n";
        return false;
    } else {
        return true;
    }
}

// Regola 3

function checkNumber($pwd){
    if(!preg_match("/\d/", $pwd)){
        echo "E' necessario inserire almeno 1 numero! \n";
        return false;
    } else {
        return true;
    }
}

// Regola 4

function checkSpecials($pwd){
    if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pwd)){
        echo "E' necessario inserire almeno 1 carattere speciale! \n";
        return false;
    } else {
        return true;
    }
}

// Check Password

function checkPassword($pwd){
    if (checkLength($pwd) && checkUppercase($pwd) && checkNumber($pwd) && checkSpecials($pwd)) {
        echo "La password inserita è corretta!";
        return true;
    } else {
        return false;
    }
}

$finalCheck = checkPassword($password);


while ($finalCheck == false) {
    $password = readline("Inserisci nuovamente la password:\n");
    $finalCheck = checkPassword($password);
}
