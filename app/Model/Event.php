<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 13:35
 */
class Event extends AppModel{
    public $useTable="events";

    //イベントタグアソ
    public $hasAndBelongsToMany = array(

        'Etag',

        'Apply' => array(
            'className'              => 'Student',
            'joinTable'              => 'applies_events',
            'foreignKey'             => 'event_id',
            'associationForeignKey'  => 'student_id',
            'unique'                 => false,
            'conditions'             => '',
            'fields'                 => '',
            'order'                  => '',
            'limit'                  => '',
            'offset'                 => '',
            'finderQuery'            => '',
            'deleteQuery'            => '',
            'insertQuery'            => ''
        ),
        'Log' => array(
            'className'              => 'Student',
            'joinTable'              => 'events_logs',
            'foreignKey'             => 'event_id',
            'associationForeignKey'  => 'student_id',
            'unique'                 => false,
            'conditions'             => '',
            'fields'                 => '',
            'order'                  => '',
            'limit'                  => '',
            'offset'                 => '',
            'finderQuery'            => '',
            'deleteQuery'            => '',
            'insertQuery'            => ''
        )
    );
    public function loadModel($model_name) {
        App::uses($model_name,'Model');
        $this->{$model_name} = new $model_name();
    }

    public function getOriginal($id)
    {

        $event = $this->find("first", array("conditions" => array("id" => $id)));
        if ($event == null) return null;

        $state = $event["Event"]["state"];
        $original = array();

        if ($state <= 3) {
            $this->loadModel("Intern");
            $original = $this->Intern->find("first", array("conditions" => array("event_id" => $id)));
            //debug($original);
        } else {

            /*
            if ($state < 4) {
                $this->loadModel("Intern");
                $original = $this->Intern->find("first", array("conditions" => array("event_id" => $id)));

            } else {
            */
                switch ($state) {

                    case 4:
                        $this->loadModel("StudentGroupInfo");
                        $original = $this->StudentGroupInfo->find("first", array("conditions" => array("event_id" => $id)));
                        break;

                    case 5:
                        $this->loadModel("StudyAbroad");
                        $original = $this->StudyAbroad->find("first", array(
                            "conditions" => array("event_id" => $id)
                        ));
                        break;

                    case 6:
                        $this->loadModel("Camp");
                        $original = $this->Camp->find("first", array("conditions" => array("event_id" => $id)));
                        break;

                    case 7:
                        $this->loadModel("Lesson");
                        $original = $this->Lesson->find("first", array("conditions" => array("event_id" => $id)));
                        break;

                    case 8:
                        $this->loadModel("FunnyEvent");
                        $original = $this->FunnyEvent->find("first", array("conditions" => array("event_id" => $id)));
                        break;

                    case 9:
                        $this->loadModel("StudentGroup");
                        $original = $this->StudentGroup->find("first", array("conditions" => array("event_id" => $id)));
                        break;


                //}
            }


        }
        return $event+$original;
    }

    public function deleteOriginal($id){

        $event=$this->find("first",array("conditions"=>array("id"=>$id)));
        if($event==null) return null;
        $state=$event["Event"]["state"];
        $original=array();

        if($state<4){
            $this->loadModel("Intern");
            $flag = $this->Intern->find("first",array("conditions"=>array("event_id"=>$id)));
            if($flag!=null){
                $this->Intern->deleteAll(array("event_id"=>$id), false);
            }
        }else{

                switch ($state){

                    case 4:
                        $this->loadModel("StudentGroupInfo");
                        $flag = $this->StudentGroupInfo->find("first",array("conditions"=>array("event_id"=>$id)));
                        if($flag!=null){
                            $this->StudentGroupInfo->deleteAll(array("event_id"=>$id), false);
                        }
                        break;

                    case 5:
                        $this->loadModel("StudyAbroad");
                        $flag = $this->StudyAbroad->find("first",array("conditions"=>array("event_id"=>$id)));
                        if($flag!=null){
                            $this->StudyAbroad->deleteAll(array("event_id"=>$id), false);
                        }
                        break;

                    case 6:
                        $this->loadModel("Camp");
                        $flag = $this->Camp->find("first",array("conditions"=>array("event_id"=>$id)));
                        if($flag!=null){
                            $this->Camp->deleteAll(array("event_id"=>$id), false);
                        }
                        break;

                    case 7:
                        $this->loadModel("Lesson");
                        $flag = $this->Lesson->find("first",array("conditions"=>array("event_id"=>$id)));
                        if($flag!=null){
                            $this->Lesson->deleteAll(array("event_id"=>$id), false);
                        }
                        break;

                    case 8:
                        $this->loadModel("FunnyEvent");
                        $flag = $this->FunnyEvent->find("first",array("conditions"=>array("event_id"=>$id)));
                        if($flag!=null){
                            $this->FunnyEvent->deleteAll(array("event_id"=>$id), false);
                        }
                        break;

                    case 9:
                        $this->loadModel("StudentGroup");
                        $flag = $this->StudentGroup->find("first",array("conditions"=>array("event_id"=>$id)));
                        if($flag!=null){
                            $this->StudentGroup->deleteAll(array("event_id"=>$id), false);
                        }
                        break;


                }
            }

        //debug($original);

    }


