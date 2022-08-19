<?php

//nasz kontroler bazowy
class AppController
{
    //funkcja wspolczielona z klasami dziedziczacymi jest protected
    protected function render(string $template = null)
    {
        $templatePath = 'public/views/' . $template . 'html';
        $output = 'File not found.';

        if (file_exists($templatePath)) {
            //zapisujemy do bufora
            ob_start();
            include $templatePath;
            $output = ob_get_clean(); //wyrzuca zapis bufora
        }
        print $output;
    }
}
