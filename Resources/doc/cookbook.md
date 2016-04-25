## Area chart with dates on axisX with zoom & autoscale + custom area colors

``` php
      $chart = new C3js();

        $chart->bindto ='total';
        $chart->data->x('days');
        $chart->data->columns(
            [
                ["days",1456261320000,1456264920000,1456300920000,1456344120000,1456387320000,1456430520000,1456473720000,],
                ["data",1737,1722,1738,1731,1740,1742,1749]
            ]
        );
        $chart->data->types([
            'data' => 'area',
        ]);
        $chart->data->colors([
            'data' => '#F3622B',
        ]);

        $chart->legend->show(false);
        $chart->area->zerobased(false);
        $chart->point->show(false);
        $chart->subchart->show(true);
        $chart->zoom->enabled(true);
        $chart->zoom->rescale(true);
        $chart->title->text('Chart');
        $chart->axis->x(
            [
                'type'  => 'timeseries',
                'label' => 'Dates',
                'tick'  => [
                    'fit'       => true,
                    'count'     => 10,
                    'format'    => '%Y-%m-%d %H:%M'
                ]
            ]
        );
        $chart->axis->y([
            'inner' => true,
            'label' => [
                'text'      => 'Numbers',
                'position'  => 'outer-middle'
            ]
        ]);
```

