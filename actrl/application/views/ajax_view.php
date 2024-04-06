    
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Cairo</option>
  <option value="2">Alex</option>
  <option value="3">Aswan</option>
</select>


<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<script>
$.ajax({
    type       : "GET",
    url        : 'http://alagaiby.com/index.php/users_management/perms/get_user_sub_sectors/' + main_sector_id + '/' + user_id,
    dataType   : 'json',
    success: function(data) {

          var Areas = data.length;
          elements = "<option value='0'>إختر القطاع الفرعي</option>";
            for (var i = 0; i < Areas; i++) {
                elements += "<option value='" + data[i]['sub_sector_id'] + "'>" + data[i]['sub_sector_name'] + "</option>";
            }
          $("#sectors_dropdown").html(elements);

    },
    error: function(req, err){ console.log('my message : ' + err); }
});
</script>
    
    