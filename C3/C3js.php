<?php

namespace Muspelheim\C3ChartsBundle\C3;

/**
 * Class C3js
 * @package Muspelheim\C3ChartsBundle\C3
 */
class C3js extends AbstractChart implements ChartInterface
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function render(): string
    {
        $chartJS = "new c3.generate({";
        $chartJS .= $this->renderBindTo();
        $chartJS .= $this->renderArea();
        $chartJS .= $this->renderSize();
        $chartJS .= $this->renderPadding();
        $chartJS .= $this->renderColor();
        $chartJS .= $this->renderInteraction();
        $chartJS .= $this->renderTransition();
        $chartJS .= $this->renderData();
        $chartJS .= $this->renderAxis();
        $chartJS .= $this->renderGrid();
        $chartJS .= $this->renderRegion();
        $chartJS .= $this->renderLegend();
        $chartJS .= $this->renderTooltip();
        $chartJS .= $this->renderSubchart();
        $chartJS .= $this->renderZoom();
        $chartJS .= $this->renderPoint();
        $chartJS .= $this->renderLine();
        $chartJS .= $this->renderBar();
        $chartJS .= $this->renderPie();
        $chartJS .= $this->renderDonut();
        $chartJS .= $this->renderGauge();
        $chartJS .= $this->renderTitle();
        $chartJS .= "})";

        $onload = <<<ONLOAD
;(function () {
  var setup = function () { $chartJS }
  if (document.readyState !== 'loading') {
    setup()
  } else {
    document.addEventListener('DOMContentLoaded', setup)
  }
})();
ONLOAD;

        return trim($onload);
    }
}
