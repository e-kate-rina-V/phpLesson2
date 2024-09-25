<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php

    #Створіть функцію, яка обчислює середнє арифметичне значення з масиву чисел.

    function averageArray($arr)
    {
        $arr_avg = round(array_sum($arr) / count($arr), 2);
        echo $arr_avg;
    }

    $arr = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];
    averageArray($arr);

    #Напишіть функцію для перевертання рядка.

    function reverseStr($string)
    {
        echo strrev($string);
    }

    $string = "Hello, World";

    echo "</br>";
    reverseStr($string);

    #Створіть функцію, яка приймає масив чисел і повертає новий масив, в якому всі елементи збільшені на 10.

    function increaseArray($arr)
    {
        foreach ($arr as &$value) {
            $value = $value + 10;
        }
        echo var_export($arr);
    }

    $data = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];

    echo "</br>";
    increaseArray($data);

    #Напишіть функцію для визначення кількості голосних літер у рядку.

    function vowelsNumInStr($string)
    {
        $pattern = '~(?<vowels>[аоуеиі])~iu';
        preg_match_all($pattern, $string, $matches);
        $vowels = count(array_filter($matches['vowels']));
        echo $vowels;
    }

    $string = "Привіт, Світ!";

    echo "</br>";
    vowelsNumInStr($string);

    #Створіть функцію для видалення дублікатів з масиву.

    function removeDuplicates($arr)
    {
        $result = array_unique($arr);

        echo var_export($result);
    }

    $data = [2, "Apple", 8, 10, 3, 8, 12, "Apple", "Banana"];

    echo "</br>";
    removeDuplicates($data);

    #Напишіть функцію для перевірки того, чи є слово паліндромом.

    function checkPalindromeStr(string $string)
    {
        if ($string == strrev($string)) {
            return "Слово $string является палиндромом";
        }

        return "Слово $string не является палиндромом";
    }

    echo "</br>";
    echo checkPalindromeStr('madam');
    echo "</br>";
    echo checkPalindromeStr('роза');

    #Створіть функцію, яка повертає масив, який складається з парних чисел від 1 до 50.

    function evenArray($start, $end)
    {
        $arr = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                $arr[] = $i;
            }
        }
        echo var_export($arr);
    }

    echo "</br>";
    evenArray(1, 50);

    #Напишіть функцію для знаходження найменшого та найбільшого значення в масиві чисел.

    function maxMinValueArray($arr)
    {
        echo max($arr);
        echo "</br>";
        echo min($arr);
    }

    $data = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];

    echo "</br>";
    maxMinValueArray($data);

    #Створіть функцію, яка приймає асоціативний масив і повертає новий масив зі значеннями, відсортованими за алфавітом за ключами.

    function sortAssocArrayByKey($arr)
    {
        ksort($arr);

        foreach ($arr as $key => $val) {
            echo "$key = $val\n";
        }
    }

    $data = array("l" => "lemon", "o" => "orange", "b" => "banana", "a" => "apple");

    echo "</br>";
    sortAssocArrayByKey($data);

    #Напишіть функцію для обчислення факторіалу числа.

    function calculateFactorial($num)
    {
        echo gmp_fact($num);
    }

    $num = 10;

    echo "</br>";
    calculateFactorial($num);

    #Створіть функцію, яка знаходить всі прості числа в заданому діапазоні.

    function findPrimesInRange($start, $end)
    {
        $primes = [];

        for ($num = $start; $num <= $end; $num++) {
            if (isPrime($num)) {
                $primes[] = $num;
            }
        }

        return $primes;
    }

    function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }

    $start = 10;
    $end = 50;
    $primes = findPrimesInRange($start, $end);

    echo "</br>";
    echo "Прості числа в діапазоні від $start до $end: " . implode(', ', $primes);

    #Напишіть функцію для об'єднання двох масивів без повторень.

    function mergeArray($arr1, $arr2)
    {
        $result = array_unique(array_merge($arr1, $arr2));

        echo var_export($result);
    }

    $arr1 = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];

    $arr2 = [3, 5, 8, 10, 12, 1.4, 2.8];

    echo "</br>";
    mergeArray($arr1, $arr2);

    #Створіть функцію, яка приймає рядок та повертає новий рядок, в якому кожне слово починається з великої літери.

    function upperCaseStr($input)
    {
        echo ucwords($input);
    }

    $string = 'I love programming';

    echo "</br>";
    upperCaseStr($string);

    #Напишіть функцію для генерації випадкового пароля заданої довжини.

    function generatePassword($length)
    {
        $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP@!#$%&';
        $size = strlen($chars) - 1;
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, $size)];
        }

        return $password;
    }

    echo "</br>";
    echo generatePassword(8);

    #Створіть функцію для знаходження суми елементів на головній діагоналі квадратної матриці.

    function mainDiagonalSum($matrix)
    {
        $sizeN = count($matrix);
        $total = 0;

        for ($i = 0; $i < $sizeN; $i++) {
            $total += $matrix[$i][$i];
        }

        return $total;
    }

    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    echo "</br>";
    echo mainDiagonalSum($matrix);

    #Напишіть функцію для видалення всіх HTML-тегів з рядка.

    function removeFromStr($input)
    {
        echo strip_tags($input);
    }

    $string = '</br>Hello</p>';

    echo "</br>";
    removeFromStr($string);

    #Створіть функцію для реверсу асоціативного масиву (замініть ключі на значення і навпаки).

    function flipArray($arr)
    {
        echo var_export(array_flip($arr));
    }

    $input = ["l" => "lemon", "o" => "orange", "b" => "banana", "a" => "apple"];

    echo "</br>";
    flipArray($input);

    #Напишіть функцію для перетворення рядка у крапковану нотацію (camelCase).

    function camelCaseStr($input, $separator = '_')
    {
        echo lcfirst(str_replace($separator, '', ucwords($input, $separator)));
    }

    $string = 'I love programming';

    echo "</br>";
    camelCaseStr($string);

    #Створіть функцію, яка перевіряє, чи є число ступенем двійки.

    function isPowerOfTwo($number)
    {
        for ($x = 1; $x <= $number; $x *= 2) {
            if ($x == $number) {
                echo "Число є ступенем двійки";

                return;
            }
        }

        echo "Число не є ступенем двійки";
    }

    $number = 256;
    echo "</br>";
    isPowerOfTwo($number);

    #Напишіть функцію для сортування масиву об'єктів за значенням конкретного ключа

    function sortObjectArrayByKey($arr, $key)
    {
        usort($arr, function ($a, $b) use ($key) {
            return $a->$key <=> $b->$key;
        });

        return $arr;
    }

    $objectsArr = [
        (object) ['name' => 'John', 'age' => 25],
        (object) ['name' => 'Jane', 'age' => 30],
        (object) ['name' => 'Doe', 'age' => 20],
    ];

    $sortedArr = sortObjectArrayByKey($objectsArr, 'age');

    echo "</br>";
    echo var_export($sortedArr);

    ?>
</body>

</html>