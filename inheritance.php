<?php

class BankAccounts {
    private $balance;

    public function getBalance()
    {
            return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0)
        {
            $this->balance += $amount;
        } 
        
        return $this;

    }

}

class SavingAccount extends BankAccounts
{

    private $interestRate;

    public function setIntersetRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    public function addInterset()
    {
        // calculate interest 
        $interest = $this->interestRate * $this->getBalance();
        // deposit interest to the balance
        $this->deposit($interest);
    
    }

}

$account = new SavingAccount();
$account->deposit(100);

// set interest Rate

$account->setIntersetRate(0.05);
$account->addInterset();

echo $account->getBalance();