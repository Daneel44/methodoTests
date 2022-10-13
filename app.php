<?php

class App {
  public $langage = 'english';
  
  public function main(){
    $this->greet();
    $inputChangeLangage = (string)readline('Do you want to change language ? y/n'.PHP_EOL);
    if ($inputChangeLangage === 'y' || $inputChangeLangage === 'Y' ){
      $this->chooseLangage();
    } else {
      $this->interact();
    }
    
  
  }
  
  public function greet() {
    if ($this->langage === 'english'){
      echo 'Hello ! ';
    } elseif ($this->langage === 'svenska'){
      echo 'Hej !';
    }
  }

  public function chooseLangage() {
    echo 'What langage do you chose ? Please pick a number'.PHP_EOL;
    echo '1 - English'.$this->langage === 'english'? '(actual)':''.PHP_EOL;
    echo '2 - Svenska'.$this->langage === 'svenska'? '(actual)':''.PHP_EOL;
    $inputChoice = (int)readline();
    if ($inputChoice === 1) {
      $this->language = 'english';
    } else {
      $inputChoice = 'svenska';
    }
    $this->main();
  } 

  public function interact() {
    $input = (string)readline('What do you want to say ? ');
    if ($this->checkPalindrome($input)){
      echo 'Bien dit !'.PHP_EOL;
    } else {
      echo 'You just say : '. $input .PHP_EOL;
    }
    $this -> interact();

  } 

  public function checkPalindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
  } 


}

$app = new App();
$app->main();

?>
