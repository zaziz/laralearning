<?php
/**
 * Created by PhpStorm.
 * User: ZAZIZ
 * Date: 11/27/2014
 * Time: 12:46 PM
 */

class MyController extends BaseController {




    public function net($id){
       // $firstName =  "Zahid".$id;
       // $secondName = "Aziz".$id;
      //  return View::Make('myPage',array('firstName'=>$firstName,'secondName'=>$secondName));



       $myArray1 = array('firstName'=>'zahid','SecondName' => 'Aziz');
       $myArray2 = array('firstName'=>'Khurram','SecondName' => 'Shahzad');
        $myArray3 = array('firstName'=>'Tariq','SecondName' => 'Iqbal');
        if($id == 1){
        return View::Make('myPage',array('test'=>$myArray1));
        }elseif($id == 2){
            return View::Make('myPage',array('test'=>$myArray2));
        }
        elseif($id==3){
            return View::Make('myPage',array('test'=>$myArray3));

        }

    }



}