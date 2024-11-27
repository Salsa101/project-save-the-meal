<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Save The Meal | About Us</title>
    <style>
        /* Global Green Text Color */
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        p,
        span,
        a,
        li {
            color: #0F4235;
        }
    </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <x-navbar />

    <!-- Header Section with Top Image -->
    <div class="container-fluid pt-4 pb-3">
        <!-- Top Image Section with fixed size -->
        <div class="row">
            <div class="col-12 text-left">
                <img src="{{ asset('image/AboutH.png') }}" alt="Save The Meal" width="500" height="140">
            </div>
        </div>

        <div class="row ms-0 me-0 d-flex align-items-center">
            <!-- Left Content (Image) with padding -->
            <div class="col-md-6 ps-4 p-0">
                <img src="{{ asset('image/About1.png') }}" alt="About Save The Meal" class="img-fluid mt-3">
            </div>

            <!-- Right Content (Description) -->
            <div class="col-md-6 p-0 d-flex flex-column justify-content-center align-items-start">
                <p class="about-us-description fs-4" style="text-align: justify;">
                    At Save The Meal, we are dedicated to bridging the gap between food surplus and food scarcity in
                    Indonesia. Our mission is simple yet powerful: to connect restaurants with those in need by
                    facilitating donations of excess food, ensuring that no meal goes to waste and that hungry
                    individuals receive the nourishment they deserve.
                </p>
            </div>
        </div>
    </div>

    <!-- Second Section (Content with Text on Left and Image on Right) -->
    <div class="container-fluid pt-4 pb-3">
        <div class="row ms-0 me-0 d-flex align-items-center">
            <!-- Left Column (Text) -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-start pt-4">
                <p class="about-us-description fs-4" style="text-align: justify;">
                    Indonesia, as the largest producer of food waste in Southeast Asia, faces a significant challenge.
                    According to the United Nations Environment Program (UNEP) report titled Food Waste Index 2021, the
                    country generates an overwhelming amount of food waste every year. Meanwhile, the 2023 Global Hunger
                    Index (GHI) places Indonesia as the second-highest country in Southeast Asia in terms of hunger
                    levels, with millions of people struggling to access nutritious meals.
                </p>
            </div>

            <!-- Right Column (Image) -->
            <div class="col-md-6 p-0">
                <img src="{{ asset('image/About2.png') }}" alt="About Save The Meal" class="img-fluid mt-3">
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="container-fluid pt-4 pb-3">
        <div class="cont-mission ms-5 me-5 mt-5 mb-5">
            <div class="title-mission d-flex align-items-center">
                <div class="line me-3"></div>
                <h2 class="fw-bolder">Our Mission</h2>
            </div>
            <p class="fs-4 pt-4">
                We aim to tackle both of these pressing issues by providing a seamless platform where restaurants can
                donate excess food to those in need. Our goal is to reduce food waste while alleviating hunger,
                creating a more sustainable and compassionate food system. By partnering with local restaurants and
                organizations, we help ensure that surplus food is redirected to communities who need it most. Together,
                we can make a lasting impact on food security and sustainability in Indonesia. Join us in this important
                cause. Let’s make a difference, one meal at a time.
            </p>
        </div>
    </div>

    <!-- Hunger-Free Section -->
    <div class="hunger-free-section"
        style="background-color: #0F4235; border-radius: 82px; width: 100%; height: 93px; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
        <h1 class="text-white" style="font-size: 24px; text-align: center;">
            Creating a hunger-free Indonesia by reducing food waste
        </h1>
    </div>

    <!-- Impact Section -->
    <div class="container-fluid pt-4 pb-3">
        <div class="cont-impact ms-5 me-5 mt-5 mb-5">
            <div class="title-impact d-flex align-items-center">
                <div class="line me-3"></div>
                <h1 class="fw-bolder">See the Impact We’ve Made Together</h1>
            </div>

            <div class="container pt-4">
                <div class="row mt-4 d-flex justify-content-between">
                    <!-- Use justify-content-between for equal spacing -->
                    <!-- First Column (50,000+) -->
                    <div class="col-md-3 col-sm-6 text-center mb-4">
                        <h5 class="fw-bold" style="font-size: 32px;">50,000+</h5>
                        <p style="font-size: 20px;">Meals delivered across Indonesia</p>
                    </div>

                    <!-- Second Column (500+) -->
                    <div class="col-md-3 col-sm-6 text-center mb-4">
                        <h5 class="fw-bold" style="font-size: 32px;">500+</h5>
                        <p style="font-size: 20px;">Partner restaurants joining the fight against food waste.</p>
                    </div>

                    <!-- Third Column (300+) -->
                    <div class="col-md-3 col-sm-6 text-center mb-4">
                        <h5 style="font-size: 32px;">300+</h5> <!-- Not bolded -->
                        <p style="font-size: 20px;">Dedicated volunteers making it all possible</p>
                    </div>

                    <!-- Last Column (Remaining space) -->
                    <div class="col-md-3 col-sm-6 text-center mb-4">
                        <p style="font-size: 20px;">Each number above is a testament to the change we’re creating
                            together. Thank you for being part
                            of this journey—together, we’re making a lasting impact across Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Our Team Section -->
    <div class="container-fluid pt-4 pb-3">
        <div class="row ms-4 me-4">
            <div class="col-12 text-center mb-4">
                <h2 class="fw-bolder" style="color: #0F4235;">Meet Our Team</h2>
                <p class="fs-4" style="color: #0F4235;">We are a passionate team working towards a hunger-free
                    Indonesia.</p>
            </div>
        </div>

        <div class="row ms-3 me-3 d-flex justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-md-3 col-sm-4 col-6 text-center mb-4">
                <img src="{{ asset('image/salsa.png') }}" alt="Afrida Salsabila" class="img-fluid rounded-circle mb-3"
                    width="150" height="150">
                <h5 class="fw-bolder" style="color: #0F4235;">Afrida Salsabila Putri</h5>
                <p style="color: #0F4235;">Founder & CEO</p>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-3 col-sm-4 col-6 text-center mb-4">
                <img src="{{ asset('image/jeklin.png') }}" alt="Jacqueline Season" class="img-fluid rounded-circle mb-3"
                    width="150" height="150">
                <h5 class="fw-bolder" style="color: #0F4235;">Jacqueline Season</h5>
                <p style="color: #0F4235;">Operations Manager</p>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-3 col-sm-4 col-6 text-center mb-4">
                <img src="{{ asset('image/vyra.png') }}" alt="Vyra Yesica" class="img-fluid rounded-circle mb-3"
                    width="150" height="150">
                <h5 class="fw-bolder" style="color: #0F4235;">Vira Yesica</h5>
                <p style="color: #0F4235;">Volunteer Coordinator</p>
            </div>
        </div>
    </div>


    <x-footer />
</body>

</html>
