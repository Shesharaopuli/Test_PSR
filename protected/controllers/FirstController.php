<?php
class FirstController extends Controller
{
	
	public function actionIndex()
	{
		$welcome="<h3>Welcome <strong>Shesharao</strong>...</h3><br>";
		$this->render('index',array('welcome' => $welcome));
		
	}
}

?>