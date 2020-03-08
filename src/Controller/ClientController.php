<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ClientRepository;


class ClientController extends AbstractController
{
    /**
     * @Route("/client", name="client")
     */
    public function index(ClientRepository $rep)
    {
/*    	$client = new Client;
    	$client->setTitle('Test');
    	$client->setDescription('This is a setDescription');
    	$em->persist($client);
    	$em->flush();*/
    	//$rep = $em->getRepository(Client::class);
    	$clients = $rep->findAll();
        return $this->render('client/test.html.twig', [
            'controller_name' => 'ClientController',
            'clients' => $clients
        ]);
    }
    /**
     * @Route("/flash", name="flash")
     */
    public function flash() {
    	return $this->render('flash/home.html.twig',['controller_name' => 'ClientController']);
    }
}
