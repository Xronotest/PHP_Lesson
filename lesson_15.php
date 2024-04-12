<?php

class Animals {
    protected $feet = 0;
    protected $name = "";
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function info()
    {
        echo 'Инфо: Имя:'.$this->name . " Лап:".$this->feet;
    }

}

class Animals_say extends Animals{
    protected $say = "";

    public function __construct(string $name, string $say)
    {
        parent::__construct($name);
        $this->say = $say;
    }

    public function speak()
    {
        echo "Имя: ".$this->name . " Издаёт звук: ".$this->say;
    }

}



class Cats extends Animals_say{

    public function __construct(string $name)
    {
        parent::__construct($name, "Мяукает");
        $this->feet=4;
    }

    public function info()
    {
        echo 'Инфо: Имя:'.$this->name . " Лап: ".$this->feet. " Звуки:".$this->say;
    }
}


$cat_1 = new Cats("Нурик");
$cat_1->info();
echo "<hr>";
$cat_1->speak();
echo "<hr>";

class Dogs extends Animals_say{

    public function __construct(string $name)
    {
        parent::__construct($name, "Гавкает ");
        $this->feet=4;
    }

    public function info()
    {
        echo 'Инфо: Имя:'.$this->name . " Лап: ".$this->feet. " Звуки:".$this->say;
    }
}


$cat_1 = new Dogs("Кипун");
$cat_1->info();
echo "<hr>";
$cat_1->speak();
echo "<hr>";