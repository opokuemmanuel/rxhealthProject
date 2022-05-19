<?php
 error_reporting(0);

   class Config{
          //array 
          private $values = [
              'first' => "apple",
              'third'=>"banana"
          ]; 

          public function getValues(){
              return $this->values;
          }

        //   public function setValues($values){
        //          $this->values['second'] = $values;
        //   }

          //OR
    
           public function setValues($key,$values){
            return $this->values[$key] = $values;
         }

   }

    $config = new Config();
   

    // Undefined array key                       
    //  $config->getValues()['second'] = 'mango';
    //  echo $config->getValues()['second']. PHP_EOL;

    //Cannot access private property outside the config class
    //    echo $config->values['third']. PHP_EOL;

    
    //corrections

    //   $config->setValues('mango');

        //OR

    $config->setValues('second','orange');

    echo $config->getValues()['first']. PHP_EOL;
    echo $config->getValues()['second']. PHP_EOL;
    echo $config->getValues()['third']. PHP_EOL;
?>

