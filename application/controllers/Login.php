<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('stagiaire_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->isLoggedIn();
    }
    
    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
   
        //    redirect('/dashboard');
            $this->load->view('users/login');
          // $this->load->view('users/addNew');
        }
        else
        {
            $this->envoyer_mail();
            redirect('/dashboard');
        }
    }
    
    
    
public function envoyer_mail()
{
  if($this->stagiaire_model->recherche_date_email()==false)
  {
    $data = array('date_mail'=>date('Y-m-d'));
    $this->stagiaire_model->enregistrer_mail($data);
  error_reporting(E_ALL); ini_set('display_errors',0); ini_set('log_errors',1) /* v1.0 fix */;
    $data = $this->stagiaire_model->afficher_convention();

        $output = '';
        $query = '';
    $texte = '';
            foreach($data as $row)
            {
                
$start_date = strtotime(date('Y-m-d'));
     
$end_date = strtotime($this->stagiaire_model->peremption_dossier($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation));
//$interval = date_diff(new DateTime($start_date), new DateTime($end_date));
$diff_in_days = floor(($end_date - $start_date) / (60 * 60 * 24));
if(($diff_in_days<=15) && ($diff_in_days>7))
{
  $texte .= '<table border=1 width=80%><tr><td colspan=6 align="center"><b>ALERTE AVANT EXPIRATION : </b></td></tr><tr><td><b>Jours restants</b></td><td><b>Nom et prénom</b></td><td><b>Formation</b></td><td><b>Prix</b></td><td><b>Durée</b></td><td><b>Formateur</b></td></tr>';
  $texte .= '<tr><td>'.$diff_in_days.' jours </td><td>'.$row->nom_stagiaire.' '.$row->prenom_stagiaire.'</td><td>'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>';
  $texte .= '<td>'.$this->stagiaire_model->recherche_duree_formations($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).' ';
  $texte .= ''.$this->stagiaire_model->recherche_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'</td></tr>';
  $texte .= '</table><br><br>';
}

else{
  if(($diff_in_days<=7) && ($diff_in_days>1))
{
  $texte .= '<table border=1 width=80%><tr><td colspan=6 align="center"><b>ALERTE AVANT EXPIRATION : </b></td></tr><tr><td><b>Jours restants</b></td><td><b>Nom et prénom</b></td><td><b>Formation</b></td><td><b>Prix</b></td><td><b>Durée</b></td><td><b>Formateur</b></td></tr>';
  $texte .= '<tr><td>'.$diff_in_days.' jours </td><td>'.$row->nom_stagiaire.' '.$row->prenom_stagiaire.'</td><td>'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>';
  $texte .= '<td>'.$this->stagiaire_model->recherche_duree_formations($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).' ';
  $texte .= ''.$this->stagiaire_model->recherche_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'</td></tr>';
  $texte .= '</table><br><br>';
}
else{
  if($diff_in_days==1)
  {
    $texte .= '<table border=1 width=80%><tr><td colspan=6 align="center"><b>ALERTE AVANT EXPIRATION : </b></td></tr><tr><td><b>Jours restants</b></td><td><b>Nom et prénom</b></td><td><b>Formation</b></td><td><b>Prix</b></td><td><b>Durée</b></td><td><b>Formateur</b></td></tr>';
    $texte .= '<tr><td>'.$diff_in_days.' jours </td><td>'.$row->nom_stagiaire.' '.$row->prenom_stagiaire.'</td><td>'.$this->stagiaire_model->recherche_nom_formation($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prix_formations($row->id_formation).'</td>';
    $texte .= '<td>'.$this->stagiaire_model->recherche_duree_formations($row->id_formation).'</td><td>'.$this->stagiaire_model->recherche_prenom_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).' ';
    $texte .= ''.$this->stagiaire_model->recherche_formateurss($row->nom_stagiaire,$row->prenom_stagiaire,$row->id_formation).'</td></tr>';
    $texte .= '</table><br><br>';
  } 

  else{
 
}
}
}

 
   
 


                  
  
                
   
           }
            
        
  if($texte!="")
  {
    $this->load->library('email');
    $config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
//$config['newline'] = "\r\n";

$this->email->initialize($config);


        $from_email = "samiharilaza@miav-service.com";
        //$to_email = "samiharilaza@gmail.com";
        $to_email = "maformationsas@gmail.com";

      // $from_email = "samiharilaza@miav-service.com";
       //$to_email = "samiharilaza@miav-service.com";
        //Load email library
       
        $this->email->from($from_email, 'Dossier expiré');
        $this->email->to($to_email);
        $this->email->subject('Email via MAF');
        $message = ob_start(); 

        $message = '<html><body>';
        $message .= '<h1>EMail via MAF</h1>';
        $message .= '<div>'.$texte.'</div>';
        $message .= '</body></html>';
        $message .= ob_get_contents();
        $this->email->message($message);
        // Send mail
        $this->email->send();

        echo "Mail envoyé";
  }
  }
}

    /**
     * This function used to logged in user
     */
    public function loginMe()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $ip = $this->input->ip_address();

            // --- Protection anti-brute-force (5 tentatives max / 15 min par IP) ---
            if ($this->login_model->isIpBlocked($ip))
            {
                $this->session->set_flashdata('error', 'Trop de tentatives de connexion. Veuillez r&eacute;essayer dans 15 minutes.');
                redirect('login');
                return;
            }

            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('password');
            
            $result = $this->login_model->loginMe($email, $password);
            
            if (!empty($result))
            {
                if ($result->isAdmin != SYSTEM_ADMIN && ($result->roleStatus == 2 || $result->isRoleDeleted == 1))
                {
                    $this->login_model->logLoginAttempt($ip, $email, false);
                    $this->session->set_flashdata('error', 'The user doesn\'t have any role or the role is deactivated');
                    redirect('login');
                }

                // Log connexion reussie
                $this->login_model->logLoginAttempt($ip, $email, true);

                $lastLogin = $this->login_model->lastLoginInfo($result->userId);

                $accessInfo = $this->accessInfo($result->roleId);

                $sessionArray = array('userId'=>$result->userId,
                                        'role'=>$result->roleId,
                                        'roleText'=>$result->role,
                                        'name'=>$result->name,
                                        'isAdmin'=>$result->isAdmin,
                                        'accessInfo'=>$accessInfo,
                                        'lastLogin'=> $lastLogin->createdDtm,
                                        'isLoggedIn' => TRUE
                                );

                $this->session->set_userdata($sessionArray);

                unset($sessionArray['userId'], $sessionArray['isLoggedIn'], $sessionArray['lastLogin'], $sessionArray['accessInfo']);

                $loginInfo = array("userId"=>$result->userId, "sessionData" => json_encode($sessionArray), "machineIp"=>$_SERVER['REMOTE_ADDR'], "userAgent"=>getBrowserAgent(), "agentString"=>$this->agent->agent_string(), "platform"=>$this->agent->platform());

                $this->login_model->lastLogin($loginInfo);
                
                redirect('/dashboard');
            }
            else
            {
                // Log tentative echouee
                $this->login_model->logLoginAttempt($ip, $email, false);
                $this->session->set_flashdata('error', 'Email ou mot de passe incorrect.');
                redirect('login');
            }
        }
    }

    /**
     * This function used to load forgot password view
     */
    public function forgotPassword()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('users/forgotPassword');
        }
        else
        {
            redirect('/dashboard');
        }
    }
    
    /**
     * This function used to generate reset password request link
     */
    function resetPasswordUser()
    {
        $status = '';
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login_email','Email','trim|required|valid_email');
                
        if($this->form_validation->run() == FALSE)
        {
            $this->forgotPassword();
        }
        else 
        {
            $email = strtolower($this->security->xss_clean($this->input->post('login_email')));
            
            if($this->login_model->checkEmailExist($email))
            {
                $encoded_email = urlencode($email);
                
                $this->load->helper('string');
                $data['email'] = $email;
                $data['activation_id'] = random_string('alnum',15);
                $data['createdDtm'] = date('Y-m-d H:i:s');
                $data['agent'] = getBrowserAgent();
                $data['client_ip'] = $this->input->ip_address();
                
                $save = $this->login_model->resetPasswordUser($data);                
                
                if($save)
                {
                    $data1['reset_link'] = base_url() . "resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $this->login_model->getCustomerInfoByEmail($email);

                    if(!empty($userInfo)){
                        $data1["name"] = $userInfo->name;
                        $data1["email"] = $userInfo->email;
                        $data1["message"] = "Reset Your Password";
                    }

                    $sendStatus = resetPasswordEmail($data1);

                    if($sendStatus){
                        $status = "send";
                        setFlashData($status, "Reset password link sent successfully, please check mails.");
                    } else {
                        $status = "notsend";
                        setFlashData($status, "Email has been failed, try again.");
                    }
                }
                else
                {
                    $status = 'unable';
                    setFlashData($status, "It seems an error while sending your details, try again.");
                }
            }
            else
            {
                $status = 'invalid';
                setFlashData($status, "This email is not registered with us.");
            }
            redirect('/forgotPassword');
        }
    }

    /**
     * This function used to reset the password 
     * @param string $activation_id : This is unique id
     * @param string $email : This is user email
     */
    function resetPasswordConfirmUser($activation_id, $email)
    {
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);
        
        // Check activation id in database
        $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
        
        $data['email'] = $email;
        $data['activation_code'] = $activation_id;
        
        if ($is_correct == 1)
        {
            $this->load->view('users/newPassword', $data);
        }
        else
        {
            redirect('/login');
        }
    }
    
    /**
     * This function used to create new password for user
     */
    function createPasswordUser()
    {
        $status = '';
        $message = '';
        $email = strtolower($this->input->post("email"));
        $activation_id = $this->input->post("activation_code");
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('password','Password','required|max_length[20]');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        }
        else
        {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            
            // Check activation id in database
            $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
            
            if($is_correct == 1)
            {                
                $this->login_model->createPasswordUser($email, $password);
                
                $status = 'success';
                $message = 'Password reset successfully';
            }
            else
            {
                $status = 'error';
                $message = 'Password reset failed';
            }
            
            setFlashData($status, $message);

            redirect("/login");
        }
    }

    private function accessInfo($roleId)
    {
        $finalMatrixArray = [];
        $matrix = $this->login_model->getRoleAccessMatrix($roleId);
        
        if(!empty($matrix)) {
            $accessMatrix = json_decode($matrix->access);
            foreach($accessMatrix as $moduleMatrix) {
                $finalMatrixArray[$moduleMatrix->module] = (array) $moduleMatrix;
            }
        }
        
        return $finalMatrixArray;
    }
}

?>