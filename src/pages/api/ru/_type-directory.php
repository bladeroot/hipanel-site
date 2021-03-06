<table class="table table-bordered server-products-table">
    <thead>
    <tr>
        <th>Тип</th>
        <th>Описание</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>*</th>
        <td class="left_column">
            Обязательное поле, значение должно быть непустое, не ноль, не пустая строка и не пустой список.<br>
            Поля без звёздочки - необязательны для заполнения, могут не передаваться при вызове команды.
        </td>
    </tr>
    <tr>
        <th>id</th>
        <td class="left_column">
            Айдишник. Целое число больше нуля.<br>
            Например: 314123
        </td>
    </tr>
    <tr>
        <th>ids</th>
        <td class="left_column">
            Список айдишников, через запятую, пробельные символы допускаются.<br>
            Например: 1234, 324534, 223423
        </td>
    </tr>
    <tr>
        <th>domain</th>
        <td class="left_column">
            Доменное имя<br>
            Например: domain.com
        </td>
    </tr>
    <tr>
        <th>domains</th>
        <td class="left_column">
            Список доменов, через запятую, пробельные символы допускаются.<br>
            Например: domain.com, asdf.net
        </td>
    </tr>
    <tr>
        <th>ns</th>
        <td class="left_column">
            Имя NS'а (name server'а).<br>
            Например: ns1.domain.com
        </td>
    </tr>
    <tr>
        <th>nss</th>
        <td class="left_column">
            Список NS'ов, через запятую, пробельные символы допускаются.<br>
            Например: ns1.domain.com, ns2.domain.com
        </td>
    </tr>
    <tr>
        <th>eid</th>
        <td class="left_column">
            Extended ID - расширенный айдишник. Допускаются цифры, латинские буквы и символы: '_.:-' (подчерк,
            точка, двоеточие, минус).<br>
            Например: EID_234234:234—1
        </td>
    </tr>
    <tr>
        <th>password</th>
        <td class="left_column">
            Максимальная длина 64 символа. Не должен содержать символов переноса строки: \n, \r.<br>
            Например: We\p!Jie6w
        </td>
    </tr>
    <tr>
        <th>period</th>
        <td class="left_column">
            Целое число от 1 до 10. Используется для указания количества лет при регистрации и продлении.<br>
            Например: 1
        </td>
    </tr>
    <tr>
        <th>date<br>expires</th>
        <td class="left_column">
            Дата в ISO формате.<br>
            Например: 2012—09—25
        </td>
    </tr>
    <tr>
        <th>ref</th>
        <td class="left_column">
            Идентификатор. Состоит только из цифр, латинских букв и подчерка. Ограничений на первый символ нет.<br>
            Например: ok<br>
            Например: 7days<br>
            Например: 0001
        </td>
    </tr>
    <tr>
        <th>refs</th>
        <td class="left_column">
            Список идентификаторов, через запятую, пробельные символы допускаются.<br>
            Например: ok, nok, 123
        </td>
    </tr>
    <tr>
        <th>label</th>
        <td class="left_column">
            Строка почти без ограничений. Не допускаются символы переноса строки.<br>
            Например: Это имя клиента - Ivan Drago
        </td>
    </tr>
    <tr>
        <th>labels</th>
        <td class="left_column">
            Список строк, через запятую, пробельные символы допускаются. Допускается передача массивом.<br>
            Например: Ваня, Петя, Федя, John
        </td>
    </tr>
    <tr>
        <th>dnsName</th>
        <td class="left_column">
            Пустая строка, "*", "@" либо строка не длиннее 100 символов, состоящая из не более чем 4 частей,
            разделенных ".", каждая из которых состоит из 1-61 символов следующих типов: латинские символы, цифры и
            знаки "-" и "_" (при этом "-" не может быть первым или последним символом).<br>
            Например: *, @, n1, a1.b2, a1.b2.c3, a1.b2.c3.d4
        </td>
    </tr>
    </tbody>
</table>
