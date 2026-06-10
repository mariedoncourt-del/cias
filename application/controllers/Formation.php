<?php
// CIAS Safe accessor - evite Undefined property
if (!function_exists("_s")) {
    function _s($obj, $prop, $default = "") {
        return isset($obj->$prop) ? $obj->$prop : $default;
    }
}
 if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Formation extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('table_model');
        $this->isLoggedIn();
        $this->load->model('Task_model', 'tm');
        $this->load->model('stagiaire_model');
    }

    /**
     * Fonction pour extraire une page spécifique d'un PDF
     * Utilise Ghostscript pour l'extraction
     */
    private function extraire_page_pdf($source_pdf, $page_number, $output_pdf) {
        if (!file_exists($source_pdf)) {
            return false;
        }
        
        $output_dir = dirname($output_pdf);
        if (!is_dir($output_dir)) {
            mkdir($output_dir, 0755, true);
        }
        
        $cmd = sprintf(
            'gs -sDEVICE=pdfwrite -dNOPAUSE -dBATCH -dSAFER -dFirstPage=%d -dLastPage=%d -sOutputFile=%s %s 2>&1',
            intval($page_number),
            intval($page_number),
            escapeshellarg($output_pdf),
            escapeshellarg($source_pdf)
        );
        
        exec($cmd, $output, $return_var);
        
        return (file_exists($output_pdf) && filesize($output_pdf) > 0);
    }

    public function test()
    {
        echo "OK";
    }

    public function telechargePage()
{
  $cheminFichier = FCPATH . 'https://maf-formation.org/cias/assets/Aide/AIDE_CIAS.html';

// Vérifier si le fichier existe
if (file_exists($cheminFichier)) {
    // Définir les en-têtes pour le téléchargement
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($cheminFichier) . '"');
    header('Content-Length: ' . filesize($cheminFichier));
    readfile($cheminFichier);
} else {
    // Gérer le cas où le fichier n'existe pas
    show_404('Le fichier aide.html n\'existe pas.');
}
}



    /**
     * This is default routing method
     * It routes to default listing page
     */
    public function index()
    {
       $this->global['pageTitle'] = 'Saisie des formations';
       $data['donneeformateur'] = $this->table_model->recuperer_formateur();
       $data['donneethematique'] = $this->table_model->recuperer_thematique();
       $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("formation/ajout_formation", $this->global, $data , NULL);
        
    }

    public function enregistrer_support()
    {
       $this->global['pageTitle'] = 'Enregistrer support';
       
       
        
        $this->loadViews("formation/enregistrer_support", $this->global, NULL , NULL);
        
    }


    public function ajout_archive_convention()
    {
       $this->global['pageTitle'] = 'Archives conventions';
     
        $this->loadViews("formation/ajout_archive_convention", $this->global, NULL , NULL);
        
    }

    public function ajout_archive_formulaire()
    {
        $this->global['pageTitle'] = 'Archives Dossier AGEFICE';
     
        $this->loadViews("formation/ajout_archive_formulaire", $this->global, NULL , NULL);
    }

    public function ajout_archive_assiduite()
    {
        $this->global['pageTitle'] = 'Archives Assiduité';
     
        $this->loadViews("formation/ajout_archive_assiduite", $this->global, NULL , NULL);
    }

public function ajout_archive_certificat()
    {
        $this->global['pageTitle'] = 'Archives Certificat de réalisation';
     
        $this->loadViews("formation/ajout_archive_certificat", $this->global, NULL , NULL);
    }

