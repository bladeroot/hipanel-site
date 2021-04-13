<div class="alert alert-info">
    <b>Внимание!</b>
    <p>API не предназначен для перехвата удаляющихся доменов, введены ограничения на количество запросов, за
        нарушения будем банить.<br> Для автоматизированного перехвата доступен <a href="/pages/api/intercept">специальный
            интерфейс</a>.</p>
    <p>По независящим от нас обстоятельствам иногда выполнение операции может занимать до 10 минут. Поэтому ставьте
        таймаут ожидания ответа от АПИ - 10 минут.</p>
</div>
<ul>
    <li>API доступен по HTTPS;</li>
    <li>доступны тестовая и рабочая версии API по адресам <b><?= Yii::$app->params['api.demo.url'] ?></b> и <b><?= Yii::$app->params['api.prod.url'] ?></b>
        соответственно;
    </li>
    <li>запросы шлются по адресу <b><?= Yii::$app->params['api.prod.url']  ?>/apiCommand</b>. Данные запроса передаются с помощью GET
        или POST переменных;
    </li>
    <li>для авторизация используются перменные auth_login и auth_password;</li>
    <li>результаты запроса возвращаются закодированными в JSON;</li>
    <li>в случае ошибки в возвращенном массиве будет элемент с ключом "_error" содержащий описание ошибки;</li>
    <li>допустимыми результатами запроса могут быть:
        <ul>
            <li>скаляр <span style="font:monospace">"true"</span></li>
            <li>массив не содержащий элемент с ключом "_error" (в нём передаётся описание ошибки)</li>
            <li>любой другой результат, в том числе пустой - это ошибка</li>
        </ul>
    </li>
</ul>
<b>Пример:</b><br>
<pre><?= Yii::$app->params['api.demo.url'] ?>/domainsCheck?auth_login=demo&amp;auth_password=demo&amp;domains=test.com,adfwer234asdf.net</pre>
<p>Пример полностью рабочий, можно скопировать URL в браузер и поиграться, посмотреть вывод ошибок.</p>
