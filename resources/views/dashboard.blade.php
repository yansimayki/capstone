@extends('layouts.nav')


@section('content')
<h1>Dashboard</h1>
                <div class="row g-3 my-2 d-flex justify-content-around">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">20</h3>
                                <p class="fs-5">Students</p>
                            </div>
                            <i class="fa-solid fa-user-graduate fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">10</h3>
                                <p class="fs-5">Teacher</p>
                            </div>
                            <i class="fa-solid fa-chalkboard-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">2</h3>
                                <p class="fs-5">User</p>
                            </div>
                            <i class="fa-solid fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
   

    @endsection

<script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
