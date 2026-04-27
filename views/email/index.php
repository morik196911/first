<div class="email">
    <h2 class="email__title">Написать email</h2>

    <div class="email__text">

        <form action="handler/send_email.php" method="post">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name"
                placeholder="Иван Иванов" required>

            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email"
                placeholder="example@email.com" required>

            <label for="message">Сообщение:</label>
            <textarea id="message" name="message"
                placeholder="Напишите ваше сообщение..." rows="5" required></textarea>

            <button type="submit">Отправить</button>
        </form>

    </div><!--email__text-->
    <div class="email__border"></div>

</div><!--email-->