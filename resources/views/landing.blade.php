<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Layanan pembuatan CV profesional dan online CV dengan berbagai pilihan paket.">
    <title>Layanan CV Profesional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/landing-page.css') }}">
    <style>
        .hero {
            position: relative;
            height: 100vh;
            background: url('{{ asset('resources/image/blogs-resumes-1024x768.jpg') }}') center center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="floating-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid px-4">
                <a class="navbar-brand" href="#">HRPro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero text-center d-flex flex-column align-items-center justify-content-center">
        <div class="hero-content">
            <h1 class="hero-title">Buat CV Profesional dengan Mudah</h1>
            <p class="hero-subtitle">Tingkatkan peluang karier Anda dengan CV yang menarik dan profesional.</p>
            <a href="#services" class="btn btn-primary btn-lg hero-button">Pesan Sekarang</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Tentang Kami</h2>
            <p>Kami adalah penyedia layanan pembuatan CV profesional yang bertujuan membantu Anda mendapatkan pekerjaan
                impian. Dengan berbagai paket yang disesuaikan, kami memastikan Anda memiliki CV yang menonjol.</p>
        </div>
    </section>

    <!-- Services Section -->
    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Paket Layanan Kami</h2>
            <div class="row">
                <!-- Basic Package -->
                <div class="col-md-4">
                    <div class="service-card text-center shadow-sm p-4 rounded">
                        <h3 class="mb-3 text-primary">Basic</h3>
                        <p class="price text-muted mb-4">Rp 50.000</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Desain sederhana dan minimalis</li>
                            <li>✔️ Maksimal 1 halaman CV</li>
                            <li>✔️ File format PDF</li>
                            <li>✔️ Revisi 1 kali</li>
                            <li>✔️ Waktu pengerjaan: 2 hari kerja</li>
                        </ul>
                        <form action="{{ route('paymentpage') }}" method="post">
                            @csrf
                            <input type="hidden" name="challenge" value="{{ $challenge }}">
                            <input type="hidden" name="price" value="500000">
                            <input type="hidden" name="title" value="Basic">
                            <button type="submit" class="btn btn-primary mt-4">Pesan Sekarang</button>
                        </form>
                    </div>
                </div>

                <!-- Professional Package -->
                <div class="col-md-4">
                    <div class="service-card text-center shadow-sm p-4 rounded">
                        <h3 class="mb-3 text-success">Professional</h3>
                        <p class="price text-muted mb-4">Rp 100.000</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Desain modern dan profesional</li>
                            <li>✔️ Maksimal 2 halaman CV</li>
                            <li>✔️ File format PDF dan DOCX</li>
                            <li>✔️ Revisi hingga 2 kali</li>
                            <li>✔️ Waktu pengerjaan: 1 hari kerja</li>
                        </ul>
                        <form action="{{ route('paymentpage') }}" method="post">
                            @csrf
                            <input type="hidden" name="challenge" value="{{ $challenge }}">
                            <input type="hidden" name="price" value="100000">
                            <input type="hidden" name="title" value="Professional">
                            <button type="submit" class="btn btn-primary mt-4">Pesan Sekarang</button>
                        </form>
                    </div>
                </div>

                <!-- Premium Package -->
                <div class="col-md-4">
                    <div class="service-card text-center shadow-sm p-4 rounded">
                        <h3 class="mb-3 text-warning">Premium</h3>
                        <p class="price text-muted mb-4">Rp 125.000</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Desain kreatif dan eksklusif</li>
                            <li>✔️ Maksimal 3 halaman CV</li>
                            <li>✔️ File format PDF, DOCX, dan Canva link</li>
                            <li>✔️ Revisi tanpa batas (7 hari)</li>
                            <li>✔️ Waktu pengerjaan: prioritas (6 jam)</li>
                        </ul>
                        <form action="{{ route('paymentpage') }}" method="post">
                            @csrf
                            <input type="hidden" name="challenge" value="{{ $challenge }}">
                            <input type="hidden" name="price" value="125000">
                            <input type="hidden" name="title" value="Premium">
                            <button type="submit" class="btn btn-primary mt-4">Pesan Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Template Section -->
    <section id="our-template" class="py-5" style="display: none">
        <div class="container">
            <h2 class="text-center mb-5">Template Kami</h2>
            <div id="templateCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Template 1 -->
                    <div class="carousel-item active">
                        <div class="template-card text-center mx-auto shadow-sm">
                            <img src="https://via.placeholder.com/300x400?text=Template+1" alt="Template 1"
                                class="img-fluid rounded">
                            <h5 class="mt-3">Template Modern</h5>
                            <p class="text-muted">Desain modern untuk tampilan profesional.</p>
                        </div>
                    </div>
                    <!-- Template 2 -->
                    <div class="carousel-item">
                        <div class="template-card text-center mx-auto shadow-sm">
                            <img src="https://via.placeholder.com/300x400?text=Template+2" alt="Template 2"
                                class="img-fluid rounded">
                            <h5 class="mt-3">Template Elegan</h5>
                            <p class="text-muted">Desain elegan untuk kesan premium.</p>
                        </div>
                    </div>
                    <!-- Template 3 -->
                    <div class="carousel-item">
                        <div class="template-card text-center mx-auto shadow-sm">
                            <img src="https://via.placeholder.com/300x400?text=Template+3" alt="Template 3"
                                class="img-fluid rounded">
                            <h5 class="mt-3">Template Minimalis</h5>
                            <p class="text-muted">Desain sederhana namun menonjol.</p>
                        </div>
                    </div>
                    <!-- Template 4 -->
                    <div class="carousel-item">
                        <div class="template-card text-center mx-auto shadow-sm">
                            <img src="https://via.placeholder.com/300x400?text=Template+4" alt="Template 4"
                                class="img-fluid rounded">
                            <h5 class="mt-3">Template Kreatif</h5>
                            <p class="text-muted">Cocok untuk bidang kreatif.</p>
                        </div>
                    </div>
                    <!-- Template 5 -->
                    <div class="carousel-item">
                        <div class="template-card text-center mx-auto shadow-sm">
                            <img src="https://via.placeholder.com/300x400?text=Template+5" alt="Template 5"
                                class="img-fluid rounded">
                            <h5 class="mt-3">Template Profesional</h5>
                            <p class="text-muted">Tunjukkan profesionalisme Anda.</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <div class="carousel-indicators custom-indicators">
                    <button type="button" data-bs-target="#templateCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#templateCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#templateCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#templateCarousel" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#templateCarousel" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary btn-lg">Masih Banyak Lagi</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Pelanggan Kami</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <div class="testimonial-card text-center shadow-sm mx-auto">
                            <p class="testimonial-text">"Pelayanan sangat cepat dan hasil CV saya terlihat profesional.
                                Terima kasih!"</p>
                            <h5 class="testimonial-name">Andi, Jakarta</h5>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="testimonial-card text-center shadow-sm mx-auto">
                            <p class="testimonial-text">"Desain CV sangat menarik dan sesuai dengan kebutuhan saya."
                            </p>
                            <h5 class="testimonial-name">Sinta, Bandung</h5>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <div class="testimonial-card text-center shadow-sm mx-auto">
                            <p class="testimonial-text">"Saya mendapatkan pekerjaan impian setelah menggunakan jasa
                                ini!"</p>
                            <h5 class="testimonial-name">Riko, Surabaya</h5>
                        </div>
                    </div>
                    <!-- Testimonial 4 -->
                    <div class="carousel-item">
                        <div class="testimonial-card text-center shadow-sm mx-auto">
                            <p class="testimonial-text">"Prosesnya mudah dan cepat, sangat direkomendasikan!"</p>
                            <h5 class="testimonial-name">Lisa, Yogyakarta</h5>
                        </div>
                    </div>
                    <!-- Testimonial 5 -->
                    <div class="carousel-item">
                        <div class="testimonial-card text-center shadow-sm mx-auto">
                            <p class="testimonial-text">"CV saya terlihat lebih profesional dan menonjol. Sukses
                                selalu!"</p>
                            <h5 class="testimonial-name">Eko, Medan</h5>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Contact Form (Left Side) -->
                <div class="col-md-6">
                    <h2 class="mb-4">Hubungi Kami</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control contact-input" id="name"
                                placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control contact-input" id="email"
                                placeholder="Masukkan email Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control contact-input" id="message" rows="5" placeholder="Tuliskan pesan Anda"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>

                <!-- Contact Support Image (Right Side) -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('resources/image/a78d2ef6-084d-44fe-9526-6771d2c31479.jpeg') }}"
                        alt="Customer Support" class="img-fluid contact-image">
                    <p class="mt-3 text-muted">Tim kami siap membantu Anda 24/7.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><strong>Phone:</strong> +62 823 0114 8188</li>
                        <li><strong>Email:</strong> rizalabulfata@gmail.com</li>
                        <li><strong>WhatsApp:</strong> <a href="https://wa.me/6282301148188" class="text-light"
                                target="_blank">+62 823 0114 8188</a></li>
                    </ul>
                </div>

                <!-- Address Section -->
                <div class="col-md-4">
                    <h5>Our Location</h5>
                    <address>
                        <strong>HRPro</strong><br>
                        Jl, Kalimas 13 Dusun Gutoguh Poreh, Kec. Lenteng Kab. Sumenep<br>
                        Jawa Timur, 69461
                    </address>
                </div>

                <!-- Social Media Links -->
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <div>
                        <a href="https://facebook.com" class="text-light me-3" target="_blank"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://twitter.com" class="text-light me-3" target="_blank"><i
                                class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://instagram.com" class="text-light" target="_blank"><i
                                class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="text-center mt-4">
                <p>&copy; 2025 HRPro. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
