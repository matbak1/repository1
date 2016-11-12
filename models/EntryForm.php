<?php
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model{

    public $name;
    public $email;

    public function rules(){
        return[
            [['name', 'email'], 'required'],
            ['email','email'],
        ];
    }
}
?>
<?php
    $model = new EntryForm();
    $model->name = 'Qiang';
    $model->email = 'bag';
    if($model->validate()){
        //Good!
    }
    else{
        $model->getErrors();
    }
?>