public function ajout_archive_facture()
    {
        $this->global['pageTitle'] = 'Archives Factures';
     
        $this->loadViews("formation/ajout_archive_facture", $this->global, NULL , NULL);
    }

    public function ajout_archive_emargement()
    {
        $this->global['pageTitle'] = 'Archives Emargements';
     
        $this->loadViews("formation/ajout_archive_emargement", $this->global, NULL , NULL);
    }

    public function afficher_tous_fichier()
    {
        $this->global['pageTitle'] = 'Télécharger programmes';
        $data["tout_programme"] = $this->table_model->recuperer_tout_programme();
        $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
     
        $this->loadViews("formation/afficher_tous_fichier", $this->global, $data , NULL);
    }

    public function enregistrerSupports()
    {
        $config['upload_path']=  "/home/mafformael/www/cias/assets/support/";
        $config['allowed_types']='gif|jpg|png|jpeg|pdf';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("fichier")){

           
            $data = array('upload_data' => $this->upload->data());
           $x = $data['upload_data']['file_name'];
           $data1 = array('nom_support'=> $this->input->post("nom_support"),
                        'fichier_support'=> $x,
                        'categorie' => $this->input->post("categorie")
        );

        $this->stagiaire_model->enregistrer_support($data1);
        }
        else{
            redirect('formation/enregistrer_support');
        }
        redirect('formation/enregistrer_support');

    }

    public function download_selected_filess(){
        /*$this->load->library('zip');
        $selected_files = $this->input->post('selected_files');

        if(!empty($selected_files)) {
            // Emplacement temporaire pour stocker les fichiers avant de les compresser
            $tempFolderPath = FCPATH . 'temp_folder/';
            if (!is_dir($tempFolderPath)) {
                mkdir($tempFolderPath, 0777, true);
            }

            foreach($selected_files as $file_id) {
                $file = $this->table_model->recuperer_programme($file_id);
                if($file) {
                    $file_path = FCPATH . "assets/upload/" . $file->programme;
                    if(file_exists($file_path)) {
                        // Copier les fichiers sélectionnés dans le dossier temporaire
                        copy($file_path, $tempFolderPath . basename($file_path));
                    }
                }
            }

            // Création de l'archive ZIP
            $this->zip->read_dir($tempFolderPath);
            $zipFileName = 'selected_files.zip'; // Nom de l'archive ZIP à télécharger
            $this->zip->archive($zipFileName);

            // Supprimer les fichiers temporaires après la création de l'archive
            array_map('unlink', glob($tempFolderPath . "*"));
            rmdir($tempFolderPath);
            $this->output->set_content_type('application/pdf');
            // Télécharger l'archive ZIP
            $this->load->helper('download');
            //$this->output->set_content_type('application/pdf');
            force_download($zipFileName, NULL);
        } else {
            echo "Aucun fichier sélectionné";
        }*/


        /*$this->load->library('zip');
        $selected_files = $this->input->post('selected_files');
    
        if (!empty($selected_files)) {
            // Emplacement temporaire pour stocker les fichiers avant de les compresser
            $tempFolderPath = FCPATH . 'temp_folder/';
            if (!is_dir($tempFolderPath)) {
                mkdir($tempFolderPath, 0777, true);
            }
    
            foreach ($selected_files as $file_id) {
                $file = $this->table_model->recuperer_programme($file_id);
                if ($file) {
                    $file_path = FCPATH . "assets/upload/" . $file->programme;
                    if (file_exists($file_path)) {
                        // Copier les fichiers sélectionnés dans le dossier temporaire
                        copy($file_path, $tempFolderPath . basename($file_path));
                    }
                }
            }
    
            // Ajouter chaque fichier directement au zip
            foreach (glob($tempFolderPath . '*') as $file) {
                $this->zip->read_file($file, basename($file));
            }
    
            // Supprimer les fichiers temporaires après l'ajout au zip
            array_map('unlink', glob($tempFolderPath . "*"));
            rmdir($tempFolderPath);
    
            // Définir le type de contenu comme application/zip
            $this->output->set_content_type('application/zip');
    
            // Télécharger l'archive ZIP
            $this->load->helper('download');
            force_download('selected_files.zip', NULL);
        } else {
            echo "Aucun fichier sélectionné";
        }*/


        $selected_files = $this->input->post('selected_files');

    if (!empty($selected_files)) {
        // Emplacement temporaire pour stocker les fichiers avant de les compresser
        $tempFolderPath = FCPATH . 'temp_folder/';
        if (!is_dir($tempFolderPath)) {
            mkdir($tempFolderPath, 0777, true);
        }
        array_map('unlink', array_filter((array) array_merge(glob($tempFolderPath."*"))));
        foreach ($selected_files as $file_id) {
            $file = $this->table_model->recuperer_programme($file_id);
            if ($file && isset($file->fichier_pdf)) {
                // Vérifier si c'est une référence de page PDF
                if (strpos($file->fichier_pdf, '#page=') !== false) {
                    // Extraire le numéro de page
                    preg_match('/#page=(\d+)/', $file->fichier_pdf, $matches);
                    if (isset($matches[1])) {
                        $page_number = intval($matches[1]);
                        $catalogue_path = FCPATH . "assets/upload/catalogue_maf_2024.pdf";
                        
                        // Créer un nom de fichier unique
                        $output_filename = preg_replace('/[^A-Za-z0-9_\-]/', '_', $file->nom_programme) . '.pdf';
                        $output_path = $tempFolderPath . $output_filename;
                        
                        // Extraire la page spécifique avec Ghostscript
                        if (!$this->extraire_page_pdf($catalogue_path, $page_number, $output_path)) {
                            // En cas d'échec, ne rien copier (éviter le catalogue entier)
                            error_log("Échec extraction page $page_number pour programme ID $file_id");
                        }
                    }
                } else {
                    // C'est un fichier PDF individuel
                    $file_path = FCPATH . "assets/upload/" . $file->fichier_pdf;
                    if (file_exists($file_path) && is_file($file_path)) {
                        copy($file_path, $tempFolderPath . basename($file_path));
                    }
                }
            }
        }

        // Créer un objet ZipArchive
        $zip = new ZipArchive();
       // $zipFileName = 'selected_files.zip';
       $zipFileName = 'selected_files_' . uniqid() . '.zip';

        if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
            // Ajouter chaque fichier directement au zip sans conserver la structure du dossier
            foreach (glob($tempFolderPath . '*') as $file) {
                $zip->addFile($file, basename($file));
            }

            // Fermer le zip
            $zip->close();

            // Désactiver la mise en cache
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            $this->output->set_header('Pragma: no-cache');
            $this->output->set_header('Content-Disposition: attachment; filename="selected_files.zip"');
            // Définir le type de contenu comme application/zip
            $this->output->set_content_type('application/zip');

            // Télécharger l'archive ZIP
            $this->load->helper('download');
            force_download($zipFileName, NULL, true);

            // Supprimer les fichiers temporaires après l'ajout au zip
            array_map('unlink', glob($tempFolderPath . "*"));
           // usleep(1000); // Délai de 1 milliseconde (ajustez si nécessaire)
            rmdir($tempFolderPath);
        } else {
            echo "Impossible de créer l'archive ZIP";
        }
    } else {
        echo "Aucun fichier sélectionné";
    }
