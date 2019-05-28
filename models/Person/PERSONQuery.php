<?php

namespace app\models\Person;

/**
 * This is the ActiveQuery class for [[PERSON]].
 *
 * @see PERSON
 */
class PERSONQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PERSON[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PERSON|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
