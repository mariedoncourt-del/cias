<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatgptController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->library('curl'); // Chargez la bibliothèque cURL de CodeIgniter
    }

    public function chatgpt()
    {
        $this->load->view('stagiaire/view');
    }

    public function index() {
        $api_key = getenv('CHATGPT_API_KEY') ?: $this->config->item('chatgpt_api_key');

        $message = $this->input->post('message'); // Récupérez le message du formulaire ou de la requête POST

        $headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $api_key,
            
        );

        $data = array('model' => 'gpt-3.5-turbo',
            'messages' => array(
                array('role' => 'system', 'content' => 'You are a helpful assistant.')
            )
        );

        $url = 'https://api.openai.com/v1/chat/completions'; // Endpoint de l'API

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($response, true);
        print_r($result);
        // Traitez $result et envoyez la réponse à la vue
    }
}
