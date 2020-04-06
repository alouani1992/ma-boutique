<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;

class PagesController extends AbstractController
{
    /**
     * @Route("/pages", name="pages")
     */
    public function index()
    {
    	return $this->redirectToRoute('about');

    }

    /**
    * @Route("/about", name ="about")
    */
    public function about(FlashyNotifier $flashy){
    	 $flashy->success('Event created!', 'http://your-awesome-link.com');
    	        return $this->render('pages/index.html.twig');

    }
}
