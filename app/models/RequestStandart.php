<?php


namespace app\models;


use project\App;

class RequestStandart extends AppModel
{
    public $attributes = [
        'name' => '',
        'tel' => '',
        'email' => '',
        'message' => '',
    ];

    public static function saveRequest($request) {
        $data = $_POST;
        $request->load($data);
        if($request->save('mailstandart')){
            $_SESSION['success'] = 'Ваша заявка успешно зарегистрирована';
        }else{
            $_SESSION['error'] = 'Ошибка!';
        }
    }

    public static function mailRequest() {
        // Create the Transport
        $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
            ->setUsername(App::$app->getProperty('smtp_login'))
            ->setPassword(App::$app->getProperty('smtp_password'));

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        ob_start();
        require APP . '/views/mail/mail_standart.php';
        $body_admin = ob_get_clean();
        $message_admin = (new Swift_Message("Заявка"))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('project_name')])
            ->setTo(App::$app->getProperty('admin_email'))
            ->setBody($body_admin, 'text/html');
        $result = $mailer->send($message_admin);
        redirect();
    }
}