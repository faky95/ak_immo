$(document).ready(function(){
    //alert('ok');
   // $('#table').dataTable();
    $('.list').on('click',function()
{
    $('#aside').load('{{path("listLocalite")}}');
});
});