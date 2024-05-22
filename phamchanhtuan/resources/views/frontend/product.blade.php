@extends('layouts.site')

@section('title', 'san pham')

@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
@endsection

@section('maincontent')
    <div class="maincontent mb-5">
        <div class="p-4">
            <h1 class="text-center text-success mb-4">TẤT CẢ SẢN PHẨM MỚI</h1>
            <div class="row">
                <?php
                $products = [
                    [
                        'name' => 'CHE KHUYẾT ĐIỂM KIỀM DẦU BỀN MÀU MATTE ADDICT CONCEALER',
                        'description' => 'Che Khuyết Điểm.',
                        'price' => '199,000 VND',
                        'image' => 'images/sp.webp'
                    ],
                    [
                        'name' => 'PHẤN NƯỚC SIÊU KIỀM DẦU SUPERMATTE CUSHION',
                        'description' => 'Phấn Nước.',
                        'price' => '359,000 VND',
                        'image' => 'images/sp1.webp'
                    ],
                    [
                        'name' => 'COMBO PHẤN NƯỚC SIÊU KIỀM DẦU SUPERMATTE CUSHION & BÚT KẺ MẮT MICRO EYELINER SUPERTIGER',
                        'description' => 'Phấn Nước & Bút Kẻ Mắt.',
                        'price' => '559,000 VND',
                        'image' => 'images/sp2.webp'
                    ],
                    [
                        'name' => 'CỌ CHE KHUYẾT ĐIỂM CONCEALER BRUSH',
                        'description' => 'Cọ Tán Kem.',
                        'price' => '99,000 VND',
                        'image' => 'images/sp3.webp'
                    ],
                ];

                foreach ($products as $product) {
                    echo '
                    <div class="col-6 col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="' . asset($product['image']) . '" class="card-img-top" alt="' . $product['name'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $product['name'] . '</h5>
                                <p class="card-text">' . $product['description'] . '</p>
                                <p class="card-text text-success">' . $product['price'] . '</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>

        <div class="p-4">
            <h1 class="text-center text-success mb-4">TẤT CẢ SẢN PHẨM SALE</h1>
            <div class="row">
                <?php
                $products = [
                    [
                        'name' => 'CHE KHUYẾT ĐIỂM KIỀM DẦU BỀN MÀU MATTE ADDICT CONCEALER',
                        'description' => 'Che Khuyết Điểm.',
                        'price' => '99,000 VND',
                        'image' => 'images/sp.webp'
                    ],
                    [
                        'name' => 'PHẤN NƯỚC SIÊU KIỀM DẦU SUPERMATTE CUSHION',
                        'description' => 'Phấn Nước.',
                        'price' => '259,000 VND',
                        'image' => 'images/sp1.webp'
                    ],
                ];

                foreach ($products as $product) {
                    echo '
                    <div class="col-6 col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="' . asset($product['image']) . '" class="card-img-top" alt="' . $product['name'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $product['name'] . '</h5>
                                <p class="card-text">' . $product['description'] . '</p>
                                <p class="card-text text-success">' . $product['price'] . '</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
               
        </div>

            <div class="p-4">
            <h1 class="text-center text-success mb-4">TẤT CẢ BÀI VIẾT MỚI</h1>
            <div class="row">
                <?php
                $newArticles = [
                    [
                        'title' => 'Shade hồng nude trong suốt. Sử dụng được với tất cả dòng son !',
                        'excerpt' => 'Làm đầy rãnh môi và cấp ẩm cho môi hiệu quả suốt 12g với thành phần chiết xuất Hyaluronic Acid.',
                        'date' => '2024-05-10',
                        'image' => 'images/article.webp'
                    ],
                    [
                        'title' => '',
                        'excerpt' => 'Tạo được hiệu ứng môi căng mọng, mềm mịn, không khô và lộ vân môi khi sử dụng với bất kì kem lỳ nào, giúp sắc màu son bật lên đúng màu.',
                        'date' => '2024-05-12',
                        'image' => 'images/article.webp'
                    ],
                    [
                        'title' => '',
                        'excerpt' => 'Hiệu quả dưỡng môi hồng mềm mịn khi sử dụng thường xuyên trong 30 ngày.',
                        'date' => '2024-05-14',
                        'image' => 'images/article.webp'
                    ],
                    // Thêm các bài viết mới tại đây
                ];

                foreach ($newArticles as $article) {
                    echo '
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100 article-card">
                            <img src="' . asset($article['image']) . '" class="card-img-top" alt="' . $article['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $article['title'] . '</h5>
                                <p class="card-text">' . $article['excerpt'] . '</p>
                                <p class="card-text"><small class="text-muted">' . $article['date'] . '</small></p>
                                <a href="#" class="btn btn-primary">Đọc tiếp</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
@endsection