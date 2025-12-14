<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PagesController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'title' => 'Smart Watch Pro',
                'price' => 8499,
                'description' => 'Fitness tracking, heart rate monitor',
                'image' => 'images/product/1.jpeg'
            ],
            [
                'id' => 2,
                'title' => 'Wireless Headphones',
                'price' => 3999,
                'description' => 'Noise cancellation, 30hr battery',
                'image' => 'images/product/2.jpeg'
            ],
            [
                'id' => 3,
                'title' => 'Gaming Laptop',
                'price' => 75999,
                'description' => '16GB RAM, 512GB SSD, GTX Graphics',
                'image' => 'images/product/3.jpeg'
            ],
            [
                'id' => 4,
                'title' => 'Smartphone 5G',
                'price' => 24999,
                'description' => '128GB, 6GB RAM, 48MP Camera',
                'image' => 'images/product/4.jpeg'
            ],
            [
                'id' => 5,
                'title' => 'Designer Sunglasses',
                'price' => 1499,
                'description' => 'UV protection, polarized lens',
                'image' => 'images/product/5.jpeg'
            ],
            [
                'id' => 6,
                'title' => 'Running Shoes',
                'price' => 4299,
                'description' => 'Lightweight, breathable material',
                'image' => 'images/product/6.jpeg'
            ]
        ];

        return view('index', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}