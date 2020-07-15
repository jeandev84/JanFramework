<?php
namespace App\Http\Controllers;


use Jan\Component\Http\Request;
use Jan\Component\Http\Response;
use Jan\Foundation\Routing\Controller;


/**
 * Class CartController
 * @package App\Http\Controllers
 *
 * <Generated By JanFramework>
*/
class CartController extends Controller
{

     /**
      * @param Request $request
      * @return Response
     */
     public function index(Request $request): Response
     {
         return new Response('Cart empty!');
     }
}