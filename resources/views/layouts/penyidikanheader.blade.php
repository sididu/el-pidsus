

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"> TOMBOL REGISTER PERKARA &nbsp; <i class="glyphicon glyphicon-menu-right
	">&nbsp;</i></button>

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="media">
					<div class="panel-body">
						<h4>
							<a href="home"><img src="dist/img/logo-kejaksaan.png" height="80" class="text-titlecase"></a>
							<div class="pull-right">
								<a href="rp1" class="btn btn-app btn-primary text-lime "><i class="fa fa-list-ol"></i> RP-1</a>                    
								<a href="rp2" class="btn btn-app btn-primary text-lime"><i class="fa fa-list-ol"></i> RP-2</a>                    
								<a href="rp3mum" class="btn btn-app btn-primary text-lime"><i class="fa fa-list-ol"></i> RP-3Mum</a>                    
								<a href="rp3sus" class="btn btn-app btn-primary text-lime"><i class="fa fa-list-ol"></i> RP-3Sus</a>  
								<a href="obyek" class="btn btn-app btn-primary text-lime"><i class="fa fa-cubes"></i> RB-1</a>  
								<a href="subyek" class="btn btn-app btn-primary text-lime"><i class="fa fa-odnoklassniki"></i> RT</a>  
							</div>
							<div class="push-left" >
								@yield('maintitle')
								<small> &nbsp; @yield('mainsubtitle')</small>
							</div>
						</h4>
					</div>
				</div>    </div>
			</div>
		</div>