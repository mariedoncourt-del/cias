<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
    }

    public function index() {
        // Configuration pour la sauvegarde
        $prefs = array(
            'tables'        => array(),   // Array of tables to backup.
            'ignore'        => array(),                     // List of tables to omit from the backup
            'format'        => 'zip',                       // gzip, zip, txt
            'filename'      => 'mybackup.sql',              // File name - NEEDED ONLY WITH ZIP FILES
            'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
            'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
            'newline'       => "\n"                         // Newline character used in backup file
        );

        // Sauvegarde de la base de données
        $backup = $this->dbutil->backup($prefs);

        // Chemin où sauvegarder le fichier (assurez-vous que le dossier est accessible en écriture)
        $backupPath = FCPATH . 'backups/';

        // Nom de fichier de sauvegarde
        $backupFileName = 'backup-' . date('Y-m-d-H-i-s') . '.zip';

        // Écriture de la sauvegarde dans un fichier
        write_file($backupPath . $backupFileName, $backup);

        // Téléchargement de la sauvegarde
        force_download($backupFileName, $backup);
    }
}
?>