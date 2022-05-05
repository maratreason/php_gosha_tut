<? require_once 'blocks/header.php'; ?>

<div class="container mt-5 mb-5">
    <h3>Наши статьи</h3>
</div>

<div class="container">
    <div class="d-flex flex-wrap">
        <? for ($i = 0; $i < 15; $i++) { ?>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Просто текст</h4>
                </div>
                <div class="card-body">
                    <img src="https://img.freepik.com/free-photo/the-odenwald-in-germany-is-pure-nature_181624-32381.jpg?w=2000" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
                </div>
            </div>
        <? } ?>
    </div>
</div>

<? require_once 'blocks/footer.php'; ?>