/*
    $selected_files = $this->input->post('selected_files');

    if (!empty($selected_files)) {
        // Emplacement temporaire pour stocker les fichiers avant de les compresser
        $tempFolderPath = FCPATH . 'temp_folder/';
        if (!is_dir($tempFolderPath)) {
            mkdir($tempFolderPath, 0777, true);
        }

        $totalSize = 0; // Initialiser la taille totale des fichiers

        foreach ($selected_files as $file_id) {
            $file = $this->table_model->recuperer_programme($file_id);
            if ($file) {
                $file_path = FCPATH . "assets/upload/" . $file->programme;
                if (file_exists($file_path)) {
                    $totalSize += filesize($file_path); // Ajouter la taille du fichier

                    // Copier les fichiers sélectionnés dans le dossier temporaire
                    copy($file_path, $tempFolderPath . basename($file_path));
                }
            }
        }

        // Seuil pour la compression dans une archive ZIP (par exemple, 5 Mo)
        $seuilCompression = 5 * 1024 * 1024; // 5 Mo en octets

        if ($totalSize > $seuilCompression) {
            // Si la taille totale dépasse le seuil, créer une archive ZIP
            $this->zip->read_dir($tempFolderPath);
            $zipFileName = 'selected_files.zip'; // Nom de l'archive ZIP à télécharger
            $this->zip->archive($zipFileName);

            // Supprimer les fichiers temporaires après la création de l'archive
            array_map('unlink', glob($tempFolderPath . "*"));
            rmdir($tempFolderPath);

            // Définir le type de contenu comme application/zip
            $this->output->set_content_type('application/zip');

            // Télécharger l'archive ZIP
            $this->load->helper('download');
            force_download($zipFileName, NULL);
        } else {
            // Si la taille totale est inférieure au seuil, télécharger les fichiers individuellement
            $this->output->set_content_type('application/octet-stream'); // ou le type de contenu approprié
            $this->load->helper('download');

            foreach (glob($tempFolderPath . '*') as $file) {
                force_download(basename($file), file_get_contents($file));
            }

            // Supprimer les fichiers temporaires après le téléchargement individuel
            array_map('unlink', glob($tempFolderPath . "*"));
            rmdir($tempFolderPath);
        }
    } else {
        echo "Aucun fichier sélectionné";
    }
*/
    }
    

    public function download_selected_files()
    {
        $this->load->helper('download');
        $this->load->library('zip');
        $selected_files = $this->input->post('selected_files');
        if(!empty($selected_files))
        {
            $tempFolderPath = FCPATH . 'temp_folder/';
            if (!is_dir($tempFolderPath)) {
                mkdir($tempFolderPath, 0777, true);
            }

            foreach($selected_files as $file_id)
            {
                $file = $this->table_model->recuperer_programme($file_id);
                if($file)
                {
                    $file_path = base_url("assets/upload/").$file->programme;
                   if(file_exists($file_path))
                    {
                        $files_contents = file_get_contents($file_path);
                        force_download(basename($file_path),$files_contents);
                    }
                    else{
                        //echo "Le fichier ".$file_path." n existe pas";
                        $files_contents = file_get_contents($file_path);
                        force_download(basename($file_path),$files_contents);
                   }

                }
            }
        }
        else{
            echo "Auccun fichier séléctionné";
        }
    }



    public function recuperer_programme()
    {
        print_r($this->table_model->recuperer_programme(6));
    }
    public function prosesUpload()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        $uploadData = array();
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }
     if($uploadData !== null){ // Jika Berhasil Upload

            // Insert ke Database 
            $insert = $this->table_model->upload($uploadData);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formation/ajout_programme_formation");
            }

        }
        else
            redirect("Formation/ajout_programme_formation");

}

 public function prosesUploadConvention()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/archive/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }
     if($uploadData !== null){ // Jika Berhasil Upload

            // Insert ke Database 
            $insert = $this->table_model->uploadconvention($uploadData);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formation/ajout_archive_convention");
            }

        }

}

