<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\SuperAdmin\GlobalCurrency
 *
 * @property int $id
 * @property string $currency_name
 * @property string $currency_symbol
 * @property string $currency_code
 * @property float|null $exchange_rate
 * @property float|null $usd_price
 * @property string $is_cryptocurrency
 * @property string $currency_position
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency query()
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereCurrencyPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereIsCryptocurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GlobalCurrency whereUsdPrice($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|GlobalCurrency onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|GlobalCurrency withTrashed()
 * @method static \Illuminate\Database\Query\Builder|GlobalCurrency withoutTrashed()
 */
class GlobalCurrency extends Model
{
    use SoftDeletes;
}
