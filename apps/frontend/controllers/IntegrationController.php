<?php

namespace Kladr\Frontend\Controllers {

    use \Phalcon\Tag,
        \Phalcon\Mvc\Controller;

    class IntegrationController extends Controller
    {

        public function initialize()
        {
            Tag::setTitle('Документация и интеграция с Кладр в облаке');
            $this->view->setVar('description', 'Описание интеграции с Кладр в облаке. Модули для jQuery, PHP, .Net, 1C-Bitrix');
            $this->view->setVar('keywords', 'КЛАДР, ФИАС, скачать КЛАДР, скачать ФИАС, скачать базу КЛАДР, скачать базу ФИАС, доступ к базе КЛАДР, доступ к базе ФИАС, КЛАДР онлайн, ФИАС онлайн, структура базы КЛАДР, структура базы ФИАС, описание базы КЛАДР, описание базы ФИАС, jQuery, php, net, 1c-bitrix');
        }

        public function indexAction()
        {

        }

    }
    
}