<?php require 'vendor/autoload.php'; ?>
<?php include 'layout/header.php'; ?>


<?php
// include 'connect.php';
?>


<main>
    <h1>PHP Docker </h1>

    <?php
    use Dotenv\Dotenv;

    // 1 つ上の階層のファイルにアクセスする(本番用)
    $dotenv = Dotenv::createImmutable(dirname(__DIR__));

    // 同じ階層のファイルにアクセスする(ローカル用）
    // $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // 環境変数にアクセスする
    echo $_ENV['DB_HOST'];
    echo '<br />';
    echo $_ENV['DB_USER'];
    echo '<br />';
    echo $_ENV['DB_PASS'];
    ?>


</main>

<?php include 'layout/footer.php'; ?>