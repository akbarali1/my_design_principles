<?php

namespace App\ActionData;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\ValidationException;

/**
 * Created by PhpStorm.
 * Filename: ActionDataContract.php
 * Project Name: my_design_principles
 *
 * Author: akbarali
 * Date: 11/12/2023
 * Time: 16:38
 * GitHub: https://github.com/akbarali1
 * Telegram: @akbar_aka
 * E-mail: me@akbarali.uz
 */
interface ActionDataContract
{
    public static function createFromRequest(Request $request);

    public static function createFromArray(array $parameters = []);

    /**
     * @param bool $silent
     * @return bool
     * @throws ValidationException
     */
    public function validate(bool $silent = true): bool;

    public function getValidationErrors(): ?MessageBag;

}
