<?php

namespace App\app\ActionData\Category;

use App\app\ActionData\ActionDataBase;
use App\Models\StoreModel;
use Illuminate\Validation\Rule;

/**
 * Created by PhpStorm.
 * Filename: StoreCategoryActionData.php
 * Project Name: my_design_principles
 * Author: akbarali
 * Date: 11/12/2023
 * Time: 16:42
 * GitHub: https://github.com/akbarali1
 * Telegram: @akbar_aka
 * E-mail: me@akbarali.uz
 */
class StoreCategoryActionData extends ActionDataBase
{
    public ?string $store_id;
    public ?array  $data;

    protected function prepare(): void
    {
        $this->rules = [
            "store_id"           => [
                'required',
                'string',
                Rule::exists('stores', 'id')
                    ->where('id', $this->user->store_ids)
                    ->where('status', StoreModel::STATUS_ACTIVE),
            ],
            'data'               => 'required|array',
            'data.*.id'          => 'nullable|string|exists:categories,id',
            'data.*.name'        => 'required|string',
            "data.*.status"      => "required|in:".StoreModel::STATUS_ACTIVE.",".StoreModel::STATUS_INACTIVE,
            'data.*.description' => 'nullable|string',
            'data.*.image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            "data.*.parent_id"   => "nullable|string|exists:categories,id",
            'data.*.sort'        => 'nullable|integer',
            "data.*.visible"     => "nullable|in:1",
        ];
    }

    protected function messages(): array
    {
        return [
            'store_id.exists' => ":attribute aktiv emas yoki sizga biriktirilmagan.",
        ];
    }

}
