<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Constructor to apply authentication middleware.
     * 
     * This ensures that only authenticated users can access the `charge` and `paymentSuccess` methods.
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['charge', 'paymentSuccess']);
    }

    /**
     * Display a listing of all products.
     * 
     * Fetches all products from the database and passes them to the `products.index` view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Display the details of a specific product identified by UUID.
     * 
     * This method retrieves a product by its unique `uuid` and passes the product data to the `products.show` view.
     * If no product is found, it throws a `ModelNotFoundException`.
     *
     * @param string $uuid
     * @return \Illuminate\View\View
     */
    public function show($uuid)
    {
        // Fetch product by UUID
        $product = Product::where('uuid', $uuid)->firstOrFail();
        return view('products.show', compact('product'));
    }

    /**
     * Process the payment for a specific product.
     * 
     * This method initiates a payment session using Stripe's Checkout, allowing the user to pay for a product.
     * It creates a session with product details (name, price), and redirects the user to Stripe's payment page.
     * After the payment session is created, the user is redirected to the Stripe Checkout page.
     *
     * @param string $uuid
     * @return \Illuminate\Http\RedirectResponse
     */
    public function charge($uuid)
    {
        // Fetch product by UUID
        $product = Product::where('uuid', $uuid)->firstOrFail();

        // Set the Stripe API key for making requests to Stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create a new Stripe Checkout Session
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount' => $product->price * 100, // Convert price to cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment', // Indicate a one-time payment mode
            'success_url' => route('payment.success') . '?success=true', // URL for success
            'cancel_url' => route('products.index') . '?canceled=true', // URL for canceled payment
        ]);

        // Redirect user to Stripe Checkout session URL
        return redirect()->away($session->url);
    }

    /**
     * Handle the payment success page.
     * 
     * This method is triggered after a successful payment. It checks if the `success` query parameter
     * is set to true, in which case it shows the `payment.success` view to the user. If the payment was
     * not successful or canceled, the user is redirected back to the product listing page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function paymentSuccess(Request $request)
    {
        // If payment is successful, show success view
        if ($request->query('success') === 'true') {
            return view('payment.success');
        }

        // Redirect back to the product listing page if no success parameter or payment failed
        return redirect()->route('products.index');
    }
}