<?PHP

/**
 *
 *              Methods.php [File libreria]
 *
 *  Contiene vari metodi necessari eseguire controlli e
 *  rendere il codice piu pulito e leggibile nei altri file.
 *  I metodi nuovi vengono aggiunti sempre in coda, DICHIARARE
 *  SOLO METODI DI UTILIZZO GENERALE.
 *
 * @author Kumar_Yash
 * @since 12/02/2022
 *
 *
 */



function th($value){
    echo "<th>$value</th>";
}

    /**
 * Metod that
 *
 *
 *
 * @param string $text
 * @param string $link
 * @param array $arr
 * @return string
 */
function a($text, $link, array $arr = array()){
    if(array_key_exists("var",$arr)){
        $varStr = '';
        foreach ($arr as $key => $val){
            if(!$key == "var")
            $varStr = "$key=$val&";
        }

        return ("<a href='../../$link?'.$varStr>$text</a>");
    }else{
        return ("<a href='../../$link'>$text</a>");
    }
}


function br(){
    echo "<br/>";
}

function hr(){
    echo "<hr>";
}

function option($str){
    $name = ucfirst($str);
    return "<option value='$str'>$name</option>";
}

function popup($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}



    /**
 * Method that checks if a given 
 * key exists and if the value is 
 * not null in the global arrays:
 * -$_POST[]
 * -$_GET[] 
 * 
 * @return string value
 * @return error string
 * 
 */ 
function getData($varName){

    if ($_SERVER["REQUEST_METHOD"] == "GET")
       if (isset($_GET[$varName]))
           if (!isNBZ($_GET[$varName]))
               return $_GET[$varName];
            else
            return false;
        else
            return false;

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
        if (isset($_POST[$varName]))
            if (!isNBZ($_POST[$varName]))
                return $_POST[$varName];
            else
            return false;
        else
            return false;

}


    /**
 * Alternative to print_r
 * used get to better readability
 *
 * @param $data
 * @return void
 */
function printR($data){
    foreach ($data as $row => $d){
        br();
        echo "$row => $d";
        hr();
    }
}



    /**
 * Method used to validate data
 *
 * @param $campo
 * @param $tipo
 * @return bool
 */
function IsNBZ($campo = '', $tipo = NULL) {
    $virgola = false;
    if (is_null($tipo)) {
        if (is_numeric($campo)) {
            $tipo = 0;
            if (is_float($campo)) {
                $virgola = true;
            }
        } else {
            $tipo = 1;
        }
    }

    if (is_null($campo)) {
        return true;
    }

    //$campo = '"'.$campo.'"';
    $result = trim($campo);
    if (empty($result)) {    //0, null, '', ..
        return true;
    }

    if ($virgola == false) {
        If (($tipo == 0) && ($campo == 0)) {
            return true;
        }
    }

    settype($decimal, 'int');
    $decimal = strtok($campo, ',');
    if (empty($decimal)) {
        return true;
    }

    return false;
}


    /**
 * Metodo che restituisce
 *
 * @return mixed|string
 */
function getFormName(){
    $exp  = explode('/',$_SERVER['SCRIPT_NAME']);
    return $exp[count($exp)-1];
}


    /**
 * Method that prints the given
 * data in the /test/log dir
 * as a log file
 *
 * @param $filename
 * @param $data
 * @return void
 */
function logFile($filename, $data){
    $file = "./../test/log/$filename.log";
    $arr = print_r($data,true);
    file_put_contents($file,$arr);
    chmod($file,0777);
}