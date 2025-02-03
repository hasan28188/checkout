<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        button { background-color: #6772e5; color: white; padding: 10px 20px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Stripe Payment</h2>
    <p>Pay ₹500 securely using Stripe</p>
    <form action="{{ route('stripe.checkout') }}" method="POST">
        @csrf
        <input type="hidden" name="amount" value="500">
        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
