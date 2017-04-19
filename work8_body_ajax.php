<ol>
<li>ค้นหาจังหวัด
<form>
 <div class="form-group">
 <label for="prov">ชื่อจังหวัด</label>
 <input class="form-control" type='text' name='prov' id='prov'>
</div>
</form>
<li>แสดงข้อมูล
<div class="container" id="result">ผลการค้นหาแสดงตรงนี้
</div>
<script>
$(function(){
 $('#prov').autocomplete( {
 source: "ajax_province.php",
 select: function( event, ui ) {
$('#result').load("ajax_showpop.php?id="+ui.item.id);
 }
 } );
 });
</script>

