<?php

$boy = ["мячик", "машинка", "плюшевый медведь"]; // 0-10
$girl = ["бантик", "кукла", "плюшевая белка"];
$teenagerBoy = ["квадракоптер", "велосипед", "планшет"]; // 10-19
$teenagerGirl = ["ноутбук", "косметика", "абонемент на фитнес"];
$man = ["кошелек", "термос", "золотой слиток"]; // 19-65
$woman = ["колье", "духи", "компьютерное кресло"];
$oldMan = ["удочки", "плед", "путевка в санаторий"];
$oldWoman = ["камин", "массажер", "ионизатор воздуха"];

$gender = $_POST['gender'] ?? "";
$age = $_POST['age'] ?? "";

function random($arr)
{
  $key =  array_rand($arr);
  return $arr[$key];
}

if ($gender == "man") {
  if ($age > 0 && $age <= 10) {
    echo random($boy);
  }
  if ($age > 10 && $age <= 19) {
    echo random($teenagerBoy);
  }
  if ($age > 19 && $age <= 65) {
    echo random($man);
  }
  if ($age > 65) {
    echo random($oldMan);
  }
}
if ($gender == "woman") {
  if ($age > 0 && $age <= 10) {
    echo random($girl);
  }
  if ($age > 10 && $age <= 19) {
    echo random($teenagerGirl);
  }
  if ($age > 19 && $age <= 65) {
    echo random($woman);
  }
  if ($age > 65) {
    echo random($oldWoman);
  }
}
?>

<form action="" method="post">
  <input type="radio" name="gender" value="man" id="man" checked>
  <label for="man">Мужской</label>
  <input type="radio" name="gender" value="woman" id="woman">
  <label for="woman">Женский</label>
  <input type="number" name="age" placeholder="возраст" required>
  <input type="submit">
</form>