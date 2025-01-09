<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Helvetica Neue', sans-serif;
        }

        .header {
            background: linear-gradient(90deg, #3a7bd5, #00d2ff);
            color: white;
            padding: 30px 0;
            text-align: center;
            border-bottom: 4px solid #00d2ff;
        }

        .header h1 {
            font-size: 2.5rem;
        }

        .header p {
            font-size: 1.1rem;
            font-weight: 300;
        }

        .checkout-container {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .btn-primary {
            background: #3a7bd5;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            background: #00d2ff;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            box-shadow: none;
            border: 1px solid #ccc;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #00d2ff;
        }

        .order-summary {
            background-color: #f4f7fa;
            border-radius: 8px;
            padding: 20px;
            margin-top: 30px;
            border-left: 5px solid #3a7bd5;
        }

        .order-summary h5 {
            font-size: 1.2rem;
            color: #333;
        }

        .order-summary p {
            font-size: 1rem;
            margin: 5px 0;
        }

        .order-summary strong {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <header class="header">
        <h1>Payment Details</h1>
        <p>Complete your payment to place your order.</p>
    </header>

    <div class="checkout-container">
        <h3>Payment Information</h3>
        <div class="mb-3">
            <p>Please transfer the amount to the following account:</p>
            <ul>
                <li><strong>Rizal Abul Fata</strong></li>
                <li><strong>Mandiri:</strong> 1400021389102</li>
                <li><strong>Seabank:</strong> 9016 4067 3570</li>
                <li><strong>ShopeePay/GoPay:</strong> +6282301148188</li>
            </ul>
        </div>

        <div class="order-summary mb-4">
            <h5>Order Summary</h5>
            <p>Kode Tagihan: <strong>{{ $orderid }}</strong></p>
            <p>Product Name: <strong>{{ $title }}</strong></p>
            <p>Quantity: <strong>1</strong></p>
            <p>Total Price: <strong>Rp {{ number_format($price, 0, ',', '.') }}</strong></p>
        </div>

        <div class="container pb-3">
            <p class="text-muter"><em>*Silahkan screenshot halaman ini beserta bukti pembayaran</em></p>
        </div>

        <a href="https://wa.me/6282301148188" class="btn btn-primary w-100">Saya Sudah Bayar</a>
        <br><br>
        <a href="{{ route('home') }}" class="btn btn-outline-primary w-100">Back to Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
