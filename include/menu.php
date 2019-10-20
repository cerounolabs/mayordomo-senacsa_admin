        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="../public/home.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!--<img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />-->
                            <!-- Light Logo icon -->
                            <!--<img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />-->
							<img src="../assets/images/senacsa_logo_menu.png" style="height:50px;" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <!--<img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />-->
                            <!-- Light Logo text -->
                            <!--<img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="sl-icon-menu font-20"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search font-16"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Que desea hacer?">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/default.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="../assets/images/users/default.png" alt="user" class="img-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?php echo $usu_01; ?></h4>
										<p class=" m-b-0"><?php echo $usu_02; ?></p>
										<p class=" m-b-0"><?php echo $log_04; ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> Perfil</a>
                                <a class="dropdown-item" href="../class/session/session_logout.php">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Secci&oacute;n</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
        	</nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       	<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        		<i class="icon-Car-Wheel"></i>
                        		<span class="hide-menu"> Dashboard </span>
                        	</a>
							<ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                               		<a href="../public/home.php" class="sidebar-link">
                               			<i class="mdi mdi-home"></i>
                               			<span class="hide-menu"> Home </span>
                               		</a>
                               	</li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-File-HorizontalText"></i>
                           		<span class="hide-menu"> Establecimiento </span>
                           	</a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                               		<a href="../public/establecimiento.php" class="sidebar-link">
                               			<i class="mdi mdi-establecimiento-establecimiento"></i>
                               			<span class="hide-menu"> Establecimiento </span>
                               		</a>
                               	</li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Neutron"></i>
                           		<span class="hide-menu"> Orden Trabajo </span>
                           	</a>
                            <ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                               		<a href="javascript:void(0)" class="sidebar-link">
                               			<i class="mdi mdi-ot-ot"></i>
                               			<span class="hide-menu"> Orden Trabajo </span>
                               		</a>
                               	</li>
                            </ul>
                        </li>

						<li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Affiliate"></i>
                           		<span class="hide-menu"> Persona </span>
                           	</a>
                            <ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                               		<a href="../public/persona.php" class="sidebar-link">
                               			<i class="mdi mdi-persona-persona"></i>
                               			<span class="hide-menu"> Persona </span>
                               		</a>
                               	</li>
                            </ul>
                        </li>
						
						<li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Globe"></i>
                           		<span class="hide-menu"> Localidad </span>
                           	</a>
                            <ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                               		<a href="../public/pais.php" class="sidebar-link">
                               			<i class="mdi mdi-localidad"></i>
                               			<span class="hide-menu"> Pa&iacute;s </span>
                               		</a>
                               	</li>
                                <li class="sidebar-item">
                                	<a href="../public/departamento.php" class="sidebar-link">
                                		<i class="mdi mdi-localidad"></i>
                                		<span class="hide-menu"> Departamento </span>
                                	</a>
                                </li>
                                <li class="sidebar-item">
                                	<a href="../public/distrito.php" class="sidebar-link">
                                		<i class="mdi mdi-localidad"></i>
                                		<span class="hide-menu"> Distrito </span>
                                	</a>
                                </li>
                                <li class="sidebar-item">
                                	<a href="javascript:void(0)" class="sidebar-link">
                                		<i class="mdi mdi-localidad"></i>
                                		<span class="hide-menu"> Compa&ntilde;ia </span>
                                	</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Box-withFolders"></i>
                           		<span class="hide-menu"> Par&aacute;metro </span>
                           	</a>
                            <ul aria-expanded="false" class="collapse first-level">
                            	<li class="sidebar-item">
                                  	<a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                   		<i class="mdi mdi-parametro-establecimiento"></i>
                                   		<span class="hide-menu"> Establecimiento </span>
                                   	</a>
									<ul aria-expanded="false" class="collapse second-level">
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ESTABLECIMIENTOESTADO" class="sidebar-link">
												<i class="mdi mdi-parametro-establecimiento"></i>
												<span class="hide-menu"> Tipo Estado </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ESTABLECIMIENTOTIPO" class="sidebar-link">
												<i class="mdi mdi-parametro-establecimiento"></i>
												<span class="hide-menu"> Tipo Establecimiento </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ESTABLECIMIENTOFINALIDAD" class="sidebar-link">
												<i class="mdi mdi-parametro-establecimiento"></i>
												<span class="hide-menu"> Tipo Finalidad </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ESTABLECIMIENTOCARGO" class="sidebar-link">
												<i class="mdi mdi-parametro-establecimiento"></i>
												<span class="hide-menu"> Tipo Cargo </span>
											</a>
										</li>
									</ul>
                                </li>

								<li class="sidebar-item">
                                  	<a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                   		<i class="mdi mdi-parametro-localidad"></i>
                                   		<span class="hide-menu"> Localidad </span>
                                   	</a>
									<ul aria-expanded="false" class="collapse second-level">
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=DISTRITORIESGO" class="sidebar-link">
												<i class="mdi mdi-parametro-localidad"></i>
												<span class="hide-menu"> Tipo Riesgo </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=DISTRITOZONA" class="sidebar-link">
												<i class="mdi mdi-parametro-localidad"></i>
												<span class="hide-menu"> Tipo Zona </span>
											</a>
										</li>
									</ul>
                                </li>

                                <li class="sidebar-item">
                                  	<a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                   		<i class="mdi mdi-parametro-animal"></i>
                                   		<span class="hide-menu"> Animal </span>
                                   	</a>
									<ul aria-expanded="false" class="collapse second-level">
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ANIMALESTADO" class="sidebar-link">
												<i class="mdi mdi-parametro-animal"></i>
												<span class="hide-menu"> Tipo Estado </span>
											</a>
										</li>
                                        <li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ANIMALORIGEN" class="sidebar-link">
												<i class="mdi mdi-parametro-animal"></i>
												<span class="hide-menu"> Tipo Origen </span>
											</a>
										</li>
                                        <li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ANIMALRECUENTO" class="sidebar-link">
												<i class="mdi mdi-parametro-animal"></i>
												<span class="hide-menu"> Tipo Recuento </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ANIMALESPECIE" class="sidebar-link">
												<i class="mdi mdi-parametro-animal"></i>
												<span class="hide-menu"> Tipo Especie </span>
											</a>
										</li>
                                        <li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ANIMALRAZA" class="sidebar-link">
												<i class="mdi mdi-parametro-animal"></i>
												<span class="hide-menu"> Tipo Raza </span>
											</a>
										</li>
                                        <li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-parametro-animal"></i>
												<span class="hide-menu"> Tipo Categoria </span>
											</a>
										</li>
                                        <li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-parametro-animal"></i>
												<span class="hide-menu"> Tipo SubCategoria </span>
											</a>
										</li>
									</ul>
                                </li>

                                <li class="sidebar-item">
                                  	<a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                   		<i class="mdi mdi-parametro-ot"></i>
                                   		<span class="hide-menu"> Orden Trabajo </span>
                                   	</a>
									<ul aria-expanded="false" class="collapse second-level">
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ORDENTRABAJOESTADO" class="sidebar-link">
												<i class="mdi mdi-parametro-ot"></i>
												<span class="hide-menu"> Tipo Estado </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=ORDENTRABAJOTIPO" class="sidebar-link">
												<i class="mdi mdi-parametro-ot"></i>
												<span class="hide-menu"> Tipo Orden Trabajo </span>
											</a>
										</li>
									</ul>
                                </li>

                                <li class="sidebar-item">
                                  	<a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                   		<i class="mdi mdi-parametro-persona"></i>
                                   		<span class="hide-menu"> Persona </span>
                                   	</a>
									<ul aria-expanded="false" class="collapse second-level">
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=PERSONATIPO" class="sidebar-link">
												<i class="mdi mdi-parametro-persona"></i>
												<span class="hide-menu"> Tipo Persona </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=PERSONADOCUMENTO" class="sidebar-link">
												<i class="mdi mdi-parametro-persona"></i>
												<span class="hide-menu"> Tipo Documento </span>
											</a>
										</li>
									</ul>
                                </li>

                                <li class="sidebar-item">
                                  	<a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                   		<i class="mdi mdi-parametro-sistema"></i>
                                   		<span class="hide-menu"> Sistema </span>
                                   	</a>
									<ul aria-expanded="false" class="collapse second-level">
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=DOMINIOESTADO" class="sidebar-link">
												<i class="mdi mdi-parametro-sistema"></i>
												<span class="hide-menu"> Tipo Estado </span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="../public/dominio.php?dominio=DOMINIOTIPO" class="sidebar-link">
												<i class="mdi mdi-parametro-sistema"></i>
												<span class="hide-menu"> Tipo Dominio </span>
											</a>
										</li>
									</ul>
                                </li>

                                <li class="sidebar-item">
                                  	<a href="javascript:void(0)" class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                   		<i class="mdi mdi-parametro-usuario"></i>
                                   		<span class="hide-menu"> Usuario </span>
                                   	</a>
									<ul aria-expanded="false" class="collapse second-level">
										<li class="sidebar-item">
                                            <a href="../public/dominio.php?dominio=USUARIOESTADO" class="sidebar-link">
												<i class="mdi mdi-parametro-usuario"></i>
												<span class="hide-menu"> Tipo Estado </span>
											</a>
											<a href="../public/dominio.php?dominio=USUARIOROL" class="sidebar-link">
												<i class="mdi mdi-parametro-usuario"></i>
												<span class="hide-menu"> Tipo Rol </span>
											</a>
											<a href="../public/dominio.php?dominio=USUARIOACCESO" class="sidebar-link">
												<i class="mdi mdi-parametro-usuario"></i>
												<span class="hide-menu"> Tipo Acceso </span>
											</a>
											<a href="../public/dominio.php?dominio=USUARIOPROGRAMA" class="sidebar-link">
												<i class="mdi mdi-parametro-usuario"></i>
												<span class="hide-menu"> Tipo Programa </span>
											</a>
										</li>
									</ul>
                                </li>
                            </ul>
						</li>
						
						<li class="sidebar-item">
                        	<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                           		<i class="icon-Security-Block "></i>
                           		<span class="hide-menu"> Auditoria </span>
                           	</a>
                            <ul aria-expanded="false" class="collapse first-level">
								<li class="sidebar-item">
									<a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
										<i class="mdi mdi-auditoria-localidad"></i>
										<span class="hide-menu">Localidad</span>
									</a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-localidad-pais"></i>
												<span class="hide-menu"> P&aacute;is</span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-localidad-departamento"></i>
												<span class="hide-menu"> Departamento</span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-localidad-distrito"></i>
												<span class="hide-menu"> Distrito</span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-localidad-compania"></i>
												<span class="hide-menu"> Compa&ntilde;ia</span>
											</a>
										</li>
                                    </ul>
								</li>
								<li class="sidebar-item">
									<a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
										<i class="mdi mdi-auditoria-establecimiento"></i>
										<span class="hide-menu">Establecimiento</span>
									</a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
											<a href="../public/auditoria_establecimiento_l.php" class="sidebar-link">
												<i class="mdi mdi-auditoria-establecimiento-establecimiento"></i>
												<span class="hide-menu"> Establecimiento</span>
											</a>
										</li>
                                    </ul>
								</li>
								<li class="sidebar-item">
									<a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
										<i class="mdi mdi-auditoria-ot"></i>
										<span class="hide-menu">Orden Trabajo</span>
									</a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-ot-ot"></i>
												<span class="hide-menu"> Orden Trabajo</span>
											</a>
										</li>
                                    </ul>
								</li>
								<li class="sidebar-item">
									<a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
										<i class="mdi mdi-auditoria-persona"></i>
										<span class="hide-menu">Persona</span>
									</a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-persona-persona"></i>
												<span class="hide-menu"> Persona</span>
											</a>
										</li>
                                    </ul>
								</li>
								<li class="sidebar-item">
									<a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
										<i class="mdi mdi-auditoria-usuario"></i>
										<span class="hide-menu">Usuario</span>
									</a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-usuario-usuario"></i>
												<span class="hide-menu"> Usuario</span>
											</a>
										</li>
										<li class="sidebar-item">
											<a href="javascript:void(0)" class="sidebar-link">
												<i class="mdi mdi-auditoria-usuario-rol"></i>
												<span class="hide-menu"> Rol</span>
											</a>
										</li>
                                    </ul>
								</li>
								<li class="sidebar-item">
									<a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
										<i class="mdi mdi-auditoria-parametro"></i>
										<span class="hide-menu">Par&aacute;metro</span>
									</a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
											<a href="../public/auditoria_dominio.php" class="sidebar-link">
												<i class="mdi mdi-auditoria-parametro-dominio"></i>
												<span class="hide-menu"> Dominio</span>
											</a>
										</li>
                                    </ul>
								</li>
                            </ul>
						</li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->