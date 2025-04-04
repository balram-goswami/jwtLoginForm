<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome, {{ $user->name }} 👋</h1>
        <p class="text-lg text-gray-600">You are successfully logged in.</p>

        <div class="mt-6 p-4 bg-green-100 text-green-800 rounded-lg shadow-inner">
            ✅ A confirmation email has been queued and will be sent shortly!
        </div>
    </div>

</body>
</html>

