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
        // Retrieve all FAQ categories
        $faqCategories = FAQCategory::all();

        // Pass $faqCategories to the view
        return view('admin.create_faq', ['faqCategories' => $faqCategories]);
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255'
        ]);
    
        // Create a new FAQ category
        FAQCategory::create([
            'name' => $validatedData['category_name']
        ]);
    
        // Redirect back to the form or wherever you prefer
        return redirect()->route('admin.create_faq')->with('success', 'FAQ category created successfully!');
    }
    public function destroy(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'delete_category_id' => 'required',
        ]);

        // Find the FAQ category
        $category = FAQCategory::findOrFail($request->input('delete_category_id'));

        // Check if there are linked FAQ questions
        if ($category->faqItems()->exists()) {
            throw ValidationException::withMessages(['delete_category_id' => 'Cannot delete category with linked FAQ questions.']);
        }

        // Delete the FAQ category
        $category->delete();

        // Redirect back to the form or wherever you prefer
        return redirect()->route('admin.create_faq')->with('success', 'FAQ category deleted successfully!');
    }
}
