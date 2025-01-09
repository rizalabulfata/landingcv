<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentPageRequest;
use Illuminate\Http\Request;

class PaymentPageController extends Controller
{
    public function index(PaymentPageRequest $request)
    {
        $challenge = $request->validated('challenge');
        $answer = hash('sha512', env('APP_KEY') . ':' . now()->format('YmdH'));
        if ($challenge != $answer) {
            abort(403);
        }

        $uniqTf = fake()->numerify('###');
        $orderId = fake()->bothify('#??###???#?#?##?#');
        $price = $request->validated('price');
        $data['orderid'] = $orderId;
        $data['price'] = (int)$price + (int) $uniqTf;
        $data['title'] = $request->title;

        return view('payment-page', $data);
    }
}
