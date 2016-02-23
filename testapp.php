<?php
 
 // Список пользователей, вместо базы используется массив чтоб не усложнять пример
$users = Array(
    "victor"=> Array("pass" => "qwerty", "id" => 1, "name" => "Виктор"),
    "dimon"=> Array("pass" => "qwerty", "id" => 2, "name" => "Димон"),
    "olga"=> Array("pass" => "qwerty", "id" => 3, "name" => "Оля"),
    "kate"=> Array("pass" => "qwerty", "id" => 4, "name" => "Катя"),
    "masha"=> Array("pass" => "qwerty", "id" => 5, "name" => "Маша"),
    );
 
 // Список соответсвия имени к id пользователя
$usersPublicData = Array( 1 => "Виктор", 2 => "Димон", 3 => "Оля", 4 => "Катя", 5 => "Маша",   );
 
// Включаем php ссесию
session_start();
 
// Подключаем библиотеку с API комет сервера
include "./CometServerApi.php"; 
 
/**
 * Выполняем авторизацию на комет сервере 
 * Второй параметр это ваш публичный идентификатор разработчика
 * Третий параметр это ваш секретный ключ разработчика
 */
$comet = mysqli_connect("app.comet-server.ru",
                        "15", "lPXBFPqNg3f661JcegBY0N0dPXqUBdHXqj2cHf04PZgLHxT6z55e20ozojvMRvB8", "CometQL_v1");
 
// Если получаем команду уничтожить ссесию
if( isset($_GET["exit"]))
{   
    echo "Вы покинули php чат. <a href="/" >Перейти к форме авторизации в чате</a>";
 
    if(isset($_SESSION["userName"]))
    {
        // Оповещаем всех что человек покинул чат
        mysqli_query($comet, "INSERT INTO pipes_messages (name, event, message)VALUES('loginPipe', 'userExit', '".mysqli_real_escape_string($comet,json_encode(Array( "name" => $_SESSION["userName"] )))."')");  
    }
 
    session_destroy();
    exit;
}
 
// Если получили переменные login и pass то выполним авторизацию
if( isset($_GET["login"]) &&  isset($_GET["pass"]))
{ 
    if( !isset($users[$_GET["login"]]))
    {
        echo "В базе нет такого пользователя";
        header("Location: /");
        exit;
    }
 
    if(  $users[$_GET["login"]]["pass"] !== $_GET["pass"] )
    {
        echo "Пароль не верный";
        header("Location: /");
        exit;
    }
 
    // Оповещаем всех что залогинился человек и теперь онлайн в чате
    mysqli_query($comet, "INSERT INTO pipes_messages (name, event, message)VALUES('loginPipe', 'userLogin', '".mysqli_real_escape_string($comet,json_encode(Array( "name" => $users[$_GET["login"]]["name"])))."')");    
 
    // Генерируем ключ авторизации для пользователя на комет сервере. Длиной не более 32 символов.
    $userCometHash =  md5("Соль для хеша ".date("U"));
 
    // Сообщаем ключ авторизации комет серверу.
    mysqli_query($comet, "INSERT INTO users_auth (id, hash)VALUES (".$users[(int)$_GET["login"]]["id"].", '".mysqli_real_escape_string($comet, $userCometHash)."')"); 
 
    echo "<pre>";
    echo $userCometHash."\n";
    echo "</pre>";
 
    // Добавляем в сессию данные о пользователе
    $_SESSION["userHash"] = $userCometHash;
    $_SESSION["userId"] = $users[$_GET["login"]]["id"];
    $_SESSION["userLogin"] = $_GET["login"];
    $_SESSION["userName"] = $users[$_GET["login"]]["name"];
 
    echo "Авторизация прошла успешно. <a href="/" >Перейти к чату</a>";
    exit;
}
 
