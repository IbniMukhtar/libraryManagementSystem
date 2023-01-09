$(document).ready(function(){
  view_record();
});
//display function
function view_record()
{
  $.ajax({
    url:'include/view.php',
    method:'GET',
    success:function(data)
    {
      data = $.parseJSON(data);
      // if(data.status=='success')
      {
        console.log(data);
      }
    }
  })
}
