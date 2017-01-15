<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class SecurityController extends Controller
{
	
	/**
	* @Route("/login", name="login")
	*/
	public function loginAction(Request $request)
	{
		$authUtils = $this->get('security.authentication_utils');
		$error = $authUtils->getLastAuthenticationError();
		$username = $authUtils->getLastUsername();
		
		return $this->render('security/login.html.twig', [
			'last_username' => $username,
			'error' => $error
		]);
	}
	
	/**
	* @Route("/register/", name="register now", methods = { "GET", "POST" })
	*/
	public function registerAction(Request $request)
	{
		$user = new User;
		$form = $this->createForm(UserType::class, $user);
		$form->handleRequest($request);
		
		if($form->isSubmitted() && $form->isValid())
		{
			$user->setPassword($this->get('security.password_encoder')->encodePassword($user, $user->getPassword()));
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			
			return $this->redirectToRoute('/login');
		}
		
		return $this->render('security/register.html.twig', [
			'form' => $form->createView(),
			'error' => '',
			'last_username' => ''
		]);
	}
	
	
	/**
	* @Route("/account", name="your account data")
	* @Security("has_role('ROLE_USER')")
	*/
	public function showAction()
	{
		$user = $this->get('security.token_storage')->getToken()->getUser();
		return $this->render('cabinet/index.html.twig', ['username' => $user->getUsername()]);
	}
}

?>
