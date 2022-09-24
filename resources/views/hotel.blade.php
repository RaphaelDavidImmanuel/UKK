<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo Hotel | Depok</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custome css file link -->
    <link rel="stylesheet" href="style/app.css">
</head>

<body>

    <!-- header section starts -->
    @include('partials.navbar')
    <!-- header section ends -->

    <!-- login form container -->
    @include('partials.login')

    <!-- home section starts -->
    @include('partials.home')
    <!-- home section ends -->

    <!-- packages section starts -->
    @include('partials.packages')
    <!-- packages section ends -->

    <!-- services section starts -->
    @include('partials.packages')
    <!-- services section ends -->

    <!-- facility section  -->
    @include('partials.facility')
    <!-- falicity section ends -->

    <!-- review section -->
    @include('partials.review')
    <!-- review section ends -->

    <!-- contact section starts -->
    @include('partials.contact')
    <!-- contact section -->

    <!-- book section  -->
    @include('partials.book')
    <!-- book section ends -->

    <!-- footer -->
    @include('partials.footer')
    <!-- footer ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custome js file link -->
    <script src="js/main.js"></script>
</body>
</html>
