# Usage

## Basic Line Chart

In controller:

``` php
<?php

use Muspelheim\C3ChartsBundle\C3\C3js;

// ...
public function chartAction()
{
    // Chart data
    $data = [
        ['data1', 30, 20, 50, 40, 60, 50],
        ['data2', 200, 130, 90, 240, 130, 220],
        ['data3', 300, 200, 160, 400, 250, 250]
    ];

    $chart = new C3js();
    $chart->bindto('c3graph');  // div ID where graph will be render
    $chart->title->text('My pretty chart');
    $chart->axis->x->label("Horizontal title");
    $chart->axis->y->label("Vertical title");
    $chart->data->columns($data);

    return $this->render('::chart.html.twig', array(
        'chart' => $chart
    ));
}
```

In template:

``` html
<link href="//cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css" media="screen" rel="stylesheet" type="text/css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js"></script>

<script type="text/javascript">
    {{ c3chart(chart) }}
</script>

<div id="c3graph"></div>
```
