/**
 * Create user
 * @param {*} e 
 */

function create(e) {
    e.preventDefault();

    let name = $('.name').val();
    let email = $('.email').val();
    let _token =  $('meta[name="_token"]').attr('content');
      
    $.ajax({
        url: "/create",
        type:"POST",
        data:{
            name: name,
            email: email,
            _token: _token,
      },
      success:function(response){
          $('#create-user-modal').hide();
      },
      error: function(response) {
          console.log(response);
      },
    });
};