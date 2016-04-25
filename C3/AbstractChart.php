<?php

namespace Muspelheim\C3ChartsBundle\C3;

/**
 * Class AbstractChart
 * @package Muspelheim\C3ChartsBundle\C3
 */
abstract class AbstractChart
{
    // Default options
    public $bindto;
    public $area;
    public $size;
    public $data;
    public $padding;
    public $color;
    public $interaction;
    public $transition;
    public $axis;
    public $grid;
    public $region;
    public $legend;
    public $tooltip;
    public $subchart;
    public $zoom;
    public $point;
    public $line;
    public $bar;
    public $pie;
    public $donut;
    public $gauge;
    public $title;

    public function __construct()
    {
        $chartOptions = array(
            'bindto', 'area', 'size', 'data', 'padding', 'color', 'interaction', 'transition', 'axis', 'gauge',
            'grid', 'region', 'legend', 'tootip', 'subchart', 'zoom', 'point', 'line', 'bar', 'pie', 'donut', 'tooltip',
            'title',
        );

        foreach ($chartOptions as $option) {
            $this->initChartOption($option);
        }
    }

    abstract public function render();

    /**
     * @param string $name
     * @param mixed  $value
     *
     * @return $this
     */
    public function __call($name, $value)
    {
        $this->$name = $value;

        return $this;
    }

    /**
     * @param string $name
     */
    protected function initChartOption($name)
    {
        $this->{$name} = new ChartOption($name);
    }

    /**
     * @return string
     */
    protected function renderBindTo()
    {
        if ($this->bindto) {
            return 'bindto: ' . json_encode('#'.$this->bindto) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderArea()
    {
        if (get_object_vars($this->area->area)) {
            return 'area: ' . json_encode($this->area->area) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderSize()
    {
        if (get_object_vars($this->size->size)) {
            return 'size: ' . json_encode($this->size->size) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderData()
    {
        if (get_object_vars($this->data->data)) {
            return 'data: ' . json_encode($this->data->data) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderPadding()
    {
        if (get_object_vars($this->padding->padding)) {
            return 'padding: ' . json_encode($this->padding->padding) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderColor()
    {
        if (get_object_vars($this->color->color)) {
            return 'color: ' . json_encode($this->color->color) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderInteraction()
    {
        if (get_object_vars($this->interaction->interaction)) {
            return 'interaction: ' . json_encode($this->interaction->interaction) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderTransition()
    {
        if (get_object_vars($this->transition->transition)) {
            return 'transition: ' . json_encode($this->transition->transition) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderAxis()
    {
        if (get_object_vars($this->axis->axis)) {
            return 'axis: ' . json_encode($this->axis->axis) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderGrid()
    {
        if (get_object_vars($this->grid->grid)) {
            return 'grid: ' . json_encode($this->grid->grid) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderRegion()
    {
        if (get_object_vars($this->region->region)) {
            return 'region: ' . json_encode($this->region->region) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderLegend()
    {
        if (get_object_vars($this->legend->legend)) {
            return 'legend: ' . json_encode($this->legend->legend) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderTooltip()
    {
        if (get_object_vars($this->tooltip->tooltip)) {
            return 'tooltip: ' . json_encode($this->tooltip->tooltip) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderSubchart()
    {
        if (get_object_vars($this->subchart->subchart)) {
            return 'subchart: ' . json_encode($this->subchart->subchart) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderZoom()
    {
        if (get_object_vars($this->zoom->zoom)) {
            return 'zoom: ' . json_encode($this->zoom->zoom) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderPoint()
    {
        if (get_object_vars($this->point->point)) {
            return 'point: ' . json_encode($this->point->point) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderLine()
    {
        if (get_object_vars($this->line->line)) {
            return 'line: ' . json_encode($this->line->line) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderBar()
    {
        if (get_object_vars($this->bar->bar)) {
            return 'bar: ' . json_encode($this->bar->bar) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderPie()
    {
        if (get_object_vars($this->pie->pie)) {
            return 'pie: ' . json_encode($this->pie->pie) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderDonut()
    {
        if (get_object_vars($this->donut->donut)) {
            return 'donut: ' . json_encode($this->donut->donut) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderGauge()
    {
        if (get_object_vars($this->gauge->gauge)) {
            return 'gauge: ' . json_encode($this->gauge->gauge) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderTitle()
    {
        if (get_object_vars($this->title->title)) {
            return 'title: ' . json_encode($this->title->title) . ",\n";
        }

        return '';
    }
}
