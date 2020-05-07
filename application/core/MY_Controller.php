<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * ---------------------------------------------
     * Render view
     * ---------------------------------------------
     */
    protected function render_view($view, $data = FALSE)
    {
        $this->load->view('partials/header', $data);
        $this->load->view($view);
        $this->load->view('partials/footer');
    }

}