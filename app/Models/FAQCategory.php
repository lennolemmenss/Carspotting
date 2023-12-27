<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // public function faqItems()
    // {
    //     return $this->hasMany(FAQItem::class);
    // }

    public function faqItems()
    {
        return $this->hasMany(FAQItem::class, 'faq_category_id');
    }

    public function items()
    {
        return $this->hasMany(FAQItem::class, 'faq_category_id');
    }
}
