<?php

    /**
     * Cette méthode prend en paramétre, le nom de la vue dont elle doit
     * extraire et rendre le contenu
     *
     * @param [type] $view_name
     * 
     * @return string
     */
    function render($view_name) : string
    {
        ob_start();
        require TEMPLATES . "$view_name";
        $content = ob_get_clean();

        ob_start();
        require TEMPLATES . "$theme";
        $page = ob_get_clean();

        return $page;
    }


    /**
     * Cette fonction permet au pages d'hériter d'un theme
     *
     * @param string $theme_name
     * @return string
     */
    function extends_of(string $theme_name)
    {
        return $theme_name;
    }


    /**
     * Cette fonction vérifie si l'utilisateur st connecté ou non.
     *
     * @return boolean
     */
   function get_user() : bool
   {
    if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])) {
        return true;
    }

    return false;
   }