<!DOCTYPE html>
<html>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="谷直輝のポートフォリオサイトです" />
    <!-- OGP -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Naoki Tani's Portfolio" />
    <meta property="og:url" content="https://naokitani.tk" />
    <meta property="og:description" content="谷直輝のポートフォリオサイトです" />
    <meta property="og:image" content="ogp.png" />
    <!-- style -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="assets/style.css" />
    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/script.js"></script>
    <!-- icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <title>Naoki Tani's Portfolio</title>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="header-logo">
                <a href="">NAOKI TANI</a>
            </h1>
            <nav>
                <ul class="nav-list">
                    <li class="nav-item"><a href="#works">WORKS</a></li>
                    <li class="nav-item"><a href="#skill">SKILL</a></li>
                    <li class="nav-item"><a href="#about">ABOUT</a></li>
                    <li class="nav-item"><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="fv">
            <div>
                <p class="fv-title">NAOKI TANI</p>
                <p class="fv-subtitle">PORTFOLIO</p>
                <p class="fv-text">谷 直輝のポートフォリオサイト</p>
            </div>
        </div>
        <section id="works">
            <div class="container">
                <h2 class="title">WORKS</h2>
                <div class="works-list">
                    <a class="works-item" href="worksample1.html">
                        <div class="works-img">
                            <img src="img/work1.jpg" alt="作品1" />
                        </div>
                        <p class="works-name">My Gallery</p>
                        <p class="works-info">Coding(Responsive)</p>
                    </a>
                    <a class="works-item" href="worksample2.html">
                        <div class="works-img">
                            <img src="img/work2.jpg" alt="作品2" />
                        </div>
                        <p class="works-name">ABCパソコン教室</p>
                        <p class="works-info">
                            Coding(Responsive)
                        </p>
                    </a>
                    <a class="works-item" href="worksample3.html">
                        <div class="works-img">
                            <img src="img/work3.jpg" alt="作品3" />
                        </div>
                        <p class="works-name">はじめてのNintendo Switch</p>
                        <p class="works-info">Design / Coding </p>
                    </a>
                    <a class="works-item" href="worksample4.html">
                        <div class="works-img">
                            <img src="img/work4.jpg" alt="作品4" />
                        </div>
                        <p class="works-name">Spotem お店情報アプリ</p>
                        <p class="works-info">Design / Coding</p>
                    </a>
                    <a class="works-item" href="worksample5.html">
                        <div class="works-img">
                            <img src="img/work5.jpg" alt="作品5" />
                        </div>
                        <p class="works-name">ゲーム広告バナー</p>
                        <p class="works-info">Banner Design</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- skill -->
        <section id="skill">
            <div class="container">
                <h2 class="title">SKILL</h2>
                <div class="skill-list">
                    <div class="skill-item">
                        <i class="devicon-html5-plain-wordmark colored skill-img"></i>
                        <div class="skill-body">
                            <h3 class="skill-name">HTML5</h3>
                            <p class="skill-text">
                                基本的なコードの記述が可能です。SEO対策にも力を入れています。
                            </p>
                        </div>
                    </div>
                    <div class="skill-item">
                        <i class="devicon-css3-plain-wordmark colored skill-img"></i>
                        <div class="skill-body">
                            <h3 class="skill-name">CSS3</h3>
                            <p class="skill-text">
                                基本的なコードの記述が可能です。アニメーション, レスポンシブにも対応可。フレームワークにTailwindCSS, BootStrapを利用したことがあります。
                            </p>
                        </div>
                    </div>
                    <div class="skill-item">
                        <i class="devicon-javascript-plain colored skill-img"></i>
                        <div class="skill-body">
                            <h3 class="skill-name">JavaScript</h3>
                            <p class="skill-text">
                                関数を使用したコードの記述、jQueryの利用が可能です。ajaxを使った非同期処理もできます。
                            </p>
                        </div>
                    </div>
                    <div class="skill-item">
                        <i class="devicon-php-plain colored skill-img"></i>
                        <div class="skill-body">
                            <h3 class="skill-name">PHP</h3>
                            <p class="skill-text">
                                基本的なコードの記述、データベースとの接続が可能です。
                            </p>
                        </div>
                    </div>
                    <div class="skill-item">
                        <i class="devicon-java-plain-wordmark colored skill-img"></i>
                        <div class="skill-body">
                            <h3 class="skill-name">Java</h3>
                            <p class="skill-text">
                                基本的なコードの記述ができます。サーバーサイド（JSP）についても学習しました。
                            </p>
                        </div>
                    </div>
                    <div class="skill-item">
                        <i class="devicon-mysql-plain-wordmark colored skill-img"></i>
                        <div class="skill-body">
                            <h3 class="skill-name">MySQL</h3>
                            <p class="skill-text">
                                データベース、テーブル等の作成ができます。PostgreSQL, SQLiteも利用します。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <h2 class="title">ABOUT</h2>
                <div class="profile">
                    <p class="profile-img">
                        <img src="img/profile.jpg" alt="プロフィール画像" />
                    </p>
                    <div class="profile-body">
                        <h3>谷 直輝</h3>
                        <p>
                            京都コンピュータ学院京都駅前校 情報科学科在学。<br>
                            滋賀県出身。
                        </p>
                        <p>
                            Webサイト制作の授業の中で色々なデザインに触れ、自分でもサイトを作ってみたいと興味を持ち学習を始めた。<br>
                            見た人がワクワクするようなWebサイトの企画、制作が目標。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <h2 class="title">CONTACT</h2>
                <p id="message" class="form-message">&nbsp;</p>
                <div class="inline-form">
                    <div class="form-item">
                        <label>お名前</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-item">
                        <label>メールアドレス</label>
                        <input type="email" name="mail" required>
                    </div>
                </div>
                <div class="form-item">
                    <label>本文</label>
                    <textarea name="body" rows="3"></textarea>
                </div>
                <div class="form-submit">
                    <input type="submit">
                </div>
            </div>
        </section>
        <div class="page-top js_top">
            <span class="material-icons-outlined">expand_less</span>
        </div>
    </main>

    <footer>
        <div class="copyright">&copy;&nbsp;2022 NAOKI TANI</div>
    </footer>
</body>

</html>