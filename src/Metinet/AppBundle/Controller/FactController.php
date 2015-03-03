<?php

namespace Metinet\AppBundle\Controller;

use Metinet\AppBundle\Repository\InMemoryFactRepository;
use Metinet\AppBundle\Repository\MysqlFactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FactController extends Controller
{
    public function homeAction()
    {

        //$inMemoryRepository = new InMemoryFactRepository();
        //$facts = $inMemoryRepository->findAll();
        $repo = $this->get("fact_repository.in_memory");
        $repo = $this->get("fact_repository.mysql");

        $facts = $repo->findAll();

        //$facts = $this->container->get("metinet_app.in_memory_fact")->findAll();

        return $this->render('MetinetAppBundle:Fact:home.html.twig', array(
                'facts' => $facts,
            ));    }

}
