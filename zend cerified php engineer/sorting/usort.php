<?php
function cmp1($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp1");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}

echo "------------------------------\n";

function cmp2($a, $b)
{
    return strcmp($a["fruit"], $b["fruit"]);
}

$fruits[0]["fruit"] = "lemons";
$fruits[1]["fruit"] = "apples";
$fruits[2]["fruit"] = "grapes";

usort($fruits, "cmp2");

while (list($key, $value) = each($fruits)) {
    echo "\$fruits[$key]: " . $value["fruit"] . "\n";
}

echo "------------------------------\n";

class TestObj {
    var $name;

    function TestObj($name)
    {
        $this->name = $name;
    }

    /* This is the static comparing function: */
    static function cmp_obj($a, $b)
    {
        $al = strtolower($a->name);
        $bl = strtolower($b->name);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
}

$a[] = new TestObj("u");
$a[] = new TestObj("z");
$a[] = new TestObj("d");

usort($a, array("TestObj", "cmp_obj"));

foreach ($a as $item) {
    echo $item->name . "\n";
}

echo "------------------------------\n";

$array[0] = array('key_a' => 'z', 'key_b' => 'c');
$array[1] = array('key_a' => 'x', 'key_b' => 'b');
$array[2] = array('key_a' => 'y', 'key_b' => 'a');

function build_sorter($key) {
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

usort($array, build_sorter('key_a'));

foreach ($array as $item) {
    echo $item['key_a'] . ', ' . $item['key_b'] . "\n";
}