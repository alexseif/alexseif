<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Backups controller.
 *
 * @Route("jobs")
 */
class JobsController extends Controller
{

  protected $jobs;

  public function __construct()
  {
    $this->jobs = array();
  }

  /**
   * @Route("/", name="jobs_index")
   * @Template("jobs/jobs.html.twig")
   */
  public function indexAction()
  {
    $this->generateJobs();
    return array(
      "jobs" => $this->jobs
    );
  }

  /**
   * @Route("/php-web-developer", name="php_developer")
   * @Template("jobs/job-template.html.twig")
   */
  public function phpDeveloperAction()
  {
    $this->generateJobs();
    return array("job" => $this->jobs['php_developer']);
  }

  /**
   * @Route("/wordpress-developer", name="wordpress_developer")
   * @Template("jobs/job-template.html.twig")
   */
  public function wordpressDeveloperAction()
  {
    $this->generateJobs();
    return array("job" => $this->jobs['wordpress_developer']);
  }

  /**
   * @Route("/drupal-developer", name="drupal_developer")
   * @Template("jobs/job-template.html.twig")
   */
  public function drupalDeveloperAction()
  {
    $this->generateJobs();
    return array("job" => $this->jobs['drupal_developer']);
  }

  public function generateJobs()
  {
    $this->generatePhp();
    $this->generateWordpress();
    $this->generateDrupal();
  }

  public function generatePhp()
  {
    $this->jobs['php_developer']['title'] = "PHP Web Developer Wanted";
    $this->jobs['php_developer']['link'] = $this->generateUrl('php_developer');
    $this->jobs['php_developer']['image'] = "php_developer.png";
    $this->jobs['php_developer']['definition']['title'] = "PHP Developer";
    $this->jobs['php_developer']['definition']['text'] = "As a  PHP developer your  responsibilities are writing server-side web applications logic, develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application. Furthermore you often develop and integrate plugins for certain popular frameworks.";
    $this->jobs['php_developer']['description'] = "We are looking for PHP Developers, mainly responsible for managing back-end services and the interchange of data between the server and the clients. You will be developing all server-side logic, defining and maintaining the central database, and ensuring high performance and responsiveness to requests from the front-end, as well as integrating the front-end elements. Therefore, a good knowledge of front-end technologies is required.";
    $this->jobs['php_developer']['responsibilities'][] = "Integration of user-facing elements developed by front-end developers";
    $this->jobs['php_developer']['responsibilities'][] = "Build efficient, testable, and reusable PHP modules";
    $this->jobs['php_developer']['responsibilities'][] = "Solve complex performance problems and architectural challenges";
    $this->jobs['php_developer']['responsibilities'][] = "Integration of data storage solutions";
    $this->jobs['php_developer']['skills'][] = "Knowledge of PHP web frameworks such as Symfony ";
    $this->jobs['php_developer']['skills'][] = "Understanding the fully synchronous behavior of PHP";
    $this->jobs['php_developer']['skills'][] = "Understanding of MVC design patterns";
    $this->jobs['php_developer']['skills'][] = "Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3";
    $this->jobs['php_developer']['skills'][] = "Knowledge of object oriented PHP programming";
    $this->jobs['php_developer']['skills'][] = "Understanding accessibility and security compliance ";
    $this->jobs['php_developer']['skills'][] = "Strong knowledge of the common PHP or web server exploits and their solutions";
    $this->jobs['php_developer']['skills'][] = "Understanding fundamental design principles behind a scalable application";
    $this->jobs['php_developer']['skills'][] = "User authentication and authorization between multiple systems, servers, and environments";
    $this->jobs['php_developer']['skills'][] = "Integration of multiple data sources and databases into one system";
    $this->jobs['php_developer']['skills'][] = "Familiarity with limitations of PHP as a platform and its workarounds";
    $this->jobs['php_developer']['skills'][] = "Creating database schemas that represent and support business processes";
    $this->jobs['php_developer']['skills'][] = "Familiarity with SQL/NoSQL databases and their declarative query languages";
    $this->jobs['php_developer']['skills'][] = "Ability to deliver clean code is a must";
    $this->jobs['php_developer']['skills'][] = "Proficient understanding of code versioning tools, such as Git";
    $this->jobs['php_developer']['skills'][] = "Comfortable in speaking, reading and writing in Arabic & English";
  }

