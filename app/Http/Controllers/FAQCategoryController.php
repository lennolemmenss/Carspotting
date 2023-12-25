<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFAQCategoryRequest;
use App\Http\Requests\UpdateFAQCategoryRequest;
use App\Models\FAQCategory;

class FAQCategoryController extends Controller
{

    public function destroy(FAQCategory $fAQCategory)
    {
        //
    }


    public function showForm()
    {
        // Retrieve all FAQ categories
        $faqCategories = FAQCategory::all();

        // Pass $faqCategories to the view
        return view('admin.create_faq', ['faqCategories' => $faqCategories]);
    }

}
