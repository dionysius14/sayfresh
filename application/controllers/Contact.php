<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $st = new Stencil();
        $this->load->model('home_model');
        $st->layout('login_layout');
    }

    public function index() {
        $this->session->set_userdata("last_url", "contact");
        $common['title'] = 'Contact Us';
        $common['kategori'] = $this->home_model->get_kategori();
        $common['branch'] = $this->home_model->get_branch();
        $common['profile'] = $this->home_model->get_profile();
        $st = new Stencil();
        $st->layout('menu_layout');
        $st->slice('head');
        $st->paint('contact_view', $common);
    }

    public function insertcontact() {
				$data = array(
					'kontak_nama' => $_POST['kontak_nama'],
					'kontak_email' => $_POST['kontak_email'],
					'kontak_phone' => $_POST['kontak_phone'],
					'kontak_keterangan' => $_POST['kontak_keterangan']
				);
				$this->home_model->insertkontak($data);
				$this->session->set_userdata('kontak_success', 1);
                // $this->EmailSend($data);
				

    }
    public function EmailSend($data)
    {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'mail.nuranijaya.co.id', //change this
                'smtp_port' => 587,
                'smtp_user' => 'contact@nuranijaya.co.id',
                'smtp_pass' => 'nuranijaya1234',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
           
        );
         
        $this->load->library('email', $config);    
        $this->email->set_newline("\r\n"); /* for some reason it is needed */
         
        $this->email->from('contact@nuranijaya.co.id', 'nuranijaya.co.id');
        $email = $data['kontak_email'];
        $name = $data['kontak_nama'];
        $telp = $data['kontak_phone'];
        $subject = "Contact Us";
        $pesan = $data['kontak_keterangan'];
        $message ='<b>Nama :</b><br/>'. $name. '<br/><br/><b>E-mail :</b><br/>' . $email. '<br/><br/><b>Telp:</b><br/>' . $telp. '<br/><br/><b>Pesan:</b><br/>'. $pesan. '<br/><br/><br/><br/>
            Dikirim melalui kontak website Nurani Jaya Energi | nuranijaya.co.id
                        '; 
                        
        $this->email->to('contact@nuranijaya.co.id');
        $this->email->subject('Contact Us nuranijaya.co.id');
        $this->email->message($message);
         
        if($this->email->send())
        {
            $this->email->from('contact@nuranijaya.co.id', 'Nurani Jaya Energi | nuranijaya.co.id');
            $email = $data['kontak_email'];
            $name = $data['kontak_nama'];
            $telp = $data['kontak_phone'];
            $pesan = $data['kontak_keterangan'];
            // $list = array($email);
            $message =  'Dear '.$name.', <br/><br/>
                            Thank you for your message.<br/>
                            We will respond your message in 2 days.<br/><br/>
                            If you need more information, please contact us.<br/><br/>
                            Best Regards,<br/>
                            CV. Nurani Jaya Energi <br/>
                            Address: JL. Bukit Barisan NO 20, Tenayan Raya, Tangkerang Timur, Pekanbaru Riau 28131 (Depan SMU Negeri 10 Pekanbaru) <br/>
                            Email: nurani_je@yahoo.com <br/>
                            TELP/ FAX : 0851-0063-3893 / 0761- 8405-521  <br/>
                        ';
                
            $this->email->to($email);
            $this->email->subject('Nurani Jaya Energi | nuranijaya.co.id Reply to: '.$name);
            $this->email->message($message);
                
            if($this->email->send())
            {
              echo "<script>
                    //alert('Email sent!');
                    </script>";            
                redirect('home');
            }
            else
            {
                echo "<script>
                    alert('Email failed to send!');
                    </script>"; 
                    show_error($this->email->print_debugger());
            }
        }
        else
        {
            echo "<script>
                    alert('Email failed to send!');
                    </script>"; 
                    show_error($this->email->print_debugger());
        }
        
    }

}
