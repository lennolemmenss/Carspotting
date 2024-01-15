<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFAQCategoryRequest;
use App\Http\Requests\UpdateFAQCategoryRequest;
use App\Models\FAQCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class FAQCategoryController extends Controller
{
    public function showForm()
    {
        $faqCategories = FAQCategory::all();

        return view('admin.create_faq', ['faqCategories' => $faqCategories]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255'
        ]);
    
        // Nieuwe categorie aanmaken
        FAQCategory::create([
            'name' => $validatedData['category_name']
        ]);
    
        return redirect()->route('admin.create_faq')->with('success', 'FAQ category created successfully!');
    }
    public function destroy(Request $request)
    {
        $request->validate([
            'delete_category_id' => 'required',
        ]);

        $category = FAQCategory::findOrFail($request->input('delete_category_id'));

        // Nagaan of er gelinkte FAQ vragen aan hangen
        if ($category->faqItems()->exists()) {
            throw ValidationException::withMessages(['delete_category_id' => 'Cannot delete category with linked FAQ questions.']);
        }

        $category->delete();

        return redirect()->route('admin.create_faq')->with('success', 'FAQ category deleted successfully!');
    }
}
