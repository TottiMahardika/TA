@extends('layout.main')

@section('Home', 'title')

    <link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')

    <!-- Hero Section -->
    <header id="hero">
        <div class="container-fluid h-100 col-lg-12">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-light font-weight-bold">Selamat datang di Book.id!</h1>
                    <hr class="divider text-warning" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-light mb-5">Kami adalah platform rental buku online yang menawarkan berbagai judul buku untuk memenuhi hasrat baca Anda. Dengan berbagai koleksi yang luas, kami berusaha untuk membawa pengalaman membaca yang menyenangkan dan akses mudah ke pengetahuan bagi semua orang.</p>
                </div>
            </div>
        </div>
    </header>

    <!--Book List Section-->
    <section class="page-section" id="booklist">
        <div class="container" id="booklist">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan Kami</h2>
                <h3 class="section-subheading text-muted">Book.id hadir menjadi solusi bagi kamu</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4 my-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Fleksibilitas Rental</h4>
                    <p class="text-muted">Kami memahami bahwa setiap orang memiliki kebutuhan dan preferensi yang berbeda. Oleh karena itu, kami menawarkan pilihan sewa buku yang fleksibel, mulai dari sewa harian hingga sewa bulanan. Anda dapat memilih periode sewa yang sesuai dengan jadwal dan kebutuhan Anda.</p>
                </div>
                <div class="col-md-4 my-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Pengiriman dan Pengembalian Mudah</h4>
                    <p class="text-muted">Kami menyediakan layanan pengiriman buku yang cepat dan andal. Setelah Anda memilih buku yang ingin disewa, kami akan mengirimkannya ke pintu Anda. Ketika masa sewa berakhir, Anda dapat mengembalikan buku dengan mudah menggunakan layanan pengiriman yang sama.</p>
                </div>
                <div class="col-md-4 my-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-headset fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Layanan Pelanggan yang Responsif</h4>
                    <p class="text-muted">Tim kami siap membantu Anda dengan segala pertanyaan atau masalah yang Anda miliki. Kami memiliki tim layanan pelanggan yang responsif yang siap membantu Anda melalui telepon, email, atau obrolan langsung.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Kontak Section -->
    <section class="container-fluid py-5" id="contact">
        <div class="row py-5">
            <div class="col py-5">
                <h3>Butuh Konsultasi..?
                    Silahkan hubungi kami
                    Kami Siap Membantu
                </h3>
                <div class="kontak">
                    <h6>Kontak</h6>
                    <div class="mb-2 text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                        </svg>
                        <a href="#">Purwosari RT 02 RW 11 Laweyan, Surakarta, Jawa Tengah</a>
                    </div>
                    <div class="mb-2 text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                        <a href="#">0895326684375</a>
                    </div>
                    <div class="mb-2 text-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                            <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                        </svg>
                        <a href="#">bookid86@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col my-5">
                <div class="card-contact align-items-center">
                    <form>
                        <h2>Any Question..?</h2>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="d-flex align-item-center">Masukkan email anda disini..</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="d-flex align-item-center">Pertanyaan atau saran anda..</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 p-4">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/home.js')}}"></script>
@endsection