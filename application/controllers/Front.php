<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	
	 function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['user_data']="";
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		$this->load->model('Front_model');
		$this->load->library('parser');
		$this->load->library('session');
		$this->load->library('Upload');
		$this->load->library('email');
		$this->load->library('form_validation');
	
	}
	
	
	function index()
	{
		$this->parser->parse('Header',$this->data);
		$this->load->view('Schoolweb');
		$this->parser->parse('Footer',$this->data);
	}
	
	function feature()
	{
		$this->parser->parse('Header',$this->data);
		$this->load->view('Feature');
		$this->parser->parse('Footer',$this->data);
	}

	function form()
	{
		$this->parser->parse('Header',$this->data);
		$this->load->view('Form');
		$this->parser->parse('Footer',$this->data);
	}
	function Contactus()
	{
		$this->parser->parse('Header',$this->data);
		$this->load->view('Contactus');
		$this->parser->parse('Footer',$this->data);
	}
	function terms()
	{
		$this->parser->parse('Header',$this->data);
		$this->load->view('Terms');
		$this->parser->parse('Footer',$this->data);
	}
	
	
	function About()
	{
		$this->parser->parse('Header',$this->data);
		$this->load->view('About');
		$this->parser->parse('Footer',$this->data);
	}

function insert(){
	
		$data=array(
		'First_name'=>$this->input->post('First_name'),
		'Last_name'=>$this->input->post('Last_name'),
		'Email'=>$this->input->post('Email'),
		'No'=>$this->input->post('No'),
		'ERP'=>$this->input->post('ERP'),
		'Institution'=>$this->input->post('Institution'),
		'Type'=>$this->input->post('Type'),
		'Role'=>$this->input->post('Role'),
		'Website'=>$this->input->post('Website'),
		'Message'=>$this->input->post('Message'));
		$id=$this->Front_model->insert('form',$data);
		
		redirect('Front/email/'.$id);
	}
	
	 function email($id=false)
	{
		$result=$this->Front_model->result_application($id);
			//print_r($result);die;
			$subject="Zero ERP:Request for trial of Zero ERP Education ";
			$name=($result[0]->First_name);
			$name1=($result[0]->Last_name);
			$no=($result[0]->No);
			$erp=($result[0]->ERP);
			$institution=($result[0]->Institution);
			$type=($result[0]->Type);
			$role=($result[0]->Role);
			$website=($result[0]->Website);
			$message=($result[0]->Message);
			
			
			$message= "<html><body><h3>Hello:Admin </h3><p> A request is arrived for a trial of ZeroERP Education software. Kindly look through its detail.<br>Name=$name.$name1 <br> Mobile no=$no <br> Got Information about Zero ERP from=$erp<br>
			Name of institution=$institution <br>Institution type=$type <br> Role of a person in institutoion=$role <br> website link=$website<br>message=$message.";
			
			/*
			 This example shows settings to use when sending via Google's Gmail servers.
--
			
			//SMTP needs accurate times, and the PHP time zone MUST be set
			//This should be done in your php.ini, but this is how to do it if you don't have access to that*/
			date_default_timezone_set('Etc/UTC');
			
			require 'PHPMailer/PHPMailerAutoload.php';
			
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();
			
			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 0;
			
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			
			//Set the hostname of the mail server
			$mail->Host = 'smtp.gmail.com';
			
			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 587;
			
			//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = 'tls';
			
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			
			//Username to use for SMTP authentication - use full email address for gmail
			$mail->Username = "dev4junction@gmail.com";
			
			//Password to use for SMTP authentication
			$mail->Password = 'initial1$';
			
			//Set who the message is to be sent from
			//$mail->setFrom($result->,$name);
			
			//Set an alternative reply-to address
			//$mail->addReplyTo('dev4junction@gmail.com', $name);
			
			//Set who the message is to be sent to
			$mail->addAddress('info@junctiontech.in');
			
			//Set the subject line
			$mail->Subject = $subject;
			
			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML($message);
			
			//Replace the plain text body with one created manually
			$mail->AltBody = 'This is a plain-text message body';
			
			//Attach an image file
			//$mail->addAttachment($uploadfile,$filename);
			
			//send the message, check for errors
			
			
				if (!$mail->send()) 
				{
					print "We encountered an error sending your form";
						
				}
				else
				{
					?><script> alert('Your form Registered Successfully Please wait . We will shortly contact you !!!!');</script><?php
					redirect('Front/form','refresh');
				}
			} 
			
			
	
	
		
} 
