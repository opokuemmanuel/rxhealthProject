<?php
error_reporting(0);

class Config
{
    private $values = [
        'first'     => "apple",
        'third'    => "banana"
    ];

    public function getValues() {
        return $this->values;
    }
}

$config = new Config();

$config->getValues()['second'] = 'mango';

echo $config->getValues()['first'] . PHP_EOL;
echo $config->getValues()['second']. PHP_EOL;
echo $config->values['third']. PHP_EOL;