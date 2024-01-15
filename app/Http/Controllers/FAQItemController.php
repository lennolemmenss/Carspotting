<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFAQItemRequest;
use App\Http\Requests\UpdateFAQItemRequest;
use App\Models\FAQItem;
use App\Models\FAQCategory;
use Illuminate\Http\Request;

class FAQItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'faq_category_id' => 'required|exists:f_a_q_categories,id',
        ]);

        FAQItem::create($validatedData);

        return redirect()->route('FAQ')->with('success', 'FAQ item created successfully!');

    }

    public function edit(FAQItem $faqItem)
    {
        $faqCategories = FAQCategory::all();
        return view('admin.edit_faq', ['faqItem' => $faqItem, 'faqCategories' => $faqCategories]);
    }

    public function update(Request $request, FAQItem $faqItem)
    {
        $validatedData = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'faq_category_id' => 'required|exists:f_a_q_categories,id',
        ]);
    
        $faqItem->update($validatedData);
    
        return redirect()->route('FAQ')->with('success', 'FAQ item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQItem $faqItem)
    {
        $faqItem->delete();

        return redirect()->route('FAQ')->with('success', 'FAQ item deleted successfully!');
    }

    public function ShowFAQ(Request $request)
    {
        $faqCategories = FAQCategory::all();
    
        $selectedCategory = $request->input('category');
    
        $faqItems = FAQItem::when($selectedCategory, function ($query, $category) {
            return $query->where('faq_category_id', $category);
        })->get();

    return view('FAQ', ['faqItems' => $faqItems, 'faqCategories' => $faqCategories]);

    }

    


}
