<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Word;
use AppBundle\Entity\Test;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WordController extends Controller
{

	/**
	* @Route("/word/test/add")
	*/
	public function addTest(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$repo = $em->getRepository('AppBundle:Word');
		
		$test = new Test();
		$test->setName($request->query->get('name'));
		$wordList = [];
		foreach($request->query->get('words') as $wordId)
		{
			$wordList[] = ['id' => $wordId, 'class' => $repo->find($wordId)];
			//var_dump($repo->find($wordId));
			$word = $repo->find($wordId);
			$word->addTest($test);
			$test->addWord($word);
		}
		//print '<pre>';
		//var_dump($test);
		//return new Response(json_encode($wordList));
		
		$em->persist($test);
		$em->flush();
		
		return new Response(json_encode(['id' => $test->getId(), 'name' => $test->getName(), 'words' => $test->getWords()]));
	}
	
	
	
	/**
	* @Route("/word/test/detail/{id}")
	*/
	public function detailTestAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$repo = $em->getRepository('AppBundle:Test');
		
		$test = $repo->find($id);
		
		$tests = array('id' => $test->getId(), 'name' => $test->getName());
		
		foreach($test->getWords() as $word)
			$tests['words'][] = ["id" => $word->getId(), "word" => $word->getWord(), 'translate' => $word->getTranslate()];
		
		
		return new Response(json_encode($tests));
	}	
	
	
	
	/**
	* @Route("/word/test/list")
	*/
	public function listTestAction()
	{
		$em = $this->getDoctrine()->getManager();
		$repo = $em->getRepository('AppBundle:Test');
		
		$testList = $repo->findAll();
		$tests = array();
		foreach($testList as $test)
		{
			$tests[] = array('id' => $test->getId(), 'name' => $test->getName());
		}
		
		return new Response(json_encode($tests));
	}
	
	
	
	
	/**
	* @Route("/word/list/{page}", requirements={"page": "\d+"}, defaults={"page": "0"})
	*/
	public function listWordAction($page)
	{
		$em = $this->getDoctrine()->getManager();
		$repo = $em->getRepository('AppBundle:Word');
		
		$wordList = $repo->findAll();
		$words = array();
		$textWords = '<form mathod="get" action="/word/test/add"><input type="text" name="name"><br>';
		foreach($wordList as $word)
		{
			$textWords .= '<input type="checkbox" name="words[]" value="' . $word->getId() . '">' . $word->getId() . ' = ' . $word->getTranslate() . '<br>';
			$words[] = array('id' => $word->getId(), 'word' => urldecode($word->getWord()), 'translate' => $word->getTranslate());
		}
		$textWords .= '<br><input type="submit"></form>';
		return new Response($textWords);
		
		return new Response(json_encode($words));
	}
	
	
	/**
	* @Route("/word/add")
	*/
	public function addWordAction(Request $request)
	{
		$newItem = '';
		if($request->query->get('word'))
		{
			$word = new Word();
			$word->setWord(urlencode($request->query->get('word')));
			$word->setTranslate($request->query->get('translate'));
			
			//return new Response(json_encode(array('word' => $word->getWord(), 'translate' => $word->getTranslate())));
			
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($word);
			$em->flush();
			$newItem = '<pre>' . json_encode(array('word' => $request->query->get('word'), 'translate' => $request->query->get('translate'), 'id' => $word->getId())) . '</pre>';
		}
		$form = '<form>
		<input type="text" name="word"> word <br>
		<input type="text" name="translate"> translate <br>
		<input type="submit">
		</form>';
		
		return new Response($newItem . $form);
	}
}
?>