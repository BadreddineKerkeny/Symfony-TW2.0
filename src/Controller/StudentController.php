<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class StudentController extends AbstractController {

    #[Route('/welcome')]
    public function index(){
        return new Response("Bonjour Students.");
    }

    #[Route('/index1')]
    public function index1(){
        return new Response("Bonjour index 1");
    }

    #[Route('/welcome/{name}/{para2}')]
    public function indexPara($name,$para2){
        return new Response("Bonjour ".$name.' '.$para2);
    }

}
?>