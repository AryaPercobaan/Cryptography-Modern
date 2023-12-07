
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function vigeneree()
	{
		$this->load->view('vigeneree');
	}

	public function vigenere()
	{
		$this->load->view('vigenere');
	}

	public function tranposisi()
	{
		$this->load->view('tranposisi');
	}

	public function hill()
	{
		$this->load->view('hill');
	}

	public function caesar()
	{
		$this->load->view('caesar');
	}

	public function double()
	{
		$this->load->view('double');
	}
	
	public function aes()
	{
		$this->load->view('aes');
	}

	public function des()
	{
		$this->load->view('des');
	}
	
	public function rsa()
	{
		$this->load->view('rsa');
	}

	public function diffie()
	{
		$this->load->view('diffie');
	}

	public function blog()
	{
		$data_blog = $this->User_model->select("blog");
		$blog['blog'] = $data_blog;
		$this->load->view('blog', $blog);
	}

	public function about()
	{
		$data_about = $this->User_model->select("about");
		$about['about'] = $data_about;
		$this->load->view('about', $about);
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function kontak()
	{
		$data_kontak = $this->User_model->select("kontak");
		$kontak['kontak'] = $data_kontak;
		$this->load->view('tabelkontak', $kontak);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function cek_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$cek_login = $this->User_model->login($username,$password);

		if(empty($cek_login)) redirect("/");
		else redirect(site_url('welcome/admin'));
	}

	public function admin()
	{
		$data_login = $this->User_model->select("login");
		$login['login'] = $data_login;
		$this->load->view('admin',$login);
	}

	public function tabelblog()
	{
		$data_blog = $this->User_model->select("blog");
		$blog['blog'] = $data_blog;
		$this->load->view('tabelblog', $blog);
	}

	public function tabelabout()
	{
		$data_about = $this->User_model->select("about");
		$about['about'] = $data_about;
		$this->load->view('tabelabout', $about);
	}

	public function createuser()
	{
		$this->load->view('adduser');
	}

	public function insertuser()
	{
		$id_login = $this->input->post('id_login');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data_input = array('username' => $username,
						'password' => $password);
		if($id_login==""){
			$this->User_model->insert($data_input,'login');
			redirect(site_url('welcome/admin'));
		}else{
			$this->User_model->update($id_login,$data_input,'login','id_login');
			redirect(site_url('welcome/admin'));
		}
	}

	public function update($id)
	{
		$login = $this->db->where('id_login',$id)->get('login')->row();
		$data['login'] = $login;
		$this->load->view('adduser',$data);
	}

	public function delete($id)
	{
		$this->User_model->delete($id,'login', 'id_login');
		redirect(site_url('welcome/admin'));
	}
}
?>
