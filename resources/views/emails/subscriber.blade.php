<!DOCTYPE html>
<html>

<head>
    <title>Welcome Email</title>
</head>

<body>

    @if($status->status == true)
    <h4>Dear, {{ $userEmail }}</h4>
    <p>{{ $userMessage }}</p>
    @else
    <h4>Welcome to the site {{ $userEmail }}</h4>
    <p>Thank you for using the nccf website</p>
    @endif
</body>

</html>