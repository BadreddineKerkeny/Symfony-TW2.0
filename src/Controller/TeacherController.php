<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function showTeacher($name)
    {    
        return new Response ('Bonjour '.$name.'.'); 


        //return $this->render('teacher/index.html.twig', [
        //    'controller_name' => 'TeacherController',
        //]);
    }

    #[Route('/teacherhtml/{name}')]
    public function showTeacherHTML($name) : Response 
    {
        return $this->render('teacher/showTeacher.html.twig', [
            'name' => $name,
        ]);
    }



    #[Route('/rediriger')]
    public function rediriger()
    {
        $response = $this->forward('App\Controller\StudentController::index', [ ]);
        return $response;
    }






}
