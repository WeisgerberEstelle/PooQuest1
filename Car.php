<?php 
    
    class Car
    {
        private string $color;

        private int $currentSpeed;

        private int $nbSeats;

        private int $nbWheels;

        private string $energy;

        private int $energyLevel;

        public function __construct(string $color, int $nbSeats, string $energy)
            {
                
                $this->color = $color;
                $this->nbSeats= $nbSeats;
                $this->energy = $energy;

            }
            

        public function brake(): string
            {

                $sentence = "";

                while ($this->currentSpeed > 0) {

                    $this->currentSpeed--;
                    $sentence .= "Brake !!!";

                }

                $sentence .= "I'm stopped !";
                return $sentence;

            }

        public function forward(): string
            {
            
                $this->currentSpeed = 15;          
                return "Go !";   

            }
        public function start($currentSpeed): string
            {
            
                if($currentSpeed = 0){         
                    return "Démarre la voiture !";   
                }
            }

        public function getColor(): string
            {
            
                return $this->color;
            
            }

        public function getCurrentSpeed(): int
            {
            
                return $this->currentSpeed;
            
            } 

        public function getNbWheels(): int
            {
            
                return $this->nbWheels;
            
            }

        public function getNbSeats(): int
            {
            
                return $this->nbSeats;
            
            }
        
        public function getEnergy(): int
            {
            
                return $this->energy;
            
            } 

        public function getEnergyLevel(): int
            {
            
                return $this->energyLevel;
            
            } 
                     
              
    }

   ?>