    public $hasMany=array(
        "Image"=>array(
            "className"=>"Attachment",
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Image.model' => 'Event',
            ),
            'dependent'     => true

        )
    );


    public function createWithAttachments($data){
        $images = array();
        //debug($data["Image"]);
        if (!empty($data['Image'][0])) {
            foreach ($data['Image'] as $i => $image) {

                if (is_array($data['Image'][$i])) {
                    // Force setting the `model` field to this model
                    //debug($data["Image"][$i]);
                    if($data["Image"][$i]["attachment"]["name"]==""){
                        continue;
                    }
                    $image['model'] = 'Event';

                    // Unset the foreign_key if the user tries to specify it
                    if (isset($image['foreign_key'])) {
                        unset($image['foreign_key']);
                    }

                    $images[] = $image;
                }
            }
        }
        $data['Image'] = $images;

        // Try to save the data using Model::saveAll()
        $this->create();
        $p=$this->saveAll($data);

        if ($p) {
            return true;
        }

        // Throw an exception for the controller
        throw new Exception(__("This post could not be saved. Please try again"));
    }







    //ユーザーのログの総数を返す 使い方はAdminController/studentsにある
    public function getLog($id){
        $this->unbindModel(
            array('hasMany' => array('Image'),
                "hasAndBelongsToMany"=>array("Etag","Apply","Log"))
        );
        $this->loadModel("EventsLog");
        $logs=$this->EventsLog->find("all",
            array( "fields" => array("sum(counter) AS `logs`"),
                "conditions"=>array("event_id"=>$id)));
        if($logs[0][0]["logs"]==null){
            $logs[0][0]["logs"]=0;
        }

        return $logs[0][0];
    }


    public function getApply($id){
        $this->unbindModel(
            array('hasMany' => array('Image'),
                "hasAndBelongsToMany"=>array("Stag","Apply","Log"))
        );
        $this->loadModel("AppliesEvent");
        $applies=$this->AppliesEvent->find("all",
            array( "fields" => array("count(event_id) AS `applies`"),
                "conditions"=>array("event_id"=>$id)));
        if($applies[0][0]["applies"]==null){
            $applies[0][0]["applies"]=0;
        }

        return $applies[0][0];
    }


    public function adminfind(){
        $this->unbindModel(
            array('hasMany' => array('Image'),
                "hasAndBelongsToMany"=>array("Etag","Apply","Log"))
        );


        //1回eventとってくる　non asosi
        $events=$this->find("all");



        //その後そいつらのlogとapplyとってくる
        for($i=0;$i<count($events);$i++){
            $id=$events[$i]["Event"]["id"];
            $log=$this->getLog($id);
            $applies=$this->getApply($id);
            $events[$i]+=$log+$applies;
        }


        return $events;
    }

    //カテゴリー別event取得関数 by mark
    public function getEventsByState($state, $num){
        $events = $this->find('all', array(
            'conditions' => array('state' => $state),
            'limit' => $num
        ));
        if($events){
            return $events;
        } else{
            return false;
        }
    }

    //新着順event取得 by mark
    public function getEventsByCreated($num){
        $events = $this->find('all', array(
            'order' => array('created DESC'),
            'limit' => $num
        ));
        return $events;
    }

}


