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

        $mascotaAdoptadorModel = model('mascotaAdoptadorModel');
        $data['adopciones'] = $mascotaAdoptadorModel->findAll();

        $alumnoModel = model('AdoptadorModel');
        $data['adoptadores']=$alumnoModel->findAll();

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

        $cuidadosModel = model('CuidadosModel');
        $data['cuidados'] = $cuidadosModel->findAll();

        $data['title']="Agregar Mascotas";
        $validation = \Config\Services::validation();
        
        if(strtolower($this->request->getMethod())==='get'){
            return view('common/head',$data).
               view('common/menu').
               view('mascotas/agregar', $data).
               view('common/footer');
        }

        $rules =[
            'nombre'=>'required|max_length[30]|min_length[1]|alpha',
            'edad'=>'required|integer',
            'idRaza'=>'required|integer',
            'idDietas'=>'required|integer',
            'idCuidados'=>'required|integer',
            'caracter'=>'required|min_length[4]|alpha',
            'foto'=>'required|valid_url'
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
        $db = \Config\Database::connect();
        $resultado=$db->query('select * from mascota')->getResultArray();

        foreach ($resultado as $id){
            $valor = $id['idMascota'];
        }
        
        $mascotaCuidadosModel = model('mascotaCuidadosModel');
        $data2 = [
            "mascota"=>$valor,
            "cuidado"=>$_POST['idCuidados']
        ];
        $mascotaCuidadosModel->insert($data2);


        $mascotasModel = model('MascotasModel');

        $data = [
            "nombre"=>$_POST['nombre'],
            "edad"=>$_POST['edad'],
            "caracter"=>$_POST['caracter'],
            "raza"=>$_POST['idRaza'],
            "dieta"=>$_POST['idDietas'],
            "foto"=>$_POST['foto'],
        ];
        $mascotasModel->insert($data,false);
        return true;        
    }

    public function delete($idMascota){
        $mascotasModel = model('MascotasModel');
        $mascotasModel->delete($idMascota);
        return redirect('mascotas/mostrar','refresh');
    }

    public function editar($idMascota){
        $mascotasModel=model('MascotasModel');
        $data['mascota']=$mascotasModel->find($idMascota);
        
        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $dietasModel = model('DietasModel');
        $data['dietas'] = $dietasModel->findAll();

        $cuidadosModel = model('CuidadosModel');
        $data['cuidados'] = $cuidadosModel->findAll();

        $mascotaCuidadosModel = model('mascotaCuidadosModel');
        $data['mcs'] = $mascotaCuidadosModel->findAll();
        

        return view('common/head').
               view('common/menu').
               view('mascotas/editar',$data).
               view('common/footer');
    }

    public function update(){
        $mascotasModel = model('MascotasModel');

        $data = array(
            "nombre"=>$_POST['nombre'],
            "edad"=>$_POST['edad'],
            "caracter"=>$_POST['caracter'],
            "raza"=>$_POST['idRaza'],
            "dieta"=>$_POST['idDietas'],
            "foto"=>$_POST['foto']
        );

        $db = \Config\Database::connect();
        $resultado=$db->query('select * from mascota')->getResultArray();

        foreach ($resultado as $id){
           if($id['idMascota'] == $_POST['idMascota']){
                $valor = $id['idMascota'];
           }
        }
        
        $mascotaCuidadosModel = model('mascotaCuidadosModel');
        $data2 = [
            "mascota"=>$valor,
            "cuidado"=>$_POST['idCuidados']
        ];
        $mascotaCuidadosModel->insert($data2);


        $mascotasModel->update($_POST['idMascota'],$data);
        return redirect('mascotas/mostrar','refresh');
    }

    public function buscar(){
        $mascotasModel = model('MascotasModel');

        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $dietasModel = model('DietasModel');
        $data['dietas'] = $dietasModel->findAll();

        $cuidadosModel = model('CuidadosModel');
        $data['cuidados'] = $cuidadosModel->findAll();

        $mascotaAdoptadorModel = model('mascotaAdoptadorModel');
        $data['adopciones'] = $mascotaAdoptadorModel->findAll();

        $alumnoModel = model('AdoptadorModel');
        $data['adoptadores']=$alumnoModel->findAll();

        if(isset($_GET['nombre']) || isset($_GET['idRaza'])){
            $nombre = $_GET['nombre'];
            $idRaza = $_GET['idRaza'];

            $data['mascotas']=$mascotasModel->like('nombre',$nombre)
                            ->like('raza',$idRaza)
                            ->findAll();
        }
        else {
            $nombre ="";
            $idRaza="";
            $data['mascotas']=$mascotasModel->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('mascotas/buscar',$data).
               view('common/footer');
    }

    public function informacion($idMascota){
        $mascotasModel=model('MascotasModel');
        $data['mascota']=$mascotasModel->find($idMascota);
        
        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $dietasModel = model('DietasModel');
        $data['dietas'] = $dietasModel->findAll();

        $cuidadosModel = model('CuidadosModel');
        $data['cuidados'] = $cuidadosModel->findAll();

        $mascotaCuidadosModel = model('mascotaCuidadosModel');
        $data['mascotaCuidados'] = $mascotaCuidadosModel->findAll();

        return view('common/head').
               view('common/menu').
               view('mascotas/informacion',$data).
               view('common/footer');
    }


    public function adoptar($idMascota){
        $mascotasModel=model('MascotasModel');
        $data['mascota']=$mascotasModel->find($idMascota);
        
        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $dietasModel = model('DietasModel');
        $data['dietas'] = $dietasModel->findAll();

        $cuidadosModel = model('CuidadosModel');
        $data['cuidados'] = $cuidadosModel->findAll();

        $mascotaCuidadosModel = model('mascotaCuidadosModel');
        $data['mascotaCuidados'] = $mascotaCuidadosModel->findAll();

        $alumnoModel = model('AdoptadorModel');
        $data['adoptadores']=$alumnoModel->findAll();

        return view('common/head').
               view('common/menu').
               view('mascotas/adoptar',$data).
               view('common/footer');
    }

    public function updateAdopcion(){
        $mascotasModel=model('MascotasModel');
        $adoptadorModel = model('AdoptadorModel');

        $data = array(
            "status"=>1
        );

        $mascotaAdoptadorModel = model('mascotaAdoptadorModel');
        $data2 = [
            "adoptador"=>$_POST['idAdoptador'],
            "mascota"=>$_POST['idMascota'],
        ];
        $mascotaAdoptadorModel->insert($data2);


        $mascotasModel->update($_POST['idMascota'],$data);
        $adoptadorModel->update($_POST['idAdoptador'],$data);
        return redirect('mascotas/mostrar','refresh');
    }

    public function mostrarAdoptadas(){
        $mascotasModel = model('MascotasModel');
        $data['mascotas']=$mascotasModel->findAll();

        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $mascotaAdoptadorModel = model('mascotaAdoptadorModel');
        $data['adopciones'] = $mascotaAdoptadorModel->findAll();

        $adoptadorModel = model('AdoptadorModel');
        $data['adoptadores']=$adoptadorModel->findAll();

        return view('common/head').
               view('common/menu').
               view('welcome_message',$data).
               view('common/footer');
    }

    public function graficas(){
        $mascotasModel = model('MascotasModel');
        $data['mascotas']=$mascotasModel->findAll();

        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $adoptadorModel = model('AdoptadorModel');
        $data['adoptadores']=$adoptadorModel->findAll();

        return view('common/head').
               view('common/menu').
               view('common/graficas',$data).
               view('common/footer');
    }

    public function perros(){
        $mascotasModel = model('MascotasModel');

        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $dietasModel = model('DietasModel');
        $data['dietas'] = $dietasModel->findAll();

        $cuidadosModel = model('CuidadosModel');
        $data['cuidados'] = $cuidadosModel->findAll();

        $mascotaAdoptadorModel = model('mascotaAdoptadorModel');
        $data['adopciones'] = $mascotaAdoptadorModel->findAll();

        $alumnoModel = model('AdoptadorModel');
        $data['adoptadores']=$alumnoModel->findAll();

        if(isset($_GET['idRaza'])){
            $idRaza = $_GET['idRaza'];

            $data['mascotas']=$mascotasModel->like('raza', $idRaza,$side='none')
                            ->findAll();
        }
        else {
            $idRaza="";
            $data['mascotas']=$mascotasModel->like('raza', 'Perro',$side='none')->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('mascotas/perrosUsuario',$data).
               view('common/footer');
    }

    public function gatos(){
        $mascotasModel = model('MascotasModel');

        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $dietasModel = model('DietasModel');
        $data['dietas'] = $dietasModel->findAll();

        $cuidadosModel = model('CuidadosModel');
        $data['cuidados'] = $cuidadosModel->findAll();

        $mascotaAdoptadorModel = model('mascotaAdoptadorModel');
        $data['adopciones'] = $mascotaAdoptadorModel->findAll();

        $alumnoModel = model('AdoptadorModel');
        $data['adoptadores']=$alumnoModel->findAll();
        
        if(isset($_GET['idRaza'])){
            $idRaza = $_GET['idRaza'];

            $data['mascotas']=$mascotasModel->like('raza', $idRaza,$side='none')
                            ->findAll();
        }
        else {
            $idRaza="";
            $data['mascotas']=$mascotasModel->like('raza','Gato',$side='none')->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('mascotas/gatosUsuario',$data).
               view('common/footer');
    }
}

