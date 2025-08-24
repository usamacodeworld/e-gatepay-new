<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Merchant Registered</title>
</head>

<body>
    <h2>New Merchant Registration</h2>
    <p>A new merchant has registered on the platform:</p>

    <p><strong>Name:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Phone:</strong> {{ $user->phone }}</p>
    <p><strong>Country:</strong> {{ $user->country }}</p>

    <p>Please review their registration in the admin panel.</p>
</body>

</html>
