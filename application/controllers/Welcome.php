 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent :: __construct();
		$this->load->model('model_user');
	}

	public function index()
	{
		//$this->load->view('acceuil');
		$this->load->view('login');
	}

	public function signin()
	{
		//echo "s'inscrire";
		$this->form_validation->set_rules("log","Login",'required');
		$this->form_validation->set_rules("pass","Password",'required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if ($this->form_validation->run()) {

			$login = $this->input->post("log");    //$email = $_POST['emails'];
			//$password = $this->input->post("pass");
			$password = md5($this->input->post("pass"));
			
			$userExist = $this->model_user->verifUser($login,$password);
			
			
			if ($userExist) {
				
				if ($userExist->role == 'Admin') {
						$sessionData = [
						'user_id' => $userExist->user_id,
						'nom_user' => $userExist->nom_user,
						'role' =>$userExist->role,
						'login' =>$userExist->login
					];

					$this->session->set_userdata($sessionData);
					
					return redirect(base_url()."index.php/users/affichageUser");
				}

				elseif ($userExist->role == 'Recep') {
						$sessionData = [
						'user_id' => $userExist->user_id,
						'nom_user' => $userExist->nom_user,
						'role' =>$userExist->role,
						'login' =>$userExist->login
					];

					$this->session->set_userdata($sessionData);
					
					return redirect(base_url()."index.php/Frontend/acceuil");
				}

				elseif ($userExist->role == 'Med') {
						$sessionData = [
						'user_id' => $userExist->user_id,
						'nom_user' => $userExist->nom_user,
						'role' =>$userExist->role,
						'login' =>$userExist->login
					];

					$this->session->set_userdata($sessionData);
					
					return redirect(base_url()."index.php/Observation/AjoutObs");
				}
				elseif ($userExist->role == 'Tec') {
						$sessionData = [
						'user_id' => $userExist->user_id,
						'nom_user' => $userExist->nom_user,
						'role' =>$userExist->role,
						'login' =>$userExist->login
					];

					$this->session->set_userdata($sessionData);
					
					return redirect(base_url()."index.php/medicament/affichMedicament");
				}
				//echo "validation passé";
			} 

			else {
				$this->session->set_flashdata('message','Login ou mot de pass incorrect');
				return redirect(base_url());
			}
			//echo "validation passé";
			
		}
		else
		{
			return redirect(base_url());
			// $this->index();
			// echo validation_errors();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("user_id");
		return redirect(base_url()."index.php/Frontend/index");
	}
}
