<?php

namespace App\app\ViewModels;

use App\Presenters\ApiResponse;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Created by PhpStorm.
 * Filename: ViewModelContract.php
 * Project Name: my_design_principles
 *
 * Author: akbarali
 * Date: 11/12/2023
 * Time: 16:38
 * GitHub: https://github.com/akbarali1
 * Telegram: @akbar_aka
 * E-mail: me@akbarali.uz
 */
interface ViewModelContract
{
    public function toView(string $viewName, array $additionalParams = []): Factory|View|Application;

    public function toJsonApi(): ApiResponse;
}
