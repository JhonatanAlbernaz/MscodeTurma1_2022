<?php

    function getTemplate($template, $folder="templates/") {
        $templateFile = $folder.$template;

        if(is_file($templateFile)) $content = file_get_contents($templateFile);
        return $content;
    }

    function parseTemplate($template, $array) {
        foreach($array as $title => $values) {
            $template = str_replace("{".$title."}", $values, $template);
        }
        return $template;
    }

?>