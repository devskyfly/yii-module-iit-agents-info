<?php
namespace devskyfly\yiiModuleIitAgentsInfo\models;

use devskyfly\yiiModuleAdminPanel\models\contentPanel\AbstractEntity;
use yii\helpers\ArrayHelper;

/**
 * 
 * @author devskyfly
 * @property string $str_nmb
 */
class Region extends AbstractEntity
{
    protected static function sectionCls()
    {
        return null;
    }
    
    public function extensions()
    {
        return [];
    }
    
    public function rules()
    {
        $parent_rules=parent::rules();
        $new_rules=[
            [['str_nmb'],'string']
        ];
        
        return ArrayHelper::merge($parent_rules, $new_rules);
    }
    
    public static function selectListRoute()
    {
        return "regions/entity-select-list";
    }
}