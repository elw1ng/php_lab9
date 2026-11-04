<?php
echo '<meta charset="UTF-8">';
require "../config.php";

echo '<h1>Лабораторна робота №9</h1>';
echo '<p>Адам Смеречук<br>Група: ІПЗ-33<br>Варіант: 10</p>';

echo '<h2>Файли проєкту</h2>';
echo '<p>Клас Calculator: <a href="src/Calculator.php">src/Calculator.php</a></p>';
echo '<p>Тести Calculator: <a href="tests/CalculatorTest.php">tests/CalculatorTest.php</a></p>';
echo '<p>Клас BankAccount: <a href="src/BankAccount.php">src/BankAccount.php</a></p>';
echo '<p>Тести BankAccount: <a href="tests/BankAccountTest.php">tests/BankAccountTest.php</a></p>';
echo '<p>Клас DiscountCalculator: <a href="src/DiscountCalculator.php">src/DiscountCalculator.php</a></p>';
echo '<p>Тести DiscountCalculator: <a href="tests/DiscountCalculatorTest.php">tests/DiscountCalculatorTest.php</a></p>';
echo '<p>Завдання 5, функція за варіантом 10: <a href="src/Variant10.php">src/Variant10.php</a></p>';
echo '<p>Тести завдання 5: <a href="tests/Variant10Test.php">tests/Variant10Test.php</a></p>';
echo '<p>Приклад 1 з теоретичних відомостей: <a href="examples/simple_test.php">examples/simple_test.php</a></p>';

echo '<h2>Як запустити тести</h2>';
echo '<p>У терміналі відкрийте цю папку та виконайте: <code>composer install</code>, потім <code>composer test</code>.</p>';
echo '<p>У цьому середовищі також можна запустити готову команду PowerShell: <code>powershell -ExecutionPolicy Bypass -File .\\run-tests.ps1</code>.</p>';
echo '<p><a href="README.md">Інструкція та структура проєкту</a></p>';
echo '<p><a href="REPORT.md">Звіт про виконану роботу</a></p>';

echo '<h2>Контрольні запитання</h2>';
echo '<p><b>Юніт-тестування</b> перевіряє невелику частину програми окремо, наприклад один метод класу.</p>';
echo '<p><b>assertEquals()</b> порівнює очікуване значення з результатом. <b>expectException()</b> перевіряє, що код викидає очікувану помилку.</p>';
echo '<p><b>setUp()</b> готує об’єкти й дані перед кожним тестом.</p>';
?>

