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
    public function index(){

        $this->load->view('login');
        

    }
    
    public function rezultat()
    {
        $this->load->model('vprasalnik');
        $this->load->view('rezultat');
    }
    
    public function preveri()
    {
      //code goes here
      // for example: getting the post values of the form:
        $form_data = $this->input->post();
      // or just the username:
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
        $this->load->model('Poglejvbazo');
        $rezultat = $this->Poglejvbazo->preveri($username,$password);
        $data ['meni'] = "usermeni.php";
        $data ['vsebina'] = "homepage.php";
        $dataA ['meniA'] = "adminmeni.php";
        $dataA ['vsebinaA'] = "domacaStran.php";
        
        if($rezultat){
            if ($username == 'admin'){
                $this->load->view('upravitelj',$dataA);
            }else{
                $this->load->view('osnova',$data);
            }
        }else{
            $this->load->view('napaka');
        }
    }  
}
