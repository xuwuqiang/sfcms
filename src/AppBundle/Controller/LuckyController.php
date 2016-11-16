<?php
/**
 * Created by PhpStorm.
 * User: xuwuqiang
 * Date: 2016/11/15
 * Time: 17:13
 */

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = rand(0, 100);
//        echo $number;exit;
        return new Response(
            '<html><body>Lucky number is aaa[滑稽111]: '.$number.'</body></html>'
        );
    }
}