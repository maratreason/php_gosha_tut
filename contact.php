<? require_once 'blocks/header.php'; ?>

<div class="container mt-5 mb-5">
    <h3>Обратная связь</h3>
</div>

<div class="container">
    <form class="contact-form" action="" method="POST">
        <input type="email" id="email" name="email" class="form-control mb-2" placeholder="Введите Email"/>
        <input type="text" id="name" name="name" class="form-control mb-2" placeholder="Введите Имя"/>
        <input type="text" id="phone" name="phone" class="form-control mb-2" placeholder="Введите Телефон"/>
        <textarea name="message" id="message" class="form-control mb-2" placeholder="Введите ваше сообщение"></textarea>
        <button type="button" class="btn btn-success send-mail" name="send">Отправить</button>
    </form>
    <div id="errorMessage" class="text-danger mt-3"></div>
</div>

<? require_once 'blocks/footer.php'; ?>