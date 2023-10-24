<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RazasController extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $razasModel = model('RazasModel');
        $data['razas']=$razasModel->findAll();

        return view('common/head').
               view('common/menu').
               view('razas/mostrar',$data).
               view('common/footer');
    }

    public function agregar(){
        $data['title']="Agregar Razas";
        $validation = \Config\Services::validation();
        
        if(strtolower($this->request->getMethod())==='get'){
            return view('common/head',$data).
               view('common/menu').
               view('razas/agregar', $data).
               view('common/footer');
        }

        $rules =[
            'nombre'=>'required|max_length[15]|min_length[3]|alpha',
            'origen'=>'required|max_length[30]|min_length[3]|alpha',
            'esperanzaVida'=>'required|integer',
            'largo'=>'required|integer',
            'alto'=>'required|integer',
            'color'=>'required|max_length[30]|min_length[3]|alpha',
            'tamañoPelaje'=>'required|max_length[7]|min_length[5]|alpha',
            'tipoPelaje'=>'required|max_length[8]|min_length[4]|alpha'
        ];

        if(!$this->validate($rules)){
            return view('common/head',$data).
            view('common/menu').
            view('razas/agregar',['validation'=>$validation,$data]).
            view('common/footer');       
        }else{
            if($this->insert()){
                return redirect('razas/mostrar','refresh');
            }
        }
        
    }


    public function insert(){
        $razasModel = model('RazasModel');

        $data = [
            "nombre"=>$_POST['nombre'],
            "origen"=>$_POST['origen'],
            "esperanzaVida"=>$_POST['esperanzaVida'],
            "largo"=>$_POST['largo'],
            "alto"=>$_POST['alto'],
            "color"=>$_POST['color'],
            "tamañoPelaje"=>$_POST['tamañoPelaje'],
            "tipoPelaje"=>$_POST['tipoPelaje'],
        ];

        $razasModel->insert($data,false);
        return true;        
    }

    public function delete($idRaza){
        $razasModel = model('RazasModel');
        $razasModel->delete($idRaza);
        return redirect('razas/mostrar','refresh');
    }

    public function editar($id){
        $razasModel=model('RazasModel');
        $data['raza']=$razasModel->find($id);
        
        return view('common/head').
               view('common/menu').
               view('razas/editar',$data).
               view('common/footer');
    }

    public function update(){
        $razasModel = model('RazasModel');

        $data = array(
            "nombre"=>$_POST['nombre'],
            "origen"=>$_POST['origen'],
            "esperanzaVida"=>$_POST['esperanzaVida'],
            "largo"=>$_POST['largo'],
            "alto"=>$_POST['alto'],
            "color"=>$_POST['color'],
            "tamañoPelaje"=>$_POST['tamañoPelaje'],
            "tipoPelaje"=>$_POST['tipoPelaje'],
        );

        $razasModel->update($_POST['idRaza'],$data);
        return redirect('razas/mostrar','refresh');
    }

    public function buscar(){
        $razasModel = model('RazasModel');

        if(isset($_GET['nombre']) || isset($_GET['origen']) || isset($_GET['tamaño'])){
            $nombre = $_GET['nombre'];
            $origen = $_GET['origen'];
                       
            // Revisar la búsqueda por tamaño
            $largo = $_GET['tamaño'];
            $alto = $_GET['tamaño'];
            $data['razas']=$razasModel->like('nombre',$nombre)
                            ->like('origen',$origen)
                            ->like('largo',$largo)
                            ->like('alto',$alto)
                            ->findAll();
        }
        else {
            $nombre ="";
            $origen="";
            $largo="";
            $alto="";
            $data['razas']=$razasModel->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('razas/buscar',$data).
               view('common/footer');
    }
}

