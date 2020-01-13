<?php declare(strict_types=1);

namespace ReactInspector\Printer;

use ReactInspector\Metric;

interface Printer
{
    public function print(Metric $metric): string;
}
