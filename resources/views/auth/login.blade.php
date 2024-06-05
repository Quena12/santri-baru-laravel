@extends('layouts.layouts')

@section('content')
    <section class="vh-100" style="background-color: #e6e9ed;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <h3 class="mb-5 text-center">PP. ASRI BIL QOLAM</h3>

                            <form action="/login" method="POST">
                                @csrf

                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" name="email"
                                        class="form-control form-control-lg mb-2" />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" name="password"
                                        class="form-control form-control-lg mb-2" />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>
                                <div class="form-outline text-center">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
