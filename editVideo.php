<?php
	require_once("includes/header.php");
	require_once("includes/classes/VideoPlayer.php");
	require_once("includes/classes/VideoDetailsFormProvider.php");
	require_once("includes/classes/VideoUploadData.php");
	require_once("includes/classes/SelectThumbnail.php");

	if(!User::isLoggedIn()){
		header("Location: signIn.php");
	}

	if(!isset($_GET["videoId"])){
		echo "No video selected";
		exit();
	}


	$video = new Video($con, $_GET["videoId"], $userLoggedInObj);
	if($video->getUploadedBy() != $userLoggedInObj->getUsername()){
		echo "Not your video";
		exit();
	}

	$detailsMessage = "";
	if(isset($_POST["saveButton"])){
		$videoData = new VideoUploadData(
			null,
			$_POST["titleInput"],
			$_POST["descriptionInput"],
			$_POST["privacyInput"],
			$_POST["categoryInput"],
			$userLoggedInObj->getUsername()
		);

		if($videoData->updateDetails($con, $video->getId())){
			$detailsMessage = "<div class='alert alert-success'>
								<strong>SUCCESS!</strong> Infomation saved !
							   </div>";
			$video = new Video($con, $_GET["videoId"], $userLoggedInObj);
		}else{
			$detailsMessage = "<div class='alert alert-danger'>
								<strong>ERROR!</strong> Something went wrong !
							   </div>";
		}

	}

	if(isset($_POST["deleteButton"])){
		if($video->deleteVideo()){
			header("Location: index.php");
		}else{
			echo "Something went wrong!";
			exit();
		}
	}
?>
<script src="assets/js/editVideoActions"></script>
<div class='editVideoContainer column'>
	<div class="message">
		<?php echo $detailsMessage;?>
	</div>
	<div class='topSection'>
		<?php
			$videoPlayer = new VideoPlayer($video);
			echo $videoPlayer->create(false);

			$selectThumbnail = new SelectThumbnail($con, $video);
			echo $selectThumbnail->create();
		?>
	</div>

	<div class='bottomSection'>
		<?php
			$formProvider = new VideoDetailsFormProvider($con);
			echo $formProvider->createEditDetailsForm($video);
		?>
	</div>
</div>