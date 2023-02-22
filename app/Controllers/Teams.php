<?php namespace App\Controllers;

class Teams extends BaseController
{
    public function index()
    {
        if (!$this->session->logged_in) {
            return redirect()->to(base_url() . '/');
        }
        $data = array(
            "view" => 'teams/index',
            "session" => $this->session
        );
        $dataHeader = array(
            "title" => 'Teams Administration'
        );
        $dataFooter = array();
        echo view('header_overlay', $dataHeader);
        echo view('overlay', $data);
        echo view('footer_overlay', $dataFooter);
    }
	//--------------------------------------------------------------------

}
