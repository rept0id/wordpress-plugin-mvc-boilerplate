<?php
	 
	function tplUser() {

		print <<<END
			<!DOCTYPE html>
			<html>
				<head>
					<meta charset='UTF-8'>
					<meta http-equiv='X-UA-Compatible' content='IE=edge'>
					<meta name='viewport' content='width=device-width, initial-scale=1.0'>
				</head>
				<style>
					#message-cookie {
						position: fixed;
						border: 0;
						bottom: 0;
						width: 100vw;
						display: gird;
						justify-items: center;
						background-color: black;
						height: 22vh;
						text-align: center;
						z-index: 99999999999999999;
					}
					#consent-msg {
						color: white;
						font-size: 28px;
						letter-spacing: 1px;
						font-weight: 500;
					}
					.btn {
						font-size: 18px;
					}
					#accept-btn {
					  height: 100%;
					  color: white;
					  background-color: #5d423d;
					  font-size: 24px;
					}
					#decline-btn {
					  height: 100%;
					  color: white;
					  background-color: #5d423d;
					  font-size: 24px;
					}
					#btn-container {
					  display: grid;
					  bottom: 0;
					  position: absolute;
					  height: 100%;
					  z-index: 9999999;
					}
					iframe {
						box-sizing: border-box;
						width: 100%;
						height: 100%;
						border-style: none;
						box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.2);
						bottom: 0;
						position: absolute;
						left: 0;
					}
					.gui {
						display: none;
					}

				</style>
				<body>
					<div id='message-cookie' name = 'cookie-bar'>
						<div id='btn-container'>
							<button class='btn' id='accept-btn'>Y</button>
							<button class='btn' id='decline-btn'>N</button>
						</div>
						<div class='sketchfab-embed'>
							<iframe title='Cookie (School Project)' frameborder='0'
								src='https://sketchfab.com/models/434b04afb75d4525ae5eb272282d736d/embed?autostart=1&autospin=0.5&camera=0&annotation_tooltip_visible=0&ui_stop=0&animation_autoplay=1'
								cellspacing='0'>
							</iframe>
						</div>
					</div>
					<script>

						function hideCookiePlate() {
							jQuery('#message-cookie').css('display','none');
						}

						function showCookiePlate() {
							jQuery('#message-cookie').css('display','block');
						}

						function initCookiePlate() {
							hideCookiePlate();
						}

						function handleCookiePlate() {
							jQuery('#accept-btn').on('click', function(){ localStorage.setItem('cookieplate','1'); hideCookiePlate(); });
							jQuery('#decline-btn').on('click', function(){ localStorage.setItem('cookieplate','0'); hideCookiePlate(); });

							if (localStorage.getItem('cookieplate') === null) {
								showCookiePlate();
							}
						}

						initCookiePlate();

						jQuery( window ).load(function() {
						  handleCookiePlate();	
						});

					</script>
				</body>
			</html>
		END;

	}