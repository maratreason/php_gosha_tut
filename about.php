<? require_once 'blocks/header.php'; ?>

<div class="container mt-5 mb-5">
    <h3>Контакты</h3>
</div>

<div class="container">
    <form action="check.php" method="POST">
        <input type="email" name="email" class="form-control mb-2" placeholder="Введите Email"/>
        <textarea name="message" id="" class="form-control mb-2" placeholder="Введите ваше сообщение"></textarea>
        <button type="submit" class="btn btn-success" name="send">Отправить</button>
    </form>
</div>

<? require_once 'blocks/footer.php'; ?>
