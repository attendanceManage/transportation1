
<form method="post" action="create">
@csrf
  <div class="container">
    <div class="row">
       <div class="col-3"></div>  
       <div class="col-6"> 
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
           <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
       </div>

        <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Transportation Type</label>
         <select class="form-select" name="type">
           <option selected>select Transportation Type</option>
           <option value="TRUCK">Truck</option>
           <option value="CAR">Car</option>
          </select>
        </div>
     </div>
    </div>
    <div class="row">
        <div class="col-3"></div>  
        <div class="col-4"> 
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Load</label>
           <input type="text" class="form-control" name="load" placeholder="Enter Load" required>
       </div>
       </div>
       <div class="col-2">
         <label for="exampleFormControlInput1" class="form-label">Unit</label>
         <select class="form-select" name="unit" require>
           <option selected>select unit </option>
           <option value="GRAM">Gram</option>
           <option value="KILOGRAM">KiloGram</option>
           <option value="TONNE">Tonne</option>
          </select>
       
       </div>  
    </div>
    <div class="row">
        <div class="col-3"></div>  
       <div class="col-6">
         <label for="exampleFormControlInput1" class="form-label" >Product</label>
         <select class="form-select" name="product_id[]" id="choices-multiple-remove-button" multiple required>
           <option selected>select product </option>
            @foreach($product as $key=>$value)
              <option  value="{{$value->id}}">{{$value->title}}</option>
            @endforeach
          </select>
       
       </div>  
    </div>
   </br>
   <div class="row">
    <div class="col-3"></div>
    <div class="col-3">
    <div class="mb-3">
    <label class="form-check-label" for="inlineCheckbox1">Status</label> 
    <div class="form-check form-check-inline">
    <input class="form-check-input" name="status" type="checkbox" id="inlineCheckbox1" value="ARRIVED">
    <label class="form-check-label" for="inlineCheckbox1">ARRIVED</label>

    <div class="form-check form-check-inline">
    <input class="form-check-input" name="status" type="checkbox" id="inlineCheckbox2" value="INACTIVE">
    <label class="form-check-label" for="inlineCheckbox2">INACTIVE</label>
    </div>

     </div>
     </div>
     </div>
    </div>
    <div class="row">
    <div class="col-3"></div>
    <div class="col-3">
    <div class="mb-3">
      <button type="submit" class="btn btn-info mb-3">Save</button>
     </div>
     </div>
     </div>
    </div>
  </div>
</form>
<script>
        $(document).ready(function(){

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount:3,
                searchResultLimit:3,
                renderChoiceLimit:3
            });

        });
</script>