<?php
	/**
	 * @author Alexey Kulikov aka Clops <me@clops.at>
	 */
	namespace Ksrs\Controller;

	use Silex\Application;
	use Symfony\Component\HttpFoundation\Request;

	/**
	 * Class PageController
	 *
	 * @package Ksrs\Controller
	 */
	class PageController
	{

		/**
		 * Splash Page
		 *
		 * @param Request     $request
		 * @param Application $app
		 *
		 * @return mixed
		 */
		public function indexAction(Request $request, Application $app)
		{
			return $app['twig']->render('index.html.twig', array());
		}

	}