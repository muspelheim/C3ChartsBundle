<?php

namespace Muspelheim\C3ChartsBundle\Twig;

use Muspelheim\C3ChartsBundle\C3\ChartInterface;

/**
 * Class C3Extension
 * @package Muspelheim\C3ChartsBundle\Twig
 */
class C3Extension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('c3chart', array($this, 'c3chart'), array('is_safe' => array('html'))),
        );
    }
    public function c3chart(ChartInterface $chart)
    {
        return $chart->render();
    }
    public function getName()
    {
        return 'c3_extension';
    }
}
