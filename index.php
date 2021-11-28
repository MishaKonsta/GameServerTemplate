<?php
include "config.php";
$json = file_get_contents('https://play-servers.com/web/json-'.$config['server_id'].'.json');
$server_info = json_decode($json, true);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php echo $config['home_title']; ?> - <?php echo $server_info['gamename']; ?> Server. You can view current players & Statistic, or connect our server " />
		<link rel="shortcut icon" href="https://play-servers.com/images/games/webp/icons/<?php echo $server_info['game']; ?>.webp" type="image/x-icon" />
		
		
		
        <title><?php echo $config['home_title']; ?></title>
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href=""><?php echo $config['home_logo_name']; ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About Server</a></li>
                            <li class="nav-item"><a class="nav-link" href="#connect"><?php echo $config['our_server_button']; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $config['link1']; ?>"><?php echo $config['link1_name']; ?></a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $config['link2']; ?>"><?php echo $config['link2_name']; ?></a></li>
                         
                        </ul>
                    </div>
                </div>
            </nav>
            <header class="bg-dark py-5" style="background:url(https://play-servers.com/images/games/webp/bg/<?php echo $server_info['game']; ?>.webp) no-repeat center top; background-size: 100%;">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2"><?php echo $config['home_short_description']; ?></h1>
                                <p class="lead fw-normal text-white-50 mb-4"><?php echo $config['home_description']; ?></p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#connect"><?php echo $config['our_server_button']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://play-servers.com/images/games/webp/icons/<?php echo $server_info['game']; ?>.webp" alt="<?php echo $server_info['gamename']; ?> server" /></div>
                    </div>
                </div>
            </header>
			<br />
			<div class="container">
				<div class="row">
					<!-- Blog entries-->
					<div class="col-lg-8">
						<!-- Featured blog post-->
						<div class="card mb-4" id="about">
						<a href="#!"><img class="card-img-top" src="https://play-servers.com/images/games/webp/smallbg/<?php echo $server_info['game']; ?>.webp" alt="..." /></a>
							<div class="card-body">
								<h2 class="card-title">Welcome to <?php echo $config['home_logo_name']; ?></h2>
								<p class="card-text"><?php echo $config['home_about_server_description']; ?></p>
							</div>
					     
						</div>
						
						<aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5" id="connect">
							<div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
								<div class="mb-4 mb-xl-0">
							   <h5>Server <?php echo $server_info['hostname']; ?></h5>
							   <div class="fs-3 fw-bold text-white"><?php echo $server_info['players'].' / '.$server_info['maxplayers']; ?> players online</div>
									<div class="text-white-50">IP: <?php echo $server_info['ip'].':'.$server_info['port']; ?></div>
								</div>
								<div class="ms-xl-4">
									<div class="input-group mb-2">
									  
										<a class="btn btn-outline-light" id="button-newsletter" type="button" href="<?php echo $server_info['connectlink'].''.$server_info['ip'].':'.$server_info['port']; ?>">Click to connect</a>
									</div>
									<div class="small text-white-50"><b>Server version:</b>  <?php echo $server_info['version']; ?></div>
								</div>
							</div>
						</aside><br />
					</div>
							
				
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">Vote for server</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" name="nickname" type="text" placeholder="Enter your nickname on server..." aria-label="Enter your nickname on server..." aria-describedby="button-search" />
                                <a class="btn btn-primary" name="votifer" id="button-search" type="button" href="https://play-servers.com/server-<?php echo $config['server_id']; ?>#vote" target=_blank>Vote for us!</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Server Info</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
										<li>Game Version</li>
										<li>Location</li>
                                        <li>Players</li>
                                        <li>Record</li>
                                        <li>Votes</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
										<li><?php echo $server_info['version'].' ('.$server_info['gamename'].')'; ?></li>
										<li><img src="https://play-servers.com/images/flags/shiny/32/<?php echo $server_info['location_code']; ?>.png"></li>
                                        <li><?php echo $server_info['players'].' / '.$server_info['maxplayers']; ?></li>
                                        <li><?php echo $server_info['recordplayers'].' players'; ?></li>
                                        <li><?php echo $server_info['votes']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Server Stats</div>
                        <div class="card-body"><iframe src="https://play-servers.com/web/statistic/<?php echo $config['server_id']; ?>/" width="100%" height="290" frameborder="0"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
		</main>
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; <?php echo $config['home_logo_name']; ?> <a href="https://play-servers.com/<?php echo $server_info['game']; ?>"><?php echo $server_info['gamename']; ?> Server</a> 2021.  </div></div>
                    <div class="col-auto">
                     <span class="text-white"> <small>Last server info update: <?php echo $server_info['info_updated']; ?></small></span>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
