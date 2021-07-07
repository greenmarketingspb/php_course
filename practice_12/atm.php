<?php

class Atm 
{
    public int $cartNumber;

    protected array $userInfos = [
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

        protected array $currentUser;
        protected bool $pinVerified = false;

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
                    'Your current balance is %s <br>',
                $this->currentUser['balance']);           
            } else {
                die('insufficient funds');
            }
        }
        
        protected function checkPin(int $pin): bool
        {
            return $this->currentUser['pin'] === $pin;
        }

        protected function checkIfUserExist($cardNumber): bool 
        {
            return isset($this->userInfos[$cardNumber]);
                
        }

        

}

$atm = new Atm;
$atm->insertCard(3333);
$atm->insertPin(1212);
$atm->checkBalance();
$atm->withdrawMoney(110);


class Terminal extends Atm 
{
    public function topUpBalance(int $deposit): void 
    {
        $this->currentUser['balance'] = $this->currentUser['balance'] + $deposit;
        echo sprintf(
            'Your current balance is %s <br>',
                $this->currentUser['balance']);
    }
}


$terminal = new Terminal;
$terminal->insertCard(3333);
$terminal->insertPin(1212);
$terminal->checkBalance();
$terminal->withdrawMoney(110);
$terminal->topUpBalance(300);
$terminal->withdrawMoney(790);










?>