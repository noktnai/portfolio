<!DOCTYPE html>
<!--nobanner-->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta property='og:type' content='website'>
    <meta property='og:title' content='naotoge5 ポートフォリオ'>
    <meta property='og:url' content='URL入る'>
    <meta property='og:description' content='naotoge5のポートフォリオ'>
    <meta property="og:image" content="img/ogp.png">
    <meta name="description" content="naotoge5のポートフォリオ">
    <title>naotoge5 - portfolio</title>
    <!--<link href="css/style.css" media="all" rel="stylesheet" type="text/css" />-->
    <!-- style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script.js"></script>
</head>

<body>
    <header>
        <div class="p-5 h-image">
            <div class="d-flex justify-content-center align-items-center h-100 text-white">
                <h1 class="mb-3">Naoki Tani's portfolio</h1>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-sm bg-light sticky-top fixed-top-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#profile"><i class="fa fa-user fa-fw"></i>Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills"><i class="fas fa-pen fa-fw"></i>Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolios"><i class="fa fa-archive fa-fw"></i>Portfolios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact"><i class="fa fa-envelope fa-fw"></i>Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <section id="profile">
                <h1 class="text-center">- Profile -</h1>
                <h5 class="text-center">
                    はじめまして。滋賀県在住、21歳 専門学生です。<br>このサイトでは自分のスキルや作成したアプリケーションなどの紹介をしています。
                </h5>
            </section>

            <section id="skills">
                <div class="text-center">
                    <h1>- Skills -</h1>
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-3">
                                <div class="inner-50"></div>
                                <h3 class="card-title">フロントエンド</h3>
                                <div class="card-body">
                                    <p class="card-text">基本的な事は一通りできます。最近、デザインはBootstrapに頼っています。</p>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>技術</th>
                                                <th class="d-none d-sm-block">経験年数</th>
                                                <th>スキル</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>HTML5</th>
                                                <td class="d-none d-sm-block">2年</td>
                                                <td><span class="rating rating-four"></span></td>
                                            </tr>
                                            <tr>
                                                <th>CSS</th>
                                                <td class="d-none d-sm-block">2年</td>
                                                <td><span class="rating rating-two"></span></td>
                                            </tr>
                                            <tr>
                                                <th>javascrpt・jQuery</th>
                                                <td class="d-none d-sm-block">2年</td>
                                                <td class="align-middle"><span class="rating rating-three"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-3">
                                <div class="inner-50"></div>
                                <h3 class="card-title">バックエンド</h3>
                                <div class="card-body">
                                    <p class="card-text">主にPHPです。</p>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>技術</th>
                                                <th class="d-none d-sm-block">経験年数</th>
                                                <th>スキル</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>PHP</th>
                                                <td class="d-none d-sm-block">2年</td>
                                                <td><span class="rating rating-three"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Ruby on Rails</th>
                                                <td class="d-none d-sm-block">半月</td>
                                                <td class="align-middle"><span class="rating rating-one"></span></td>
                                            </tr>
                                            <tr>
                                                <th>MySQL</th>
                                                <td class="d-none d-sm-block">2年</td>
                                                <td><span class="rating rating-three"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-3">
                                <div class="inner-50"></div>
                                <h3 class="card-title">その他</h3>
                                <div class="card-body">
                                    <p class="card-text">学校の授業で取り扱ったもの等です。</p>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>技術</th>
                                                <th class="d-none d-sm-block">経験年数</th>
                                                <th>スキル</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Git・Github</th>
                                                <td class="d-none d-sm-block">2年</td>
                                                <td class="align-middle"><span class="rating rating-four"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Java</th>
                                                <td class="d-none d-sm-block">2年</td>
                                                <td><span class="rating rating-two"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Swift</th>
                                                <td class="d-none d-sm-block">1年</td>
                                                <td><span class="rating rating-one"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolios">
                <div class="text-center">
                    <h1>- Portfolios -</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-3">
                                <img src="assets/img/portfolio01.jpg" alt="ポートフォリオ" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Portfolio</h5>
                                    <p class="card-text">自分自身のポートフォリオです。</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-3">
                                <img src="assets/img/portfolio02.jpg" alt="ポートフォリオ" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">落とし物検索システム</h5>
                                    <p class="card-text">5人でチームを組んで作成しました。</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-3">
                                <img src="assets/img/portfolio03.jpg" alt="ポートフォリオ" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">給与計算</h5>
                                    <p class="card-text">日々の給与を計算するアプリケーションです。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="modal js-modal">
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">
                    <p>ここにモーダルウィンドウで表示したいコンテンツを入れます。モーダルウィンドウを閉じる場合は下の「閉じる」をクリックするか、背景の黒い部分をクリックしても閉じることができます。</p>
                    <a class="js-modal-close" href="">閉じる</a>
                </div>
            </div>

            <section id="contact">
                <h1 class="text-center">- Contact -</h1>
                <div class="mx-3">
                    <div class="form-group">
                        <label class="text-muted">お名前</label>
                        <input type="text" name="name" class="form-control" size="25" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">メールアドレス</label>
                        <input type="mail" name="name" class="form-control" size="25" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">本文</label>
                        <textarea name="details" class="form-control" rows="4" cols="60"></textarea>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="bg-dark">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-white" href="https://github.com/naotoge5"><i class="fab fa-github fa-fw"></i>Github</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="https://qiita.com/naotoge5"><i class="fas fa-search fa-fw"></i>Qiita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="https://twitter.com/naotoge5"><i class="fab fa-twitter fa-fw"></i>Twitter</a>
            </li>
        </ul>
        <div class="inner"></div>
    </footer>
    <div class="row fixed-bottom">
        <div class="d-none d-sm-block col-sm-3">&nbsp;</div>
        <div class="col-12 col-sm-6">
            <div id="banner" class="m-2">
                <script type="text/javascript" src="https://cache1.value-domain.com/xa.j?site=naotoge5.s205.xrea.com"></script>
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3">&nbsp;</div>
    </div>
</body>

</html>
<!--<i class="fa fa-user fa-fw"></i>-->
<!--<i class="fas fa-pen fa-fw"></i>-->
<!--<i class="fa fa-archive fa-fw"></i>-->
<!--<i class="fa fa-envelope fa-fw"></i>-->