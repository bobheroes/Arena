<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Comment;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $body;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject('Сообщение с SoM')
            ->setTextBody($this->body)
            ->send();
    }


    public function saveComment(){
        if (!$this->validate()) {
            return null;
        }

        $comment = new Comment();
        $comment->name = $this->name;
        $comment->email = $this->email;
        $comment->body = $this->body;
        
        return $comment->save() ? $comment : null;
    }
}
