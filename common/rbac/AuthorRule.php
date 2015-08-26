<?php
namespace common\rbac;

use yii\rbac\Rule;
use \Yii;

class AuthorRule extends Rule
{
    public $name = 'isAuthor';

    /**
     * @param string|integer $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return boolean a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        // if(isset($params['model'])){
        //   $model = $params['model'];
        // }
        // else{
        //   $id = \Yii::$app->controller->find
        // }
        //
        // return $model->created_by == $user;
        return isset($params['model']) ? $params['model']->created_by == $user : false;
    }
}
 ?>
