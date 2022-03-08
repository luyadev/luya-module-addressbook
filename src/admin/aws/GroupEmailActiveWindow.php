<?php
namespace luya\addressbook\admin\aws;

use Yii;
use luya\admin\ngrest\base\ActiveWindow;

class GroupEmailActiveWindow extends ActiveWindow
{
    public $module = '@addressbookadmin';

    public function defaultLabel()
    {
        return 'Send E-Mail';
    }

    public function defaultIcon()
    {
        return 'mail';
    }

    public function getTitle()
    {
        return $this->model->name;
    }

    public function index()
    {
        return $this->render('index', [
            'id' => $this->itemId,
            'contacts' => $this->model->contacts,
        ]);
    }

    public function callbackSendMail($subject, $text)
    {
        $mail = Yii::$app->mail->compose($subject, $text);

        foreach ($this->model->contacts as $contact) {
            $mail->address($contact->email, $contact->firstname . ' ' . $contact->lastname);
        }

        if ($mail->send()) {
            return $this->sendSuccess('All mails were sent successfully!');
        }

        return $this->sendError('There was an error while trying to send the emails.');
    }
}
