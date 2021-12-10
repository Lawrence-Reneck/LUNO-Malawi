<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creating Dynamic Tabs in Bootstrap via jQuery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


	<link href="css/dataTables.responsive.css" rel="stylesheet">
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
	
<script>

</script>
</head>
<body>
<div class="m-4">
            
    <ul class="nav nav-pills" id="myTab">

        <li class="nav-item">
            <a href="#home" class="nav-link active">Admin home</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link"> Artists Registration</a>
        </li>
        <li class="nav-item">
            <a href="#messages" class="nav-link">Song Upload</a>
        </li>
        <li class="nav-item">
            <a href="#quotes" class="nav-link">quotes</a>
        </li>
        <li>  
          

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <u>{{ __('Logout') }} </u>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>				  
        </li>

        <li>  
                                    <a class="dropdown-item" href="/"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <u>{{ __('home') }} </u>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>				  
      </li>
    </ul>

    
     
    
<!-- Modal with form -->
<div class="modal fade " id="edit-quote" tabindex="-1" region="dialog" aria-labelledby="formModal"
          aria-hidden="true">
    <div class="modal-dialog" region="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="formModal">EDIT MODAL</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="" id="edit-quote-form" method="POST">
        @csrf
        @method('POST')
          <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">owner </i>
                  </span>
                </div>
              <textarea name="owner" id="edit-quote-owner" cols="30" rows="1" class="form-control" value="{{ old('owner') }}" required></textarea>
            </div>
            <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">quote</i>
                  </span>
                </div>
              <textarea name="quote" id="edit-quote-quote" cols="30" rows="5" class="form-control" value="{{ old('quote     ') }}" required></textarea>
            </div>
            
            <div class="form-group mb-2 text-right">
            </div>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Continue</button>
        </form>
        </div>
    </div>
    </div>
</div>
    
<!-- Modal with form -->
<div class="modal fade " id="edit-news" tabindex="-1" region="dialog" aria-labelledby="formModal"
          aria-hidden="true">
    <div class="modal-dialog" region="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="formModal">EDIT MODAL</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="" id="edit-news-form" method="POST">
        @csrf
        @method('POST')
          <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">title </i>
                  </span>
                </div>
              <textarea name="title" id="edit-news-title" cols="30" rows="1" class="form-control" value="{{ old('title') }}" required></textarea>
            </div>
            <br>
          <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">source </i>
                  </span>
                </div>
              <textarea name="source" id="edit-news-source" cols="30" rows="1" class="form-control" value="{{ old('source') }}" required></textarea>
            </div>
            <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">breaking news</i>
                  </span>
                </div>
              <textarea name="breaking_news" id="edit-news-breaking_news" cols="100" rows="20" class="form-control" value="{{ old('breaking news     ') }}" required></textarea>
            </div>
            
            <div class="form-group mb-2 text-right">
            </div>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Continue</button>
        </form>
        </div>
    </div>
    </div>
</div>