public function modifier_programme()
{
    $this->table_model->modifier_programme($this->input->post("prix"),$this->input->post("id_formation"),$this->input->post("duree"),$this->input->post("id"),$this->input->post("organisme"));
    $taskTitle = "Modifier programme de formation";
      $description = "Modifier programme de formation";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
    echo "Modification OK";
}

 public function prosesUploadAssiduite()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/archive/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }
     if($uploadData !== null){ // Jika Berhasil Upload

            // Insert ke Database 
            $insert = $this->table_model->uploadassiduite($uploadData);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formation/ajout_archive_assiduite");
            }

        }

}

public function prosesUploadCertificat()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/archive/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }
     if($uploadData !== null){ // Jika Berhasil Upload

            // Insert ke Database 
            $insert = $this->table_model->uploadcertificat($uploadData);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formation/ajout_archive_certificat");
            }

        }

}

 public function prosesUploadFormulaire()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/archive/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }
     if($uploadData !== null){ // Jika Berhasil Upload

            // Insert ke Database 
            $insert = $this->table_model->uploadformulaire($uploadData);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formation/ajout_archive_formulaire");
            }

        }

}

 public function prosesUploadFacture()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/archive/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }
     if($uploadData !== null){ // Jika Berhasil Upload

            // Insert ke Database 
            $insert = $this->table_model->uploadfacture($uploadData);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formation/ajout_archive_facture");
            }

        }

}

public function prosesUploadEmargement()
    {
        // Panggil Model M_Welcome
        $this->load->model('table_model');

        // Hitung Jumlah File/Gambar yang dipilih
        //$jumlahData = count($_FILES['gambar']['name']);
        $jumlahData = count($_FILES['gambar']['name']);

        
        for ($i=0; $i < $jumlahData ; $i++)
        {
            $_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
            $_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['size']     = $_FILES['gambar']['size'][$i];
        
             // Konfigurasi Upload
            $config['upload_path'] = '/home/mafformael/www/cias/assets/archive/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';

            // Memanggil Library Upload dan Setting Konfigurasi
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){ // Jika Berhasil Upload

                $fileData = $this->upload->data(); // Lakukan Upload Data

                // Membuat Variable untuk dimasukkan ke Database
                $uploadData[$i]['programme'] = $fileData['file_name']; 



               
            }

             
           
        
    }
     if($uploadData !== null){ // Jika Berhasil Upload

            // Insert ke Database 
            $insert = $this->table_model->uploademargement($uploadData);
            
            if($insert){ // Jika Berhasil Insert
                echo "
                    <a href='".base_url()."'> Kembali </a> 
                    <br>
                    Berhasil Upload ";
            }else{ // Jika Tidak Berhasil Insert
                redirect("Formation/ajout_archive_emargement");
            }

        }

}



public function download_programme()
    {
        $this->load->helper('download');
        $nomfichier = $this->input->post("programme");
        $data = file_get_contents(base_url()."/assets/upload/".$nomfichier); // Read the file's contents
       // $name = "FORMATION_ADOBE_PHOTOSHOP_NIVEAU_1_LES_BASES.pdf";
        $name = $nomfichier;
        force_download($name, $data);

    }

    public function download_archive_convention()
    {
         $this->load->helper('download');
        $nomfichier = $this->input->post("programme");
        $data = file_get_contents(base_url()."/assets/archive/".$nomfichier); // Read the file's contents
       // $name = "FORMATION_ADOBE_PHOTOSHOP_NIVEAU_1_LES_BASES.pdf";
        $name = $nomfichier;
        force_download($name, $data);
    }

     public function download_archive_assiduite()
    {
         $this->load->helper('download');
        $nomfichier = $this->input->post("programme");
        $data = file_get_contents(base_url()."/assets/archive/".$nomfichier); // Read the file's contents
       // $name = "FORMATION_ADOBE_PHOTOSHOP_NIVEAU_1_LES_BASES.pdf";
        $name = $nomfichier;
        force_download($name, $data);
    }

     public function download_archive_formulaire()
    {
         $this->load->helper('download');
        $nomfichier = $this->input->post("programme");
        $data = file_get_contents(base_url()."/assets/archive/".$nomfichier); // Read the file's contents
       // $name = "FORMATION_ADOBE_PHOTOSHOP_NIVEAU_1_LES_BASES.pdf";
        $name = $nomfichier;
        force_download($name, $data);
    }

     public function download_archive_facture()
    {
         $this->load->helper('download');
        $nomfichier = $this->input->post("programme");
        $data = file_get_contents(base_url()."/assets/archive/".$nomfichier); // Read the file's contents
       // $name = "FORMATION_ADOBE_PHOTOSHOP_NIVEAU_1_LES_BASES.pdf";
        $name = $nomfichier;
        force_download($name, $data);
    }

     public function download_archive_emargement()
    {
         $this->load->helper('download');
        $nomfichier = $this->input->post("programme");
        $data = file_get_contents(base_url()."/assets/archive/".$nomfichier); // Read the file's contents
       // $name = "FORMATION_ADOBE_PHOTOSHOP_NIVEAU_1_LES_BASES.pdf";
        $name = $nomfichier;
        force_download($name, $data);
    }

