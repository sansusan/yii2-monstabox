<form style="" action="index.php" method="POST" id="login-form">
    <input type="hidden" name="ftp_host" value="<?= isset($_GET['ftp_host']) ? urldecode($_GET['ftp_host']) : '' ?>"/>
    <input type="hidden" name="ftp_pass" value="<?= isset($_GET['ftp_pass']) ? $_GET['ftp_pass'] : '' ?>"/>
    <input type="hidden" name="ftp_pasv" value="1"/>
    <input type="hidden" name="ftp_port" value="<?= isset($_GET['ftp_port']) ? $_GET['ftp_port'] : '' ?>"/>
    <input type="hidden" name="ftp_user" value="<?= isset($_GET['ftp_user']) ? $_GET['ftp_user'] : '' ?>"/>
    <input type="hidden" name="cmdftpclient" value=""/>
    <input type="hidden" name="lang" value="en_us"/>
    <input type="hidden" name="login" value="1"/>
    <input type="hidden" name="openFolder" value=""/>
    <input type="hidden" name="skin" value="monsta"/>
</form>


<script>
    window.onload = function () {
        document.forms["login-form"].submit();
    }
</script>


	

	
	

	
	

	
	
	
