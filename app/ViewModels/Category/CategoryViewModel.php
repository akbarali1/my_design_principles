<?php
declare(strict_types=1);

namespace App\app\ViewModels\Category;

use App\app\ViewModels\BaseViewModel;
use Carbon\Carbon;
use function App\ViewModels\Category\asset;

/**
 * Created by PhpStorm.
 * Filename: CategoryViewModel.php
 * Project Name: my_design_principles
 * Author: akbarali
 * Date: 11/12/2023
 * Time: 16:42
 * GitHub: https://github.com/akbarali1
 * Telegram: @akbar_aka
 * E-mail: me@akbarali.uz
 */
class CategoryViewModel extends BaseViewModel
{
    public ?string $id;
    public ?string $name;
    public ?string $image;
    public ?string $description;
    public ?bool   $status;
    public ?string $created_at;
    public ?string $hDateTime;

    protected function populate(): void
    {
        $this->hDateTime = Carbon::parse($this->created_at)->format('d.m.Y H:i');
        $this->image     = $this->image ? asset('storage/'.$this->image) : null;
    }
}
