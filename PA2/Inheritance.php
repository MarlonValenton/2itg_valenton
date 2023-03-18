<!DOCTYPE html> 
<html lang="en"> 


<?php
//error_reporting(E_ERROR | E_PARSE);
class origin 
 {
 private string $name;
  private string $color;
  private int $value;
  

	   
  public function setName($name) {
	  $this->name = $name;
  }
  
    public function setColor($color) {
	  $this->color = $color;
  }
  
    public function setValue($value) {
	  $this->value = $value;
  }
  
    public function getName() {
	  return $this->name;
  }
  
   public function getColor() {
	  return $this->color; 
  }
  
   public function getValue() { 
	  return $this->value;
  }
  
  public function displayInfo() {

	  echo "{$this->name} and {$this->color} and {$this->value}";
	  echo "</br>";

  }
  
  }
  
  class backup extends origin
  {
	  private $label;	
	public function __call($funcName, $args) {
	if($funcName == 'printInfo') {
             
            switch (count($args)) {
                     
                case 1:
                echo "overloaded method printInfo ";
                         
       
                case 2:
				echo "this is an automated backup for {$this->label}";
				echo "</br>";
            }
        }		
	}
	  
	  
  	public function __construct($label) {
	$this->label = $label;
	   }
	   
	public function displayInfo() {

	  echo "overrode displayInfo";
	  echo "</br>";

	}

	   public function getLabel() {
		   $this->label;
	   }

	  public function info() {
		  echo "backup data.DAT";
	  }
  }
  
    class offlineBackup extends backup
  {
		  	
	  public function showInfo() {
	  echo "{$this->info()} is backed up on hardDrive";
	  echo "</br>";
	  }
	  
  }
  
  
    class cloudBackup extends origin
  {
	   
	  public function checkInfo() {
		  echo "this is a cloud backup for ";
		  $this->displayInfo();
		  echo "</br>";
		  
	  }
  }
 $backup = new backup('origin ');
 $backup->setName('original ');
 $backup->setColor('blue ');
 $backup->setValue(1);
 $backup->displayInfo();
 echo($backup->printInfo(1));
 $hardDrive = new offlineBackup('');
 $hardDrive->showInfo();
 $cloud = new cloudBackup();
 $cloud->setName('original ');
 $cloud->setColor('blue ');
 $cloud->setValue(1);
 $cloud->checkInfo();

   
  
?>
</html>

