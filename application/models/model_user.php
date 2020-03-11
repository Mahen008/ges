<?php
	class Model_User extends CI_Model
	{
		//verifier l'authentification des utilisateurs
		public function verifUser($login,$password)
		{
			/*$authentification = $this->db->where(['email' => $email,'password' => $password])
									->get('user');

			if ($authentification->num_rows() > 0) {
				return $authentification->row();
			}*/

			$this->db->select('*');
			$this->db->from('user');
			$this->db->where(array('login' => $login,'password' => $password));
			$authentification = $this->db->get();
			return $authentification->row();
		}

		//affichage n article de bureau
		public function getAllArticleBureau()
		{
			$this->db->select('*');
			$this->db->from('article');
			$this->db->where(array('Type' => 'AB'));
			$artclbur = $this->db->get();
			return $artclbur->result();
		}

		//insérer un utilisateur
		public function insererUser($data)
		{
			return $this->db->insert("user",$data);
		}

		//afficher les utilisateurs
		public function affichUser()
		{
			$users = $this->db->get("user");
			return $users->result();
		}

		//editer un utilisateur
		public function getUnUser($user_id)
		{
			$unUser = $this->db->get_where('user',array('user_id' => $user_id));
			if ($unUser->num_rows() > 0) {
				return $unUser->row();
			}
		}

		//modifier un utilisateur
		public function updateUser($user_id,$data)
		{
			return $this->db->where('user_id',$user_id)
							->update('user',$data);
		}

		//supprimer un utilisateur
		public function suppUser($user_id)
		{
			return $this->db->delete('user',['user_id' => $user_id]);
		}
	}
?>