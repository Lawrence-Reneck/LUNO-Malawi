$(document).ready(function() {
  $("#myTab a").click(function(e){
    e.preventDefault();
    $(this).tab("show");
});
$('#example').DataTable({
            responsive: true,
    "lengthMenu": [[6], [6]]
    
    });
$('#example2').DataTable({
            responsive: true,
    "lengthMenu": [[3], [3]]
    
    });

    $("#btn-add").click(function(e){
      e.preventDefault();
      // console.log("clicked")
    //  $("#alert").html("this shows")
     $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url : "/post_ajax_quote",
      type : "post",
      data: {
          quote_variable: $("#quote_id").val(),
          owner_variable: $("#owner_id").val(),
          
          
      },
      success: function(response){
          // console.log(responce)
 
          $("#alert").html("1 quote by added"),
          $("#owner_id").val(''),
          $("#quote_id").val('')
      }

      
     });
      
  });


    $(".btn-del").on('click', function(e){
      let id = $(this).attr('id').split('_')[1];
      // e.preventDefault();
      // console.log("clicked")
    //  $("#alert").html("this deletes")
    // var path = 
     $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url : "/delete_ajax_quote/"+id,
      type : 'post',
      data: {  
      },
      cache: false,
      dataType: 'json',
      success: function(response){
          // // console.log(responce)
          // if(response.success == true){}
        //  window.location.reload();
       
         $("#quote_row").hide();
 
          $("#alert").html("1 quote been deleted" )
      }

      
    });
     
 });
    $(".edit-quote").click(function(e){
      let id = $(this).attr('id').split('_')[1];
      // e.preventDefault();
      // console.log("clicked")
    //  $("#alert").html("this deletes")
    // var path = 
    
     $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url : '/edit_ajax_quote/' + id,
      type : 'get',
      data: {  
          
      },
      cache: false,
      dataType: 'json',
      success: function(response){
          // console.log(responce)
 
          $('#edit-quote-quote').val(response.quote);
        $('#edit-quote-owner').val(response.owner);
        $('#edit-quote-form').attr('action', '/update_ajax_quote/'+response.id);        
      }
   
     });
     $('#edit-quote').modal('show');
      
  });

// $(".btn-del_news").click(function(){
//   let id = $(this).attr('id').split('_')[1]
//   if(confirm('Are you sure to delete this record ?')) {
//       $.ajax({
//            headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       },
//         url : "/delete_ajax_news/"+id,
//           type: 'POST',
//           data: {},
//           // error: function() {
//           //   alert('Something is wrong, couldn\'t delete record');
//           // },
//           success: function(data) {
//               // $("#" + id).remove();
//               $("#" + id).remove();
//               alert("Record delete successfully.");  
//           }
//       });
//   }
// });













    $(".btn-ed_news").click(function(e){
      let id = $(this).attr('id').split('_')[1];
      // e.preventDefault();
      // console.log("clicked")
    //  $("#alert").html("this deletes")
    // var path = 
    
     $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url : '/edit_ajax_news/' + id,
      type : 'get',
      data: {  
          
      },
      cache: false,
      dataType: 'json',
      success: function(response){
        // var kk =   $('#edit-news-title').val(response.title);
          console.log(response);
         
        $('#edit-news-source').val(response.source);
        $('#edit-news-title').val(response.title);
        $('#edit-news-breaking_news').val(response.breaking_news);
        $('#edit-news-form').attr('action', '/update_ajax_news/'+response.id);        
      }
   
     });
     $('#edit-news').modal('show');
      
  });

    $(".btn-ed_artist").click(function(e){
      let id = $(this).attr('id').split('_')[1];
      // e.preventDefault();
      // console.log("clicked")
    //  $("#alert").html("this deletes")
    // var path = 
    
     $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url : '/edit_ajax_artist/' + id,
      type : 'get',
      data: {  
          
      },
      cache: false,
      dataType: 'json',
      success: function(response){
        // var kk =   $('#edit-news-title').val(response.title);
          console.log(response);
         
        $('#edit_artist_full_name').val(response.full_name);
        $('#edit_artist_stage_name').val(response.stage_name);
        $('#edit_artist_residence').val(response.residence);
        $('#edit_artist_genre_known_with').val(response.genre_known_with);
        $('#edit_artist_profile_pic').val(response.profile_pic);
        $('#edit_artist_biography').val(response.biography);
        $('#edit-artist-form').attr('action', '/update_ajax_artist/'+response.id);        
      }
   
     });
     $('#edit-artist').modal('show');
      
  });


  });
