@extends('layouts.main')

@section('content')
<!-- HERO -->
<section class="hero">
    <div class="text-hero">
        <h1 class="heading-text">
            Make a New
        </h1>
        <h1 class="accent-text">
            Friends
        </h1>
        <h1 class="heading-text2">
            With Us
        </h1>
        </br>
        <!-- <div class="p-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div> -->
        <a class="btn btn-get-started text-white" href="login">
            Get Started
        </a>

    </div>
    <div class="img-hero">
        <img src="Images/Hero.svg" width="441.54" height="600">
    </div>


</section>

<!-- Akhir Hero -->
<!-- Card Lost Pet -->
<section class="lost-card">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#004aad" fill-opacity="1" d="M0,128L80,133.3C160,139,320,149,480,149.3C640,149,800,139,960,160C1120,181,1280,235,1360,261.3L1440,288L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="title">
                    Lost Pet Nearby
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="300px" class="card-img" />
                    </div>

                    <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                    <div class="card-heading text-center">
                        Briya
                    </div>
                    <div class="card-text text-center">
                        Cat | Kitten
                    </div>
                    <div class="card-text text-center">
                        0.6 Km
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="https://media.istockphoto.com/photos/cute-kitten-licking-glass-table-with-copy-space-picture-id1293763250?b=1&k=20&m=1293763250&s=170667a&w=0&h=zcK63xxkMVX-ca0d5laTsDxauVUMH62F71MKcbqaGnI=" height="300px" class="card-img" />
                    </div>

                    <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                    <div class="card-heading text-center">
                        Briya
                    </div>
                    <div class="card-text text-center">
                        Cat | Kitten
                    </div>
                    <div class="card-text text-center">
                        0.6 Km
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                    </div>

                    <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                    <div class="card-heading text-center">
                        Briya
                    </div>
                    <div class="card-text text-center">
                        Cat | Kitten
                    </div>
                    <div class="card-text text-center">
                        0.6 Km
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="Images/Foot.svg" height="300px" class="card-img" />
                    </div>

                    <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                    <div class="card-heading text-center">
                        <!-- Briya -->
                    </div>
                    <div class="card-text text-center">
                        <!-- Cat | Kitten -->
                    </div>
                    <div class="card-text text-center">
                        <!-- 0.6 Km -->
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>
<!-- Akhir Card Lost Pet -->
<!-- Information Adopt -->
<section class="Information-adopt">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="title-information">
                    Planning To Adopt a Pet?
                </h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <h4 class="title-adopt">
                    Checklist for New Adopters
                </h4>
                <p class="caption">
                    Help make the transition, as smooth as possible.
                </p>
                <button class="btn-learn-more">
                    Learn More
                </button>
            </div>
            <div class="col">
                <h4 class="title-adopt">
                    COVID-19 Resources
                </h4>
                <p class="caption">
                    Get the latest on adoption processes, learn how local shelters
                    and rescue groups are adapting and
                    find out what you can do to help dogs and cats in need right now.
                </p>
                <button class="btn-learn-more">
                    Learn More
                </button>
            </div>
            <div class="col">
                <h4 class="title-adopt">
                    Pet Adoption FAQs
                </h4>
                <p class="caption">
                    Get answers to questions you
                    haven't thought of.
                </p>
                <button class="btn-learn-more">
                    Learn More
                </button>
            </div>
        </div>
    </div>

</section>
<!-- Akhir Information Adopt -->
<!-- Adopsi Nearby -->
<section class="lost-card">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="title">
                    Pets Available for Adoption Nearby
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="300px" class="card-img" />
                    </div>

                    <a class="card-action" href="#"><i class="bi bi-heart"></i></a>
                    <div class="card-heading text-center">
                        Briya
                    </div>
                    <div class="card-text text-center">
                        Cat | Kitten
                    </div>
                    <div class="card-text text-center">
                        0.6 Km
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="300px" class="card-img" />
                    </div>

                    <a class="card-action" href="#"><i class="bi bi-heart"></i></a>
                    <div class="card-heading text-center">
                        Briya
                    </div>
                    <div class="card-text text-center">
                        Cat | Kitten
                    </div>
                    <div class="card-text text-center">
                        0.6 Km
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="300px" class="card-img" />
                    </div>

                    <a class="card-action" href="#"><i class="bi bi-heart"></i></a>
                    <div class="card-heading text-center">
                        Briya
                    </div>
                    <div class="card-text text-center">
                        Cat | Kitten
                    </div>
                    <div class="card-text text-center">
                        0.6 Km
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="300px" class="card-img" />
                    </div>

                    <a class="card-action" href="#"><i class="bi bi-heart"></i></a>
                    <div class="card-heading text-center">
                        Briya
                    </div>
                    <div class="card-text text-center">
                        Cat | Kitten
                    </div>
                    <div class="card-text text-center">
                        0.6 Km
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Akhir Adopsi Nearby-->
<!-- Tips & Trick -->
<section class="tips-card">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="title">
                    Tips And Trick
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card bg-dark text-white">
                    <img src="https://media.istockphoto.com/photos/good-dog-picture-id938105034?b=1&k=20&m=938105034&s=170667a&w=0&h=T3KyQg1aSQao7W0OQ-BluAt4q4SwmjLGSLnBOiAmk5s=" height="350" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Greyi</h5>
                        <p class="card-category-age">Cat | Adult</p>
                        <p class="card-distance">500 m</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-dark text-white">
                    <img src="https://media.istockphoto.com/photos/cute-kitten-licking-glass-table-with-copy-space-picture-id1293763250?b=1&k=20&m=1293763250&s=170667a&w=0&h=zcK63xxkMVX-ca0d5laTsDxauVUMH62F71MKcbqaGnI=" height="350" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Greyi</h5>
                        <p class="card-category-age">Cat | Adult</p>
                        <p class="card-distance">500 m</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-dark text-white">
                    <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="350" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Greyi</h5>
                        <p class="card-category-age">Cat | Adult</p>
                        <p class="card-distance">500 m</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-dark text-white">
                    <img src="Images/Foot.svg" height="350">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Greyi</h5>
                        <p class="card-category-age">Cat | Adult</p>
                        <p class="card-distance">500 m</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#004aad" fill-opacity="1" d="M0,0L80,10.7C160,21,320,43,480,69.3C640,96,800,128,960,133.3C1120,139,1280,117,1360,106.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
</section>
<!-- Akhir Tips & Trick -->
@endsection