<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Finder\Finder;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

/**
 * Backups controller.
 *
 * @Route("/backups")
 */
class BackupsController extends Controller
{

  /**
   * @Route("/", name="backups")
   * 
   */
  public function indexAction()
  {
    $finder = new Finder();

    try {
      $finder->files()->in($this->get('kernel')->getRootDir() . '/../backups')->sortByModifiedTime();
    } catch (\Exception $exc) {
      $finder = null;
    }

    return $this->render('backups/index.html.twig', array(
          'finder' => $finder
    ));
  }

  /**
   * @Route("/generate", name="backups_generate")
   */
  public function generateAction()
  {
    $finder = new Finder();

    try {
      $finder->files()->in($this->get('kernel')->getRootDir() . '/../backups')->sortByModifiedTime();
    } catch (\Exception $exc) {
      $finder = null;
    }

    $fs = new Filesystem();
    $count = $finder->count();
    foreach ($finder->files() as $file) {
      if ($count >= 5) {
        try {
          $fs->remove($file);
        } catch (IOExceptionInterface $e) {
          echo "An error occurred while creating your directory at " . $e->getPath();
        }
        $count--;
      }
    }

    $kernel = $this->get('kernel');
    $application = new Application($kernel);
    $application->setAutoExit(false);

    $input = new ArrayInput(array(
      'command' => 'zenstruck:backup:run',
      'profile' => 'daily',
      '-e' => 'prod',
      '--clear',
    ));
    $output = new BufferedOutput();
    $application->run($input, $output);
    $content = $output->fetch();

    $this->addFlash('success', 'Backup generated');
    return $this->redirectToRoute('backups');
  }

  /**
   * @Route("/{file}", name="backups_download")
   */
  public function downloadAction($file)
  {
    $content = file_get_contents($this->get('kernel')->getRootDir() . '/../backups/' . $file);

    $response = new Response();

    //set headers
    $response->headers->set('Content-Type', 'application/gzip');
    $response->headers->set('Content-Disposition', 'attachment;filename="' . $file);

    $response->setContent($content);
    return $response;
  }

}
