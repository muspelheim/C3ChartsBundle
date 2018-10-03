<?php

namespace Muspelheim\C3ChartsBundle\C3;

/**
 * Class ChartOption
 * @package Muspelheim\C3ChartsBundle\C3
 */
class ChartOption
{
    private $option;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->option = $name;
        $this->{$name} = new \stdClass();
    }

    /**
     * @param string $name
     * @param array  $value
     *
     * @return $this
     */
    public function __call($name, $value)
    {
        $option = $this->option;
        $this->{$option}->{$name} = $value[0];

        return $this;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        $option = $this->option;
        if (!property_exists($this->{$option}, $name)) {
            $this->{$option}->{$name} = new static($name);
        }
        $value = $this->{$option}->{$name};

        return $value;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __isset($name)
    {
        $option = $this->option;
        
        return isset($this->{$option}->{$name});
    }
}
