<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_bouscarel extends CI_Controller {
    
    public function index() {
        $this->load->database();
        
        echo "<h1>Vérification BOUSCAREL Carole dans la base de données</h1>";
        echo "<hr>";
        echo "<p style='color:green; font-weight:bold;'>✅ Utilisation de la connexion CodeIgniter existante</p>";
        echo "<hr>";
        
        // D'abord, découvrir la structure de la table Convention
        echo "<h2>🔍 Structure de la table Convention :</h2>";
        $fields_query = $this->db->query("DESCRIBE Convention");
        
        echo "<table border='1' cellpadding='8' style='border-collapse:collapse; font-family:monospace; font-size:12px; margin-bottom:20px;'>";
        echo "<tr style='background-color:#f0f0f0;'><th>Champ</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
        
        $primary_key = null;
        foreach ($fields_query->result() as $field) {
            echo "<tr>";
            echo "<td><strong>" . htmlspecialchars($field->Field) . "</strong></td>";
            echo "<td>" . htmlspecialchars($field->Type) . "</td>";
            echo "<td>" . htmlspecialchars($field->Null) . "</td>";
            echo "<td>" . htmlspecialchars($field->Key) . "</td>";
            echo "<td>" . htmlspecialchars($field->Default ?: 'NULL') . "</td>";
            echo "</tr>";
            
            if ($field->Key == 'PRI') {
                $primary_key = $field->Field;
            }
        }
        echo "</table>";
        
        if ($primary_key) {
            echo "<p style='background:#e7f3ff; padding:10px; border-left:4px solid #0066cc;'>";
            echo "✓ Clé primaire trouvée : <strong>$primary_key</strong>";
            echo "</p>";
        }
        
        echo "<hr>";
        
        // Requête pour BOUSCAREL avec tous les champs
        $sql = "SELECT * FROM Convention WHERE nom_stagiaire = 'BOUSCAREL' AND prenom_stagiaire = 'Carole'";
        
        $query = $this->db->query($sql);
        
        echo "<h2>📊 Résultat pour BOUSCAREL Carole :</h2>";
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            
            // Détecter si id_formation existe et est vide
            $id_form_exists = property_exists($row, 'id_formation');
            $id_form_value = $id_form_exists ? $row->id_formation : null;
            $is_empty = empty($id_form_value);
            
            $bg_color = $is_empty ? '#ffe6e6' : '#e6ffe6';
            
            echo "<div style='background-color:$bg_color; padding:20px; border:3px solid " . ($is_empty ? '#dc3545' : '#28a745') . "; border-radius:5px;'>";
            
            echo "<table border='1' cellpadding='10' style='border-collapse:collapse; font-family:Arial; width:100%;'>";
            
            // Afficher TOUTES les colonnes
            foreach ($row as $key => $value) {
                $is_id_formation = ($key == 'id_formation');
                $highlight = $is_id_formation ? 'background-color:#fff3cd; font-weight:bold; font-size:16px;' : '';
                
                echo "<tr>";
                echo "<td style='$highlight'><strong>" . htmlspecialchars($key) . "</strong></td>";
                echo "<td style='$highlight'>" . htmlspecialchars($value ?: '(vide)') . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";
            
            // Message d'alerte si id_formation est vide
            if ($id_form_exists && $is_empty) {
                echo "<div style='background-color:#fff3cd; border:3px solid #ffc107; padding:20px; margin-top:20px;'>";
                echo "<h2 style='color:#856404;'>⚠️ ID FORMATION EST VIDE !</h2>";
                echo "<p style='font-size:18px; font-weight:bold;'>C'est LA CAUSE du problème du double slash //</p>";
                echo "<p style='font-size:16px;'>L'URL générée : <code style='color:red; background:#f8d7da; padding:5px; font-size:14px;'>";
                echo "https://maf-formation.org/cias/stagiaire/imprimer_facture/BOUSCAREL/Carole//pdf";
                echo "</code></p>";
                echo "</div>";
                
                // Formulaire de correction
                echo "<hr>";
                echo "<div style='background-color:#e7f3ff; border:3px solid #0066cc; padding:20px;'>";
                echo "<h2 style='color:#0066cc;'>🔧 CORRIGER MAINTENANT</h2>";
                
                // Liste des IDs existants
                $sql2 = "SELECT DISTINCT id_formation FROM Convention WHERE id_formation IS NOT NULL AND id_formation != '' LIMIT 20";
                $query2 = $this->db->query($sql2);
                
                if ($query2->num_rows() > 0) {
                    echo "<form method='POST' action='" . site_url('check_bouscarel/update') . "'>";
                    echo "<input type='hidden' name='primary_key' value='$primary_key'>";
                    echo "<input type='hidden' name='primary_value' value='" . htmlspecialchars($row->$primary_key) . "'>";
                    echo "<label style='font-size:14px; font-weight:bold;'>Choisissez un ID de formation :</label><br>";
                    echo "<select name='id_formation' style='padding:10px; font-size:14px; margin:10px 0; width:300px;'>";
                    echo "<option value=''>-- Sélectionnez --</option>";
                    foreach ($query2->result() as $id_row) {
                        echo "<option value='" . htmlspecialchars($id_row->id_formation) . "'>" . htmlspecialchars($id_row->id_formation) . "</option>";
                    }
                    echo "</select><br>";
                    echo "<button type='submit' style='background:#28a745; color:white; padding:12px 24px; border:none; border-radius:5px; font-size:16px; cursor:pointer; font-weight:bold;'>✅ Mettre à jour maintenant</button>";
                    echo "</form>";
                }
                echo "</div>";
                
            } elseif ($id_form_exists && !$is_empty) {
                echo "<div style='background-color:#d4edda; border:3px solid #28a745; padding:20px; margin-top:20px;'>";
                echo "<h2 style='color:#155724;'>✅ ID FORMATION EST REMPLI !</h2>";
                echo "<p style='font-size:18px;'>ID Formation : <strong style='color:#007bff;'>$id_form_value</strong></p>";
                echo "<p style='font-size:16px;'>✅ La génération de facture devrait fonctionner correctement.</p>";
                echo "<p><a href='" . site_url('stagiaire/afficher_liste_emargement') . "' style='background:#007bff; color:white; padding:12px 24px; text-decoration:none; border-radius:5px; font-weight:bold;'>📄 Tester la génération de facture</a></p>";
                echo "</div>";
            }
            
        } else {
            echo "<p style='color:red; font-size:18px; font-weight:bold;'>❌ Aucun résultat trouvé pour BOUSCAREL Carole</p>";
        }
    }
    
    public function update() {
        $this->load->database();
        
        $primary_key = $this->input->post('primary_key');
        $primary_value = $this->input->post('primary_value');
        $id_formation = $this->input->post('id_formation');
        
        if (!empty($primary_key) && !empty($primary_value) && !empty($id_formation)) {
            $data = array('id_formation' => $id_formation);
            $this->db->where($primary_key, $primary_value);
            $this->db->update('Convention', $data);
            
            if ($this->db->affected_rows() > 0) {
                echo "<div style='text-align:center; padding:50px;'>";
                echo "<h1 style='color:green; font-size:48px;'>✅</h1>";
                echo "<h1 style='color:green;'>Mise à jour réussie !</h1>";
                echo "<p style='font-size:18px;'>ID Formation '<strong>$id_formation</strong>' a été ajouté pour BOUSCAREL Carole</p>";
                echo "<p style='margin-top:30px;'>";
                echo "<a href='" . site_url('check_bouscarel') . "' style='background:#007bff; color:white; padding:15px 30px; text-decoration:none; border-radius:5px; font-size:16px; margin:10px;'>🔄 Vérifier à nouveau</a>";
                echo "<a href='" . site_url('stagiaire/afficher_liste_emargement') . "' style='background:#28a745; color:white; padding:15px 30px; text-decoration:none; border-radius:5px; font-size:16px; margin:10px;'>📄 Tester la facture</a>";
                echo "</p>";
                echo "</div>";
            } else {
                echo "<h1 style='color:orange;'>⚠️ Aucune modification</h1>";
                echo "<p>L'ID formation était peut-être déjà rempli.</p>";
                echo "<p><a href='" . site_url('check_bouscarel') . "'>← Retour</a></p>";
            }
        } else {
            echo "<h1 style='color:red;'>❌ Erreur</h1>";
            echo "<p>Paramètres manquants.</p>";
            echo "<p><a href='" . site_url('check_bouscarel') . "'>← Retour</a></p>";
        }
    }
}
