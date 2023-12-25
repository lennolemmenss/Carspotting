<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFAQItemRequest;
use App\Http\Requests\UpdateFAQItemRequest;
use App\Models\FAQItem;

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
            // Add other validation rules as needed
        ]);

        // Create a new FAQ item
        FAQItem::create($validatedData);

        // Redirect back to the FAQ page or wherever you prefer
        return redirect()->route('FAQ')->with('success', 'FAQ item created successfully!');

    }


    public function showFAQ()
    {
        $faqItems = FAQItem::all(); // Adjust as needed
        return view('FAQ', ['faqItems' => $faqItems]);
    }

}
