<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>shiro</title>
  {{-- <link rel="stylesheet" href="../views/shiro/bootstrap-5.0.2/dist/public/css/style.css"> --}}
  <link rel="stylesheet" href="../views/css/style.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  {{-- <link rel="stylesheet" href="../views/shiro/bootstrap-5.0.2/dist/css/bootstrap.min.css"> --}}
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
  {{-- <script src="../js/bootstrap.bundle.js"></script> --}}
</head>
<body class="mg-0">
  <header>
    <p class="fw-light">Shiro</p>
    <i id="open" class="fas fa-bars position-absolute"></i>
    <div class="text-center h-100">
      <h1 class="fw-light">Shiro</h1>
      <h2 class="fw-light">- White flower shop -</h2>
    </div>
  </header>
  <main class="position-relative">
    <div id="concept" class="text-center container p-0">
      <h1 class="text-center container">Concept</h1>
      <img id="conceptsen" class="sen" src="shiro_pc-assets/sen..jpg">
      <p class="text-center container">私たちShiroは、白いお花だけを取り扱うフラワーショップです。<br> 色とりどりの花束も素敵だけれど、洗練された「白」の美しさを感じてほしい。<br>「白」に対する愛から生まれた静寂な時間が流れる店へ、ぜひお越しください</p>
      <img id="mainimg" class="container w-100 position-relative" src="shiro_pc-assets/_shiro3_.png">
    </div>
    <div id="works" class="container position-relative">
      <h1 class="text-center">Works</h1>
      <img class="text-center sen d-block" src="shiro_pc-assets/sen..jpg">
      <p class="text-center container">オーダーメイドでのブーケ・アレンジメントのデザインのほか、<br>ウェディングやイベントの装花なども行なっています。<br>一人一人にあったご提案をさせていただきます。</p>
      <div id="flexzone" class="row container justify-content-between">
          <img id="flex-start" class="col-5" src="shiro_pc-assets/works1.jpg">
          <div id="flex-end" class="col-5">
            <img id="shiro4" class="bd-highlight container" src="shiro_pc-assets/shiro4.jpg">
            <img id="shiro5" class="container" src="shiro_pc-assets/shiro5.jpg">
          </div>
      </div>
      <div id="spcontent">
        <div id="giftsp" class="position-relative mt-5">
        <img id="fs1" class="position-absolute container" src="../shiro_pc-assets/giftsp.jpg">
        <div id="giftsptext" class="text-start position-absolute container">
            <h1>Gift</h1>
            <p class="text-start">花束をお送りしたいお相手、伝えたいお気持ちに合わせたプレゼント用花束のアレンジメントをさせていただきます。花言葉などの豆知識もお伝えします。</p>
        </div>
        </div>
        <div id="decosp" class="position-relative mt-3">
        <img id="shiro44" class="bd-highlight container" src="../shiro_pc-assets/decolationsp.jpg">
        <div id="decosptext" class="text-start position-absolute container">
            <h1>Decoration</h1>
            <p>お写真を彩るお花を一輪から販売。一定期間のご契約で定期的にご自宅へ配送させていただくことも可能です。</p>
        </div>
        </div>
        <div id="weddingsp" class="position-relative mt-3">
        <img id="fs2" class="position-absolute container" src="../shiro_pc-assets/weddingsp.jpg">
        <div id="weddingsptext" class="text-start position-absolute container">
            <h1>Wedding</h1>
            <p>ウエディングドレスに合わせたブーケや式場の雰囲気に合う装花をご提案。お打ち合わせの流れや回数、費用などにつきましてはお問い合わせください。</p>
        </div>
        </div>
        <div id="forsp" class="position-relative mt-3">
        <img id="shiro55" class="bd-highlight container" src="../shiro_pc-assets/shiro5.jpg">
        <div id="forsptext" class="text-start position-absolute">
            <h1>For yourself</h1>
            <p>お部屋の雰囲気やライフスタイルをお聞きしてご自宅用の花束をご提案し、少しでも長く咲かせるコツもお教えします。花束に合った花瓶をご提案することも可能です。</p>
          </div>
      </div>
      </div>
      <div id="workstext">
      <div id="gift" class="text-start position-absolute">
        <h1>Gift</h1>
        <p class="text-start">花束をお送りしたいお相手、伝えたいお気持ちに合わせたプレゼント用花束のアレンジメントをさせていただきます。花言葉などの豆知識もお伝えします。</p>
      </div>
      <div id="decoration" class="text-start position-absolute">
        <h1>Decoration</h1>
        <p>お写真を彩るお花を一輪から販売。一定期間のご契約で定期的にご自宅へ配送させていただくことも可能です。</p>
      </div>
      <div id="wedding" class="text-start position-absolute">
        <h1>Wedding</h1>
        <p>ウエディングドレスに合わせたブーケや式場の雰囲気に合う装花をご提案。お打ち合わせの流れや回数、費用などにつきましてはお問い合わせください。</p>
      </div>
      <div id="foryourself" class="text-start position-absolute">
        <h1>For yourself</h1>
        <p>お部屋の雰囲気やライフスタイルをお聞きしてご自宅用の花束をご提案し、少しでも長く咲かせるコツもお教えします。花束に合った花瓶をご提案することも可能です。</p>
      </div>
      </div>
    </div>
    <img id="graysp1" class="position-absolute container-fluid p-0 start-0 w-100" src="shiro_pc-assets/graysp.jpg">
    <img id="graysp2" class="position-absolute container-fluid p-0 start-0 w-100" src="shiro_pc-assets/graysp2.jpg">

    <div id="florist" class="z-index-2 position-relative container">
        <h1 class="text-center">Florist</h1>
        <img class="d-block sen" src="shiro_pc-assets/sen..jpg" class="mb-3">
        <p class="text-center container">Shiro専属のフローリストたちをご紹介。<br>得意の分野であなたのオーダーを最大限に叶えます。</p>
        <div class="row mt-5 container-fluid">
          <div id="fl1" class="col-4 text-start">
            <img id="shiyu1" src="shiro_pc-assets/shiro6.jpg" class="w-100">
            <img id="shiyu2" src="shiro_pc-assets/shiyusp.jpg" class="w-100">
            <h2 class="mt-3">Shiyu</h2>
            <p class="mt-3">お花茶屋大学フラワーアレンジメント科を卒業後、さまざまな白い花を探すために世界を一周し、Shiroの創業者となる。</p>
          </div>
          <div id="fl2" class="col-4 text-start">
            <img id="mao1" src="shiro_pc-assets/shiro7.jpg" class="w-100">
            <img id="mao2" src="shiro_pc-assets/maosp.jpg" class="w-100">
            <h2 class="mt-3">Mao</h2>
            <p class="mt-3">花の魅力に惹かれ、空間デザインの世界からフローリストの道を歩む。主に結婚式やイベントで使用するお花のディレクション担当。</p>
          </div>
          <div id="fl3" class="col-4 text-start">
            <img id="omichan1" src="shiro_pc-assets/shiro8.jpg" class="w-100">
            <img id="omichan2" src="shiro_pc-assets/omichan2.jpg" class="w-100">
            <h2 class="mt-3">Omichan</h2>
            <p class="mt-3">フローリスト兼ガーデナーという特殊な経歴をもつ。豊富な知識と技術でお客様のオーダーを叶える。</p>
          </div>
        </div>
    </div>
        <div id="shopinformation" class="container position-relative">
          <h1 class="text-center">Shop information</h1>
          <img class="d-block sen" src="shiro_pc-assets/sen..jpg" class="mb-3">
          <p class="text-center">Shiroの店舗情報をご紹介します。</p>
          <img id="shopsp" class="w-100" src="shiro_pc-assets/shopinfosp.jpg">
          <div class="d-flex mt-5 w-100">
            <img id="shoppc" src="shiro_pc-assets/shiro13_.jpg" class="col-6">
            <div id="shop111" class="col-6 d-flex">
              <div id="shop1" class="position-relative mx-2 w-25">
                <p id="sp1" class="position-absolute">住所</p>
                <p id="sp2" class="position-absolute">電話番号</p>
                <p id="sp3" class="position-absolute">営業時間</p>
                <p id="sp4" class="position-absolute">アクセス</p>
              </div>
              <img src="shiro_pc-assets/ten.jpg" class="mx-5">
              <div id="shop2" class="position-relative w-50 text-start">
                <p id="s2p1" class="position-absolute">〒810-0001<br>福岡県福岡市中央区天神0-0-0</p>
                <p id="s2p2" class="position-absolute">0120-000-000 </p>
                <p id="s2p3" class="position-absolute">11:00-20:30 （定休日：水曜日）</p>
                <p id="s2p4" class="position-absolute"> 天神駅12a出口から徒歩6分、<br>東京駅8b出口から徒歩12分</p>
              </div>
            </div>
          </div>
        </div>
        <div id="footer" class="container-fluid text-center position-relative">
          <h1>Contact us</h1>
          <img src="shiro_pc-assets/sen..jpg" class="mb-3">
          <p id="ftext">イベントや結婚式でご利用する装花のご相談や、<br>フラワーアレンジメントのご予約などはこちらからお問い合わせください。</p>
          <div id="contact" class="d-block">
            <div class="d-flex justify-content-center align-items-center">
              <img src="shiro_pc-assets/mail.jpg" class="d-block">
              <p>お問い合わせ</p>
            </div>
          </div>
        </div>
        <div id="copy" class="container-fluid text-center position-relative">
          <p class="py-3">Copyright © Shiro All Rights Reserved.</p>
        </div>
  </main>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