  public function generateWordpress()
  {
    $this->jobs['wordpress_developer']['title'] = "WordPress Developer Wanted";
    $this->jobs['wordpress_developer']['link'] = $this->generateUrl('wordpress_developer');
    $this->jobs['wordpress_developer']['image'] = "wordpress_developer.png";
    $this->jobs['wordpress_developer']['definition']['title'] = "WordPress";
    $this->jobs['wordpress_developer']['definition']['text'] = "We are seeking WordPress Developers responsible for both back-end and front-end development, including creating WordPress themes and plugins, This position requires a combination of programming skills (such as PHP, HTML5, CSS3, JavaScript) and aesthetics (understanding element arrangements on the screen, the color and font choices, etc.). 
Having knowledge of the industry trends and content management systems and good experience with the responsive and adaptive design, in addition to an understanding of the entire web development process, including design, development, and deployment is preferred.";
    $this->jobs['wordpress_developer']['description'] = "We are seeking a WordPress Developer responsible for both back-end and front-end development, including creating WordPress themes and plugins, This position requires a combination of programming skills (such as PHP, HTML5, CSS3, JavaScript) and aesthetics (understanding element arrangements on the screen, the color and font choices, etc.). Having knowledge of the industry trends and content management systems and good experience with the responsive and adaptive design, in addition to an understanding of the entire web development process, including design, development, and deployment is preferred.";
    $this->jobs['wordpress_developer']['responsibilities'][] = "Designing and implementing new features and functionality";
    $this->jobs['wordpress_developer']['responsibilities'][] = "Establishing and guiding the website’s architecture";
    $this->jobs['wordpress_developer']['responsibilities'][] = "Ensuring high-performance and availability, and managing all technical aspects of the CMS";
    $this->jobs['wordpress_developer']['responsibilities'][] = "Helping formulate an effective, responsive design and turning it into a working theme and plugin";
    $this->jobs['wordpress_developer']['skills'][] = "Good understanding of front-end technologies, including HTML5, CSS3, JavaScript, jQuery";
    $this->jobs['wordpress_developer']['skills'][] = "Experience building user interfaces for websites and/or web applications";
    $this->jobs['wordpress_developer']['skills'][] = "Experience designing and developing responsive design websites";
    $this->jobs['wordpress_developer']['skills'][] = "Comfortable working with debugging tools like Firebug, Chrome inspector, etc.";
    $this->jobs['wordpress_developer']['skills'][] = "Ability to understand CSS changes and their ramifications to ensure consistent style across platforms and browsers";
    $this->jobs['wordpress_developer']['skills'][] = "Ability to convert comprehensive layout and wireframes into working HTML pages";
    $this->jobs['wordpress_developer']['skills'][] = "Knowledge of how to interact with RESTful APIs and formats (JSON, XML)";
    $this->jobs['wordpress_developer']['skills'][] = "Strong understanding of PHP back-end development";
    $this->jobs['wordpress_developer']['skills'][] = "Ability to deliver clean code is a must";
    $this->jobs['wordpress_developer']['skills'][] = "Proficient understanding of code versioning tools, such as Git";
    $this->jobs['wordpress_developer']['skills'][] = "Comfortable in speaking, reading and writing in Arabic & English";
  }

  public function generateDrupal()
  {
    $this->jobs['drupal_developer']['title'] = "Drupal Developer Wanted";
    $this->jobs['drupal_developer']['link'] = $this->generateUrl('drupal_developer');
    $this->jobs['drupal_developer']['image'] = "drupal_developer.png";
    $this->jobs['drupal_developer']['definition']['title'] = "Drupal";
    $this->jobs['drupal_developer']['definition']['text'] = "Drupal is internationally used by a vast and diverse community, building and creating a strong open source content management platform prompting millions of websites and applications worldwide.";
    $this->jobs['drupal_developer']['description'] = "We are looking for Drupal Developers responsible for front-end development, theming and back-end/module development, combining programming skills (PHP, JS, mySQL, HTML, CSS, TWIG etc.) and aesthetics (understanding element arrangements on the screen, the color and font choices, etc. ). 
Having knowledge of the industry trends, content management systems and  experience with responsive and adaptive design, in addition to an understanding of the entire web development process, including design, development and deployment knowledge, is preferred.";
    $this->jobs['drupal_developer']['responsibilities'][] = "Responsible for helping formulate an effective, responsive design and turning it into a working theme. Work closely with back-end developers and customers to ensure an effective, visually appealing, and intuitive implementation.";
    $this->jobs['drupal_developer']['responsibilities'][] = "Responsible for designing and implementing new features and functionality, establishing and guiding the website’s architecture, ensuring high-performance and availability, and managing all technical aspects of the CMS. Work closely with front-end developers and customers to ensure an effective, visually appealing, and intuitive implementation.";
    $this->jobs['drupal_developer']['skills'][] = "Experience building user interfaces for websites and/or web applications";
    $this->jobs['drupal_developer']['skills'][] = "Extremely fluent with HTML5/XHTML and CSS";
    $this->jobs['drupal_developer']['skills'][] = "Experience working with PHP, JavaScript, and jQuery";
    $this->jobs['drupal_developer']['skills'][] = "Ability to write JavaScript with and without the use of frameworks such as jQuery";
    $this->jobs['drupal_developer']['skills'][] = "Experience designing and developing responsive design websites";
    $this->jobs['drupal_developer']['skills'][] = "Comfortable working with debugging tools like Firebug, Chrome inspector, etc.";
    $this->jobs['drupal_developer']['skills'][] = "Ability to understand CSS changes to have consistent style across platforms and browsers";
    $this->jobs['drupal_developer']['skills'][] = "Ability to convert comprehensive layout and wireframes into working HTML pages";
    $this->jobs['drupal_developer']['skills'][] = "Experience developing web solutions in Drupal and PHP implementations in a LAMP environment";
    $this->jobs['drupal_developer']['skills'][] = "Ability to architect enterprise Drupal solutions including data, display, and information architecture";
    $this->jobs['drupal_developer']['skills'][] = "Advanced site-building experience including deep familiarity with Drupal modules such as CTools, Views, and Panels";
    $this->jobs['drupal_developer']['skills'][] = "Experience creating custom Drupal modules";
    $this->jobs['drupal_developer']['skills'][] = "Experience building responsive websites using Drupal CMS, HTML/HTML5, CSS/CSS3, and JavaScript/jQuery";
    $this->jobs['drupal_developer']['skills'][] = "Knowledge of PHP, PHP files and theme functions, and knowledge of the Drupal theme layer";
    $this->jobs['drupal_developer']['skills'][] = "Through understanding of the Software Development Lifecycle (e.g. Requirements, Design, Development, Testing)";
    $this->jobs['drupal_developer']['skills'][] = "Ability to deliver clean code is a must";
    $this->jobs['drupal_developer']['skills'][] = "Proficient understanding of code versioning tools, such as Git";
    $this->jobs['drupal_developer']['skills'][] = "Comfortable in speaking, reading and writing in Arabic & English";
  }

}
