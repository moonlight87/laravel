@extends('layouts.default')

@section('content')

    <?php $base_url = URL::to('/'); ?>

   

    <div id="video-content" class="list">
        <ul id="video-content-ul"> 

        <?php

        foreach ($videos as $video) {
        ?>
            @include('pages.elements.video')
        
        <?php }?> 
       
            
        </ul>
    </div>
 
    <div id="paging-buttons" class="paging-buttons">
        <a href="#" onclick="return false;" class="previous disabled" <?php if ($page ==1) echo 'style="opacity:0.1"' ?>>« Trang trước</a>
        <a href="<?php echo $base_url . '/videos/'.($page + 1)?>" class="older">Trang sau »</a>
    </div>
  
@stop

@section('sidebar_content')

@include('includes.topusers')
@include('includes.ads')
@include('includes.photo_sidebar')
@stop



