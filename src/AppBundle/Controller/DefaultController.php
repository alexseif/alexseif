<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Portfolio;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     * @Template("default/home.html.twig")
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/work", name="work")
     * @Template("default/work.html.twig")
     */
    public function workAction()
    {
        return ['work_list' => $this->getPortfoliosForDisplay()];
    }


    /**
     * @Route("/contact", name="contact")
     * @Template("default/contact.html.twig")
     */
    public function contactAction()
    {
        return array();
    }

    /**
     * @Route("/secret", name="secret")
     * @Template("default/secret.html.twig")
     */
    public function secretAction()
    {
        $secret = $this->random_str(40);
        return array(
            'secret' => $secret
        );
    }

    /**
     * Generate a random string, using a cryptographically secure
     * pseudorandom number generator (random_int)
     *
     * For PHP 7, random_int is a PHP core function
     * For PHP 5.x, depends on https://github.com/paragonie/random_compat
     *
     * @param int $length How many characters do we want?
     * @param string $keyspace A string of all possible characters
     * to select from
     * @return string
     */
    function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;
    }

    public function getPortfoliosForDisplay()
    {
        $em = $this->getDoctrine()->getManager();

        $portfolios = $em->getRepository('AppBundle:Portfolio')->findBy(
            array(), array(
            'position' => 'ASC',
            'publishedAt' => 'DESC'
        ));
        foreach ($portfolios as $portfolio) {
            $portfolio->setTags($this->getTags($portfolio));
        }
        return $portfolios;
    }

    /**
     * @param Portfolio $portfolio
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTags(Portfolio $portfolio)
    {
        $tagManager = $this->get('fpn_tag.tag_manager');
        $tagManager->loadTagging($portfolio);

        return $portfolio->getTags();
    }

}
