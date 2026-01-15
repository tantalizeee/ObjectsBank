<?php

class Account {
    public $accountNumber;
    public $accountType;
    public $balance;

    public function __construct($accountNumber, $accountType, $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountType = $accountType;
        $this->balance = $balance;
    }
}
?>