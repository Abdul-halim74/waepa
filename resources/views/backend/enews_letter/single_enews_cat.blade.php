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
    	<h3 class="modal-title">{{$single_enewsletter_show->heading}}</h3>
	</div>

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
  	

  	<div class="text-center">
  		<img src="{{asset('uploads/enewsletter_image')}}/{{$single_enewsletter_show->image}}" class="img-thumbnail" alt="Responsive image">
	</div>

	<div class="entry-meta">
                <ul>
                  

                  <li class="d-flex align-items-center"><i class="fas fa-clock" style="margin: 10px;"></i> <a href=""><time datetime="2020-01-01">{{$single_enewsletter_show->created_at}}</time></a></li>

                  <li class="d-flex align-items-center"><i class="fas fa-comment" style="margin: 10px;"></i> <a href="">12
                      Comments</a></li>

                  
                      

                </ul>

               <ul>
                 

                  <li class="d-flex align-items-center"> <a href="">Categories :


                    <?php 
                    $cat = $single_enewsletter_show->enewsletter_cat;
                    $cat_arry= explode(',', $cat);
                    foreach($cat_arry as $val)
                    {
                      
                      $cat_data = DB::table('enews_letter_category')->where('id', $val)->first();
                      /*echo "<pre>";
                      print_r($data);*/
                      //echo $data->category_name."<br>";
                      ?>

                      <span class="badge badge-pill badge-primary"> <?php echo $cat_data->category_name." "; ?></span>

                      

                        <?php

                    }
                     ?>
                     
                      </a></li>

               </ul> 
              </div>

	<div class="text-center">
		<p class="text-start">
			{!!$single_enewsletter_show->content!!}
		</p>
	</div>
  </div>