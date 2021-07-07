<?php

class Atm 
{
    public int $cartNumber;

    private array $userInfos = [
        1111 => [
            'name' => 'Vasya',
            'pin' => 1234,
            'balance' => 100
        ],
        2222 => [
            'name' => 'Petya',
            'pin' => 4321,
            'balance' => 500,
        ],
        3333 => [
            'name' => 'Lena',
            'pin' => 1212,
            'balance' => 1000,
        ],
    ];

        private array $currentUser;
        private bool $pinVerified = false;

        public function insertCard(int $cardNumber): void 
        {
            if (!$this->checkIfUserExist($cardNumber)) {
                die('No user with a card ' . $cardNumber . ' exist');
            }
            $this->currentUser = $this->userInfos[$cardNumber];
        }

        public function insertPin(int $pin): void
        {
            if (!$this->checkPin($pin)) {
                die('invalid pin code');
            }
            $this->pinVerified = true;
        }
        
        public function checkBalance(): void
        {
            echo sprintf('Hello %s. Your current balance is %s$ <br>',
            $this->currentUser['name'],
            $this->currentUser['balance']);
        }

        public function withdrawMoney(int $amount): void
        {
            if (!$this->pinVerified) {
                die('Pin is not verified');
            }
            if ($amount <= $this->currentUser['balance']) {
                $this->currentUser['balance'] = $this->currentUser['balance'] - $amount;

                echo sprintf(
                    'Your current balance is %s ',
                $this->currentUser['balance']);           
            } else {
                die('insufficient funds');
            }
        }
        
        private function checkPin(int $pin): bool
        {
            return $this->currentUser['pin'] === $pin;
        }

        private function checkIfUserExist($cardNumber): bool 
        {
            return isset($this->userInfos[$cardNumber]);
                
        }

        

}

$atm = new Atm;
$atm->insertCard(3333);
$atm->insertPin(1212);
$atm->checkBalance();
$atm->withdrawMoney(110);
















?>