<?php

// class ==> A class is a user-defined blueprint or prototype from which objects are created.
 // A class is declared with the 'class' keyword
  

class BankAccount {

    private $accountNumber;
    private $balance;

    // A constructor is a special function that creates and initializes an object instance of a class 

    public function __construct($accountNumber, $balance)
    {
        /* The use of the ```this``` keyowrd in the constructor abobe. 
        As the name suggets, it is used to refer to the current instance of the class. */

        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

}

/* The use of the ```new``` keyword.
 It is used to tell the compiler that we are creating a new instance of the ```car``` class. 
 If you will note use the ```new``` keyword while creating instance of any class, 
 an error will be thrown. */

$account = new BankAccount(1, 100);