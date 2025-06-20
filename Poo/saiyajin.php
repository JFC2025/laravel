<?php
// saiyajin definicion clase
class Saiyajin  {
    public string $nombre;
    public int $nivel_poder;
    // metodo

    public function __construct(string $nombre, int $nivel_poder) {
        // asignamos los valores a las propiedades
        $this->nombre = $nombre;
        $this->nivel_poder = $nivel_poder;
    }

    //metodo get de los atributos
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getNivelPoder(): int {
        return $this->nivel_poder;
    }


    public function saludar() {
   // retorna un saludo
       
     return "Hola, soy {$this->nombre}";
    }
   // metodo

   public function NivelPelea() {
      
    return $this->nombre. " tiene un nivel de pelea de ". $this->nivel_poder;
       
       
    }   
 }


?>