public function supprimer_programme()
{
      $this->table_model->supprimer_programme($this->input->post("id"),$this->input->post("organisme"));

      $taskTitle = "Supprimer programme de Formation";
      $description = "Supprimer programme de Formation";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
}

public function supprimer_archive_formulaire()
{
      $this->table_model->supprimer_archive_formulaire($this->input->post("id"));
      $taskTitle = "Supprimer archive Formulaire";
      $description = "Supprimer archive Formulaire";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
}

public function supprimer_archive_assiduite()
{
      $this->table_model->supprimer_archive_formulaire($this->input->post("id"));
      $taskTitle = "Supprimer archive Assiduité";
      $description = "Supprimer archive Assiduité";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
}

public function supprimer_archive_facture()
{
      $this->table_model->supprimer_archive_facture($this->input->post("id"));
      $taskTitle = "Supprimer archive Facture";
      $description = "Supprimer archive Facture";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
}
public function supprimer_archive_convention()
{
      $this->table_model->supprimer_archive_convention($this->input->post("id"));
      $taskTitle = "Supprimer archive Convention";
      $description = "Supprimer archive Convention";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
}
public function supprimer_archive_certificat()
{
      $this->table_model->supprimer_archive_certificat($this->input->post("id"));
      $taskTitle = "Supprimer archive Certificat";
      $description = "Supprimer archive Certificat";
      
      $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
      
      $result = $this->tm->addNewTask($taskInfo);
}
public function supprimer_programme_formation()
{
    $this->table_model->supprimer_programme_formation();
    $taskTitle = "Supprimer programme de formation";
    $description = "Supprimer programme de formation";
    
    $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
    
    $result = $this->tm->addNewTask($taskInfo);
    echo "Suppression OK";
}

public function supprimer_archive_emargement()
{
    $this->table_model->supprimer_archive_emargement();
    $taskTitle = "Supprimer archive Emargement";
    $description = "Supprimer archive Emargement";
    
    $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
    
    $result = $this->tm->addNewTask($taskInfo);
    echo "Suppression OK";
}





