<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Student;
use App\Repository\StudentRepository;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index()
    {
        $student = new Student();
        $student->setId(99);
        $student->setFirstName('matt');
        $student->setSurname('Smith');

        $template = 'student/index.html.twig';
        $args = [
            'student' => $student
        ];
        return $this->render($template, $args);
    }


}
