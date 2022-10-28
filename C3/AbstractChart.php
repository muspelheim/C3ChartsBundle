<?php

namespace Muspelheim\C3ChartsBundle\C3;

/**
 * Class AbstractChart
 * @package Muspelheim\C3ChartsBundle\C3
 */
abstract class AbstractChart
{
    protected static $chartOptions = [
        'bindto', 'area', 'size', 'data', 'padding', 'color', 'colortransformer', 'interaction', 'transition', 'axis', 'gauge',
        'grid', 'region', 'legend', 'tootip', 'subchart', 'zoom', 'point', 'line', 'bar', 'pie', 'donut', 'tooltip',
        'title',
    ];

    // Default options
    public $bindto;
    public $area;
    public $size;
    public $data;
    public $padding;
    public $color;
    public $colortransformer;
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
        foreach (static::$chartOptions as $option) {
            $this->initChartOption($option);
        }
    }

    abstract public function render();

    /**
     * @param string $name
     * @param array  $args
     *
     * @return $this
     */
    public function __call(string $name, array $args)
    {
        $this->$name = $args[0];

        return $this;
    }

    /**
     * @param string $name
     */
    protected function initChartOption(string $name)
    {
        $this->{$name} = new ChartOption($name);
    }

    /**
     * @return string
     */
    protected function renderBindTo(): string
    {
        if ($this->bindto) {
            return 'bindto: ' . json_encode('#'.$this->bindto) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderArea(): string
    {
        if (get_object_vars($this->area->area)) {
            return 'area: ' . json_encode($this->area->area) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderSize(): string
    {
        if (get_object_vars($this->size->size)) {
            return 'size: ' . json_encode($this->size->size) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderData(): string
    {
        if (get_object_vars($this->data->data)) {
            $encodedData = json_encode($this->data->data);

            if (get_object_vars($this->colortransformer->colortransformer) && strlen($encodedData) >= 2) {
                $encodedData = substr_replace(
                    $encodedData,
                    ',"color": '.$this->colortransformer->colortransformer->colortransformer,
                    (strlen($encodedData) - 1),
                    0
                );
            }

            return 'data: ' . $encodedData . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderPadding(): string
    {
        if (get_object_vars($this->padding->padding)) {
            return 'padding: ' . json_encode($this->padding->padding) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderColor(): string
    {
        if (get_object_vars($this->color->color)) {
            return 'color: ' . json_encode($this->color->color) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderInteraction(): string
    {
        if (get_object_vars($this->interaction->interaction)) {
            return 'interaction: ' . json_encode($this->interaction->interaction) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderTransition(): string
    {
        if (get_object_vars($this->transition->transition)) {
            return 'transition: ' . json_encode($this->transition->transition) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderAxis(): string
    {
        if (get_object_vars($this->axis->axis)) {
            return 'axis: ' . json_encode($this->axis->axis) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderGrid(): string
    {
        if (get_object_vars($this->grid->grid)) {
            return 'grid: ' . json_encode($this->grid->grid) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderRegion(): string
    {
        if (get_object_vars($this->region->region)) {
            return 'region: ' . json_encode($this->region->region) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderLegend(): string
    {
        if (get_object_vars($this->legend->legend)) {
            return 'legend: ' . json_encode($this->legend->legend) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderTooltip(): string
    {
        if (get_object_vars($this->tooltip->tooltip)) {
            return 'tooltip: ' . json_encode($this->tooltip->tooltip) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderSubchart(): string
    {
        if (get_object_vars($this->subchart->subchart)) {
            return 'subchart: ' . json_encode($this->subchart->subchart) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderZoom(): string
    {
        if (get_object_vars($this->zoom->zoom)) {
            return 'zoom: ' . json_encode($this->zoom->zoom) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderPoint(): string
    {
        if (get_object_vars($this->point->point)) {
            return 'point: ' . json_encode($this->point->point) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderLine(): string
    {
        if (get_object_vars($this->line->line)) {
            return 'line: ' . json_encode($this->line->line) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderBar(): string
    {
        if (get_object_vars($this->bar->bar)) {
            return 'bar: ' . json_encode($this->bar->bar) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderPie(): string
    {
        if (get_object_vars($this->pie->pie)) {
            return 'pie: ' . json_encode($this->pie->pie) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderDonut(): string
    {
        if (get_object_vars($this->donut->donut)) {
            return 'donut: ' . json_encode($this->donut->donut) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderGauge(): string
    {
        if (get_object_vars($this->gauge->gauge)) {
            return 'gauge: ' . json_encode($this->gauge->gauge) . ",\n";
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderTitle(): string
    {
        if (get_object_vars($this->title->title)) {
            return 'title: ' . json_encode($this->title->title) . ",\n";
        }

        return '';
    }
}
