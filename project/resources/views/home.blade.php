@extends('layouts.app')

@section('content')


<section class="content-header">
	<h1>
		Home
		<small>Subtitutlo del home</small>
	</h1>
	<ol class="breadcrumb">
		<li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-3">
			<div class="info-box bg-aqua">
				<span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Bookmarks</span>
					<span class="info-box-number">41,410</span>

					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						70% Increase in 30 Days
					</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box bg-green">
				<span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Likes</span>
					<span class="info-box-number">41,410</span>

					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						70% Increase in 30 Days
					</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box bg-yellow">
				<span class="info-box-icon"><i class="fa fa-calendar"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Events</span>
					<span class="info-box-number">41,410</span>

					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						70% Increase in 30 Days
					</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box bg-red">
				<span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Comments</span>
					<span class="info-box-number">41,410</span>

					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						70% Increase in 30 Days
					</span>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection
