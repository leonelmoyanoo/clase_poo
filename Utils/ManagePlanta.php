<?php
require_once 'Database.php';
require_once 'plantas/Planta.php';

/**
 * Clase ManagePlanta
 * Esta clase maneja las operaciones relacionadas con las plantas en la base de datos.
 */
class ManagePlanta {
    protected $database;
    protected $pdo;

    /**
     * Constructor de la clase ManagePlanta.
     * Inicializa la conexión a la base de datos.
     */
    public function __construct() {
        $this->database = new Database();
        $this->pdo = $this->database->connect();
    }

    /**
     * Este método obtiene todas las plantas de la base de datos.
     */
    public function getPlantas() {
        $sql = "SELECT * FROM PLANTAS";
        $query = $this->pdo->query($sql);
        
        $plantas = $query->fetchAll();
        if ($plantas) {
            foreach ($plantas as $planta) {
                $plantas_return = new Planta(
                    $planta['ID'],
                    $planta['NOMBRE'],
                    $planta['TIPO'],
                    $planta['DESCRIPCION'],
                    $planta['FECHA_CREACION']
                );
            }
            return $plantas_return;
        }
        return $plantas;
    }

    /**
     * Este método obtiene una planta específica por su ID.
     * @param int $id El ID de la planta a obtener.
     * @return Planta|null Retorna un objeto Planta si se encuentra, o null si no.
     */
    public function getPlanta($id){
        $sql = "SELECT * FROM PLANTAS WHERE ID = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $planta = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($planta) {
            $planta = new Planta(
                $planta['ID'],
                $planta['NOMBRE'],
                $planta['TIPO'],
                $planta['DESCRIPCION'],
                $planta['FECHA_CREACION']
            );
        }
        return $planta ? $planta : null;
    }
}