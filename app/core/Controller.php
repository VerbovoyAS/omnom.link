<?php
    // Класс контроллер в котором мы налаживаем связи с моделями и представлениями
    class Controller {
        // Функция принимает параметр с название модели
        protected function model($model){
            // подключаем файл
            require_once 'app/model/' . $model . '.php';
            // возвращаем объект на основе указанной модели
            return new $model();
        }

        //Функция подключения файлов отображения
        // 1 параметр путь к файлу который нужно отобразить
        // 2 параметр данные которые могут быть переданны в html/php файл 
        protected function view($view, $data = []){
            require_once 'app/views/' . $view . '.php';
            
        }

    }