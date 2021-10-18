@extends('admin.adminlayout.layout');
@section("content")
<script src="https://code.jquery.com/jquery.min.js"></script>
<script>
    $(document).ready(function(){
<?php for($i=1;$i<40;$i++){?>
  // start loop
      $('#amountDiv<?php echo $i;?>').hide();
      $('#checkSale<?php echo $i;?>').show();
        $('#onSale<?php echo $i;?>').click(function(){  // run when admin need to add amount for sale
         
          $('#amountDiv<?php echo $i;?>').show();

          $('#checkSale<?php echo $i;?>').hide();
            $('#saveAmount<?php echo $i;?>').click(function(){
              
             
              var salePrice<?php echo $i;?> = $('#spl_price<?php echo $i;?>').val();
              var pro_id<?php echo $i;?> = $('#pro_id<?php echo $i;?>').val();
              
                $.ajax({
                  type: 'get',
                  dataType: 'html',
                  url: '<?php echo url('/addSale');?>',
                  data: "salePrice=" + salePrice<?php echo $i;?> + "& pro_id=" + pro_id<?php echo $i;?>,
                  success: function (response) {
                      console.log(response);
                  }
              });
            });
        });
        $('#noSale<?php echo $i;?>').click(function(){ // this when admin dnt need sale
          $('#amountDiv<?php echo $i;?>').hide();
          $('#checkSale<?php echo $i;?>').show();
        });
        //end loop
        <?php }?>
        // $('#import_products').hide();
        // $('#open_importDiv').click(function(){
        //   $('#import_products').fadeIn();
        //   $('#open_importDiv').hide();
        //  });
 });
</script>
<br>
<a style="margin-left: 700px" class="btn btn-success" href="{{route('productcreate')}}">add new product</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">details</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
        <th scope="col">On Sale</th>
        <th scope="col">quantity</th>
        <th scope="col">category_name</th>
        
      </tr>
    </thead>
    
    <?php $count =1;?>
    <tbody>
        @foreach ($productsdata as $item )
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name']}}</td>
        <td>{{$item['details']}}</td>
        <td>{{$item['description']}}</td>
        <td>{{$item['price']}}</td>

        <td>
            <div id="checkSale<?php echo $count;?>">
              <input type="checkbox" id="onSale<?php echo $count;?>"> Yes
               </div>

                   <div id="amountDiv<?php echo $count;?>">
                    <input type="hidden" id="pro_id<?php echo $count;?>"
                    value="{{$item->id}}"/>
                    <input type="checkbox" id="noSale<?php echo $count;?>"> No<br>
                      <input type="text" id="spl_price<?php echo $count;?>"
                       placeholder="Sale Price" size="12" value={{$item->spl_price}}><br>
                          <button id="saveAmount<?php echo $count;?>" class="btn btn-success">
                             Save Amount</button>
                              </div>
          </td>

        <td>{{$item['quantity']}}</td>
        <td>{{$item->category['name']}}</td>
        <td><a href="{{route('admindeleteproduct',['productid'=>$item['id']])}}">delete</a></td>
            <td><a href="{{route('editproduct',['productid'=>$item['id']])}}">update</a></td>
      </tr>
      <?php $count ++;?>
      @endforeach
    </tbody>
    
  </table>
    
@endsection