@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
    @else
                <style type="text/css">
             
             video {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
                z-index: 1;
            }

            .text {
                position: relative; /*必ず必要*/
                z-index: 2; /*必ず必要*/
                text-align:center;
                width:50%;
                                text-decoration: none;
                margin: 0 auto;
                margin-top: 690px;
            
            }
            
            .button{
                display: inline-block;
                text-decoration: none;
                background: #FFFFFF;
                color: #FFF;
                width: 60px;
                height: 60px;
                line-height: 60px;
                border-radius: 50%;
                text-align: center;
                font-weight: bold;
                vertical-align: middle;
                overflow: hidden;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
                border-bottom: solid 3px #bd6565;
                transition: .4s;
                }
                            
            .button:hover{
                  -webkit-transform: rotateY(360deg);
                  -ms-transform: rotateY(360deg);
                  transform: rotateY(360deg);
                }
                        
            
            </style>


            <div class="text">
                <span class="button" style="margin-right:200px;">{!! link_to_route('signup.get', 'S') !!}</span>
                <span class="button">{!! link_to_route('login', 'L') !!}</span>
              
            </div>
            
            <video src="siesta.mp4" autoplay controls ></video>
            
            
       
            
    @endif
    
    
    
@endsection