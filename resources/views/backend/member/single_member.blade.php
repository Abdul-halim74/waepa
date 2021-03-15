<style type="text/css">
	.entry-meta ul li a,i{
    
    color: gray;
}

.entry-meta ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin: 0;
}

</style>

<div class="modal-header text-center">
	<div class="text-center">
    	<h3 class="modal-title"><b>Name : </b> {{$single_member->name}}</h3>
	</div>

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
  	

  	<div class="text-center">
  		<img src="{{asset('uploads/member_image/member_face')}}/{{$single_member->user_img}}" class="img-thumbnail" alt="Responsive image">
	</div>


<table class="table table-bordered">
  <tr>
    <th>Member Id</th>
    <td>{{$single_member->member_id}}</td>
  </tr>

  <tr>
    <th>Email</th>
    <td>{{$single_member->email}}</td>
  </tr>
  
</table>

  </div>