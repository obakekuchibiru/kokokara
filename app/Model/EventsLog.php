<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/03/04
 * Time: 11:04
 */
class EventsLog extends AppModel{
	public $useTable = "events_logs";

	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
		)
	);

	public function goEventsLog($student_id, $event_id){
		$event_log = $this->find('first', array(
				'conditions' => array(
					'student_id' => $student_id, 'event_id' => $event_id
				)
			)
		);
		if(!$event_log){
			$this->set(array('student_id' => $student_id, 'event_id' => $event_id));
		}else{
			$this->set(array('id' => $event_log['EventsLog']['id'], 'counter' => $event_log['EventsLog']['counter'] + 1));
		}
		$this->save();
	}

}
