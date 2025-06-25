><?php
// Clase Usuario

class Usuario {
    protected $nombre;
    protected $email;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function mostrarInformacion() {
        return "Nombre: {$this->nombre}, Email: {$this->email}";
    }
}