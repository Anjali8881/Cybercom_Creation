<?php

class BankAccount {
    public $balance = 0;

    public function DisplayBalance(){
        return 'Balance '.$this->balance;
    }

    public function Withdraw($amount){
        if($this->balance < $amount){
            echo 'Not enough money'."<br>";
        }else{
            $this->balance = $this->balance - $amount;
        }
    }

    public function Deposit($amount){
        $this->balance = $this->balance+$amount;
    }
}

//creating object of class BankAccount
$anjali = new BankAccount;
$aditya = new BankAccount;

//calling deposit method using object
$anjali->Deposit(2000);
$aditya->Deposit(5000);

//calling withdraw method using object
$anjali->Withdraw(700);
$aditya->Withdraw(100);

//calling DisplayBalance method using object
echo $anjali->DisplayBalance()."<br>";
echo $aditya->DisplayBalance();

?>