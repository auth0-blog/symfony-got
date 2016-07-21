<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function showAction(Request $request)
    {
        $characters = [
          'Daenerys Targaryen' => 'Emilia Clarke',
          'Jon Snow'           => 'Kit Harington',
          'Arya Stark'         => 'Maisie Williams',
          'Melisandre'         => 'Carice van Houten',
          'Khal Drogo'         => 'Jason Momoa',
          'Tyrion Lannister'   => 'Peter Dinklage',
          'Ramsay Bolton'      => 'Iwan Rheon',
          'Petyr Baelish'      => 'Aidan Gillen',
          'Brienne of Tarth'   => 'Gwendoline Christie',
          'Lord Varys'         => 'Conleth Hill'
        ];

        return $this->render('default/index.html.twig', array('character' => $characters));
    }
}
