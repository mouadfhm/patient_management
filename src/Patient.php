<?php
class Patient {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllPatients() {
        $stmt = $this->pdo->prepare("SELECT * FROM patients");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createPatient($data) {
        $stmt = $this->pdo->prepare("INSERT INTO patients (name, mobile, date_of_birth, doctor, department) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$data['name'], $data['mobile'], $data['date_of_birth'], $data['doctor'], $data['department']]);
    }

    public function updatePatient($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE patients SET name=?, mobile=?, date_of_birth=?, doctor=?, department=? WHERE id=?");
        $stmt->execute([$data['name'], $data['mobile'], $data['date_of_birth'], $data['doctor'], $data['department'], $id]);
    }

    public function deletePatient($id) {
        $stmt = $this->pdo->prepare("DELETE FROM patients WHERE id=?");
        $stmt->execute([$id]);
    }
}
?>
