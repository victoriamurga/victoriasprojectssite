<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя Сторінка</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Моя сторінка</h1>
</header>

<nav>
    <a href="index.php">Домашня сторінка</a>
	<a href="projects.php">Проєкти</a>
	<input type="checkbox" id="dark-mode-toggle" class="checkbox-toggle">
    <label for="dark-mode-toggle" class="checkbox-label">🌞 Світла тема</label>
	<script src="script.js"></script>
</nav>

<section>

    <h2>Ласкаво просимо!</h2>
    <p>Рада бачити вас на моїй сторінці! Ось інформація про мене:</p>
	<h2>Ім'я</h2>
    <p>Мурга Вікторія Миколаївна</p>
	<h2>Email</h2>
    <p>Viktoriia.Murha@infiz.khpi.edu.ua</p>

 <h3>Предмети</h3>
    <table>
        <tr>
            <th>Предмет</th>
            <th>Викладач</th>
            <th>Oцінка</th>
        </tr>
        <tr>
            <td>Математична логіка, теорія алгоритмів та структури даних</td>
            <td>Татарінова О. А.</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Об'єктно-орієнтоване програмування</td>
            <td>Водка О. О.</td>
            <td>95</td>
        </tr>
        <tr>
            <td>Спеціальні глави математики для моделювання та обробки даних</td>
            <td>Вязовиченко Ю. А.</td>
            <td>90</td>
        </tr>
		</tr>
		<tr>
            <td>Технології програмування</td>
            <td>Шаповалова М. І.</td>
            <td>90</td>
        </tr>
         <tr>
            <td>Іноземна мова</td>
            <td>Сергіна С.В.</td>
            <td>93</td>
        </tr>
        <tr>
            <td>Операційні системи та засоби комп`ютерної безпеки</td>
            <td>Мєтєльов В. О.</td>
            <td>100</td>
        </tr>
		<tr>
            <td>Правознавство</td>
            <td>Гаряєва Г.М.</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Теорія і методика фізичного самовдосконалення</td>
            <td>Азаренкова Л. Л.</td>
            <td>75</td>
        </tr>
    </table>

	  <h3>Улюбені фільми</h3>
    <ul>
		<li><a href="https://www.imdb.com/title/tt0470752/">Ex-Machina (2014)</a></li>
		<li><a href="https://www.imdb.com/title/tt0083658/">Blade Runner (1892)</a></li>
		<li><a href="https://www.imdb.com/title/tt1856101/">Blade Runner 2049 (2017)</a></li>
		<li><a href="https://www.imdb.com/title/tt0499549/">Avatar (2009)</a></li>
		<li><a href="https://www.imdb.com/title/tt1630029/">Avatar 2: The Way of Water (2022)</a></li>

    </ul>

		<!-- Slideshow -->

		<div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/exmachina.jpg">
            <div class="text">Ex-Machina (2014)</div>
        </div>

		<div class="mySlides fade">
            <img src="images/bladerunner1982.jpg">
            <div class="text">Blade Runner (1892)</div>
        </div>

		<div class="mySlides fade">
            <img src="images/bladerunner2049.jpg">
            <div class="text">Blade Runner 2049 (2017)</div>
        </div>

		        <div class="mySlides fade">
            <img src="images/avatar.jpg">
            <div class="text">Avatar (2009)</div>
        </div>

        <div class="mySlides fade">
            <img src="images/avatar2.jpg">
            <div class="text">Avatar 2: The Way of Water (2022)</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
		<span class="dot" onclick="currentSlide(5)"></span>
    </div>

<script src="script.js"></script>

<script>
  autoShowSlides();
</script>

<!-- Slideshow ends here -->

	<h3>Про мене в трьох словах:</h3>
    <ul>
		<li>Креативна</li>
		<li>Справедлива</li>
		<li>Відповідальна</li>
    </ul>

		<h3>Мій настрій у трьох картинках:</h3>

    <div class="image-gallery">
        <div class="image-item">
            <img src="images/happycat.jpg" alt="Image 1">
            <p>Радісна :)</p>
        </div>
        <div class="image-item">
            <img src="images/sadcat.jpg" alt="Image 2">
            <p>Сумна :(</p>
        </div>
        <div class="image-item">
            <img src="images/laptopcat.jpg" alt="Image 3">
            <p>Сконцентована на праці! :D</p>
        </div>
    </div>

	 <div class="quotation">
        <p>Єдиний спосіб робити свою роботу добре — це любити її.</p>
		<p>Якщо ти ще не знайшов свою улюблену справу, продовжуй шукати. </p>
		<p>&mdash; Стів Джобс</p>
	</div>

	<h2>Про моє місто:</h2>
	<h3>Харків!</h3>

	<div class="image-gallery">
        <div class="image-item">
            <img src="images/kharkiv.webp" alt="Image 1">
    </div>

	<p>Ось декілька цікавих фактів:</p>
	    <ul>
		<li>Харків є важливим спортивним центром України, оскільки тут знаходиться більше 30 спортивних об'єктів.
		Місто також було місцем проведення Євро-2012.<li>
		<li>В Харкові розташована найбільша площа в Європі — площа Свободи.
		Вона дійсно велика та з усіх боків оточена історичними будівлями та пам'ятками архітектури.</li>
		<li>Харків &mdash; друге за кількістю мешканців місто України.</li>
    </ul>

</main>

</section>

<?php include 'footer.php'; ?>

</body>
</html>