<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveReviewRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Product $product)
    {
        $users = User::whereNotIn('id', $product->reviews->pluck('user_id'))->get();
        return view('reviews.create', compact('product', 'users'));
    }

    public function store(Product $product, SaveReviewRequest $request)
    {
        $product->reviews()->create($request->validated());
        return redirect()->route('products.show', $product);
    }
}
