<?php

namespace Muspelheim\C3ChartsBundle\C3;

/**
 * Interface ChartInterface
 * @package Muspelheim\C3ChartsBundle\C3
 */
interface ChartInterface
{
    /**
     * @return string
     */
    public function render(): string;
}
