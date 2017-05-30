<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view("sections/slider");
		$this->load->view('sections/why-choose');
		// $this->load->view("sections/want-more");
		$this->load->view("sections/contact");
		$this->load->view('template/footer');
	}

	public function sendInformation(){
		$insert = array(
			'name'			=>	$this->input->post('name'),
			'telphone'		=>	$this->input->post('phone'),
			'email'			=>	$this->input->post('email'),
			'observation'	=>	$this->input->post('obs'),
		);

		$message = "Contanto de interesse através do site: " . site_url();
		$message .= "\n";
			$message .= "Nome: " . $insert['name']. "\n";
			$message .= "Telefone: " . $insert['telphone']. "\n";
			$message .= "E-mail: " . $insert['email']. "\n";
			$message .= "Observação: \n" . $insert['observation']. "\n";
		$message.= "";

		$this->load->library('email');
        $this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from($this->input->post('email'));
        $this->email->to("praias@praias.com");
        $this->email->cc("enzo@praias.com");
        $this->email->subject('Praia Atlântica - Download das plantas');
        $this->email->message($message);
		if($this->email->send()){

			$this->client_model->insert($insert);

			$this->conversion();

		}
	}

	public function downloadPlant(){

		$message = "Olá, acesse nosso driver para fazer download / visualizar a planta:";
		$message .="\n https://drive.google.com/open?id=0B-yTn1Lu6L40TnVfRW5NZjFKaDA";
		$message .= "\n Agradecemos o contato";

		$insert = array(
			'email'			=>	$this->input->post('email'),
			'plant_link'	=>	"https://drive.google.com/open?id=0B-yTn1Lu6L40TnVfRW5NZjFKaDA",
			'data'			=>  date("Y-m-d"),
		);

		$this->load->library('email');
        $this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from("praias@praias.com");
        $this->email->to($this->input->post('email'));
        $this->email->cc("enzo@praias.com");
        $this->email->subject('Praia Atlântica - Download das plantas');
        $this->email->message($message);
        if($this->email->send()){
			
        	$this->plant_request_model->insert($insert);

			$this->conversion();
		}
	}

	public function contact(){

		// $insert = array(
		// 	'name'			=>	$this->input->post('contact-form-name'),
		// 	'email'			=>	$this->input->post('contact-form-email'),
		// 	'message'		=>	$this->input->post('contact-form-message'),
		// 	'date'			=>  date("Y-m-d"),
		// );

		$message = "O ". $this->input->post('contact-form-name');
		$message .= " entrou em contato através do formulário.\n";
		$message .= "Informações do contato:\n";		

		$message .= "Nome: " . $this->input->post('contact-form-name') . "\n";
		$message .= "E-mail: " . $this->input->post('contact-form-email') "\n";
		$message .= "Endereço: " . $this->input->post('address') . "\n";
		if ($this->input->post('complement')) {
			$message .= "Complemento: " . $this->input->post('complement') . "\n";
		}
		$message .= "Bairro: " . $this->input->post('neighborhood') . "\n";
		$message .= "Cidade: " . $this->input->post('city') . "\n";
		$message .= "CEP: " . $this->input->post('zipcode') . "\n";
		$message .= "Telefone: " . $this->input->post('tel') . "\n";
		$message .= "Celular: " . $this->input->post('mobile') . "\n";
		$message .= "Mensagem:\n";
		$message .= $this->input->post('contact-form-message');

		$this->load->library('email');
        $this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from($this->input->post('email'));
        $this->email->to("mr.tyco@gmail.com");
        $this->email->subject('Desktop - Formulário de contato');
        $this->email->message($message);
        // if($this->email->send()){
	       //  $this->contact_form_model->insert($insert);

        // }
		$this->conversion();

	}

	public function conversion(){
		?>
			
			<h1>Obrigado pelo contato e visita!</h1>
			<p>
				Obrigado por entrar em contato.

				A partir de agora, iremos verificar qual tecnologia está disponível em sua região (Fibra ótica, ADSL, VDSL ou  rádio) e no prazo máximo de 48 horas entraremos em contato.
			</p>
			<p>
				<a href="<?=site_url('/'); ?>">Voltar ao site</a>
			</p>

		<?php
	}
}
