<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/03/05
 * Time: 19:21
 */

class Attachment extends AppModel
{
    public $actsAs = array(
        'Upload.Upload' => array(
            'attachment' => array(
                'thumbnailSizes' => array(
                    'xvga' => '1024x768',
                    'vga' => '640x480',
                    'thumb' => '80x80',
                ),
                'thumbnailMethod'  => 'php',
                'fields' => [
                    'dir' => 'dir'
                ]
            ),
        ),
    );


    public $belongsTo = array(
        'Event' => array(
            'className' => 'Event',
            'foreignKey' => 'foreign_key',
        )
    );


}