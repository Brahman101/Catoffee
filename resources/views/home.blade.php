@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="hero">
        <h1>Teman Nongkrong</h1>
        <h1>Beda dari Lainnya</h1>
        <p>Kucing memiliki kepribadian yang tenang sehingga cocok</p>
        <p>dijadikan sebagai teman bersantai sembari menikmati kopi</p>
        <p>melepas penat dan beban hidup.</p>
    </div>
    <!-- The Cats -->
    <div class="cats text-center t-4 custom-width" id="cats-section">
        <h1>The Cats</h1>
        <p>Kucing-kucing di kafe kucing kami dirawat dengan penuh perhatian dan kasih sayang,</p>
        <p style="margin-top: -1rem; margin-bottom: 50px;">memastikan bahwa mereka berada dalam kondisi kesehatan yang
            optimal.</p>
        <div class="row gx-0 justify-content-center">
            <div class="col-md-6 mb-3 d-flex flex-column align-items-end text-center pe-3">
                <img src="{{ asset('images/Hinnss.png') }}" alt="" class="img-fluid rounded-border-white"
                    width="40%" />
                <h5 style="margin-right: 7.5rem;">Hinns</h5>
            </div>
            <div class="col-md-6 mb-3 d-flex flex-column align-items-start text-center ps-3">
                <img src="{{ asset('images/Jamal.png') }}" alt="" class="img-fluid rounded-border-white"
                    width="40%" />
                <h5 style="margin-left: 7.5rem;">Jamal</h5>
            </div>
            <button type="button" class="btn btn-primary btn-lg custom-large-button" style="margin-top: 40px;"
                onclick="window.location.href='/cats'">Lihat Lainya >>></button>
        </div>
    </div>


    <!-- Menu -->
    <div class="mini-menu row gx-0 justify-content-center text-center">
        <h1>Menu</h1>
        <p>Nikmati waktu dengan kucing kami dengan makanan dan minuman.</p>
        <!-- Baris 1 -->
        <div class="col mb-4">
            <!-- Menu 1 dan 2 Group -->
            <div class="menu-group">
                <!-- Menu 1 -->
                <div class="card menu-item" style="width: 18rem;">
                    <img src="{{ asset('images/roti-bakar.jpg') }}" class="card-img-top img-fluid" alt="Menu 1">
                    <div class="card-body">
                        <h5 class="card-title">Roti Bakar</h5>
                        <p class="card-text">Harga : Rp13.000,-</p>
                    </div>
                </div>

                <!-- Menu 2 -->
                <div class="card menu-item" style="width: 18rem;">
                    <img src="{{ asset('images/matcha-milk.jpg') }}" class="card-img-top img-fluid" alt="Menu 3">
                    <div class="card-body">
                        <h5 class="card-title">Milky Matcha</h5>
                        <p class="card-text">Harga : Rp12.000,-</p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-lg custom-large-button" style="margin-top: 40px;"
                onclick="window.location.href='/menu'">Lihat Lainya >>></button>
        </div>
    </div>

    <!-- location -->
    <div class="location d-flex justify-content-center align-items-center text-center" id="location-section">
        <h1>Our Location</h1>
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.728701633626!2d112.60159269999998!3d-7.923380199999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883f803974f03%3A0x37b3b2d18ebec00!2sKontainer%20Cafe%20UMM!5e0!3m2!1sid!2sid!4v1705572333002!5m2!1sid!2sid"
                width="800" height="550" style="border: 2px solid yellow; padding: 1rem;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- operating time -->
    <div class="operating-hour text-center custom-width" id="operating-hours-section">
        <h1>Operating Hours</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Weekdays</h1>
                <p>Senin - Jumat</p>
                <p>08.00 - 21.00</p>
                <p>Rp.30.000/jam/orang</p>
            </div>
            <div class="col-md-6">
                <h1>Weekdays</h1>
                <p>Sabtu &amp Minggu</p>
                <p>09.00 - 22.00</p>
                <p>Rp.50.000/jam/orang</p>
            </div>
        </div>
    </div>
@endsection
