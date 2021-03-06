<?php
	/**
	 * @author Alexey Kulikov aka Clops <me@clops.at>
	 *
	 * Supported Routes, their controllers and all error handlers
	 */

	use Silex\Application\TwigTrait;
	use Silex\Application;
	use Symfony\Component\HttpFoundation\Response;

	/** @var Silex\Application $app * */
	$app->get('/', 'Ksrs\Controller\PageController::indexAction');
	$app->get('/index.html', 'Ksrs\Controller\PageController::indexAction');


	## Error Handlers ##############################################################
	#
	$app->error(function (\Exception $e, $code) use ($app) {
		if ($app['debug']) {
			return null;
		}

		switch ($code) {
			case 404:
				$message = $app['twig']->render('error404.html.twig');
				break;
			default:
				$message = 'We are sorry, but something went terribly wrong.';

				if ($app['debug']) {
					$message .= ' Error Message: ' . $e->getMessage();
				}
		}

		return new Response($message, $code);
	});

	return $app;