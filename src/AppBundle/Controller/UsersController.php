<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @Rest\View()
     */
    public function getUsersAction()
    {
        $users = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:User')
                ->findAll();
        /* @var $places Place[] */

        $formatted = [];
        foreach ($users as $user) {
            $formatted[] = [
               'id' => $user->getId(),
               'username' => $user->getUsername(),
               'email' => $user->getEmail(),
            ];
        }

        return new JsonResponse($formatted);
    }
      
      }







