<?php


namespace app\controllers;


use app\models\RequestShort;
use app\models\RequestStandart;
use RedBeanPHP\R;

class MainController extends AppController
{
    private $desc = 'Бетон Иркутск, Производство бетона в Иркутске, бетон М100, бетон М200, бетон М300, бетон М400, доставка бетона, бетононасос, швинг.';
    private $keywords = 'Бетон Иркутск, товарный бетон, бетон Иркутск доставка, бетон М100, бетон цены, бетон Иркутск купить, бетон 1 м3 купить, бетон 1 м3 цена Иркутск, бетон М200, М300, М350, М400, заказать бетон иркутск, бетон цены, бетон, калькулятор, фундамент, каркас, колонны, прочность, доставка, какой, марки, дешевый, опалубка, арматура, дом, гараж, отзывы, цена, размеры, стоимость, фабрика бетонов, завод, строительство, производство, проект';
    private $title_begin = 'Иркутский Бетон - ';

    public function indexAction(){
        $page_title = $this->title_begin . 'Главная страница';
//        $this->set(compact());
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function calculateAction() {
        $page_title = $this->title_begin . 'Калькулятор';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function priceAction() {
        $page_title = $this->title_begin . 'Цены';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function aboutAction() {
        $page_title = $this->title_begin . 'Почему мы';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function projectsAction() {
        $page_title = $this->title_begin . 'Наши фото';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function aboutconcreteAction() {
        $page_title = $this->title_begin . 'О бетоне';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function contactsAction() {
        $page_title = $this->title_begin . 'Реквизиты';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function sendAction() {
        if(!empty($_POST)){
            $request = new RequestStandart();
            RequestStandart::saveRequest($request);
            RequestStandart::mailRequest();
        }
        $this->setMeta('Отправка заявки');
    }

    public function sendShortAction() {
        if(!empty($_POST)){
            $request = new RequestShort();
            RequestShort::saveRequest($request);
            RequestShort::mailRequest();
        }
        $this->setMeta('Отправка заявки');
    }

    public function thanksAction() {
        $page_title = $this->title_begin . 'Спасибо за заявку';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }
}