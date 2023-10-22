<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MascotasController extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $mascotasModel = model('MascotasModel');
        $data['mascotas']=$mascotasModel->findAll();

        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        return view('common/head').
               view('common/menu').
               view('mascotas/mostrar',$data).
               view('common/footer');
    }

    public function agregar(){
        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $dietasModel = model('DietasModel');
        $data['dietas'] = $dietasModel->findAll();



        $data['title']="Agregar Mascotas";
        $validation = \Config\Services::validation();
        
        if(strtolower($this->request->getMethod())==='get'){
            return view('common/head',$data).
               view('common/menu').
               view('mascotas/agregar', $data).
               view('common/footer');
        }

        $rules =[
            'primerNombre'=>'required|max_length[15]|min_length[3]|alpha',
            'apellidoPaterno'=>'required|max_length[15]|min_length[3]|alpha',
            'apellidoMaterno'=>'required|max_length[15]|min_length[3]|alpha',
            'fechaNacimiento'=>'required',
            'CIC'=>'required|max_length[9]|min_length[9]',
            'CURP'=>'required|max_length[18]|min_length[18]|alpha_numeric',
            'foto'=>'required|valid_url',
        ];

        if(!$this->validate($rules)){
            return view('common/head',$data).
            view('common/menu').
            view('mascotas/agregar',['validation'=>$validation,$data]).
            view('common/footer');       
        }else{
            if($this->insert()){
                return redirect('mascotas/mostrar','refresh');
            }
        }
        
    }


    public function insert(){
        $adoptadorModel = model('AdoptadorModel');


        $data = [
            "primerNombre"=>$_POST['primerNombre'],
            "segundoNombre"=>$_POST['segundoNombre'],
            "apellidoPaterno"=>$_POST['apellidoPaterno'],
            "apellidoMaterno"=>$_POST['apellidoMaterno'],
            "fechaNacimiento"=>$_POST['fechaNacimiento'],
            "CIC"=>$_POST['CIC'],
            "CURP"=>$_POST['CURP'],
            "foto"=>$_POST['foto'],
        ];

        $tiempo = strtotime($_POST['fechaNacimiento']); 
        $ahora = time(); 
        $edad = ($ahora-$tiempo)/(60*60*24*365.25); 
        $edad = floor($edad); 

        if($edad >=18){
            $data=[
                "status"=>true
            ];
        }else{
            $data=array(
                "status"=>false
            );
        }

        $adoptadorModel->insert($data,false);
        return true;        
    }

    public function delete($idAdoptador){
        $adoptadorModel = model('AdoptadorModel');
        $adoptadorModel->delete($idAdoptador);
        return redirect('adoptador/mostrar','refresh');
    }

    public function editar($id){
        $adoptadorModel=model('AdoptadorModel');
        $data['adoptador']=$adoptadorModel->find($id);
        
        return view('common/head').
               view('common/menu').
               view('adoptador/editar',$data).
               view('common/footer');
    }

    public function update(){
        $adoptadorModel = model('AdoptadorModel');

        $data =array (
            "primerNombre"=>$_POST['primerNombre'],
            "segundoNombre"=>$_POST['segundoNombre'],
            "apellidoPaterno"=>$_POST['apellidoPaterno'],
            "apellidoMaterno"=>$_POST['apellidoMaterno'],
            "fechaNacimiento"=>$_POST['fechaNacimiento'],
            "CIC"=>$_POST['CIC'],
            "CURP"=>$_POST['CURP'],
            "foto"=>$_POST['foto'],
        );

        $tiempo = strtotime($_POST['fechaNacimiento']); 
        $ahora = time(); 
        $edad = ($ahora-$tiempo)/(60*60*24*365.25); 
        $edad = floor($edad); 

        if($edad >=18){
            $data=array(
                "status"=>true
            );
        }else{
            $data=array(
                "status"=>false
            );
        }
        $adoptadorModel->update($_POST['idAdoptador'],$data);
        return redirect('adoptador/mostrar','refresh');
    }

    public function buscar(){
        $adoptadorModel = model('AdoptadorModel');

        if(isset($_GET['nombre']) || isset($_GET['status']) || isset($_GET['CURP'])){
            $primerNombre = $_GET['nombre'];
            $segundoNombre = $_GET['nombre'];
            $apellidoPaterno = $_GET['nombre'];
            $apellidoMaterno = $_GET['nombre'];
            $CURP = $_GET['CURP'];
            $data['adoptadores']=$adoptadorModel->like('primerNombre',$primerNombre)
                            ->like('CURP',$CURP)
                            ->orlike('segundoNombre',$segundoNombre)
                            ->orlike('apellidoPaterno',$apellidoPaterno)
                            ->orlike('apellidoMaterno',$apellidoMaterno)
                            ->findAll();
        }
        else {
            $nombre ="";
            $CURP="";
            $data['adoptadores']=$adoptadorModel->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('adoptador/buscar',$data).
               view('common/footer');
    }
}

