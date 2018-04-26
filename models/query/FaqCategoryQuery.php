<?php
/**
 * FaqCategoryQuery
 *
 * This is the ActiveQuery class for [[\app\modules\faq\models\FaqCategory]].
 * @see \app\modules\faq\models\FaqCategory
 * 
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 ECC UGM (ecc.ft.ugm.ac.id)
 * @created date 27 April 2018, 00:36 WIB
 * @link https://ecc.ft.ugm.ac.id
 *
 */

namespace app\modules\faq\models\query;

class FaqCategoryQuery extends \yii\db\ActiveQuery
{
	/*
	public function active()
	{
		return $this->andWhere('[[status]]=1');
	}
	*/

	/**
	 * @inheritdoc
	 */
	public function published() 
	{
		return $this->andWhere(['publish' => 1]);
	}

	/**
	 * @inheritdoc
	 */
	public function unpublish() 
	{
		return $this->andWhere(['publish' => 0]);
	}

	/**
	 * @inheritdoc
	 * @return \app\modules\faq\models\FaqCategory[]|array
	 */
	public function all($db = null)
	{
		return parent::all($db);
	}

	/**
	 * @inheritdoc
	 * @return \app\modules\faq\models\FaqCategory|array|null
	 */
	public function one($db = null)
	{
		return parent::one($db);
	}
}