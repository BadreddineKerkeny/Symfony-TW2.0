<?php

namespace App\Controller;

use App\Entity\Classroom;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    #[Route('/classroom', name: 'app_classroom')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Classroom::class);
        $classrooms=$repo->findAll(); 
        //var_dump($classrooms);
        $class2 = $repo->find(2); 
        var_dump($class2); 
        die();
               
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }


    #[Route('/classroom_list', name: 'app_classroom')]
    public function list(ManagerRegistry $doctrine): Response
    {
        $repo = $doctrine->getRepository(Classroom::class);
        $classrooms=$repo->findAll(); 
        var_dump($classrooms);
        
        die();
               
        return $this->render('classroom/list.html.twig', [
            'controller_name' => 'ClassroomController',
            'list_classrooms' => $classrooms,
        ]);
    }



}
