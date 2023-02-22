<?php namespace App\Controllers;

class Cases extends BaseController
{
	public function index()
	{
		echo "cases";
    }
    
    public function moldShop(){
        $dataMoldScreen = $this->ms->findAll();
        $dataMoldScreenHist = $this->msf->findAll();
        $data = array(
            'moldTable'=>$dataMoldScreen,
            'moldTableHist'=>$dataMoldScreenHist
        );
        // var_dump($data);
        echo view('view/header');
        echo view('view/moldshop',$data);
        echo view('view/footer');

    }

    public function new()
	{
        if(!$this->session->logged_in){
            return redirect()->to(base_url().'/');
        }

		$data = array(
            "view" => 'cases/new',
            "session" => $this->session
		);
		$dataHeader = array(
            "title" => 'Nuevo Caso'
        );
		$dataFooter = array();


		echo view('header_overlay', $dataHeader);
		echo view('overlay', $data);
		echo view('footer_overlay', $dataFooter);
	}

    public function list()
	{
        if(!$this->session->logged_in){
            return redirect()->to(base_url().'/');
        }

		$data = array(
            "view" => 'cases/list',
            "session" => $this->session
		);
		$dataHeader = array(
            "title" => 'Listado de Casos'
        );
		$dataFooter = array();


		echo view('header_overlay', $dataHeader);
		echo view('overlay', $data);
		echo view('footer_overlay', $dataFooter);
	}

	//--------------------------------------------------------------------

}
