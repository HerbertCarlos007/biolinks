<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'link',
        'name',
        'user_id',
        'sort'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp()
    {
       $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(+1);
    }

    private function move($to)
    {
        $order = $this->sort;
        $new_order = $order + $to;

        /** @var User $user  */
        $user = $this->user;

        $swapWith = $user->links()->where('sort', '=', $new_order)->first();

        $this->fill(['sort' => $new_order])->save();
        $swapWith->fill(['sort' => $order])->save();
    }
}
