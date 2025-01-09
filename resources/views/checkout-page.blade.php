<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Details</title>
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
    </style>
</head>

<body>
    <header class="header">
        <h1>Billing Details</h1>
        <p>Please enter your billing information.</p>
    </header>

    <div class="checkout-container">
        <form action="payment.html" method="GET">
            <h3>Billing Details</h3>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="John" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Doe" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" required>
                        <option value="" selected>Choose...</option>
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Australia</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state" required>
                        <option value="" selected>Choose...</option>
                        <option>California</option>
                        <option>New York</option>
                        <option>Texas</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="12345" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Proceed to Payment</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
