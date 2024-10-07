<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Banner Component -->
    <x-banner />

    <div class="container my-5">
        <div class="row">
            <!-- Latest Products -->
            <div class="col-md-8">
                <x-latest-products />
            </div>

            <!-- Customer Login Form -->
            <div class="col-md-4">
                <x-customer-login />
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    <x-footer />

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
