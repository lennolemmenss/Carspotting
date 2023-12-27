<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQItem extends Model
{
    use HasFactory;


    protected $fillable = [
        'faq_category_id',
        'question',
        'answer',
    ];

    public function faqCategory()
    {
        return $this->belongsTo(FAQCategory::class);
    }

    

}
