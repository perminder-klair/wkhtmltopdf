<?php

/**
To import in Yii
-----------------------------
'import'=>array(
	'application.extensions.wkhtmltopdf.WkHtmlToPdf',
)
*/

class SiteController extends Controller
{
	/**
	 * Download Property PDF methods
	 */
	public function actionDownload($id)
	{	
		$this->layout=false;
		
		$url = url('/site/createPdf', array('id'=>$id));
		
		$pdf = new WkHtmlToPdf();
		$pdf->setPageOptions(array(
		    'disable-smart-shrinking',
		    //'user-style-sheet' => 'pdf.css',
		));
		$pdf->addPage($url);
		if(!$pdf->send('download_'.$_GET['id'].'.pdf'))
			throw new Exception('Could not create PDF: '.$pdf->getError());
		
		exit;
	}
	
	public function actionCreatePdf()
	{ 
		if($model = $this->loadModel($_GET['id'])) {
			$this->layout='print';
			
			$this->render('createPdf', array(
				'model' => $model,
			));
		}
	}
}