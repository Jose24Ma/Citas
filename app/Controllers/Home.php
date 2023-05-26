<?php 
namespace App\Controllers;

use App\Models\Usuarios;

use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{	
	public function view($page ='home'){
		if(! is_file(APPPATH.'Views/pages/'.$page.'.php')){
			throw new PageNotFoundException($page);
		}
	}

    public function menu(){
        return view('Views/menu');
    }

    public function conGeneral(){
        return view('Views/ConGeneral');
    }
}
	