<?php

namespace sansusan\monstabox;
use Yii;
use yii\web\View;
use yii\base\Widget;

/**
 * This is just an example.
 */
class Monstabox extends Widget
{
    private $_assetsUrl;

    public $ftp_host;
    public $ftp_pass;
    public $ftp_port;
    public $ftp_user;

    public function run()
    {
        if($this->_assetsUrl === null)
        {
            $assets = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
            $this -> _assetsUrl = Yii::$app->getAssetManager()->publish($assets, array('beforeCopy' =>
                function($from, $to)
                {
                    if(strpos($from, '.directory') < 1)
                        return $from;
                }
            ));
        }

        $this->getView()->registerJs("
			resizeIframe();

			$(window).resize(function(){
				resizeIframe();
			});

			function resizeIframe()
			{
				$('iframe').attr('width',$('#iframe-div').width());
				//$('iframe').attr('height','800');
			}
		      ", View::POS_END, 'iframe');

        $url = '/monstabox/login.php?ftp_host=' . $this->ftp_host . '&ftp_pass=' . $this->ftp_pass . '&ftp_port=' . $this->ftp_port . '&ftp_user=' . $this->ftp_user;


        echo '<div id="iframe-div">';
        echo	'<iframe src="' . $this->_assetsUrl[1] . $url . '" style="position: absolute; height: 98%; border: none"></iframe>';
        echo '</div>';
    }
}
