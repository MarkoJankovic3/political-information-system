<?php
class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
  }

  public function view($page = 'home')
  {
    $this->load->helper('url_helper');
          if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }

          $data['title'] = ucfirst($page); // Capitalize the first letter
            
          if ($_SESSION['logged_in'] == true) {
            $this->load->view('templates/logged_header.php');
          } else {
            $this->load->view('templates/header.php');
          }
          $this->load->view('pages/'.$page, $data);
          $this->load->view('templates/footer.php');
  }
}