<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Word
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Word newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Word newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Word query()
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Word extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'word_id', 'word_list_id'];

    /**
     * @return BelongsTo
     */
    public function wordList(): BelongsTo
    {
        return $this->belongsTo(WordList::class);
    }
}
