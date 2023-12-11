<?php
declare(strict_types=1);

namespace App\DataObjects\Category;

use App\DataObjects\DataObjectBase;

/**
 * Created by PhpStorm.
 * Filename: CategoryData.php
 * Project Name: my_design_principles
 * Author: akbarali
 * Date: 11/12/2023
 * Time: 16:38
 * GitHub: https://github.com/akbarali1
 * Telegram: @akbar_aka
 * E-mail: me@akbarali.uz
 */
class CategoryData extends DataObjectBase
{
    public ?string $id;
    public ?string $name;
    public ?string $description;
    public ?string $image;
    public ?string $parent_id;
    public ?string $store_id;
    public ?bool   $status;
    public ?int    $sort;
    public ?int    $visible;
    public ?string $created_at;

}
