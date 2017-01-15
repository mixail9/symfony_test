<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends Controller
{
	
	/**
	* @Route("/admin/index", name="index")
	* @Security("has_role('ROLE_ADMIN')")
	*/
	public function indexAction()
	{
		return $this->render('admin/index.html.twig');
	}
		
	/**
	* @Route("/admin/iblock/list", name="entities list")
	* @Security("has_role('ROLE_ADMIN')")
	*/
	public function iblockListAction()
	{
		$entities = array();
		$em = $this->getDoctrine()->getManager();
		$meta = $em->getMetadataFactory()->getAllMetadata();
		foreach ($meta as $m) {
		    $entities[] = $m->getName();
		}
		return $this->render('admin/iblock/list.html.twig', [
			'entities' => $entities,
		]);
	}
	
	/**
	* @Route("/admin/iblock/edit", name="entity edit", methods = { "GET", "POST" })
	* @Security("has_role('ROLE_ADMIN')")
	*/
	public function iblockEditAction(Request $request)
	{
		return $this->render('admin/iblock/edit.html.twig', [
			'entities' => '---------------',
		]);
	}
	
}
?>