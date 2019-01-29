<?php
echo "<h3>Post-Inkrement</h3>";
$a = 5;
echo "Sollte 5 sein: " . $a++ . "<br />\n";
echo "Sollte 6 sein: " . $a . "<br />\n";

echo "<h3>Pre-Inkrement</h3>";
$a = 5;
echo "Sollte 6 sein: " . ++$a . "<br />\n";
echo "Sollte 6 sein: " . $a . "<br />\n";

echo "<h3>Post-Dekrement</h3>";
$a = 5;
echo "Sollte 5 sein: " . $a-- . "<br />\n";
echo "Sollte 4 sein: " . $a . "<br />\n";

echo "<h3>Pre-Dekrement</h3>";
$a = 5;
echo "Sollte 4 sein: " . --$a . "<br />\n";
echo "Sollte 4 sein: " . $a . "<br />\n";
?>