?>
<!DOCTYPE HTML>
<head>
    <title>Простой чат на php</title>
    <script language="JavaScript" type="text/javascript" src="https://comet-server.ru/template/Profitable_site/js/jquery-2.0.3.min.js" ></script>
    <script language="JavaScript" type="text/javascript" src="https://comet-server.ru/CometServerApi.js" ></script>
</head>
<body>
 
    <?php 
    if( !isset($_SESSION["userLogin"] ))
    { ?>
    <h1>Форма авторизации</h1>
    <form action="" method="GET">
        <input type="text" placeholder="Укажите ваш логин" name="login" value="victor"> <br>
        <input type="text" placeholder="Укажите ваш пароль" name="pass" value="qwerty" ><br>
 
        <input type="submit" value="Войти" >
        <pre>
            Возможные имена: victor, dimon, olga, kate, masha
        </pre>
    </form>
    <?php
    }
    else
    {
    ?>
        <div id="WebChatFormForm" ></div> 
        Ваше имя в чате <?php echo $_SESSION["userName"]; ?><br>
        <textarea id= "WebChatTextID" placeholder= "Сообщение в online чат..." ></textarea><br>
 
        <input type="button" onclick="web_send_msg();" value="Отправить" >
        <div id="answer_div" ></div>
 
        <a href="?exit">Выйти</a>
    <?php
    }
    ?>
    <script>
    // Общедоступная информация о пользователях (содержит связку id с паролем)
    var usersPublicData = <?php echo json_encode($usersPublicData); ?>;
    var myName = "<?php echo $_SESSION["userName"]; ?>";
 
    // Отправляет сообщение в чат
    function web_send_msg()
    {
        // Получение значений из элементов ввода.
        var text = $("#WebChatTextID").val(); // Получаем текст сообщения 
 
        // Очистка поля с текстом сообщения
        $("#WebChatTextID").val("");  
 
        // Добавление отправленного сообщения к списку сообщений.
        $("#WebChatFormForm").append("<p><b>"+myName+": </b>"+text+"</p>");
 
        // Отправка сообщения в канал чата
        CometServer().web_pipe_send("web_php_chat", {"text":text});
    }
 
    // Функция выполнится после загрузки страницы
    $(document).ready(function()
    {
        // Подключаемся к комет серверу
        CometServer().start({dev_id:15, // Ваш публичный id
            user_id:"<?php echo $_SESSION["userId"] ?>", // id пользователя
            user_key:"<?php echo $_SESSION["userHash"] ?>"})  // ключь пользователя
 
        // Подписываемся на канал в который и будут отправляться сообщения чата.
        CometServer().subscription("web_php_chat", function(msg)
        {
           console.log(msg)
 
           var name = "Аноним";
           if(msg.server_info.user_id > 0)
           {
               name = usersPublicData[msg.server_info.user_id];
           }
            // Добавление полученного сообщения к списку сообщений.
            $("#WebChatFormForm").append("<p><b>"+name+": </b>"+msg.data.text+"</p>");
        });
 
        // Подписываемся на сообщения о входе людей в чат (отпраляются из php)
        CometServer().subscription("loginPipe.userLogin", function(msg)
        {
            // Добавление уведомления в ленту сообщений
            $("#WebChatFormForm").append("<p>Пользователь <b>"+msg.data.name+"</b> вошол в чат.</p>");
        });
 
        // Подписываемся на сообщения о выходе людей из чата (отпраляются из php)
        CometServer().subscription("loginPipe.userExit", function(msg)
        {
            // Добавление уведомления в ленту сообщений
            $("#WebChatFormForm").append("<p>Пользователь <i>"+msg.data.name+"</i> покинул в чат.</p>");
        });            
 
        // Подписываемся отчёт о доставке сообщения в чат.
        CometServer().subscription("#web_php_chat", function(p)
        {
           console.log(p)
            $("#answer_div").html("Сообщение получили "+p.data.number_messages+" человек. "+p.data.error);
        });
    });
</script>
</body>
</html>