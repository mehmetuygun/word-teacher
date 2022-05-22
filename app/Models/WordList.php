<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\WordList
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WordListFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|WordList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WordList query()
 * @method static \Illuminate\Database\Eloquent\Builder|WordList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WordList whereUserId($value)
 * @mixin \Eloquent
 */
class WordList extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    /**
     * @return HasMany
     */
    public function words(): HasMany
    {
        return $this->hasMany(Word::class);
    }
}
