<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php

    #Створіть функцію, яка обчислює середнє арифметичне значення з масиву чисел.

    function arr_avg()
    {
        $data = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];
        $avg = round(array_sum($data) / count($data), 2);
        echo $avg;
    }

    arr_avg();

    #Напишіть функцію для перевертання рядка.

    function str_rev()
    {
        $string = "Hello, World";
        echo strrev($string);
    }

    echo "</br>";
    str_rev();

    #Створіть функцію, яка приймає масив чисел і повертає новий масив, в якому всі елементи збільшені на 10.

    function arr_increase($arr)
    {
        foreach ($arr as &$value) {
            $value = $value * 10;
        }
        echo var_export($arr);
    }

    $data = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];

    echo "</br>";
    arr_increase($data);

    #Напишіть функцію для визначення кількості голосних літер у рядку.

    function str_vowels($string)
    {
        $patt = '~(?<vowels>[аоуеиі])~iu';
        preg_match_all($patt, $string, $a);
        $vowels = count(array_filter($a['vowels']));
        echo $vowels;
    }

    $string = "Привіт, Світ!";

    echo "</br>";
    str_vowels($string);

    #Створіть функцію для видалення дублікатів з масиву.

    function dupl_rem($arr)
    {
        $result = array_unique($arr);

        echo var_export($result);
    }

    $data = [2, "Apple", 8, 10, 3, 8, 12, "Apple", "Banana"];

    echo "</br>";
    dupl_rem($data);

    #Напишіть функцію для перевірки того, чи є слово паліндромом.

    function check_palindrome($string)
    {
        if ($string == strrev($string))
            return "Слово $string является палиндромом";
        else
            return "Слово $string не является палиндромом";
    }

    echo "</br>";
    echo check_palindrome('madam');
    echo "</br>";
    echo check_palindrome('роза');

    #Створіть функцію, яка повертає масив, який складається з парних чисел від 1 до 50.

    function even_arr()
    {
        $arr = [];
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 2 == 0) {
                $arr[] = $i;
            }
        }
        echo var_export($arr);
    }

    echo "</br>";
    even_arr();

    #Напишіть функцію для знаходження найменшого та найбільшого значення в масиві чисел.

    function arr_max_min($arr)
    {
        echo max($arr);
        echo "</br>";
        echo min($arr);
    }

    $data = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];

    echo "</br>";
    arr_max_min($data);

    #Створіть функцію, яка приймає асоціативний масив і повертає новий масив зі значеннями, відсортованими за алфавітом за ключами.

    function arr_sort($arr)
    {
        ksort($arr);

        foreach ($arr as $key => $val) {
            echo "$key = $val\n";
        }
    }

    $data = array("l" => "lemon", "o" => "orange", "b" => "banana", "a" => "apple");

    echo "</br>";
    arr_sort($data);

    #Напишіть функцію для обчислення факторіалу числа.

    function factor_calcul($num)
    {
        echo gmp_fact($num);
    }

    $num = 10;

    echo "</br>";
    factor_calcul($num);

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

    function arr_merge($arr1, $arr2)
    {
        $result = array_unique(array_merge($arr1, $arr2));

        echo var_export($result);
    }

    $arr1 = [2, 6, 8, 15.4, 10, 3, 8, 12, 11.3];

    $arr2 = [3, 5, 8, 10, 12, 1.4, 2.8];

    echo "</br>";
    arr_merge($arr1, $arr2);

    #Створіть функцію, яка приймає рядок та повертає новий рядок, в якому кожне слово починається з великої літери.

    function str_UpperCase($input)
    {
        echo ucwords($input);
    }

    $string = 'I love programming';

    echo "</br>";
    str_UpperCase($string);

    #Напишіть функцію для генерації випадкового пароля заданої довжини.

    function gen_password($length)
    {
        $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP@!#$%&';
        $size = strlen($chars) - 1;
        $password = '';
        while ($length--) {
            $password .= $chars[random_int(0, $size)];
        }
        return $password;
    }

    echo "</br>";
    echo gen_password(8);

    #Створіть функцію для знаходження суми елементів на головній діагоналі квадратної матриці.

    function main_diag_sum($matrix)
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
    echo main_diag_sum($matrix);

    #Напишіть функцію для видалення всіх HTML-тегів з рядка.

    function str_rem($input)
    {
        echo strip_tags($input);
    }

    $string = '</br>Hello</p>';

    echo "</br>";
    str_rem($string);

    #Створіть функцію для реверсу асоціативного масиву (замініть ключі на значення і навпаки).

    function arr_flip($arr)
    {
        echo var_export(array_flip($arr));
    }

    $input = ["l" => "lemon", "o" => "orange", "b" => "banana", "a" => "apple"];

    echo "</br>";
    arr_flip($input);

    #Напишіть функцію для перетворення рядка у крапковану нотацію (camelCase).

    function str_camelCase($input, $separator = '_')
    {
        echo lcfirst(str_replace($separator, '', ucwords($input, $separator)));
    }

    $string = 'I love programming';

    echo "</br>";
    str_camelCase($string);

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

    function arr_sort_key($arr, $key)
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

    $sortedArr = arr_sort_key($objectsArr, 'age');

    echo "</br>";
    echo var_export($sortedArr);

    ?>
</body>

</html>