<!-- artist edit Modal with form -->
<div class="modal fade " id="edit-artist" tabindex="-1" region="dialog" aria-labelledby="formModal"
          aria-hidden="true">
    <div class="modal-dialog" region="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="formModal">EDIT MODAL</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="" id="edit-artist-form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __(' Artist Edit') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class=" card-body col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto" style="margin: auto; border: 2px solid black; padding: 10px">
            <p class="card-description text-center">{{ __('Or Be Classical') }}</p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">Full Name</i>
                  </span>
                </div>
                <input type="text" name="full_name" id="edit_artist_full_name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
              </div>
              @if ($errors->has('full_name'))
                <div id="name-error" class="error text-danger pl-3" for="full_name" style="display: block;">
                  <strong>{{ $errors->first('full_name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('full_name') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">Stage name</i>
                  </span>
                </div>
                <input type="name" name="stage_name" id="edit_artist_stage_name" class="form-control" placeholder="{{ __('stage name...') }}" value="{{ old('stage_name') }}" required>
              </div>
              @if ($errors->has('stage_name'))
                <div id="email-error" class="error text-danger pl-3" for="stage_name" style="display: block;">
                  <strong>{{ $errors->first('stage_name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">residence </i>
                  </span>
                </div>
                <input type="name" name="residence" id="edit_artist_residence" class="form-control" placeholder="{{ __('residence...') }}" required>
              </div>
              @if ($errors->has('residence'))
                <div id="residence-error" class="error text-danger pl-3" for="residence" style="display: block;">
                  <strong>{{ $errors->first('residence') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('genre') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">genre known with </i>
                  </span>
                </div>
                <input type="name" name="genre_known_with" id="edit_artist_genre_known_with" class="form-control" placeholder="{{ __('genre') }}" value="{{ old('genre') }}" required>
              </div>
              @if ($errors->has('genre'))
                <div id="genre_known_with-error" class="error text-danger pl-3" for="genre_known_with" style="display: block;">
                  <strong>{{ $errors->first('genre_known_with') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('genre') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">profile picture </i>
                  </span>
                </div>
                <input type="file" id ="edit_artist_profile_picture" name="profile_picture" class="form-control"  required>
              </div>
              @if ($errors->has('profile_picture'))
                <div id="genre_known_with-error" class="error text-danger pl-3" for="genre_known_with" style="display: block;">
                  <strong>{{ $errors->first('profile_picture') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('residence') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">Biography</i>
                  </span>
                </div>
                <textarea name="biography" id="edit_artist_biography" cols="30" rows="5" class="form-control" placeholder="{{ __('biography...') }}" required></textarea>
              </div>
              @if ($errors->has('biography'))
                <div id="biography-error" class="error text-danger pl-3" for="biography" style="display: block;">
                  <strong>{{ $errors->first('biography') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary ">update account</button>
          </div>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>

    <div class="tab-content ">
    <div class="tab-pane fade show " id="quotes">
      <div class="card card-login card-hidden mb-3">
        <div class="card-header card-header-primary text-center">
          <h1 class="card-title"><strong>{{ __(' Quotes of the day ') }}</strong></h1>
         </div>
         
  <div class="col-lg-8 col-md-8 col-sm-8 ml-auto justify-content-center"  style="margin: auto; width: 60%; border: 2px solid black; padding: 10px">
   <form method="POST" action=""   enctype="multipart/form-data" id="quote-form">
                 @csrf
                 <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text">
                         <i class="material-icons">owner </i>
                     </span>
                   </div>
                 <textarea name="owner" id="owner_id" cols="30" rows="1" class="form-control" value="{{ old('owner') }}" required></textarea>
               </div>
               <br>
                 <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text">
                         <i class="material-icons">quote</i>
                     </span>
                   </div>
                 <textarea name="quote" id="quote_id" cols="30" rows="5" class="form-control" value="{{ old('quote     ') }}" required></textarea>
               </div>
              
               <div class="card-footer justify-content-center">
                 <button type="button" class="btn btn-primary " id="btn-add">add quote</button>
             </div>
           </div> 
         </form>
           <div id="alert" class="alert alert-danger col-lg-8 col-md-8 col-sm-8 ml-auto mr-auto" style="margin: auto; width: 60%; border: 2px solid white; padding: 10px">
           </div>

        <section style="margin: auto; width: 80%; border: 2px solid black; padding: 10px">
          @foreach($quotes as $quote)
          <div id="quote_row">
            <header>
              <h2>{{$quote->owner}} 
              <button type="button" class="btn btn-warning edit-quote" id="edit_{{$quote->id}}">edit </button>
              <button type="button" class="btn btn-danger btn-del" id="delete_{{$quote->id}}">delete </button>
              </h2>
            </header>
            <p>
              {{$quote->quote}}
            </p>
          </div>
            @endforeach
          </section>
      </div>
    </div>
    
          



        <div class="tab-pane fade show active" id="home"  >
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __(' BREAKING NEWS ADD ') }}</strong>
  
            </h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <br>
        <div class=" card-body col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto" style="margin: auto; border: 2px solid black; padding: 10px">
          <form method="POST" action="{{ url('/create_breaking_news') }}" enctype="multipart/form-data">
              @csrf
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">breaking news title</i>
                  </span>
                </div>
              <textarea name="title" id="" cols="30" rows="1" class="form-control" value="{{ old('title') }}" required></textarea>
            </div>
            <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">breaking news source</i>
                  </span>
                </div>
              <textarea name="source" id="" cols="30" rows="1" class="form-control" value="{{ old('source     ') }}" required></textarea>
            </div>
            <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">breaking news</i>
                  </span>
                </div>
              <textarea name="breaking_news" id="" cols="30" rows="10" class="form-control" value="{{ old('breaking_news') }}" required></textarea>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-primary ">add news</button>
          </div>
        </div> 
      </form>
    </div>
        <div class="container col-md-10" style="background:grey"> 
              @foreach($news as $news)
              <p>
                <h3>{{$news->title}}  <button class="btn btn-warning btn-ed_news" id="edit_{{$news->id}}">edit</button> <button class="btn btn-danger btn-del_news" id="del_{{$news->id}}" >delete</button></h3>
                {{$news->breaking_news}} <span class=""><strong>source:</strong>{{ $news->source}}</span>
              </p>
              @endforeach      
        </div>
    </div>
        <div class="tab-pane fade" id="profile">
              <p> 
              <div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto">
    <form method="POST" action="{{ url('/create_artist') }}" enctype="multipart/form-data">
              @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __(' Artist Register') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class=" card-body col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto" style="margin: auto; border: 2px solid black; padding: 10px">
            <p class="card-description text-center">{{ __('Or Be Classical') }}</p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">Full Name</i>
                  </span>
                </div>
                <input type="text" name="full_name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
              </div>
              @if ($errors->has('full_name'))
                <div id="name-error" class="error text-danger pl-3" for="full_name" style="display: block;">
                  <strong>{{ $errors->first('full_name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('full_name') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">Stage name</i>
                  </span>
                </div>
                <input type="name" name="stage_name" class="form-control" placeholder="{{ __('stage name...') }}" value="{{ old('stage_name') }}" required>
              </div>
              @if ($errors->has('stage_name'))
                <div id="email-error" class="error text-danger pl-3" for="stage_name" style="display: block;">
                  <strong>{{ $errors->first('stage_name') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">residence </i>
                  </span>
                </div>
                <input type="name" name="residence" id="residence" class="form-control" placeholder="{{ __('residence...') }}" required>
              </div>
              @if ($errors->has('residence'))
                <div id="residence-error" class="error text-danger pl-3" for="residence" style="display: block;">
                  <strong>{{ $errors->first('residence') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('genre') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">genre known with </i>
                  </span>
                </div>
                <input type="name" name="genre_known_with" class="form-control" placeholder="{{ __('genre') }}" value="{{ old('genre') }}" required>
              </div>
              @if ($errors->has('genre'))
                <div id="genre_known_with-error" class="error text-danger pl-3" for="genre_known_with" style="display: block;">
                  <strong>{{ $errors->first('genre_known_with') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('genre') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">profile picture </i>
                  </span>
                </div>
                <input type="file" name="profile_picture" class="form-control"  required>
              </div>
              @if ($errors->has('genre'))
                <div id="genre_known_with-error" class="error text-danger pl-3" for="genre_known_with" style="display: block;">
                  <strong>{{ $errors->first('genre_known_with') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('residence') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">Biography</i>
                  </span>
                </div>
                <textarea name="biography" id="biography" cols="30" rows="5" class="form-control" placeholder="{{ __('biography...') }}" required></textarea>
              </div>
              @if ($errors->has('biography'))
                <div id="biography-error" class="error text-danger pl-3" for="biography" style="display: block;">
                  <strong>{{ $errors->first('biography') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary ">create account</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div style="margin: auto; border: 2px solid black; padding: 10px">
  <div class="row align-items-center">
    <div class="col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto">
        <div class="col-md-10" >
          <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0" style="margin-top:-30px;">
            <thead>
              <tr>
                <th style='color:green' >full name</th>
                <th style='color:green'>stage name</th>
                <th style='color:green' >residence</th>
                <th style='color:green' >genre known with</th>
                <th style='color:green' >file</th>
                <th style='color:green' >paid promo</th>
                <th style='color:green' >legendary</th>
                <th style='color:green' >upcomings</th>
                <th style='color:green' >edit</th>
                <th style='color:green' >detele</th>
               
               
            </tr>
            </thead>
                <tbody>
                @foreach($artists as $artist)
                  <tr>									
                    <td style='color:#000;'>{{$artist->full_name}}</td>
                    <td style='color:#000;'>{{$artist->stage_name}}</td>
                    <td style='color:#000;'>{{$artist->residence}}</td>
                    <td style='color:#000;'>{{$artist->genre_known_with}}</td>
                    <td style='color:#000;'>{{$artist->profile_picture}}</td>
                    <td style='color:#000;'>
                        <form method="POST" action="{{ url('/create_promo') }}" enctype="multipart/form-data">
                          @csrf
                          <input type="text" name="paid_promo" value="1"   hidden  >
                          <input type="text" name="artist_id" value="{{$artist->id}}"   hidden  >
                          @if($artist->paid_promo==1)
                            <button>
                              paid
                            </button>
                            @else
                            <button>
                              not paid click if paid
                            </button>
                          @endif
                        </form>
                    </td>
                    <td style='color:#000;'>
                        <form method="POST" action="{{ url('/create_legend_artist') }}" enctype="multipart/form-data">
                          @csrf
                          <input type="text" name="legend_artist" value="1"   hidden  >
                          <input type="text" name="artist_id" value="{{$artist->id}}"   hidden  >
                          @if($artist->legend_artist==1)
                            <button>
                              legend
                            </button>
                            @else
                            <button>
                              not legend click if legend
                            </button>
                          @endif
                        </form>
                    </td>
                    <td style='color:#000;'>
                        <form method="POST" action="{{ url('/create_upcoming_artist') }}" enctype="multipart/form-data">
                          @csrf
                          <input type="text" name="upcoming_artist" value="1"   hidden  >
                          <input type="text" name="artist_id" value="{{$artist->id}}"   hidden  >
                          @if($artist->upcoming_artist==1)
                            <button>
                              upcoming
                            </button>
                            @else
                            <button>
                              not upcoming click if upcoming
                            </button>
                          @endif
                        </form>
                    </td>
                    <td style='color:#000;'>
                    <a  class="btn btn-warning btn-ed_artist" id="edit_{{$artist->id}}">edit</a>
                    </td>
                    <td style='color:#000;'>

                    <a href="/delete_artist/{{$artist->id}}"  class="btn btn-danger  btn-del_artist">delete</a>
                    </td>
                 </tr> 
                  @endforeach       
                </tbody>
            </table>						
        </div>
    </div>
  </div>
</div>
</p>
        </div>
        <div class="tab-pane fade" id="messages">
            <p>              <div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto" style="margin: auto; border: 2px solid black; padding: 10px">
      <form method="POST" action="{{ url('/add_audio') }}" enctype="multipart/form-data">
              @csrf
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('song upload') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body " >
            <p class="card-description text-center">{{ __('stictly paid') }}</p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">Song title</i>
                  </span>
                </div>
                <input type="text" name="song_title" class="form-control" placeholder="{{ __('song title...') }}" value="{{ old('song_title') }}" required>
              </div>
              @if ($errors->has('song_title'))
                <div id="name-error" class="error text-danger pl-3" for="song_title" style="display: block;">
                  <strong>{{ $errors->first('song_title') }}</strong>
                </div>
              @endif
            </div>
            <br>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">artist stage name</i>
                  </span>
                </div>
                    <select class="form-control" name="artist_id">
                        @foreach($artists as $artist)
                          <option value="{{$artist->id}}">{{$artist->stage_name}}</option>
                          @endforeach
                    </select>
              </div>
              @if ($errors->has('artist'))
                <div id="name-error" class="error text-danger pl-3" for="artist" style="display: block;">
                  <strong>{{ $errors->first('artist') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('genre') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">song genre  </i>
                  </span>
                </div>
                <input type="name" name="song_genre" class="form-control" placeholder="{{ __('song genre...') }}" value="{{ old('song_genre') }}" required>
              </div>
              @if ($errors->has('song_genre'))
                <div id="song_genre-error" class="error text-danger pl-3" for="genre_known_with" style="display: block;">
                  <strong>{{ $errors->first('song_genre') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">Producer </i>
                  </span>
                </div>
                <input type="name" name="producer" id="producer" class="form-control" placeholder="{{ __('producer...') }}" required>
              </div>
              @if ($errors->has('producer'))
                <div id="residence-error" class="error text-danger pl-3" for="producer" style="display: block;">
                  <strong>{{ $errors->first('producer') }}</strong>
                </div>
              @endif
            </div>
          </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mp3 song </i>
                  </span>
                </div>
                <input type="file" name="song_mp3" id="song_mp3" class="form-control" placeholder="{{ __('song mp3...') }}" required>
              </div>
              @if ($errors->has('song_mp3'))
                <div id="residence-error" class="error text-danger pl-3" for="song_mp3" style="display: block;">
                  <strong>{{ $errors->first('song_mp3') }}</strong>
                </div>
              @endif
            </div>
         
            <div class="bmd-form-group{{ $errors->has('song_artwork') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">song artwork </i>
                  </span>
                </div>
                <input type="file" name="song_artwork" id="song_artwork" class="form-control" placeholder="{{ __('song  artwork...') }}" required>
              </div>
              @if ($errors->has('song_artwork'))
                <div id="residence-error" class="error text-danger pl-3" for="song_artwork" style="display: block;">
                  <strong>{{ $errors->first('song_artwork') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary ">add song</button>
          </div>
        </div>
      </form>
  
<div style="margin: auto; border: 2px solid black; padding: 10px" >
  <div class="row align-items-center" >
    <div class="col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto" >
        <div class="col-md-10">
          <table id="example2" class="table table-striped table-bordered" width="100%" cellspacing="0" style="margin-top:30px;">
            <thead>
              <tr>
                <th style='color:green' >song title</th>
                <th style='color:green'>stage name</th>
                <th style='color:green' >song genre</th>
                <th style='color:green' >producer</th>
                <th style='color:green' >file</th>
                <th>promo</th>
                <th>edit</th>
                <th >delete</th>
            </tr>
            </thead>
                <tbody>
                  @foreach($song_mp3s as $song_mp3)
                  <tr>									
                    <td style='color:#000;'>{{$song_mp3->song_title}}</h4></td>
                    <td style='color:#000;'>{{$song_mp3->artists->stage_name}}</h4></td>
                    <td style='color:#000;'>{{$song_mp3->song_genre}}</h4></td>
                    <td style='color:#000;'>{{$song_mp3->producer}}</h4></td>
                    <td style='color:#000;'>{{$song_mp3->song_mp3}}</h4></td>
                    <td style='color:#000;'>
                        <form method="POST" action="{{ url('/create_promo_song') }}" enctype="multipart/form-data">
                          @csrf
                          <input type="text" name="promo_song" value="1"   hidden  >
                          <input type="text" name="song_mp3_id" value="{{$song_mp3->id}}"   hidden  >
                          @if($song_mp3->paid_promo==1)
                            <button>
                              promoted
                            </button>
                            @else
                            <button>
                              not promoted click if paid
                            </button>
                          @endif
                        </form>
                    </td>

                    <td>
                      <a href="edit_song/{{$song_mp3->id}}"  class="btn btn-warning">edit</a>
                    </td>

                    <td>
                      <a href="delete_song/{{$song_mp3->id}}" class="btn btn-danger">delete</a>
                    </td>
                  </tr> 
                  @endforeach       
                </tbody>
            </table>						
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</p>
        </div>
    






        
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/jquery.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

      <script>
    $(document).ready(function() {
 
    });
    </script>
	   <script type="text/javascript">
	function dlt (x) {
		if (confirm("Are you sure you want to Delete?")) {
			window.location.href="deleteadmin.php?id="+x;
		}
	}
</script>
<script src="js/custom.js"></script>
</body>
</html>



					
