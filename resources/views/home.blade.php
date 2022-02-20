<x-layout>
    <header class="container-flex header-img">
        <div class="col-8 offset-2 text-center text-white">
            <h1 class="pt-5 fw-bolder fs-title">Welcome to SofaTalks club</h1>
            <p class="fs-4 py-4">SofaTalks is an English zoom chat room where we discuss different topics of today's
                society. We want to hear your opinion!</p>
            @guest
                <a href="{{ route('login') }}" class="fs-5 mx-3 mt-5 btn white bg-acc">Log in</a>
                <a href="{{ route('register') }}" class="fs-5 mx-3 mt-5 btn white bg-acc">Sign up</a>

            @endguest



        </div>


    </header>
    <div class="container-fluid bg-secondary bg-opacity-10">
        <div class="row mx-auto py-5">
            <div class="col-12 col-md-5 mt-5">
                <h4 class="text-center">Pick your favourite topic for our next discussion</h4>
                <div class="card my-3 shadow">
                    <div class="card-body">
                        <label class="form-check-label" for="votingRadio1">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </label>
                    </div>
                </div>
                <div class="card my-3 shadow">
                    <div class="card-body">
                        <label class="form-check-label" for="votingRadio2">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </label>
                    </div>
                </div>
                <div class="card my-3 shadow">
                    <div class="card-body">
                        <label class="form-check-label" for="votingRadio3">

                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <span class="btn btn-primary w-auto">Vote</span>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 offset-1 p-3">
                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In obcaecati sequi quidem laboriosam ex odio
                    officia, ea fuga perferendis impedit voluptates nostrum ad! Iste exercitationem eos repudiandae modi
                    a doloribus?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates beatae nemo libero nam saepe
                    dicta eos soluta aliquam, labore necessitatibus minus harum quia deleniti quasi iure amet a
                    recusandae. Nemo.</p>

                <div class="row justify-content-center">
                    <a href="https://discord.com/channels/809513778563514369/822090981398413352" target="_blank"
                        class="btn btn-success w-auto">Join us!</a>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">


        <div class="row mx-auto py-3">
            <h2 class="text-center my-3">Lorem ipsum</h2>
            <div class="col-12 col-md-4 p-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center">Special title treatment</h5>
                            <span class="justify-content-center d-flex my-5">
                                <i class="fa fa-3x fa-brands fa-wpexplorer"></i>
                            </span>
                            <h5 class="text-center fw-bold text-info">bla bla bla</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 p-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center">Special title treatment</h5>
                            <span class="justify-content-center d-flex my-5">
                                <i class="fa fa-3x fa-brands fa-wpexplorer"></i>
                            </span>
                            <h5 class="text-center fw-bold text-danger">bla bla bla</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 p-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center">Special title treatment</h5>
                            <span class="justify-content-center d-flex my-5">
                                <i class="fa fa-3x fa-brands fa-wpexplorer"></i>
                            </span>
                            <h5 class="text-center fw-bold text-warning">bla bla bla</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-layout>
