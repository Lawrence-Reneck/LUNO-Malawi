<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<title>Creating Dynamic Tabs in Bootstrap via jQuery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


	<link href="css/dataTables.responsive.css" rel="stylesheet">
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
	
<script>
</script>
</head>
<body>

<br>
<br>
<br>



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
        @method('PUT')
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
              <textarea name="quote" id="edit-quote-quote" cols="30" rows="1" class="form-control" value="{{ old('quote     ') }}" required></textarea>
            </div>
            
            <div class="form-group mb-2 text-right">
            </div>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Continue</button>
        </form>
        </div>
    </div>
    </div>
</div>


<div class="tab-pane " id="profile">
 <div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-10 col-md-10 col-sm-8 ml-auto mr-auto">
   

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
              <textarea name="quote" id="quote_id" cols="30" rows="1" class="form-control" value="{{ old('quote     ') }}" required></textarea>
            </div>
           
            <div class="card-footer justify-content-center">
              <button type="button" class="btn btn-primary " id="btn-add">add news</button>
          </div>
        </div> 
      </form>
        <div id="alert" class="alert alert-danger">
        </div>

        <section>
          
						@foreach($quotes as $quote)
            <div id="quote_row">
							<header>
								<h2>{{$quote->owner}} 
                <button type="button" class="btn btn-warning btn-ed" id="edit_{{$quote->id}}">edit </button>
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
</div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

      <script>
  
</script>
<script src="/js/custom.js"></script>
</body>
</html>



					