public function afficher_programmes()
{
    print_r($this->table_model->afficher_programmes());
}


    public function ajout_programme_formation()
    {
       $this->global['pageTitle'] = 'Saisie des formations';
     //  $data['donneeformateur'] = $this->table_model->recuperer_formateur();
     //  $data['donneethematique'] = $this->table_model->recuperer_thematique();
     $data['organismes'] = $this->stagiaire_model->recuperer_organisme();
        
        $this->loadViews("formation/ajout_programme_formation", $this->global, $data , NULL);
        
    }

    public function liste_formations()
    {
       $this->global['pageTitle'] = 'Liste des formations';
       $data['donneeformation'] = $this->table_model->recuperer_formation();
      
         $data['donneethematique'] = $this->table_model->recuperer_thematique();
      
        $this->loadViews("formation/liste_formation", $this->global, $data , NULL);
        
    }

    public function liste_programmes()
    {
       $this->global['pageTitle'] = 'Liste des stages';
      
      
        $this->loadViews("formation/liste_programme", $this->global, NULL , NULL);
        
    }

    public function modifier_table_formation()
    {
        $this->table_model->modifier_table_formation();
        echo "Modification OK";
    }

    public function insertion_formation()
{

    $this->load->library('form_validation');
    $this->form_validation->set_rules('id_formation','ID formation','required');
    $this->form_validation->set_rules('nom_formation','Nom formation','required');
     $this->form_validation->set_rules('prix_formation','Prix formation','required');
      $this->form_validation->set_rules('duree_formation','Durée formation','required');
    if($this->form_validation->run()==true)
    {
      //  $config['upload_path']=  "/home/mafformael/www/cias/assets/images/";
      //  $config['allowed_types']='gif|jpg|png|jpeg|pdf';
      //  $config['encrypt_name'] = FALSE;
      //   $this->load->library('upload',$config);
     //   if($this->upload->do_upload("file")){
            //echo '<script>alert("aaaaaa")</script>';
           
      //      $data = array('upload_data' => $this->upload->data());

         $data  = array('id_formation' => $this->input->post('id_formation') ,
             'nom_formation' => $this->input->post('nom_formation') ,

            'prix_formation' => $this->input->post('prix_formation') ,
            'duree_formation' => $this->input->post('duree_formation') ,
                // 'nom_formateur' => $this->input->post('nom_formateur') ,
                    'nom_thematique' => $this->input->post('nom_thematique') ,
                    'organisme' => $this->input->post('organisme') ,
                  //  'programme' => $data['upload_data']['file_name']
                    //'programme' =>  $this->input->post('programme')

              );
    $this->table_model->inserer_formation($data);
        $array = array('success' => '<div class="alert alert-success">Enregistrement OK"></div>');
        $taskTitle = "Enregistrement Formation";
                $description = "Enregistrement Formation";
                
                $taskInfo = array('taskTitle'=>$taskTitle, 'description'=>$description, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->tm->addNewTask($taskInfo);
   // }
   // else
  //  {
        //echo '<script>alert("bbb")</script>';
    //    $data = array('upload_data' => $this->upload->data());

    //     $data  = array('id_formation' => $this->input->post('id_formation') ,
      //       'nom_formation' => $this->input->post('nom_formation') ,

    //        'prix_formation' => $this->input->post('prix_formation') ,
     //       'duree_formation' => $this->input->post('duree_formation') ,
                // 'nom_formateur' => $this->input->post('nom_formateur') ,
      //              'nom_thematique' => $this->input->post('nom_thematique') 
               
      //        );
   // $this->table_model->inserer_formation($data);
       // $array = array('success' => '<div class="alert alert-success">Enregistrement OK"></div>');
   // }
    }
    else
    {
        $array = array('error' => true,
            'error_idformation' => form_error('id_formation'),
            'error_nomformation' => form_error('nom_formation'),
             'error_prixformation' => form_error('prix_formation'),
              'error_dureeformation' => form_error('duree_formation'),

        );
    }
    echo json_encode($array);
   
   // echo "Enregistrement OK";
}

  public function afficher_formation()
    {
       // $this->load->model('elevemodel');
        //$nomeleve = $this->input->post("nomeleve");
        //$nomeleve = 59;
        $nom_formation = $this->input->post("nom_formation");
      //  $organisme = $this->input->post("organisme");

       //     $nom_stagiaire = "HULIN";
        echo $this->table_model->Recherche_formation($nom_formation);
    }

    public function Afficher_formation_convention()
    {
        $id =  $this->table_model->recherche_id($this->input->post('nom_formation'));
        // $nom_formation = $this->input->post("nom_formation");
          $nom_stagiaire = $this->input->post("nom_stagiaire");
            $prenom_stagiaire = $this->input->post("prenom_stagiaire");
       //     $nom_stagiaire = "HULIN";
        echo $this->table_model->Recherche_formation_convention($nom_stagiaire,$prenom_stagiaire,$id);
    }
public function afficher_formateur()
    {
       // $this->load->model('elevemodel');
        //$nomeleve = $this->input->post("nomeleve");
        //$nomeleve = 59;
        $nom_formateur = $this->input->post("nom_formateur");
        //$organisme = $this->input->post("organisme");
       //     $nom_stagiaire = "HULIN";
        echo $this->table_model->Recherche_formateur($nom_formateur);
    }



function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_formation($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nom_formation,
                );
                echo json_encode($arr_result);
            }
        }
    }

    function get_autocomplete_programme()
    {
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_programme($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->programme,
                );
                echo json_encode($arr_result);
            }
        }
    }

    function get_autocomplete_archive_convetion()
    {
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_archive_convention($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->programme,
                );
                echo json_encode($arr_result);
            }
        }
    }

      function get_autocomplete_archive_formulaire()
    {
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_archive_formulaire($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->programme,
                );
                echo json_encode($arr_result);
            }
        }
    }

    function get_autocomplete_formateur(){
        if (isset($_GET['term'])) {
            $result = $this->table_model->search_formateur($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nom_formateur,
                );
                echo json_encode($arr_result);
            }
        }
    }



public function fetch_data_formation()
    {
        error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
        $this->load->model('table_model');
        $this->load->library("pagination");
        //$nom = $this->input->post('nom_formation');
        //$mois = $this->input->post("mois");
    //  $annee = $this->input->post("annee");
    //  $datedebut = '2022-02-24';
    //  $datefin = '2022-02-24';

        //$couleur = 'Rouge';
        //$forme = 'Tigre';
        $config = array();
        //$couleur_filter = implode($couleur,",");
        $config["base_url"] = "#";
        //$config["total_rows"] = $this->paie_model->count_al_medicaments($nommedicament);
        //$config["total_rows"] = $this->paie_model->count_al_medicaments($nom);
     //   $config["total_rows"] = $this->table_model->count_al_formation($nom);
           $config["total_rows"] = $this->table_model->count_al_formation();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = "<ul class='pagination'>";
        $config["full_tag_close"] = "</ul>";
        $config["first_tag_open"] = "<li>";
        $config["first_tag_close"] = "</li>";
        $config["last_tag_open"] = "<li>";
        $config["last_tag_close"] = "</li>";
        $config["next_link"] = "&gt;";
        $config["next_tag_open"] = "<li>";
        $config["next_tag_close"] = "</li>";
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 1;
        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];
        $output = array(
            'pagination_link' => $this->pagination->create_links(),
            //'decoration_table' => $this->medicament_model->fetch_data_livraisons($config["per_page"],$start,$nommedicament)
        //  'decoration_table' => $this->paie_model->fetch_data_livraisons($config["per_page"],$start,$nom)
            'decoration_table' => $this->table_model->fetch_data_formation($start,$config["per_page"])
        
        );
        
        echo json_encode($output);
        
    }
