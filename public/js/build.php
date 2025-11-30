
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// header('Content-Type: application/javascript');

$root = dirname(__DIR__)."/";

$files = [ 
	$root."/js/core.js",	
	// $root."/js/gg.js",

	"https://f7.donggiatri.com/bridge.js",

	$root."/js/jquery.validate.min.js",

	$root."/js/jquery.serializeObject.min.js",

	$root."/js/jquery.simplePagination.js",

	$root."/js/jquery.blockUI.min.js",
	$root."/js/recaptcha.js",
	$root."/js/taphold.js",
	$root."/js/dialog.js",
	// $root."/js/iframe.js", 
	

	$root."/js/copy.js",

	$root."/js/buttonLoader.js",
	$root."/js/seeMore.js",

	$root."/js/app.js",

	$root."/js/time.js",

	$root."/js/cache.js",

	$root."/js/page.js",

	$root."/js/money.js",

	

	$root."/js/countdown.js",

	$root."/js/flatlist.js",

	

	$root."/js/bottomsheet.js",

	$root."/js/country.js",

	$root."/modules/user/js/user.js",

	$root."/js/linq.min.js",

	$root."/js/form.js",

	$root."/js/url.js",

	$root."/js/helper.js",

	$root."/js/notification.js",

	$root."/js/image.js",

	$root."/js/modal.js",

	$root."/js/dlapp.js",

	$root."/js/editinline.js",

	$root."/js/ui.js",

	$root."/js/jquery.qrcode.min.js",

	$root."/js/loader.js",

	$root."/js/share.js",

	$root."/js/acanladar.js",

	$root."/js/gps.js",

	$root."/js/pincode.js",

	$root."/js/cropper.js",

	$root."/js/jquery.matchHeight-min.js",

	$root."/js/crypto-js.min.js",

	$root."/js/jsencrypt.min.js",

	$root."/modules/rsa/script.js",

	$root."/js/swiper.min.js",

	$root."/js/jquery.finger.min.js", 

	$root."/js/comment.js",

	$root."/js/sqlite.js",

	$root."/js/upload.js",

	$root."/js/toastr.js",

	$root."/js/bottomsheet.min.js",

	$root."/js/lazyload.js",

	$root."/js/socket.js",

	$root."/js/react.js",

	$root."/js/sweetalert-dev.js",

	$root."/js/qr.js",
	$root."/js/toast.js",
	$root."/js/scrollable/index.js",	
	$root."/js/progressbar.js",	 
];

$names = [];
$s="";

foreach ($files as $f) {
	$names[] = basename($f);
	$s.= file_get_contents($f)."\n";
}
$s.="/*\n".implode("\n",$names)."\n*/\n";
file_put_contents(__DIR__."/core.min.js","\xEF\xBB\xBF".$s);

 
//css

$files = [

	 

	$root."/css/core.css",	
	$root."/css/form.css",	

	$root."/css/style.css",	

	$root."/css/swiper.css",

	$root."/css/toastr.css",	

	$root."/css/cropper.css",	

	$root."/css/sweetalert.css",	
	$root."/css/bottomsheet.min.css",	
	$root."/css/toast.css",	
	$root."/js/scrollable/index.css",	
	$root."/css/progress.css",	

];

$names = [];
$s="";

foreach ($files as $f) {
	$names[] = basename($f);
	$s.= file_get_contents($f)."\n";

}
$s.="/*\n".implode("\n",$names)."\n*/\n";
file_put_contents($root."/css/core.min.css",$s);

 
$abc = file_get_contents(__DIR__."/core.min.js")."\n".file_get_contents(__DIR__."/faucet.js");



//faucet js min

file_put_contents(__DIR__."/faucet.min.js","\xEF\xBB\xBF".$abc);

file_put_contents(__DIR__."/faucet.min.js.src","\xEF\xBB\xBF".$abc);



//faucet css min

$aa = file_get_contents("https://shortlink.donggiatri.com/css/dashboard.min.css?ver=6.6.1")."\n";

$aa .= file_get_contents($root."/css/core.min.css")."\n";

file_put_contents(dirname(__DIR__)."/css/faucet.min.css",$aa);

file_put_contents(dirname(__DIR__)."/css/faucet.min.css.src",$aa);




echo 1;


/*

https://minify-js.com/

https://obfuscator.io/#code

 */