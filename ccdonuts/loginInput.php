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
    <h1 class="rankingTop">ログイン</h1>
    <form action="login-output.php" method="post">
        メールアドレス<input type="text" name="login"><br>
        パスワード<input type="password" name="password"><br>
        <input type="submit" value="ログインする">
    </form>              
</main>
<?php require 'footer.php'; ?>