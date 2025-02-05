<?php require 'header.php'; ?>
<main>
    <nav>
        <ul class="dtlTopNavi">
            <li><a class=”topPage” href=”index.html”>　TOP</a></li>
            <li><a href=”#”>></a></li>
            <li><a class=”product” href=”product.html”>ログイン</a></li>
        </ul>
    </nav>
    <p class="guest">　ようこそ　ゲスト様</p>
    <section class="formSec" id="formArea">
        <div class="innerWrap">
        <h1 class="ffJosefin">会員登録</h1>
        <form action="" method="">
            <p>
                お名前<span class="red">（必須）</span><input type="text" name="user_name">
            </p>
            <p>
                お名前（フリガナ）<span class="red">（必須）</span><input type="text" name="user_name">
            </p>
            <p>
                メールアドレス<span class="red">（必須）</span><input type="email" name="user_mail">
            </p>
            <p>
                メールアドレス（確認用）<span class="red">（必須）</span><input type="email" name="user_mail">
            </p>
        </form>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>