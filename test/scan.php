<?php

class interfaceErrorDetector
{
    public $errors=[];

    public function __construct()
    {
        set_error_handler([$this, 'logError']);
    }

    public function logError($num, $str, $file, $line, $context = null)
    {
        $this->errors[$file] = $str;
    }

    public function scanFile($file)
    {
        $content = str_replace("<?php", "", file_get_contents($file));
        eval($content);
    }

    public function __destruct()
    {
        restore_error_handler();
    }
}

$handler = new interfaceErrorDetector();
$handler->scanFile("test.php");
print_r($handler->errors);
