
<?php
class EigenschaftTest 
{
    /**  Speicherplatz für überladene Daten.  */
    private $data = array();

    /**  Überladung wird nicht bei deklarierten Eigenschaften benutzt.  */
    public $declared = 1;

    /**  Überladung wird nur von außerhalb der Klasse angewendet.  */
    private $hidden = 2;

    public function __set($name, $value) 
    {
        echo "Setze '$name' auf '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name) 
    {
        echo "Lese '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefinierte Eigenschaft für __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' Zeile ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    /** Seit PHP 5.1.0  */
    public function __isset($name) 
    {
        echo "Ist '$name' gesetzt?\n";
        return isset($this->data[$name]);
    }

    /** Seit PHP 5.1.0  */
    public function __unset($name)
    {
        echo "Lösche '$name'\n";
        unset($this->data[$name]);
    }

    /**  Keine magische Methode, nur beispielhaft hier.  */
    public function getHidden() 
    {
        return $this->hidden;
    }
}


echo "<pre>\n";

$obj = new EigenschaftTest;

$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo "Wir experimentieren nun mit der private-Eigenschaft 'hidden':\n";
echo "Private ist innerhalb der Klasse sichtbar, also wird __get() nicht benutzt...\n";
echo $obj->getHidden() . "\n";
echo "Private nicht sichtbar von außerhalb der Klasse, also wird __get() benutzt...\n";
echo $obj->hidden . "\n";
?>
