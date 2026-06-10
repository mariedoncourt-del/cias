<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Convention_model extends CI_Model {
    public function getConventions() {
        // Récupérer toutes les conventions depuis la base de données
        $query = $this->db->get('Convention');
        return $query->result();
    }

    public function checkDateExists($formateurId, $selectedDate) {
        // Vérifier si la date existe déjà pour un formateur donné
        $this->db->where('nom_formateur', $formateurId);
        $this->db->where('date_convention_1', $selectedDate);
        $query = $this->db->get('Convention');
        return $query->num_rows() > 0;
    }
}