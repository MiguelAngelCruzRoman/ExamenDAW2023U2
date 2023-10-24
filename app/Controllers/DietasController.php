<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DietasController extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $dietasModel = model('DietasModel');
        $data['dietas']=$dietasModel->findAll();

        return view('common/head').
               view('common/menu').
               view('dietas/mostrar',$data).
               view('common/footer');
    }

    public function agregar(){
        $data['title']="Agregar Dietas";
        $validation = \Config\Services::validation();
        
        if(strtolower($this->request->getMethod())==='get'){
            return view('common/head',$data).
               view('common/menu').
               view('dietas/agregar', $data).
               view('common/footer');
        }

        $rules =[
            'hidratación'=>'required|integer',
            'porcionesDiarias'=>'required|integer',
            'carnes'=>'required|integer',
            'visceras'=>'required|integer',
            'pescado'=>'required|integer',
            'cereales'=>'required|integer',
        ];

        if(!$this->validate($rules)){
            return view('common/head',$data).
            view('common/menu').
            view('dietas/agregar',['validation'=>$validation,$data]).
            view('common/footer');       
        }else{
            if($this->insert()){
                return redirect('dietas/mostrar','refresh');
            }
        }
        
    }


    public function insert(){
        $dietasModel = model('DietasModel');

        $data = [
            "hidratación"=>$_POST['hidratación'],
            "porcionesDiarias"=>$_POST['porcionesDiarias'],
            "carnes"=>$_POST['carnes'],
            "visceras"=>$_POST['visceras'],
            "pescado"=>$_POST['pescado'],
            "cereales"=>$_POST['cereales'],
            "tamañoPorción"=>$_POST['tamañoPorción']
        ];

        $dietasModel->insert($data,false);
        return true;        
    }

    public function delete($idDietas){
        $dietasModel = model('DietasModel');
        $dietasModel->delete($idDietas);
        return redirect('dietas/mostrar','refresh');
    }

    public function editar($id){
        $dietasModel=model('DietasModel');
        $data['dieta']=$dietasModel->find($id);
        
        return view('common/head').
               view('common/menu').
               view('dietas/editar',$data).
               view('common/footer');
    }

    public function update(){
        $dietasModel = model('DietasModel');

        $data = array(
            "hidratación"=>$_POST['hidratación'],
            "porcionesDiarias"=>$_POST['porcionesDiarias'],
            "carnes"=>$_POST['carnes'],
            "visceras"=>$_POST['visceras'],
            "pescado"=>$_POST['pescado'],
            "cereales"=>$_POST['cereales'],
            "tamañoPorción"=>$_POST['tamañoPorción']
        );

        $dietasModel->update($_POST['idDietas'],$data);
        return redirect('dietas/mostrar','refresh');
    }

    public function buscar(){
        $dietasModel = model('DietasModel');

        if(isset($_GET['porcionesDiarias']) || isset($_GET['tamañoPorción'])){
            $porcionesDiarias = $_GET['porcionesDiarias'];
            $tamañoPorción = $_GET['tamañoPorción'];
            $data['dietas']=$dietasModel->like('porcionesDiarias',$porcionesDiarias)
                            ->like('tamañoPorción',$tamañoPorción)
                            ->findAll();
        }
        else {
            $porcionesDiarias ="";
            $tamañoPorción="";
            $data['dietas']=$dietasModel->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('dietas/buscar',$data).
               view('common/footer');
    }
}

