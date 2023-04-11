<?php

require_once '../config.php';
require_once '../model/Reclamation.php';

class ReclamationC {
    public function listReclamation() {
        $db = config::getConnexion();
        try {
           $liste = $db->query('SELECT * FROM reclamation')->fetchAll(PDO::FETCH_ASSOC);
           return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getReclamation(int $idR): ?array
    {
        $db = config::getConnexion();
        try {
           $req = $db->prepare('SELECT * FROM reclamation WHERE idR=:idR');
           $req->execute([
            'idR' => $idR
           ]);
           $reclamation = $req->fetch(PDO::FETCH_ASSOC);
           return $reclamation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function addReclamation(Reclamation $reclamation): void {
         $db = config::getConnexion();
         try {
            $req = $db->prepare('INSERT INTO reclamation VALUES (:i, :t, :d)');
            $req->execute([
                'i' => $reclamation->getidR(),
                't' => $reclamation->gettypeR(),
                'd' => $reclamation->getdescriptionR()
            ]);
         } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
         }
    }

    public function deleteReclamation($idR) {
        $db = config::getConnexion();
        try {
           $query = $db->prepare('DELETE FROM reclamation WHERE idR = :idR');
           $query->execute(['idR' => $idR]);
        } catch(Exception $e) {
           die('Error: ' . $e->getMessage());
        }  
    }

    public function updateReclamation($idR, Reclamation $reclamation) {
        $db = config::getConnexion();
        try {
            $query = $db->prepare('UPDATE reclamation SET typeR=:t, descriptionR=:d WHERE idR=:i');
            $query->execute([
                'i' => $idR,
                't' => $reclamation->gettypeR(),
                'd' => $reclamation->getdescriptionR(),
            ]);
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
