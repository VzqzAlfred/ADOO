
<body>
  <div class="fixed-top">
    <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">iPostal</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php base_url(); ?>inicio">Inicio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php base_url(); ?>caracteristicas">Características</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php base_url(); ?>postales">Postales</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php base_url(); ?>about">Acerca de</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php base_url(); ?>contacto">Contáctanos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php base_url(); ?>login">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php base_url(); ?>registro">Registrarme</a></li>
                </ul>
            </div>
        </div>
    </nav>
  </div>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Iniciar Sesión</h2>
                    <p>Accede con tu correo electrónico y contraseña.</p>
                </div>
                <form>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div>
                    <div class="form-group"><label for="password">Contraseña</label><input class="form-control" type="password" id="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Mantener iniciada la sesión</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </section>
    </main>
