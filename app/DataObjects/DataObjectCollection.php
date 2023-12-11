<?php

namespace App\app\DataObjects;

use Illuminate\Support\Collection;

/**
 * Created by PhpStorm.
 * Filename: DataObjectCollection.php
 * Project Name: my_design_principles
 * Author: akbarali
 * Date: 11/12/2023
 * Time: 16:39
 * GitHub: https://github.com/akbarali1
 * Telegram: @akbar_aka
 * E-mail: me@akbarali.uz
 */
class DataObjectCollection
{

    /** @var Collection */
    public Collection $items;
    public int        $totalCount;
    public int        $limit;
    public int        $page;

    public function __construct(Collection $items, int $totalCount, int $limit, int $page)
    {
        $this->items      = $items;
        $this->totalCount = $totalCount;
        $this->limit      = $limit;
        $this->page       = $page;
    }
}
