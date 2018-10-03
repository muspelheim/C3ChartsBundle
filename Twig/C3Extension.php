<?php

namespace Muspelheim\C3ChartsBundle\Twig;

use Muspelheim\C3ChartsBundle\C3\ChartInterface;

/**
 * Class C3Extension
 * @package Muspelheim\C3ChartsBundle\Twig
 */
class C3Extension extends \Twig_Extension
{
    /**
     * @return array|
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('c3chart', [$this, 'c3chart'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param ChartInterface $chart
     * @return string
     */
    public function c3chart(ChartInterface $chart)
    {
        return $chart->render();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'c3_extension';
    }
}
