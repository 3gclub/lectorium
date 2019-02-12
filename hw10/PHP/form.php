<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>form</title>
  <link rel="stylesheet" href="form/form.css">
</head>
<body>

<form action="form/form-submit.php" method="post">
  <!-- block1 -->
  <fieldset class="block1">
    <legend>Про себе</legend>

    <div class="line-height">
      <label for="n1">Ім'я<span class="red-text">*</span>(Обов'язкове поле):</label>
      <input type="text" name="firstName" id="n1" required placeholder="Введіть своє ім'я">
    </div>

    <div class="line-height">
      <label for="n2">Прізвіще<span class="red-text">*</span>(Обов'язкове поле):</label>
      <input type="text" name="lastName" id="n2" required placeholder="Введіть своє прізвище">
    </div>

    <div class="line-height">
      <label for="n4">Стать<span class="red-text">*</span>(Обов'язкове поле):</label>
      <select required id="n4" name="gender">
        <option value="none">-Виберіть стать-</option>
        <option value="male">Чоловіча</option>
        <option value="female">Жіноча</option>
      </select>
    </div>

    <div class="line-height">
      <label for="n3">Вік (Лише цифри від 18 до 48)<span class="red-text">*</span>(Обов'язкове поле):</label>
      <input type="number" name="age" min="18" max="48" id="n3" required>
    </div>

  </fieldset>

  <!-- block2 -->
  <fieldset>
    <legend>Фото</legend>
    <label for="f1" class="d-block">Загрузить фотографію:</label>
    <input id="f1" type="file" name="photo">
  </fieldset>

  <!----- block3 --->
  <fieldset>
    <legend>День народження</legend>
    <label for="f2">День народження:</label>
    <input id="f2" type="date" name="birthday">
  </fieldset>

  <!-- block4 -->
  <fieldset>
    <legend>Інша інформація</legend>
    <div class="line-height">
      <label for="f3" class="d-block">Ваш email (Лише email адрес):</label>
      <input id="f3" type="email" name="email" placeholder="Email">
    </div>
    <div class="line-height">
      <label for="f4" class="d-block">Ваш телефон (Має складатісь від 6-ти до 9-ти символів і має містити лише цифри):</label>
      <input id="f4" type="tel" pattern="[0-9]{6,9}" name="tel" placeholder="Телефон">
    </div>
    <div class="line-height">
      <label for="f5" class="d-block">Пароль (пароль прихований):</label>
      <input id="f5" type="password" name="password" placeholder="Пароль">
    </div>
    <div class="line-height">
      <label for="f6" class="d-block">Ваш веб-сайт (Лише URL адреса):</label>
      <input id="f6" type="url" name="url" placeholder="URL">
    </div>
  </fieldset>

  <!-- block5 -->
  <fieldset>
    <legend>Ваші улюбленні заняття</legend>
    <div>
      <input type="radio" name="5form1" id="r1" value="r1"><label for="r1">Вьорстка форм</label>
    </div>
    <div>
      <input type="radio" name="5form2" id="r2" value="r2"><label for="r2">Компьютерні ігри</label>
    </div>
    <div>
      <input type="radio" name="5form3" id="r3" value="r3"><label for="r3">Вьорстка емейлів</label>
    </div>
    <div>
      <input type="radio" name="5form4" id="r4" value="r4"><label for="r4">Фіксить баги на сайті під iOS</label>
    </div>
    <div>
      <input type="radio" name="5form5" id="r5" value="r5"><label for="r5">Фіксіть флєкса під IE</label>
    </div>
  </fieldset>

 <!-- block6 -->
  <fieldset>
    <legend>Що вам не подобається в вьорсткі форм?</legend>
    <div>
      <input type="checkbox" name="box1" value="c1" id="c1"><label for="c1">Вьорстка форм</label>
    </div>
    <div>
      <input type="checkbox" name="box2" value="c2" id="c2"><label for="c2">Як зверстать Drag & Drop?</label>
    </div>
    <div>
      <input type="checkbox" name="box3" value="c3" id="c3"><label for="c3">Імейли верстать круче</label>
    </div>
    <div>
      <input type="checkbox" name="box4" value="c4" id="c4"><label for="c4">Як застіліть віпадающий
      список?</label>
    </div>
    <div>
      <input type="checkbox" name="box5" value="c5" id="c5"><label for="c5">Що таке форма?</label>
    </div>
  </fieldset>

  <!-- block7 -->
  <fieldset>
    <legend>Інше</legend>
    <div class="p-bottom">
      <label for="f7" class="d-block">Ваш коментар:</label>
      <textarea name="textarea" id="f7" rows="10" cols="60"></textarea>
    </div>
    <div>
      <label for="f8" class="d-block">Виберіть декілька варіантів:</label>
      <select name="variants[]" id="f8" size="5" multiple>
        <option value="variant1" selected>-Варіант-1</option>
        <option value="variant2" selected>-Варіант-2</option>
        <option value="variant3" selected>-Варіант-3</option>
        <option value="variant4" selected>-Варіант-4</option>
        <option value="variant5" selected>-Варіант-5</option>
        <option value="variant6" selected>-Варіант-6</option>
        <option value="variant7" selected>-Варіант-7</option>
        <option value="variant8" selected>-Варіант-8</option>
      </select>
    </div>
  </fieldset>

  <div class="action-buttons">
    <input type="reset" name="reset" value="Зтерти данні">
    <input type="submit" value="Видправить форму">
  </div>

</form>

</body>
</html>
