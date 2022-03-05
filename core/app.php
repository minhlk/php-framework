<?php
// require_once('Twig/Autoloader.php');
class Init
{
    /*
* Class Properties Declaration
*/
    public $environment;
    public $capsule;
    public $controller_path;
    public $req_controller;
    public $req_model;
    public $view_render;
    public $req_param;
    public $req_method;
    public $load;

    /**
     *Split server path request into Array
     *@return capsule;
     */
    public function path_split($path)
    {
        $this->capsule = explode('/', ltrim($path));
        return $this->capsule;
    }

    /**
     *Check is url results to a trailing Slash
     *@return bool;
     */
    public static function is_slash($path)
    {
        /**
         *Is path = '/'
         *@return true;
         */
        if ($path == '/') {
            return true;
        }
        /**
         *Is path != '/'
         *@return false;
         */
        else {
            return false;
        }
    }

    public static function view($template_name, $data = array())
    {
        $loader = new \Twig\Loader\FilesystemLoader('views');
        $twig = new \Twig\Environment($loader);
        $template = $twig->load($template_name . '.html');
        echo $template->render($data);
    }
}