public function test_prenom(){
    $this->table_model->recherche_prenom_formateur("PHILIPPE");
}

public function modifier_formation()
{
    $this->table_model->modifier_formation($this->input->post("id_formation"),$this->input->post("nom_formation"),$this->input->post("prix_formation"),$this->input->post("duree_formation"), $this->input->post("nom_thematique"),$this->input->post("organisme"));
}

public function liste_support()
{

    $data1 = $this->stagiaire_model->categorie_support();
    $output = '';
    $query = '';
    $output .= '
    <div class="table-responsive text-left">';
    foreach($data1 as $row1)
    {
        $output .= '<table id="maTable" class="table table-bordered table-striped">
        <tr style="background-color:orange;color:white;font-size:14pt">
            <td style="width:50%">Catégorie : </td><td style="width:50%" align="center">'.$row1->categorie.'</td></tr>';

    $data = $this->stagiaire_model->liste_support($row1->categorie);
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    
                    <th>Nom support</th>
                    
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                    
                        <td>'.$row->nom_support.'</td>
                        <td align="center"><a href="'.base_url()."/assets/support/".$row->fichier_support.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
    }
    $output .= '</table>';
        echo $output;
}
public function liste_archive_certificat()
{
    $data = $this->table_model->liste_archive_certificat();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_archive_assiduite()
{
    $data = $this->table_model->liste_archive_assiduite();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_archive_facture()
{
    $data = $this->table_model->liste_archive_facture();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_archive_emargement()
{
    $data = $this->table_model->liste_archive_emargement();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_archive_factures()
{
    $data = $this->table_model->liste_archive_factures($this->input->post("nom_programme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


public function liste_archive_assiduites()
{
    $data = $this->table_model->liste_archive_assiduites($this->input->post("nom_programme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_archive_emargements()
{
    $data = $this->table_model->liste_archive_emargements($this->input->post("nom_programme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}



public function liste_archive_certificats()
{
    $data = $this->table_model->liste_archive_certificats($this->input->post("nom_programme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}



public function liste_archive_formulaire()
{
    $data = $this->table_model->liste_archive_formulaire();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_archive_formulaires()
{
    $data = $this->table_model->liste_archive_formulaires($this->input->post("nom_programme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


public function liste_archive_convention()
{
    $data = $this->table_model->liste_archive_convention();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_archive_conventions()
{
    $data = $this->table_model->liste_archive_conventions($this->input->post("nom_programme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->programme.'</td>
                       
                        <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."/assets/archive/".$row->programme.'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function afficher_programme_formation1()
{
    print_r($this->table_model->afficher_programme_formation());
}

public function modifier_table_programme_1()
{
    $this->table_model->modifier_table_programme_1();
    echo "OK";
}

public function modif_programmes()
{
    $this->table_model->modif_programmes();
    echo "OK";
}

public function test_prog()
{
    print_r($this->table_model->afficher_programme_formation('MAF SAS'));
}


public function liste_programme_formation()
{
    $data = $this->table_model->afficher_programme_formation();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th class="border-primary">ID</th>
                    <th class="border-primary">Nom formation</th>
                    <th class="border-primary">Prix</th>
                    <th class="border-primary">Durée</th>
                    
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->id.'</td>
                        <td class="border-primary">'.$row->programme.'</td>
                        <td class="border-primary">'.$row->prix.'</td>
                        <td class="border-primary">'.$row->duree.'</td>
                       
                        <td class="border-primary"><button type="button" class="btn_modifier btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-id="'.$row->id.'" data-programme="'.$row->programme.'" data-prix="'.$row->prix.'" data-duree="'.$row->duree.'" data-organisme="'.$row->organisme.'" title="Modifier"><span class="fa fa-pencil" aria-hidden="true"></span></button></td>
                        <td class="border-primary"><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" data-organisme="'.$row->organisme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td class="border-primary"><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'" data-organisme="'.$row->organisme.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td class="border-primary"><a href="'.base_url()."assets/upload/".(($row->fichier_pdf) ? $row->fichier_pdf : $row->programme).'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_programme_formations()
{
    $data = $this->table_model->afficher_programme_formations($this->input->post("nom_programme"));
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                    <th class="border-primary">Prix</th>
                    <th class="border-primary">Durée</th>

                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>
                    <th class="border-primary"></th>

                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td class="border-primary">'.$row->id.'</td>
                        <td class="border-primary">'.$row->programme.'</td>
                        <td class="border-primary">'.$row->prix.'</td>
                        <td class="border-primary">'.$row->duree.'</td>
                        
                        <td class="border-primary"><button type="button" class="btn_modifier btn btn-warning btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" data-id_formation="'.$row->id_formation.'" data-prix="'.$row->prix.'" data-duree="'.$row->duree.'" data-organisme="'.$row->organisme.'" title="Modifier"><span class="fa fa-pencil" aria-hidden="true"></span></button></td>
                       <td><button type="button" class="btn_telecharger btn btn-primary btn-sm" data-id="'.$row->id.'" data-programme="'.$row->programme.'" data-organisme="'.$row->organisme.'" title="Supprimer"><span class="fa fa-cloud-download" aria-hidden="true"></span></button></td>
                         

                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id="'.$row->id.'"  data-organisme="'.$row->organisme.'" title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>

                        <td><a href="'.base_url()."assets/upload/".(($row->fichier_pdf) ? $row->fichier_pdf : $row->programme).'"  class="btn btn-success btn-sm" target="_blank"><span class="fa fa-eye" aria-hidden="true"></span></a>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function ajouter_formations_qualiopi()
{
  //error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
  $curl = curl_init();
 /* $valeur = array('nom_formation'=>$this->input->post("nom_formation"),
  'nom_formateur' => $this->input->post("nom_formateur"),
  'nom_stagiaire' => $this->input->post("nom_stagiaire")
  
);*/

  curl_setopt($curl, CURLOPT_URL, "https://maf-formation.org/kaliopi/admin/ajouter_formation_qualiopi");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, "id_formation=".$this->input->post("id_formation")."&nom_formation=".$this->input->post("nom_formation")."");
  //curl_setopt($curl, CURLOPT_COOKIE, "nom_formation=".$this->input->post("nom_formation"));
// curl_setopt($curl, CURLOPT_COOKIE, $valeur);
//  curl_setopt($curl, CURLOPT_COOKIE, "nom_formateur=".$this->input->post("nom_formateur"));
 // curl_setopt($curl, CURLOPT_COOKIE, "nom_stagiaire=".$this->input->post("nom_stagiaire"));

  $result = curl_exec($curl);
  curl_close($curl);

  echo $result;

}


public function liste_formation()
{
    $data = $this->table_model->afficher_formation();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom Cours</th>
                    <th>Prix</th>
                    <th>Durée</th>
                  
                    <th>Thématique</th>
                    <th colspan=3>Action</th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id_formation.'</td>
                        <td>'.$row->nom_formation.'</td>
                        <td>'.$row->prix_formation.'</td>
                         <td>'.$row->duree_formation.'</td>
                       
                          <td>'.$row->nom_thematique.'</td>
<td><button type="button" class="btn_modifier btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-nom_formation="'.$row->nom_formation.'" data-prix_formation="'.$row->prix_formation.'" data-duree_formation="'.$row->duree_formation.'" data-nom_thematique="'.$row->nom_thematique.'" data-organisme="'.$row->organisme.'" title="Modifier"><span class="fa fa-pencil" aria-hidden="true"></span></button></td>
<td><button type="button" class="btn_qualiopi btn btn-primary btn-sm" data-id_formation="'.$row->id_formation.'" data-nom_formation="'.$row->nom_formation.'" data-prix_formation="'.$row->prix_formation.'" data-duree_formation="'.$row->duree_formation.'" data-nom_thematique="'.$row->nom_thematique.'" title="Modifier">Qualiopi</button></td>
                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id_formation="'.$row->id_formation.'" data-organisme="'.$row->organisme.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}

public function liste_programme()
{
    $data = $this->table_model->afficher_formation();
        //$this->elevemodel->Dernier_ecolage(_s($row, "nomeleve"),_s($row, "idAnneeScolaire"))
        $output = '';
        $query = '';
        $output .= '
            <div class="table-responsive text-left">
                <table id="maTable" class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nom formation</th>
                  
                    <th>Programme</th>
                    <th colspan=2>Action</th>
                    
                </tr>
        
        ';
    
            foreach($data as $row)
            {
                $output .= '
                    <tr>
                        <td>'.$row->id_formation.'</td>
                        <td>'.$row->nom_formation.'</td>
                        <td>'.$row->programme.'</td>
                      
<td><button type="button" class="btn_modifier btn btn-warning btn-sm" data-id_formation="'.$row->id_formation.'" data-nom_formation="'.$row->nom_formation.'" data-prix_formation="'.$row->prix_formation.'" data-duree_formation="'.$row->duree_formation.'" data-nom_thematique="'.$row->nom_thematique.'" title="Modifier"><span class="fa fa-pencil" aria-hidden="true"></span></button></td>
                        <td><button type="button" class="btn_supprimer btn btn-danger btn-sm" data-id_formation="'.$row->id_formation.'"  title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button></td>


                  
                    </tr>
                
                ';
            }
            
        
        $output .= '</table>';
        echo $output;
}


public function supprimer_formation()
{
    $this->table_model->supprimer_formation($this->input->post("id_formation"),$this->input->post("organisme"));
}

public function display_formation(){
    print_r($this->table_model->display_formation());
}

}

?>