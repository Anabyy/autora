<html>
<head>
 <title>Autora</title>
<link rel="stylesheet"href="haha.css">
</head>
<body>
  <font color="#000"></font>
    <center><header id="sec-042c"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a class="u-image u-logo u-image-1" >
          <img src="images/clear.png" width="150" height="120" class="u-logo-image u-logo-image-1">

        </a>
      </div></header></center>
    <center><h1 class="main">Автосервис Autora</h1></center>
      <div class="u-align-center u-container-style u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <center><h2 class="main">ЗАЕЗЖАЙТЕ К НАМ!</h2></center>
          <center><h1><p class="main">Ул. Авиаконструкторов 28 лит. А, г.Санкт-Петербург</p></center></h1>
        </div>
      </div>
      <div class="u-expanded-width u-grey-light-2 u-map u-map-1">
        <div class="embed-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9481.883599320903!2d30.24319390683802!3d60.02634008409047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469631036e41b8b1%3A0x2bb80059e8ce18d6!2z0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQuNC5INC60L7Qu9C70LXQtNC2INCz0L7RgNC-0LTRgdC60L7Qs9C-INGF0L7Qt9GP0LnRgdGC0LLQsA!5e0!3m2!1sru!2sru!4v1667461273394!5m2!1sru!2sru" width="1900" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
     <h5 class="main-text">  Наш автосервис работает с 2020 года. Мы работаем над контролем качества. В наших автосервисах используется современное оборудование и инструменты.<br> У нас работают лучшие мастера, знающие своё дело.
                  </h5>
                  <h3 class="mai-text"><b>Мы предлагаем бесплатную диагностику автомобиля. Мы проводим компьютерную диагностику, которая в большинстве случаев выявляет причину возникшей неисправности.<br>Вы всегда получаете гарантированно качественную работу от наших мастеров, и можете быть уверенными в надежной эксплуатации своего автомобиля.</b>

                  <p class="welcome"> Приезжайте мы всегда будем рады Вам!</p></h3>

 <center><form method="POST" action="" class="form">
  <h1 class="form_title"><a class="text_rabota">Отправьте заявку</h1>
  <div class="form_group"></div>
<p>
  <input class="form_label" class="form_input" name="name" type="text" placeholder=" Имя" required />
<p>
  <input class="form_label" class="form_input" name="text" type="text" placeholder=" Текст" required />
<p>
    <input class="form_label"  name="email" type="email" placeholder=" email@domain.com"required/>
<p>
    <input class="form_button" type="submit" value="Отправить"/></center>
 </form>
<div class="line"><hr>
</hr>
 <div class="alo">
<h1><center><a class="text_rabota">Прайс лист</h1></center>
<center><a class="text_rabota"><h3>Мы оказываем такие виды работ как:</h3><a class="text_rabota2"><p><a class="text_rabota"><h3> Замена масла в двигателе и коробке передач,</h3>
</h3><a class="text_rabota"><h3> диагностика и ремонт двигателя,</h3>
</h3><a class="text_rabota"><h3> диагностика и ремонт ходовой части,</h3>
</h3><a class="text_rabota"><h3> диагностика и ремонт электрики автомобиля,</h3>
<a class="text_rabota"><h3>Подробнее в нашем прайс листе</h3></center>
<center><a  href="https://disk.yandex.ru/i/3b8ep0knU9j_Bg" class="list_button">Скачать</a><p></center>
<footer>
  <div class="footer">
<table>
  <tr>
    <td>
    <p class="footer_text"><i><b>© 2022<br>Сеть автосервисов<br>«Autora»<br>Все материалы на сайте защищены законом об авторских и смежных правах.</i></b>
    </td>
      <img src="images/clear.png" width="150" height="120" class="footer_logo">
    </td>
  </tr>
</table>
    </footer>



 <?php
  if (isset($_POST['name']) && isset($_POST['text']) && isset($_POST['email'])){

    $name = $_POST['name'];
    $text = $_POST['text'];
    $email = $_POST['email'];


    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = 'mybase'; // Имя БД
    $db_table = "mytable"; // Имя Таблицы БД

    try {

        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);

        $db->exec("set names utf8");

        $data = array( 'name' => $name, 'text' => $text, 'email' => $email);

        $query = $db->prepare("INSERT INTO $db_table (name, text,mail) values (:name, :text,:email)");

        $query->execute($data);

        $result = true;
    } catch (PDOException $e) {

        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }


}
 ?>
</body>
</html>