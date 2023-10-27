<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsuariosController extends BaseController
{
    public function index()
    {
        $mascotasModel = model('MascotasModel');
        $data['mascotas']=$mascotasModel->findAll();

        $razasModel = model('RazasModel');
        $data['razas'] = $razasModel->findAll();

        $mascotaAdoptadorModel = model('mascotaAdoptadorModel');
        $data['adopciones'] = $mascotaAdoptadorModel->findAll();

        $adoptadorModel = model('AdoptadorModel');
        $data['adoptadores']=$adoptadorModel->findAll();

        return view('common/head').
               view('common/menuUsuarios').
               view('welcome_message',$data).
               view('common/graficas',$data).
               view('common/footer');
    }

    
    public function mascotas(){
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
            $data['mascotas']=$mascotasModel->findAll();
        }

        return view('common/head').
               view('common/menuUsuarios').
               view('mascotas/mostrarUsuario',$data).
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
               view('common/menuUsuarios').
               view('mascotas/perros',$data).
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
               view('common/menuUsuarios').
               view('mascotas/gatos',$data).
               view('common/footer');
    }

}

